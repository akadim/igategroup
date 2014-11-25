var OracleOmniture = (function() {

    var VIDEO_PREFIX = "video:",
        CHEVRON_OPEN = "chevron_opened.png",
        CHEVRON_CLOSED = "chevron_closed.png",
        TRACKING_PERCENTAGE = "percentage",
        TRACKING_5Minutes = "5minutes",
        TRACKING_10Minutes = "10minutes",
        RELATED_LINK_PLAYBACK_INTERVAL = 15,
        lastTimeRecorded = 0,
        debugMode = true,
        sessionOpen = false,
        video,
        videoElement,
        videoName,
        videoID,
        videoDuration,
        trackingType,
        milestones,
        s,

    /* Initializes the module */
    initialize = function(id, videoDTO, debug) {
        var test;
        try {
            test = s_gi;
            if (!test) throw new Error();
        } catch (e) {
            log("Omniture not yet initialized. Delaying initialization.");
            setTimeout(
                function() {
                    initialize(id, videoDTO, debug);
                },
                500
            );
            return;
        }
        log("initializing");
        video = videoDTO;
        if (videoElement) {
            log("initialize - clearing old values");
            log(videoElement);
            videoElement.removeEventListener('ended', onMediaComplete, false);
            videoElement.removeEventListener('play', onMediaPlay, false);
            videoElement.removeEventListener('playing', onMediaPlaying, false);
            videoElement.removeEventListener('pause', onMediaStop, false);
            videoElement.removeEventListener('timeupdate', onMediaProgress, false);
            closeSession();
        }
        videoElement = document.getElementById(id);
        videoElement.addEventListener('ended', onMediaComplete, false);
        videoElement.addEventListener('play', onMediaPlay, false);
        videoElement.addEventListener('playing', onMediaPlaying, false);
        videoElement.addEventListener('pause', onMediaStop, false);
        videoElement.addEventListener('timeupdate', onMediaProgress, false);
        videoName = video.name.replace(/,/g, ' ');
        videoDuration = video.length/1000;
        videoID = id;
        debugMode = debug;
        buildActionSource();
        defineWhatToTrack();
        sessionOpen = false;
    },

    defineTrackingMethod = function() {
        try {
            if (videoDuration > (60 * 20)) { //longer than 20 minutes
                if (videoDuration > (60 * 60 * 2)) { //longer than 2 hours
                    //track every ten minutes
                    trackingType = TRACKING_10Minutes;
                } else {
                    //track every five minutes
                    trackingType = TRACKING_5Minutes;
                }
                milestones = null;
            } else {
                //use percentage tracking
                trackingType = TRACKING_PERCENTAGE;
                milestones = new Array(75, 50, 25);
            }
        } catch (e) {
            log(e, "defineTrackingMethod");
        }
    },

    defineWhatToTrack = function(manualTracking) {
        if (!manualTracking) //this is for all the auto tracking
        {
            s.Media.contextDataMapping = {
                "a.media.name": "eVar36",
                "a.media.segment": "eVar57",
                "a.contentType": "eVar26",
                "a.media.timePlayed": "event41",
                "a.media.view": "event42",
                "a.media.segmentView": "event50",
                "a.media.milestones": {
                    1: "event43",
                    5: "event44",
                    10: "event45",
                    25: "event46",
                    50: "event47",
                    75: "event48",
                    99: 'event49'
                }
            };

            s.Media.trackEvents = 'event41,event42,event43,event44,event45,event46,event47,event48,event49,event50';
            s.Media.trackVars = 'events,eVar26,eVar36,eVar57,eVar58';
        } else //this is for the timed tracking for longer videos
        {
            s.Media.contextDataMapping = {
                "a.media.name": "eVar36",
                "a.contentType": "eVar26",
                "a.media.timePlayed": "event41",
                "a.media.view": "event42",
                "a.media.milestones": {
                    1: "event43",
                    5: "event44",
                    10: "event45",
                    25: "event46",
                    50: "event47",
                    75: "event48",
                    99: 'event49'
                }
            };

            s.Media.trackEvents = 'event41,event42,event43,event44,event45,event46,event47,event48,event49';
            s.Media.trackVars = 'events,eVar26,eVar36,eVar58';
        }
        s.Media.trackMilestones = "1,5,10,25,50,75,99";
    },

    buildActionSource = function() {
        try {
            s = s_gi("oraclecom,oracleglobal,oracleinteractive");
            s.enableVideoTracking = true;
            s.usePlugins = true;

            s.loadModule("Media");
            s.dc = "112";
            s.visitorNamespace = 'oracle';
            
            s.autoTrack = true;
            s.Media.trackUsingContextData = true;
            s.Media.autoTrack = true;
            s.Media.trackWhilePlaying = true;
            s.Media.trackSeconds = "";
            s.Media.segmentByMilestones = true;

            /* Turn on and configure debugging here */
            s.debugTracking = true;
            s.trackLocal = true;
            s.trackingServer = "oracle.112.2o7.net";
            s.trackingServerSecure = "oracle.112.2o7.net";
        } catch (e) {
            log(e, "buildActionSource");
        }
    },

    openSession = function() {
        log("begin openSession");
        if (sessionOpen) return false;
        try {
            buildActionSource();
            defineTrackingMethod();
            setVideoVariables();
            // Do a one time page view track() call on each view of a video
            s.t();
            s.Media.open(videoName, Math.round(videoDuration), 'Sun Video Portal');
            sessionOpen = true;
        } catch (e) {
            log(e, "openSession");
        }
        return true;
    },

    closeSession = function() {
        log("closeSession");
        if (!sessionOpen) return;
        s.Media.close(videoName);
        sessionOpen = false;
        s = s_gi(s_account[0]);
        log("end close session");
    },

    setVideoVariables = function() {
        try {
            // Data-driven variables
            s.events = "event11";
            s.pageName = VIDEO_PREFIX + videoName;
            s.eVar36 = videoName;
            s.eVar26 = "video";
            // s.prop26 ="video";
            s.prop47 = lookupField("videotype", "Not Set");
            s.prop48 = lookupField("contenttype", "Not Set");
            s.prop49 = lookupField("specialtracking", "Not Set");
            s.prop29 = s.eVar58 = getNormalizedURL(window.location);

            if (sessionOpen) {
                s.products = ";" + VIDEO_PREFIX + videoName;
            } else {
                s.eVar56 = videoName + '(' + videoID + ')';
                s.prop25 = videoName + '(' + videoID + ')';
                // s.prop35; // this would be the ID of the player, but we can't grab that today
            }
        } catch (e) {
            log(e);
        }
    },

    clearVideoVariables = function() {
        if (!s) return;
        try {
            s.events = null;
            s.pageName = null;
            s.eVar36 = null;
            s.products = null;
            s.prop47 = null;
            s.prop48 = null;
            s.prop49 = null;
            s.prop29 = null;
            s.prop26 = null;
            s.eVar26 = null;
            s.eVar58 = null;
        } catch (e) {
            log(e, "clearVideoVariables");
        }
    },

    lookupField = function(name, defaultValue) {
        if (video.customFields && video.customFields[name]) {
            return video.customFields[name];
        }
        return defaultValue;
    },

    getNormalizedURL = function(url) {
        url = String(url);
        if (url.indexOf('?') !== -1 && url.indexOf('brightcove.com') == -1) //query string that does not contain brightcove.com
        {
            var urlSplit = url.split('?');
            url = urlSplit[0];
        }
        if (url.indexOf('index.html') == -1 && url.indexOf('index.htm') !== -1) //index.htm was found, but index.html was not matched
        {
            url = url.replace('index.htm', 'index.html');
        }
        return url;
    },

    omnitureUnload = function() {
        log("Page closed, closing Media object");
        closeSession();
    },

    trackVideo = function() {
        try {
            s.Media.track(videoName);
        } catch (e) {
            log(e, "trackVideo");
        }
    },

    log = function (message, method) {
        if (debugMode) {
            console.log('Brightcove/Oracle Omniture: ' + (method ? "(" + method + ") " : "") + message);
        }
    },

    onMediaPlaying = function(event) {
        log("begin media playing");
        onMediaPlay();
    },

    onMediaPlay = function(event) {
        var newSession;
        try {
            log("begin media play");
            newSession = openSession();
            s.Media.play(videoName, videoElement.currentTime);
            if (newSession) clearVideoVariables();
        } catch (e) {
            log(e, "onMediaPlay");
        }
    },

    onMediaStop = function(event) {
        try {
            log(event, "onMediaStop");
            s.Media.stop(videoName, videoElement.currentTime);
        } catch (e) {
            log(e, "onMediaStop");
        }
    },

    onMediaProgress = function(event) {
        var i,
            currentPercentage,
            currentMilestone,
            played = videoElement.played,
            totalPlayed = played.length,
            timePlayed = 0;

        for (i = 0; i < totalPlayed; i++) {
            timePlayed += played.end(i) - played.start(i);
        }

        if (trackingType == TRACKING_5Minutes && timePlayed > (lastTimeRecorded + (5 * 60))) {
            log("Tracking 5 minutes " + timePlayed);
            lastTimeRecorded = timePlayed;
            defineWhatToTrack(true);
            trackVideo();
            defineWhatToTrack();
        } else if (trackingType == TRACKING_10Minutes && timePlayed > (lastTimeRecorded + (10 * 60))) {
            log("Tracking 10 minutes " + timePlayed);
            lastTimeRecorded = timePlayed;
            defineWhatToTrack(true);
            trackVideo();
            defineWhatToTrack();
        }
    },

    onMediaComplete = function(event) {
        try {
            log(event, "onMediaComplete");
            s.Media.stop(videoName, videoElement.currentTime);
            closeSession();
            log("end end media complete");
        } catch (e) {
            log(e, "onMediaComplete");
        }
    };

    return {
        initialize: initialize
    };

})();