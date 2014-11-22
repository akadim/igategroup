var errpage = 0;

//Header Flags:
//Y - Regular header, S - Shopping cart header, W - WDP shopping cart header, P - Private event header, O - OPN header
//Leftnav Flags:
//Y - Regular Leftnav, P - Private event leftnav
var flagHead = 'Y';
var flagFoot = 'Y';
var lang='FR';
var orgid = 1001;

if (flagHead=='Y')
	document.write('<SCRIPT language=JavaScript src="../js/eduHeader.js"></SCRIPT>');
else if (flagHead=='S' || flagHead=='W')
	document.write('<SCRIPT language=JavaScript src="../js/eduHeaderSC.js"></SCRIPT>');
else if (flagHead=='P')
	document.write('<SCRIPT language=JavaScript src="../js/eduHeaderPE.js"></SCRIPT>');
else if (flagHead=='O')
	document.write('<SCRIPT language=JavaScript src="../js/eduHeaderOP.js"></SCRIPT>');
else
	document.write('<SCRIPT language=JavaScript>function getTemplateTop() {alert("Header flag \''+flagHead+'\' not defined");}</SCRIPT>');

document.write('<SCRIPT language=JavaScript src="../js/ora_ou.js"></SCRIPT>');
if (location.protocol === 'https:')
	document.write('<SCRIPT language=JavaScript src="https://cdn.optimizely.com/js/132552566.js"></SCRIPT>');
else
	document.write('<SCRIPT language=JavaScript src="http://cdn.optimizely.com/js/132552566.js"></SCRIPT>');

if (flagHead=='Y')
	document.write('<link href="../css/eduStyleCommon.css" rel="stylesheet" type="text/css" />');
else if (flagHead=='S' || flagHead=='W') {
	document.write('<link href="../css/shopping_cart.css" rel="stylesheet" type="text/css" />');
	if (orgid=='70')
		document.write('<link href="../css/shopping_cartJP.css" rel="stylesheet" type="text/css" />');
}
else if (flagHead=='P' || flagHead=='O' || flagFoot=='Y' || flagLeft=='Y') {
	document.write('<link href="../css/eduStyleMin.css" rel="stylesheet" type="text/css" />');
	if (flagHead=='P')
		document.write('<link href="../css/lvc_tutorial.css" rel="stylesheet" type="text/css" />');
}

//load responsive data
if (flagHead=='Y') {
	document.write('<SCRIPT language=JavaScript src="../js/mmenu.js"></SCRIPT>');
	document.write('<link href="../css/mmenu.css" rel="stylesheet" type="text/css" />');
}

document.write('<!--[if gte IE 9]><style type="text/css">.gradient {filter: none !important;}</style><![endif]-->');

// ##### OUhostname_ucm FUNCTIONS #####
var vPort=self.location.protocol;
var vHostName=self.location.hostname;
var user_info = new Array()

if(orgid==undefined || orgid==''){orgid=1001;lang='US';}

if(orgid){document.cookie='p_org_id='+orgid+'; domain=.oracle.com; path=/'; document.cookie='p_lang='+lang+'; domain=.oracle.com; path=/';}

var dynamic_base=vPort+"//"+vHostName;
var static_base=vPort+"//"+vHostName;
var config_base=vPort+"//"+vHostName;
var dad_pathname="/pls/web_prod-plq-dad";
var ocom_base="http://www.oracle.com";

switch (vHostName) {
	case "www.oracle.com":
		dynamic_base=vPort+"//education.oracle.com";
		static_base=vPort+"//www.oracle.com";
		config_base=vPort+"//education.oracle.com";
		environment_code="OUP"
		break;
	case "education-dev.oracle.com":
		environment_code="OUD"
		break;
	case "education-dev.us.oracle.com":
		environment_code="OUD"
		break;
	case "education-uat.oracle.com":
		environment_code="OUU"
		break;
	case "education-stage.oracle.com":
		environment_code="OUS"
		break;
	case "education.oracle.com":
		environment_code="OUP"
		break;
	case "bigip-education-fapap.oracle.com":
		environment_code="OUP"
		break;
	default:
		dynamic_base=vPort+"//education.oracle.com";
		static_base=vPort+"//www.oracle.com";
		config_base=vPort+"//education.oracle.com";
}


// ##### HEADER LIBRARY #####
var libs=function() {
	function RemoveHTMLTags(p_val) {
		var v_val=p_val.replace(/%3C|&lt;/gi, '<').replace(/%3E|&gt;/gi, ">");
		var regX=/(<([^>]+)>)/ig;
		return v_val.replace(regX, "");
	};
	function checkLocationForInjections() {
		var sUrl=decodeURI(document.URL);
		if(sUrl.search('<') > -1 || sUrl.search('>') > -1 || sUrl.search(';') > -1 || sUrl.search("'") > -1 || sUrl.search('"') > -1) {
			alert("The URL cannot be loaded. It contains a malicious code injection.\nPlease re-type the URL and try again.");
			document.location.href=dynamic_base+"/pls/web_prod-plq-dad/db_pages.getpage?page_id=3";
		}
	};
	return {
		removeHtmlTags : function(val) {this.value=RemoveHTMLTags(val);},
		checkLocationForInjections : checkLocationForInjections
	};
}();

function getCookie(foo) {return new ou_header_class.getCookieData(foo).value;}
var ou_header_class=function() {
	function getCookieData(label) {
		var labelLen=label.length, cLen=document.cookie.length, i=0, cEnd="";
		while (i < cLen) {
			var j=i+labelLen;
			if (document.cookie.substring(i, j)==label) {
				cEnd=document.cookie.indexOf(";", j);
				if (cEnd==-1)
					cEnd=document.cookie.length;

				j++;
				return decodeURIComponent(document.cookie.substring(j, cEnd));
			}
			i++;
		}
		return "";
	};

	function getUserInfo() {
		var USER=new Object();
		this.value_enc=new libs.removeHtmlTags(getCookieData("ORA_UCM_INFO")).value;
		this.array=this.value_enc.split("~");
		USER.version=this.array[0];
		USER.guid=this.array[1];
		USER.firstname=this.array[2];
		USER.lastname=this.array[3];
		USER.username=this.array[4];
		USER.email=this.array[4];
		return USER;	
	};
	return {
		getUserInfo : getUserInfo,
		getCookieData : function(val) {this.value=getCookieData(val);}
	};
}();

var USER=new ou_header_class.getUserInfo();

function readInfoCookie() {
	if (isUCMRegistered() == true) {
		orainfo_exists = true;
		user_info[0] = USER.firstname;
		user_info[1] = USER.lastname;
		user_info[3] = USER.email;
		user_info[4]   = USER.username;
	}
	return true;
}

function setCookie(name, value, time, ttype) {
	var exp=new Date();
	var cookieval=name+"="+escape(value)+"; ";
	var date=exp.getTime();
	if (time > 0) {
		if (ttype=="year") exp.setTime(date+(time*year));
		else if (ttype=="day") exp.setTime(date+(time*day));
		else if (ttype=="hour") exp.setTime(date+(time*hour));

		cookieval += "expires="+exp.toGMTString();
	}
	cookieval += "; domain=.oracle.com; path=/";
	document.cookie=cookieval;
};

function getInternetExplorerVersion() {
	var rv = -1;
	if (navigator.appName == 'Microsoft Internet Explorer')
	{
		var ua = navigator.userAgent;
		var re	= new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
		if (re.exec(ua) != null)
			rv = parseFloat( RegExp.$1 );
	}
	return rv;
};

function isUCMRegistered() {
	if ( (USER.version!=null) && (USER.guid!=null) && (USER.username!=null) )
		return true;
	return false;
};

/* ##### box FUNCTIONS ##### */
function drawBoxTop(p_type, p_css) {
	if (p_type==3||p_type==4||p_type==5) p_type=1;
	document.write('<div class="newRCbox'+p_type+'" style="'+p_css+'">');
};
function drawBoxBottom() {document.write('</div>');};

/* ##### leftnav FUNCTIONS ##### */
function getNavbar() {
	document.write('<div id="newleftnav">');
	drawBoxTop("1", "padding-left:4px;padding-right:4px;");
	document.write('<div id="newleftnavInner">');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-SSAT\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=94">'+__$$rd_student_satisfaction$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-C\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=39">'+__$$rd_certification$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-CS\'; href="'+__$$ic_course_schedule_url$$__+'">'+__$$ic_course_schedule$$__+'</a>');
	if (orgid!=70)
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-HLP\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=555">'+__$$rd_personalized_catalog$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-HLP\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=121">'+__$$rd_helpcontactus$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-LC\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=91">'+__$$rd_learning_credits$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-LP\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=15">'+__$$rd_jobrole$$__+'</a>');
	if (orgid!=70)
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-OFF\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=644">'+__$$rd_offer$$__+'</a>');
	else
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-OFF\'; href="'+ocom_base+'/jp/education/campaign-1898205-ja.html">'+__$$rd_offer$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-TF\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=69">'+__$$rd_training_by_formats$$__+'</a>');
	document.write('  <div id="coursesNew">');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-TOD\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=600">'+__$$rd_training_demand$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-CRT\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=33">'+__$$rd_class_training$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-LVC\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=233">'+__$$rd_globalLWC$$__+'</a>');
	if (orgid==70)
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-CUT\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=37&p_org_id=70&lang=JA">'+__$$rd_cust_training$$__+'</a>');
	else if (orgid==1001||orgid==46777)
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-CUT\'; href="http://education.oracle.com/custom-training.html">'+__$$rd_cust_training$$__+'</a>');
	else
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-CUT\'; href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=37">'+__$$rd_private_events$$__+'</a>');
	if (orgid==46777||orgid==1001)
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-CUT\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=37">'+__$$rd_privateeventsbar$$__+'</a>');
	if (orgid!=70)
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-CUT\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=35">'+__$$rd_selfstudy_courses$$__+'</a>');
	else {
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-SSCD\'; href="'+ocom_base+'/jp/education/e-learning.html">'+__$$rd_selfstudy$$__+'</a>');
		document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-KC\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=160">'+__$$rd_ss_online$$__+'</a>');
	}
	document.write('  </div>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-LP\'; href="'+dynamic_base+dad_pathname+'/db_pages.getjobpage?page_id=306&p_jobrole_id=1">'+__$$rd_training_jobrole$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-TL\'; href="'+dynamic_base+__$$rd_traininglocationsurl$$__+'">'+__$$rd_training_by_locations$$__+'</a>');
	document.write('	<a target="_top" onclick=s_objectID=\'LN:OU-UAS\'; href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=134">'+__$$rd_useradoptionservices$$__+'</a>');
	document.write('  <a target="_top" onclick=s_objectID=\'LN:OU-WS\'; href="'+ocom_base+__$$rd_countrysitesurl$$__+'">'+__$$rd_countrysites$$__+'</a>');
	document.write('</div>');
	drawBoxBottom();
	document.write('</div>');
}

/* ##### footer FUNCTIONS ##### */
function getTemplateBottom() {
	if (flagFoot==undefined || flagFoot=='') flagFoot='N';
	if (flagFoot!='Y' && flagFoot!='N') alert('Footer flag \''+flagFoot+'\' not defined');
	if (flagFoot=='Y') ocom_footer();
}
function ocom_footer() {
	if (flagHead=='Y' || flagHead=='P') {
		document.write('<div class="footer0">');
		document.write('	<div><a class="addthis_button" href="https://s7.addthis.com/js/addthis_widget.php?v=12&amp;username=ra-4e89829e657ddc2f" onClick="shareEventHandler(this);" title="Bookmark and Share"><b></b></a></div>');
		document.write('	<div><a class="f_rss" href=" http://www.oracle.com/rss/index.html" title="Oracle RSS Feeds"><b></b></a></div>');
		document.write('	<div><a class="f_linked" href=" http://linkd.in/Linkedin_OU_SocialMedia" title="Oracle University on Linkedin"><b></b></a></div>');
		document.write('	<div><a class="f_twit" href="'+__$$rd_twitter$$__+'" title="Oracle University on Twitter"><b></b></a></div>');
		document.write('	<div><a class="f_fb" href=" http://www.facebook.com/oracleedu" title="Oracle University on Facebook"><b></b></a></div>');
		document.write('	<div><a class="f_gplus" href="https://plus.google.com/109560021464887498322?prsrc=3" rel="publisher" target="_blank" title="Oracle University on Google Plus"><b></b></a></div>');
		document.write('	<div><div class="g-plusone" data-size="small" data-annotation="none"></div></div>');
		document.write('	<div><a class="footerterms" href="'+__$$rd_cancel_url$$__+ '">'+__$$rd_header_terms$$__+'</a><span>|</span></div>');
		document.write('</div>');		
	}

	document.write('<div class="footer">');
	document.write('	<div class="greyBarBottom"></div>');
	document.write('	<div class="infoCompany"><a href="http://www.oracle.com/us/corporate/index.html"><b></b></a></div>');
	document.write('	<div class="footerContent">');
	document.write('		<a href="'+__$$mosaic_footer_txt_1_url$$__+'">'+__$$mosaic_footer_txt_1$$__+'</a> | ');
	document.write('		<a href="'+__$$mosaic_footer_txt_2_url$$__+'">'+__$$mosaic_footer_txt_2$$__+'</a> | ');
	document.write('		<a href="'+__$$mosaic_footer_txt_3_url$$__+'">'+__$$mosaic_footer_txt_3$$__+'</a> | ');
	document.write('		<a href="'+__$$mosaic_footer_txt_4_url$$__+'">'+__$$mosaic_footer_txt_4$$__+'</a> | ');
	document.write('		<a href="'+__$$mosaic_footer_txt_5_url$$__+'">'+__$$mosaic_footer_txt_5$$__+'</a> | ');
	document.write('		<a href="'+__$$mosaic_footer_txt_6_url$$__+'">'+__$$mosaic_footer_txt_6$$__+'</a> | ');
	if (orgid == 70)
		document.write('	<a href="'+__$$mosaic_footer_txt_9_url$$__+'">'+__$$mosaic_footer_txt_9$$__+'</a> |');
	document.write('		<a href="'+__$$mosaic_footer_txt_7_url$$__+'">'+__$$mosaic_footer_txt_7$$__+'</a> | ');
	document.write('		<a href="'+__$$mosaic_footer_txt_8_url$$__+'">'+__$$mosaic_footer_txt_8$$__+'</a> ');
	if (orgid != 70)
		document.write('	| <a href="'+__$$mosaic_footer_txt_9_url$$__+'">'+__$$mosaic_footer_txt_9$$__+'</a>');
	document.write('	</div>');
	document.write('</div>');

	if (flagHead=='Y' || flagHead=='P') {
		document.write('<link href="https://plus.google.com/109560021464887498322" rel="publisher" />');
		document.write('<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>');
		document.write('<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e89829e657ddc2f"></script>');
	}
}

/* ##### Omniture FUNCTIONS ##### */
function getTracking() {
//	<!-- ********** DO NOT ALTER ANYTHING BELOW THIS LINE ! *********** -->
//	<!--  Below code will send the info to Omniture server -->
	document.write ('<script language="javascript">var s_code=s.t();if(s_code)document.write(s_code)</script>');
// 	<!-- End SiteCatalyst code version: H.15. -->
}