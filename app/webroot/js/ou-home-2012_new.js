function getKeyWords () {
	$('#searchMask').css({'display':'none'});
	$.ajax({
		type: 'POST',
		dataType: 'html',
		url: '/pls/web_prod-plq-dad/Webreg_Search_Results.search_auto_sugg',
		data: 'p_org_id='+orgid+'&p_lang='+lang+'&hkey='+$.trim($('#findaCourse').val()),
		success: function (result) {
			var obj = result.split("#");
			var holdHTML = '';
			var altCls = 'aaa';
			if (obj[0]) {
				if ((obj[0]).indexOf($('#findaCourse').val()) == 1)
					$('#searchMask').val((obj[0]).replace(/~/g,"").replace(/`/g,"")).css({'display':'block'});
			}
			for (var i = 0; i<obj.length-1; i++) {
				if (obj[i])
					holdHTML += '<a href="Javascript:void(0)" class="'+altCls+'">'+(obj[i]).replace(/~/g,"<span>").replace(/`/g,"</span>")+'</a>';
				if (altCls=='aaa')
					altCls = 'bbb';
				else
					altCls = 'aaa';
			}
			/*var obj = jQuery.parseJSON(result);
			var holdHTML = '';
			var altCls = 'aaa';
			if (obj[0].keys) {
				if ((obj[0].keys).indexOf($('#findaCourse').val()) == 1)
					$('#searchMask').val((obj[0].keys).replace(/~/g,"").replace(/`/g,"")).css({'display':'block'});
			}
			$(obj).each(function(){
				if (this.keys)
					holdHTML += '<a href="Javascript:void(0)" class="'+altCls+'">'+(this.keys).replace(/~/g,"<span>").replace(/`/g,"</span>")+'</a>';
				if (altCls=='aaa')
					altCls = 'bbb';
				else
					altCls = 'aaa';
			});*/
			$('#items').html(holdHTML);
			
			$('div#items a').click(function () {
				$('#findaCourse').val($(this).text());
			});

			if (!holdHTML=='')
				if (!$('#items').is(':visible'))
					$('#items').fadeIn(100);
			
			if (holdHTML=='' && $('#items').is(':visible'))
				$('#items').fadeOut(200);
		},
		error: function (result) {
			var dummy=0;
		}
	});
}
//---------------------------------------------------------------------------------------------------------

active = Math.floor(Math.random() * 4);
var top_banner_rotate_yn = 'Y';
var top_banner_default_norotate = 3;
if (top_banner_rotate_yn=='N') active=parseInt(top_banner_default_norotate)-1; //For stopping rotation

k = 1;
var fadeinTimer, fadeoutTimer, hideTimer;

function ou_animate(i, interaction) {
	clearTimeout(fadeinTimer);
	clearTimeout(fadeoutTimer);
	clearTimeout(hideTimer);
	if (interaction == "first") {
		fadeIn(i);
		active = i;
		k = active;
		timerID = setInterval("autorotator()", 7000);
	}
	if (interaction == true) timerID = clearInterval(timerID);

	if (active != i) {
		fadeOut(active);
		fadeIn(i);
		active = i;
	}
	$("#myImage1, #myImage2, #myImage3, #myImage4").removeClass('selected');
	$("#myImage"+(i+1)).addClass('selected');

	if (interaction == true) {
		k = active;
		timerID = setInterval("autorotator()", 7000);
	}
	
	if (top_banner_rotate_yn=='N') clearTimeout(timerID); //For stopping rotation
}

function autorotator() {
	ou_animate(k, false);
	if (k != 3)
		k = k + 1;
	else
		k = 0;
}

function getElm(eID) {
	return document.getElementById(eID);
}

function bannerNewHomePage_elementshow(eID) {
	getElm(eID).style.display = 'block';
}

function bannerNewHomePage_elementhide(eID) {
	getElm(eID).style.display = 'none';
}

function setOpacity(eID, opacityLevel) {
	var eStyle = getElm(eID).style;
	eStyle.opacity = opacityLevel / 100;
	eStyle.filter = 'alpha(opacity=' + opacityLevel + ')';
}

function fadeIn(eID) {
	setOpacity(eID, 0);
	bannerNewHomePage_elementshow(eID);
	var timer = 0;
	for (var i = 1; i <= 100; i++) {
		fadeinTimer = setTimeout("setOpacity('" + eID + "'," + i + ")", timer * 5);
		timer++;
	}
}

function fadeOut(eID) {
	var timer = 0;
	for (var i = 100; i >= 1; i--) {
		fadeoutTimer = setTimeout("setOpacity('" + eID + "'," + i + ")", timer * 3);
		timer++;
	}
	hideTimer = setTimeout("bannerNewHomePage_elementhide('" + eID + "')", 500);
}

function hov (s,val) {
	var pos = $(val).attr("class").indexOf("selected");

	if (s==1 && pos==-1)
		$(val).addClass('over');
	else
		$(val).removeClass('over');
}

function chg (val) {
	$(val).removeClass('over').addClass('selected');
}

function preloader() {
	img1 = new Image();
	img2 = new Image();
	img3 = new Image();
	img4 = new Image();
	img1.src = "/education/images/ou-mainbanner-1.jpg";
	img2.src = "/education/images/ou-mainbanner-2.jpg";
	img3.src = "/education/images/ou-mainbanner-3.jpg";
	img4.src = "/education/images/ou-mainbanner-4.jpg";
}

function searchKeyword2() {

var find_course2 = find_course.replace(/"/g, "");
	if (document.getElementById('findaCourse').value.replace(/^\s\s*/, '').replace(/\s\s*$/, '') != find_course2) {
		setpropCookie("prop3href");   // For Omniture Tracking
                //var newSEUrl = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=615";
		//newSEUrl += "&get_params=key:"+$('#findaCourse').val();
                //$(location).attr('href',newSEUrl);                
		//document.getElementById('searchForm2').submit();
                
                $('#p_org_id2, #p_country2').val(orgid);
		$('#p_lang2').val(lang);
		//document.getElementById('searchForm2').submit();
                goToNewSearchEngine(document.getElementById('searchForm2'));
                
	}
}