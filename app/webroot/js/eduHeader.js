/* ##### ouHeaderCSS FUNCTIONS ##### */
function getTemplateTop() {
	libs.checkLocationForInjections();
	if (flagHead=='Y') getOUHeader_new();
	if (flagLeft=='Y') getNavbar();

	//load responsive data
	drawM();
}

//Header Functions
function getOUHeader_new() {
	var ver = getInternetExplorerVersion();
	if (ver!=-1 && ver<8) {
		document.write('<div class="iemsg">You are using an <strong>outdated</strong> browser. To ensure you have the best, most secure experience on the web, we recommend that you <a href="/education/html/pages/browserupdate.html" target="_blank">upgrade your browser</a></div>');
		console.log ( 'IE6/7' );
	}

	document.write('<div align="center"><div id="ou_header_top_main2">');

	document.write('	<div id="headerTop">');
	document.write('		<div id="headerTop_left">');
	document.write('			<a href="/"><b></b></a>');
	document.write('		</div>');
	document.write('		<div id="headerTop_right">'); getUsersState();
	document.write('			<a class="rname" href="'+dynamic_base+__$$rd_dc_link$$__+'">'+__$$rd_request_info$$__+'</a>');
	document.write('			<a class="cname" href="JavaScript:void(0);">'+__$$rd_oucountryname$$__.toLowerCase()+'<b></b>');
								educationWorldwideCountries();
	document.write('			</a>');
	document.write('		</div>');
	document.write('	</div>');

	document.write('	<div id="headerMenu" class="gradient">');
	document.write('	<div class="responseMenu"><div class="mmenuH"><b class="mmenu"></b></div><a href="/"><b class="mlogo"></b></a><div class="muserH"><b class="muser"></b></div></div>');
	document.write('	<div class="menuInner"><ul id="navigation"><li>');
	document.write('	<div class="headerSearchBox">');
	document.write('	<div class="courseSearchHolder">');

	document.write('	<form id="searchForm1" name="searchForm1" method="post" action="'+dynamic_base+dad_pathname+__$$rd_searchformurl$$__+'">');
	document.write('	<input type="hidden" value="'+orgid+'" name="p_org_id">	<input type="hidden" value="'+orgid+'" name="p_country">	<input type="hidden" value="'+lang+'" name="p_lang"><input type="hidden" value="" name="p_search_category_id">');
	document.write('	<label class="headerSearchBoxLable" for="p_search_keyword">'+__$$mosaic_search_text$$__+'</label>\
	<input type="text" name="p_search_keyword" id="p_search_keyword" class="headerSearchBox_text autoComp" autocomplete="off" maxlength="4000" value="" placeholder="'+__$$mosaic_search_text$$__+'">');

	document.write('	<a class="xSearchButton" href="JavaScript:searchKeyword();">Search</a>');
	document.write('	<div id="HeaderAutoitems" class="autoCompHold"></div>');
	document.write('	</form>');
	document.write('	</div>');
	document.write('	</div></li>');
	getMosaicMenu();
	document.write('	<li class="top-level right_text">');	
	document.write('	<p><a href="JavaScript:void(0);">'+__$$rd_helpcontactus$$__+'<b></b></a></p>');
	document.write('	<div class="submenu gradient"><div class="menuPad"><dl>');
	if (__$$livechat_yn$$__ == 'Y' && site_section != 'Certification' && site_section != 'OCP')
		document.write('<dd><a href="JavaScript:liveChatWin();">Live Chat</a></dd>'); //DO NOT DELETE THIS COMMENT - __$$livechat_header_link$$__
	document.write('	<dd><a href="'+dynamic_base+__$$rd_contactusurl$$__+'" target="_top">'+__$$rd_customer_service$$__+'</a></dd>');
	if (site_section == 'Certification')
		document.write('	<dd><a href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=459" target="_blank">' + __$$rd_helpcontactus$$__ + '</a></dd>');		
	else
		document.write('	<dd><a href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=121" target="_top">'+__$$rd_helpcontactus$$__+'</a></dd>');
	document.write('	</dl></div></div>');
	document.write('	</li>');

	document.write('	<li class="top-level right_text menuCart">');
	document.write('	<p>');
	try {
		if (cartItm <= 0)
			document.write('	<a href="JavaScript:void(0);"><span class="shoppingCartIcon"></span>'+__$$mosaic_header_no_cart_item$$__+'<b></b></a>');
		else if (cartItm == 1)
			document.write('	<a href="JavaScript:void(0);"><span class="shoppingCartIcon"></span>' + cartItm + ' '+__$$mosaic_header_cart_itm$$__+'<b></b></a>');
		else
			document.write('	<a href="JavaScript:void(0);"><span class="shoppingCartIcon"></span>' + cartItm + ' '+__$$mosaic_header_cart_items$$__+'<b></b></a>');
	}
	catch(err) {
		document.write('	<a href="JavaScript:void(0);">'+__$$mosaic_header_no_cart_item$$__+'</a>');
	}
	document.write('</p>');
	document.write('	<div class="submenu gradient"><div class="menuPad"><dl>');
	document.write('	<dd><a href="'+dynamic_base+dad_pathname+__$$rd_viewcarturl$$__+'">'+__$$mosaic_header_cart_item$$__+'</a></dd>');
	document.write('	<dd><a href="' + dynamic_base + dad_pathname + '/db_pages.getpage?page_id=518" target="_top">' + __$$rd_orderstatus$$__ + '</a></dd>');
	document.write('	</dl></div></div>');

	document.write('	</li></ul></div>');
	document.write('	</div>');

	document.write('	<div id="breadCrumb" class="gradient"><div class="menuInner2">');
	document.write('	<div class="breadCrumb_left_txt"><a href="'+dynamic_base+'/pls/web_prod-plq-dad/db_pages.getpage?page_id=3"><span style="color:red";>Home</span></a></div>');

	if (__$$livechat_yn$$__ == 'Y' && site_section != 'Certification' && site_section != 'OCP') {
		document.write('	<div class="breadCrumb_right_txt LiveChatBlock">');
		document.write('	<b></b><a href="JavaScript:liveChatWin();">Live Chat</a>');
		document.write('	</div>');
	}

	document.write('	<div class="breadCrumb_right_txt">');
	document.write('	<b></b>'+__$$rd_phonenumber$$__+'');
	document.write('	</div>');
	document.write('	</div></div>');
	document.write('</div></div>');
}

function liveChatWin() {
	window.open("/education/ou_rd14/html/liveChatWin.html", "_blank", "toolbar=no, scrollbars=no, resizable=no, location=no, menubar=no, status=no, titlebar=no, top=100, left=200, width=200, height=180");
}

function getUsersState() {
	var block = '';
	if (isUCMRegistered() != true)
		block += '(<a target="_top" href="' + __$$rd_loginurl$$__ + document.location.href + '">' + __$$rd_registeraccount$$__ + '</a>)';
	else if (isUCMRegistered() != -1)
		block += __$$rd_welcome$$__ + ' ' + USER.firstname + ' ( <a href="javascript:signMeout()" target="">' + __$$rd_signout$$__ + '</a> | <a target="_top" href="' + __$$rd_accountlabelurl$$__ + location.href +'"> ' + __$$rd_accountlabel$$__ + '</a> )';
	else
		block += '(<a target="_top" href="' + __$$rd_loginurl$$__ + '">' + __$$rd_registeraccount$$__ + '</a>)'
	document.write(block);
}

function signMeout(url) {
	rUrl = encodeURIComponent(location.href);
	top.location=__$$rd_logouturl2$$__+rUrl;
}

function educationWorldwideCountries() {
	var country_counter = 0;
	document.writeln("<div id='panelDiv'>");
	document.writeln("<table width=100%>");
	document.writeln("<tr align=left><td colspan='5' class='countrySelectTitle'>Select A Country / Region</td></tr>");
	document.writeln("<tr height='4'><td colspan='5'><!--spacer--></td></tr>");
	document.writeln("<tr valign=top><td width=20%>");

	for (i = 0; i < cntr_arr.length; i++) {
  		if (country_counter==24) {
			country_counter=0;
			document.writeln("</td><td width=20%>");
		}
		if (cntr_arr[i][1] == 0) {
			if (cntr_arr[i][2] == "KO") //rd_Kosovo
				document.writeln('<div><a href="http://www.oracle.com/si/education/oracle-university-slovenia-338033-sl.html">' + cntr_arr[i][0] + '</a></div>');
			else if 
				(cntr_arr[i][2] == "lad") document.writeln('<div><a href="' + ocom_base + '/lad/index.html">' + cntr_arr[i][0] + '</a></div>');
			else 
				document.writeln('<div><a href="' + dynamic_base + '/' + cntr_arr[i][2] + '/index.html">' + cntr_arr[i][0] + '</a></div>');
		}
		else 
			document.writeln('<div><a href="' + change_country(cntr_arr[i][1], cntr_arr[i][2]) + '">' + cntr_arr[i][0] + '</a></div>');
		country_counter++;
	}
	document.writeln("</td></tr>");
	document.writeln("</table>");
	document.writeln("</div>");
}


function change_country(v_org_id, v_lang) {
	var url1, org_num1, str1, str2, str3, str4, pre_url, post_url, url_org_id, lang_str1, url_lang, lang_num1, lang_str2;
	
	url1 = window.document.location.href; // see if the present URL is static or dynamic 
	if (url1.search("html") != -1) 
		return dynamic_base + dad_pathname + '/db_pages.getpage?page_id=3&p_org_id=' + v_org_id + '&lang=' + v_lang; // this is Static page
	else { // this is dynamic page
		pre_url = url1.substring(0, url1.indexOf("?") + 1);
		post_url = url1.substring(url1.indexOf("?") + 1);
		if (url1.indexOf("p_org_id") != -1) {
			// To findout the ORG_ID 
			str1 = url1.substr(url1.indexOf("p_org_id"));
			org_num1 = str1.indexOf("=");

			if (str1.indexOf("&") != -1)
				str2 = str1.indexOf("&");
			else
				str2 = str1.length;

			url_org_id = str1.substring(org_num1 + 1, str2);
			str3 = post_url.replace('p_org_id=' + url_org_id, 'p_org_id=' + v_org_id);

			if (url1.indexOf("lang") != -1) {
				// Find out the lang
				lang_str1 = url1.substr(url1.indexOf("lang"));
				lang_num1 = lang_str1.indexOf("=");
				if (lang_str1.indexOf("&") != -1)
					lang_str2 = lang_str1.indexOf("&");
				else
					lang_str2 = lang_str1.length;

				url_lang = lang_str1.substring(lang_num1 + 1, lang_str2);
				str4 = str3.replace('lang=' + url_lang, 'lang=' + v_lang);
			} 
			else
				str4 = str3;

			return pre_url + str4;
		}
		else
			if (url1.indexOf("?") != -1)
				return (window.location.href + '&p_org_id=' + v_org_id + '&lang=' + v_lang);
			else
				return (window.location.href + '?p_org_id=' + v_org_id + '&lang=' + v_lang);
	}
}


function getMosaicMenu() {
	var mosaicMenuHolder = '';
	
	//Training Menu
	mosaicMenuHolder += '<li class="top-level"><p><a href="'+mosaic_head_set1[0][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set1[0][2]+'<b></b></a></p>';
	mosaicMenuHolder += '<div class="submenu gradient"><div class="menuPad">';

	mosaicMenuHolder += getDynamicHead(headPillarXML);

	var n = mosaic_head_set1.length;
	var m = n;
	while (--n) {
		if (mosaic_head_set1[m-n][0]==9)
			mosaicMenuHolder += '<div class="columns noborder"><dl><dt><a href="'+mosaic_head_set1[m-n][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set1[m-n][2]+'</a></dt>';
		else if (mosaic_head_set1[m-n][0]==8)
			mosaicMenuHolder += '<br><dt><a href="'+mosaic_head_set1[m-n][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set1[m-n][2]+'</a></dt>';
		else
			mosaicMenuHolder += '<div class="columns"><dl><dt><a href="'+mosaic_head_set1[m-n][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set1[m-n][2]+'</a></dt>';

		var j = mosaic_head_set1[m-n][3].length;
		for (var i=0; i<j; i++)
			mosaicMenuHolder += '<dd><a href="'+mosaic_head_set1[m-n][3][i][0].replace('~','/pls/web_prod-plq-dad')+'" target="_blank">'+mosaic_head_set1[m-n][3][i][1]+'</a></dd>';

		if (mosaic_head_set1[m-n][0]!=7 && mosaic_head_set1[m-n][0]!=9)
			mosaicMenuHolder += '</dl></div>';
	}

	//Certification Menu
	mosaicMenuHolder += '<li class="top-level"><p>'+main_menu[0][1]+'</p>'
	mosaicMenuHolder += '<div class="submenu gradient"><div class="menuPad">';

	mosaicMenuHolder += getDynamicHead(headPillarCertXML);

	var tmp_class='';
	var tmp_class2='';
	for(var i=2; i<main_menu.length; i++) {
		if (i==6) tmp_class=' noborder'; else  tmp_class='';
		if (i==5) tmp_class2=' class="mTop20"'; else  tmp_class2='';
		if (i!=5) mosaicMenuHolder += '<div class="columns'+tmp_class+'">';
		mosaicMenuHolder += '<dl>';
		mosaicMenuHolder += '<dt'+tmp_class2+'>'+main_menu[i][1]+'</dt>';
		for (var j=0; j<main_menu[i][2].length; j++)
			if (main_menu[i][2][j][1]!='x')
				mosaicMenuHolder += '<dd><a href="'+main_menu[i][2][j][0]+'">'+main_menu[i][2][j][1]+'</a></dd>';
		mosaicMenuHolder += '</dl>';
		if (i!=4)
		mosaicMenuHolder += '</div>';
	}
	mosaicMenuHolder += '</div></div>';
	mosaicMenuHolder += '</li>';

	//Communities Menu
	mosaicMenuHolder += '<li class="top-level"><p><a href="'+mosaic_head_set3[0][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set3[0][2]+'<b></b></a></p>';
	mosaicMenuHolder += '<div class="submenu gradient"><div class="menuPad">';

	var n = mosaic_head_set3.length;
	var m = n;
	while (--n) {
		if (mosaic_head_set3[m-n][0]==0)
			mosaicMenuHolder += '<div class="columns"><dl><dt>'+mosaic_head_set3[m-n][2]+'</dt>';
		else if (mosaic_head_set3[m-n][0]==9)
			mosaicMenuHolder += '<div class="columns noborder"><dl><dt>'+mosaic_head_set3[m-n][2]+'</dt>';
		else if (mosaic_head_set3[m-n][0]==8)
			mosaicMenuHolder += '<dt>'+mosaic_head_set3[m-n][2]+'</dt>';

		var j = mosaic_head_set3[m-n][3].length;
		for (var i=0; i<j; i++)
			mosaicMenuHolder += '<dd><a href="'+mosaic_head_set3[m-n][3][i][0]+'" target="_blank">'+mosaic_head_set3[m-n][3][i][1]+'</a></dd>';

		if (mosaic_head_set3[m-n][0]!=9)
			mosaicMenuHolder += '</dl></div>';
		else
			mosaicMenuHolder += '<br>';
	}

	mosaicMenuHolder += '</div></div></li>';
	document.writeln(mosaicMenuHolder);
}

function getDynamicHead (para) {
	var mMenuHyb2 = '';
	var result = $.parseXML(para);

	mMenuHyb2 += '<div class="columns" id="mosaicHead_pillar">';
	mMenuHyb2 += '<h2>'+$(result).find('header1').text()+'</h2><ul>';

	$(result).find('L1').each(function () {
		mMenuHyb2 += '<li>' + $(this).find('L1T').text();
		mMenuHyb2 += '<div class="submenu2 gradient '+$(this).find('L1T').attr('class')+'">';
		mMenuHyb2 += '<h3>' + $(this).find('L2B_head').text() + '</h3>';
		mMenuHyb2 += '<ul>';

		var tmp_counter1 = 0;
		$(this).find('L2S').each(function () {
			var classVal2 = $(this).attr('class') == undefined ? 0 : 1; //Identify the 2 column sets
			$(this).find('L2').each(function () {						
				if (classVal2 != 0 && tmp_counter1 == 0) {
					mMenuHyb2 += '</ul><ul class="noborder">'; //Have the 2nd div for 2 column sets
					tmp_counter1++;
				}
				mMenuHyb2 += '<li>' + $(this).find('L2T').text();
				mMenuHyb2 += '<div class="submenu3 gradient '+$(this).find('L3B').attr('class')+'"><h3>' + $(this).find('L3B_head').text() + '</h3>';
				mMenuHyb2 += '<div>';

				var tmp_counter2 = 0;
				$(this).find('L3S').each(function () {
					var classVal3 = $(this).attr('class') == undefined ? 0 : 1; //Identify the 2 column sets
					$(this).find('L3').each(function () {
						if (classVal3 != 0 && tmp_counter2 == 0) {
							mMenuHyb2 += '</div><div class="noborder">'; //Have the 2nd div for 2 column sets
							tmp_counter2++;
						}
						mMenuHyb2 += '' + $(this).text() + '';
					});
				});
				mMenuHyb2 += '</div></div></li>';
			});
		});
		mMenuHyb2 += '</ul></div></li>';
	});

	mMenuHyb2 += '<li>' + $(result).find('level4').text() + '</li>';
	mMenuHyb2 += '<li>' + $(result).find('level5').text() + '</li>';
	mMenuHyb2 += '</ul></div>';	

	var find = '#pp#';
	var re = new RegExp(find, 'g');
	mMenuHyb2 = mMenuHyb2.replace(re, '/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=');

	find = '#fp#';
	re = new RegExp(find, 'g');
	mMenuHyb2 = mMenuHyb2.replace(re, '/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=');

	find = '#cp#';
	re = new RegExp(find, 'g');
	mMenuHyb2 = mMenuHyb2.replace(re, '/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=');

	return mMenuHyb2;
}


function searchKeyword() {
	setpropCookie("prop3href");
	var myForm = $('.autoComp.acActive').parents('form').attr("name");
	goToNewSearchEngine(document.getElementById(myForm));
}

//Function to redirect to new Search Engine
function goToNewSearchEngine(sform)
{
	var key = (sform.p_search_keyword)?sform.p_search_keyword.value:"";
	var category = (sform.p_search_category_id)?sform.p_search_category_id.value:"";
	var format = (sform.p_search_format)?sform.p_search_format.value:"";
	
	var newSearchURL = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=615&get_params=";
	var params ="";
	var oneBefore = false;
	var coma="";
	params += key!=""?"key:"+key:"";
	if(key!="")
		oneBefore = true;
	coma = oneBefore?",":"";
	
	params += category!=""?coma+"cats:["+category+"]":"";
	if(category!="")
		oneBefore = true;
	coma = oneBefore?",":"";
	params += format!=""?coma+"format:["+format+"]":"";
	document.location.href=newSearchURL+params;
}

////////////////////////////////////////////////////////////////////
// New header search auto pou up
$(document).ready(function() {
	var clickEventType=((document.ontouchstart!==null)?'click':'touchend');

	if(navigator.userAgent.toLowerCase().indexOf("opr/") != -1) //if opera
		$('ul#navigation div.submenu').attr('style','-webkit-transition: -webkit-transform 0.2s ease, opacity 0.2s ease;')

	$('.autoComp').focus(function () {
		$('.autoComp').removeClass('acActive');
		$(this).addClass('acActive');
		
		$('.autoComp').parents('form').find('div.autoCompHold').removeClass('acActiveH');
		$(this).parents('form').find('div.autoCompHold').addClass('acActiveH');
	}).focusout(function () {
		$(this).val($.trim($(this).val()));
		if ($('.acActiveH').is(':visible'))
			if (clickEventType=='click')
				$('.acActiveH').fadeOut(200);
	}).keydown(function (e) {
		var e=window.event || e;
		var keyunicode=e.charCode || e.keyCode;


		var thold = '';
		
		if ($('.acActiveH').is(':visible') && keyunicode === 40) {
			if ($('div.acActiveH #key_holder a').hasClass('ddd')) {
				if (!$('div.acActiveH #key_holder a.ddd').is(':last-child'))
					$('div.acActiveH #key_holder a.ddd').removeClass('ddd').next().addClass('ddd');
				else {
					$('div.acActiveH #key_holder a.ddd').removeClass('ddd');
					$("div.acActiveH #key_holder a:first-child").addClass('ddd');
				}
			}
			else {
				$("div.acActiveH #key_holder a:first-child").addClass('ddd');
			}
			$('.autoComp').val($('div.acActiveH #key_holder a.ddd').text());
		}

		if ($('.acActiveH').is(':visible') && keyunicode === 38) {
			if ($('div.acActiveH #key_holder a').hasClass('ddd')) {
				if (!$('div.acActiveH #key_holder a.ddd').is(':first-child'))
					$('div.acActiveH #key_holder a.ddd').removeClass('ddd').prev().addClass('ddd');
				else {
					$('div.acActiveH #key_holder a.ddd').removeClass('ddd');
					$("div.acActiveH #key_holder a:last-child").addClass('ddd');
				}
			}
			else {
				$("div.acActiveH #key_holder a:last-child").addClass('ddd');
			}
			$('.autoComp').val($('div.acActiveH #key_holder a.ddd').text());
		}
		
		if (!$('.acActiveH').is(':visible') && keyunicode === 40)
			$('.acActiveH').fadeIn(100);

		if (keyunicode === 39)
			$('.acActiveH').fadeOut(200);

		if (keyunicode === 13) {
			$('.acActiveH').fadeOut(200);
			searchKeyword();
			return false;
		}

		if (keyunicode === 27) {
			e.preventDefault();
			thold = $('div.acActiveH a.ddd').text();
			$('.acActiveH').fadeOut(200);
			setTimeout(function(){$('.autoComp').val(thold)},1);
			return false;
		}
	}).keyup(function (e) {
		var e=window.event || e;
		var keyunicode=e.charCode || e.keyCode;
               /*
		if (keyunicode === 8 && $(".autoComp.acActive").val().length<1)
			$('.acActiveH').fadeOut(200);

		if (keyunicode != 13 && keyunicode != 27 && !(keyunicode >= 16 && keyunicode <=18) && !(keyunicode >= 32 && keyunicode <=40))
			if ($(this).val() != "")
				autoSuggestLS();
                */
	});
});

var global_counter_track = 0;
function getKeyWords_header () {
	global_counter_track++;
	
	$.ajax({
		type: 'POST',
		dataType: 'xml',
		url: '/pls/web_prod-plq-dad/Webreg_Search_Results.search_auto_sugg2',
		data: 'p_org_id='+orgid+'&p_lang='+lang+'&hkey='+$.trim($('.autoComp.acActive').val())+'&counter='+global_counter_track,
		success: function (result) {
			var holdHTML = "", holdHTML2 = "", holdHTML3 = "", holdHTML4 = "", totalChecker = 0;

			if (parseInt($(result).find('counter').text())!=global_counter_track)
				return false;

			if ($(result).find('keys').find('head')) //If header is present for the keywords, print it
				holdHTML += '<div class="hint_heading">'+$(result).find('keys').find('head').text()+'</div>';

			var altCls = 'aaa';
			holdHTML += '<div id="key_holder">';

			var v_keys = $(result).find('keys').find('key').find('val');
			v_keys.each(function(){//Print each keys
				totalChecker++;
				if($(this))
					//holdHTML += '<a href="Javascript:void(0)" class="'+altCls+'">'+$(this).text()+'</a>';
					holdHTML += '<a href="/pls/web_prod-plq-dad/db_pages.getpage?page_id=615&get_params=key:'+$(this).text()+'" class="'+altCls+'">'+$(this).text()+'</a>';
				if (altCls=='aaa')
					altCls = 'bbb';
				else
					altCls = 'aaa';
			});

			if (v_keys.length==0) holdHTML += '';
			holdHTML += '</div>';
			if (totalChecker==0) holdHTML='';

			if ($(result).find('courses').length!=0) { //Print the courses heading. Can be country specific.
				holdHTML2 += '<div class="hint_heading">'+$(result).find('courses').find('head').text()+'</div>';

				var dup_check = new Array(); //For skipping the course with same name
				var my_courses = new Array(); //For holding the course names
				var v_course = $(result).find('courses').find('course').find('val');
				var course_counter = 0;
				v_course.each(function(){//Print each courses
					if($(this))
						var holdResText = $(this).find('title').text().replace(/ +?/g, '').toLowerCase();
						var holdResTextLast = holdResText.charAt(holdResText.length - 1);
						var holdResTextFirst = holdResText.charAt(0);

						if (holdResTextLast=='.' || holdResTextLast==',' || holdResTextLast==':' || holdResTextLast=='-')
							holdResText = holdResText.replace(/(\s+)?.$/, '');//remove last

						if (holdResTextFirst=='.' || holdResTextFirst==',' || holdResTextFirst==':' || holdResTextFirst=='-')
							holdResText = holdResText.replace(/^.(\s+)?/, '');//remove First
						
						if (jQuery.inArray(holdResText,dup_check) == -1) {
							course_counter++;
							var fillValue = '<a href="/pls/web_prod-plq-dad/db_pages.getCourseDesc?dc='+$(this).find('id').text()+'">'+$(this).find('title').text()+'</a>';
							my_courses.push(fillValue);
							dup_check.push(holdResText);
							if (course_counter>=5) return false;
						}						
				});
				
				try {
					for (var i=1; i<my_courses.length; i++) {
						if ($(my_courses[i]).text().toLowerCase().match("new"+"$")=="new") {
							var itemSource = $(my_courses[i]).text().substring(0, $(my_courses[i]).text().length - 3).replace(/ +?/g, '').toLowerCase();
							for (var j=0; j<i; j++) {
								var itemDest = $(my_courses[j]).text().replace(/ +?/g, '').toLowerCase();
								if (itemSource==itemDest) {
									my_courses.splice(j,0,my_courses[i]);
									my_courses.splice(i+1,1);
									break;
								}
							}
						}
					}
				}
				catch (e) {
					//skip for single element array
				}

				for(var o=0; o<my_courses.length; o++)
					holdHTML2+=my_courses[o];

				holdHTML2 += '<a href="JavaScript:void(0);" onClick="JavaScript:searchKeyword();" class="hc_more">see more courses....</a>';

				if (v_course.length==0) holdHTML2 = '';
			}

			if ($(result).find('trainings').length!=0) { //Print the training heading. Can be country specific.
				holdHTML3 += '<div class="hint_heading">'+$(result).find('trainings').find('head').text()+'</div>';
				
				var v_train = $(result).find('trainings').find('training').find('val');
				v_train.each(function(){//Print each training
					if($(this)) holdHTML3 += '<a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id='+$(this).find('id').text()+'">'+$(this).find('title').text()+'</a>';
				});

				if (v_train.length==0) holdHTML3 = '';
			}

			if ($(result).find('certs').length!=0) { //Print the certification heading. Can be country specific.
				holdHTML4 += '<div class="hint_heading">'+$(result).find('certs').find('head').text()+'</div>';
				
				var v_cer = $(result).find('certs').find('cert').find('val');
				v_cer.each(function(){//Print each certification
					if($(this)) holdHTML4 += '<a href="'+$(this).find('url').text()+'">'+$(this).find('title').text()+'</a>';
				});

				if (v_cer.length==0) holdHTML4 = '';
			}

			holdHTML += holdHTML2 + holdHTML3 + holdHTML4;

			if (holdHTML != '' && $(".autoComp.acActive").val().length>0) $('.acActiveH').html(holdHTML); else $('.acActiveH').html('').fadeOut(200);
			
			$('div.acActiveH a').click(function () {$('.autoComp').val($(this).text());});

			if (!$('#key_holder').html()=='') if (!$('.acActiveH').is(':visible')) $('.acActiveH').fadeIn(100);
			
			if ($('#key_holder').html()=='' && $('.acActiveH').is(':visible')) $('.acActiveH').fadeOut(200);
		},
		error: function (result) {
			var dummy=0;
		}
	});
}

$( document ).ready(function() {
	var ls_checker = true;
	
	var v_ls_orgid = localStorage.getItem('ls_orgid');
	if(v_ls_orgid==undefined || v_ls_orgid==null || v_ls_orgid!=orgid) {
		localStorage.setItem( 'ls_orgid' , orgid );
		ls_checker = ls_checker && false;
	}
	
	var v_ls_date = localStorage.getItem('ls_date');
	if(v_ls_orgid==undefined || v_ls_orgid==null) {
		var curr_date = new Date();
		localStorage.setItem( 'ls_date' , curr_date );
		ls_checker = ls_checker && false;
	}
	else {
		var curr_date = new Date();
		var last_date = new Date(v_ls_date);
		var hours = Math.round((curr_date-last_date)/1000/60/60);
		if (hours > 11)
			ls_checker = ls_checker && false;
	}

	var autoSuggLocalData1 = isValidJson(localStorage.getItem('ls_Data_key'));
	var autoSuggLocalData2 = isValidJson(localStorage.getItem('ls_Data_cou'));
	var autoSuggLocalData3 = isValidJson(localStorage.getItem('ls_Data_tra'));
	var autoSuggLocalData4 = isValidJson(localStorage.getItem('ls_Data_cer'));

	if (autoSuggLocalData1==undefined || autoSuggLocalData1==null || autoSuggLocalData1=='' || autoSuggLocalData3==undefined || autoSuggLocalData3==null || autoSuggLocalData3=='' || autoSuggLocalData4==undefined || autoSuggLocalData4==null || autoSuggLocalData4=='')
		ls_checker = ls_checker && false;

	if(!ls_checker) {
		setAutoSuggVariable();
		setAutoSuggVariableC();
	}

	if(autoSuggLocalData2==undefined || autoSuggLocalData2==null || autoSuggLocalData2=='')
		setAutoSuggVariableC();
});

function setAutoSuggVariable() {
	var curr_date = new Date();
	localStorage.setItem( 'ls_date' , curr_date );
	localStorage.setItem( 'ls_orgid' , orgid );
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: "/pls/web_prod-plq-dad/Webreg_Search_Results.auto_preload1",
		data: "p_org_id="+orgid,
		success: function (result) {
			localStorage.setItem('ls_Data_key', JSON.stringify(result));
		},
		error: function (xhr, txtStat, errThrown) {
			localStorage.setItem('ls_Data_key', null);
		}
	});
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: "/pls/web_prod-plq-dad/Webreg_Search_Results.auto_preload3",
		data: "p_org_id="+orgid,
		success: function (result) {
			localStorage.setItem('ls_Data_tra', JSON.stringify(result));
		},
		error: function (xhr, txtStat, errThrown) {
			localStorage.setItem('ls_Data_tra', null);
		}
	});
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: "/pls/web_prod-plq-dad/Webreg_Search_Results.auto_preload4",
		data: "p_org_id="+orgid,
		success: function (result) {
			localStorage.setItem('ls_Data_cer', JSON.stringify(result));
		},
		error: function (xhr, txtStat, errThrown) {
			localStorage.setItem('ls_Data_cer', null);
		}
	});
	$.ajax({
		type: 'POST',
		dataType: 'text',
		url: "/pls/web_prod-plq-dad/Webreg_Search_Results.Auto_Sugg_Heads",
		data: 'p_org_id='+orgid+'&p_lang='+lang,
		success: function (result) {
			localStorage.setItem('ls_Head', result);
		},
		error: function (xhr, txtStat, errThrown) {
			localStorage.setItem('ls_Head', null);
		}
	});
}
var v_Data_cou = '';
function setAutoSuggVariableC() {
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: "/pls/web_prod-plq-dad/Webreg_Search_Results.auto_preload2",
		data: "p_org_id="+orgid,
		success: function (result) {
			try {
				localStorage.setItem('ls_Data_cou', JSON.stringify(result));
			}
			catch(err) {
				localStorage.setItem('ls_Data_cou', null);
				v_Data_cou = JSON.stringify(result);
			}
		},
		error: function (xhr, txtStat, errThrown) {
			localStorage.setItem('ls_Data_cou', null);
		}
	});
}

function isValidJson(json) {
	try {
		return JSON.parse(json);
	} catch (e) {
		return null;
	}
}

function autoSuggestLS () {
	var autoSuggLocalData1 = isValidJson(localStorage.getItem('ls_Data_key'));
	var autoSuggLocalData2 = isValidJson(localStorage.getItem('ls_Data_cou'));
	var autoSuggLocalData3 = isValidJson(localStorage.getItem('ls_Data_tra'));
	var autoSuggLocalData4 = isValidJson(localStorage.getItem('ls_Data_cer'));

	if (autoSuggLocalData2==null)
		autoSuggLocalData2 = isValidJson(v_Data_cou);

	if (autoSuggLocalData1==undefined || autoSuggLocalData1==null || autoSuggLocalData1=='' || autoSuggLocalData2==undefined || autoSuggLocalData2==null || autoSuggLocalData2=='' || autoSuggLocalData3==undefined || autoSuggLocalData3==null || autoSuggLocalData3=='' || autoSuggLocalData4==undefined || autoSuggLocalData4==null || autoSuggLocalData4=='')
		getKeyWords_header ();
	else
		getKeyWords_header2 ();
}

function getKeyWords_header2() {
	var searchVal = $.trim($('.autoComp.acActive').val()).toUpperCase();
	var searchValHighLight = $.trim($('.autoComp.acActive').val());
	var re = new RegExp(searchValHighLight, "g\i");
	var holdHTML = "", holdHTML1 = "", holdHTML2 = "", holdHTML3 = "", holdHTML4 = "";

	/* ------------------------------------------------------------------------------------------------------------------------------- */

	holdHTML1 += '<div class="hint_heading">'+localStorage.getItem('ls_Head').split('~')[0]+'</div>';

	var altCls = 'aaa';
	holdHTML1 += '<div id="key_holder">';

	var autoSuggLocalData = isValidJson(localStorage.getItem('ls_Data_key'));
	var ls_match1='',
		ls_count1=0, 
		ls_match2='',
		ls_count2=0, 
		ls_match3='', 
		ls_count3=0,
		ls_match4='',
		ls_count4=0,
		item_count=autoSuggLocalData.items.length - 1;

	for (var i = 0; i <= item_count; i++) {
		var fillValue = autoSuggLocalData.items[i].s.n+'~';
		if (ls_count1 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase() == searchVal) {
			ls_match1 += fillValue;
			ls_count1++;
		}
		else if (ls_count2 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal) == 0) {
			ls_match2 += fillValue;
			ls_count2++;
		}
		else if (ls_count3 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(' '+searchVal+' ') != -1) {
			ls_match3 += fillValue;
			ls_count3++;
		}
		else if (ls_count4 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal) != -1) {
			ls_match4 += fillValue;
			ls_count4++;
		}
		if (ls_count1>=5 || ls_count2>=5) break;
	};
	var ls_key_arr = (ls_match1+ls_match2+ls_match3+ls_match4).replace(/(\s+)?.$/, '').split('~')
	for (var i=0; i<5 && i<ls_key_arr.length; i++) {
		holdHTML1 += '<a href="/pls/web_prod-plq-dad/db_pages.getpage?page_id=615&get_params=key:'+ls_key_arr[i].replace(re,searchValHighLight)+'" class="'+altCls+'">'+ls_key_arr[i].replace(re, "<em>"+searchValHighLight+"</em>")+'</a>';		

		if (altCls=='aaa')
			altCls = 'bbb';
		else
			altCls = 'aaa';
	}
	holdHTML1 += '</div>';
	if (ls_key_arr.length==0 || ls_key_arr[0]=="") holdHTML1='';
	/* ------------------------------------------------------------------------------------------------------------------------------- */
	
	holdHTML2 += '<div class="hint_heading">'+localStorage.getItem('ls_Head').split('~')[3]+'</div>';

	autoSuggLocalData = isValidJson(localStorage.getItem('ls_Data_cou'));

	if (autoSuggLocalData==null)
		autoSuggLocalData = isValidJson(v_Data_cou);

	ls_match1='';
	ls_count1=0;
	item_count=autoSuggLocalData.items.length - 1;

	var dup_check = new Array(); //For skipping the course with same name
	var my_courses = new Array(); //For holding the course names
	var course_counter = 0;

	for (var i = 0; i <= item_count - 1; i++) {
		var fillValue = '<a href="/pls/web_prod-plq-dad/db_pages.getCourseDesc?dc='+autoSuggLocalData.items[i].s.v+'">'+autoSuggLocalData.items[i].s.n+'</a>';
		
		if (autoSuggLocalData.items[i].s.k.indexOf('~#@~')==0) {
			if (autoSuggLocalData.items[i].s.k.toUpperCase().indexOf(searchVal) != -1) {
				var holdResText = autoSuggLocalData.items[i].s.n.replace(/ +?/g, '').toLowerCase();
				if (jQuery.inArray(holdResText,dup_check) == -1) {
					ls_count1++;
					my_courses.push(fillValue);
					dup_check.push(holdResText);					
				}
			}
		}
		else {
			if (autoSuggLocalData.items[i].s.k.toUpperCase().indexOf('~'+searchVal.replace(/ +?/g, '')+'~') != -1 || fuzzyMatchAutoSugg(autoSuggLocalData.items[i].s.n, searchVal))//autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal) != -1) 
			{
				var holdResText = autoSuggLocalData.items[i].s.n.replace(/ +?/g, '').toLowerCase();
				if (jQuery.inArray(holdResText,dup_check) == -1) {
					ls_count1++;
					my_courses.push(fillValue);
					dup_check.push(holdResText);					
				}
			}
		}

		if (ls_count1>=5) break;				
	};

	try {
		for (var i=1; i<my_courses.length; i++) {
			if ($(my_courses[i]).text().toLowerCase().match("new"+"$")=="new") {
				var itemSource = $(my_courses[i]).text().substring(0, $(my_courses[i]).text().length - 3).replace(/ +?/g, '').toLowerCase();
				for (var j=0; j<i; j++) {
					var itemDest = $(my_courses[j]).text().replace(/ +?/g, '').toLowerCase();
					if (itemSource==itemDest) {
						my_courses.splice(j,0,my_courses[i]);
						my_courses.splice(i+1,1);
						break;
					}
				}
			}
		}
	}
	catch (e) {
		//skip for single element array
	}
	
	for(var o=0; o<my_courses.length; o++)
		ls_match1+=my_courses[o];

	holdHTML2 += ls_match1 + '<a href="JavaScript:void(0);" onClick="JavaScript:searchKeyword();" class="hc_more">see more courses....</a>';

	if (ls_match1=='') holdHTML2 = '';
	/* ------------------------------------------------------------------------------------------------------------------------------- */
	
	holdHTML3 += '<div class="hint_heading">'+localStorage.getItem('ls_Head').split('~')[1]+'</div>';

	autoSuggLocalData = isValidJson(localStorage.getItem('ls_Data_tra'));
	ls_match1='';
	ls_count1=0;
	ls_match2='';
	ls_count2=0;
	ls_match3='';
	ls_count3=0;
	ls_match4='';
	ls_count4=0;
	item_count=autoSuggLocalData.items.length - 1;

	for (var i = 0; i <= item_count - 1; i++) {
		var fillValue = '<a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id='+autoSuggLocalData.items[i].s.v+'">'+autoSuggLocalData.items[i].s.n.replace(re, "<em>"+searchValHighLight+"</em>")+'</a>~';
		if (ls_count1 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal+' ') == 0) {
			ls_match1 += fillValue;
			ls_count1++;
		}
		else if (ls_count2 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(' '+searchVal+' ') != -1) {
			ls_match2 += fillValue;
			ls_count2++;
		}
		else if (ls_count3 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal) == 0) {
			ls_match3 += fillValue;
			ls_count3++;
		}
		else if (ls_count4 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal) != -1) {
			ls_match4 += fillValue;
			ls_count4++;
		}
		if (ls_count1>=5 || ls_count2>=5) break;
	};

	ls_key_arr = (ls_match1+ls_match2+ls_match3+ls_match4).replace(/(\s+)?.$/, '').split('~')
	for (var i=0; i<5 && i<ls_key_arr.length; i++)
		holdHTML3 += ls_key_arr[i];

	if (ls_key_arr.length==0 || ls_key_arr[0]=="") holdHTML3 = '';
	/* ------------------------------------------------------------------------------------------------------------------------------- */

	holdHTML4 += '<div class="hint_heading">'+localStorage.getItem('ls_Head').split('~')[2]+'</div>';

	autoSuggLocalData = isValidJson(localStorage.getItem('ls_Data_cer'));
	ls_match1='';
	ls_count1=0;
	ls_match2='';
	ls_count2=0;
	ls_match3='';
	ls_count3=0;
	ls_match4='';
	ls_count4=0;
	item_count=autoSuggLocalData.items.length - 1;

	for (var i = 0; i <= item_count; i++) {
		var fillValue = '<a href="'+autoSuggLocalData.items[i].s.v+'">'+autoSuggLocalData.items[i].s.n.replace(re, "<em>"+searchValHighLight+"</em>")+'</a>~';
		if (ls_count1 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal+' ') == 0) {
			ls_match1 += fillValue;
			ls_count1++;
		}
		else if (ls_count2 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(' '+searchVal+' ') != -1) {
			ls_match2 += fillValue;
			ls_count2++;
		}
		else if (ls_count3 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal) == 0) {
			ls_match3 += fillValue;
			ls_count3++;
		}
		else if (ls_count4 < 5 && autoSuggLocalData.items[i].s.n.toUpperCase().indexOf(searchVal) != -1) {
			ls_match4 += fillValue;
			ls_count4++;
		}
		if (ls_count1>=5 || ls_count2>=5) break;
	};

	ls_key_arr = (ls_match1+ls_match2+ls_match3+ls_match4).replace(/(\s+)?.$/, '').split('~')
	for (var i=0; i<5 && i<ls_key_arr.length; i++)
		holdHTML4 += ls_key_arr[i];
	if (ls_key_arr.length==0 || ls_key_arr[0]=="") holdHTML4 = '';

	holdHTML += holdHTML1 + holdHTML2 + holdHTML3 + holdHTML4;

	if (holdHTML != '' && $(".acActive").val().length>0)
		$('.acActiveH').html(holdHTML); 
	else 
		$('.acActiveH').html('').fadeOut(200);
	
	$('div.acActiveH a').click(function () {$('.autoComp').val($(this).text());});

	if (!$('#key_holder').html()=='') 
		if (!$('.acActiveH').is(':visible')) 
			$('.acActiveH').fadeIn(100);
	
	if ($('#key_holder').html()=='' && $('.acActiveH').is(':visible')) 
		$('.acActiveH').fadeOut(200);		
}

function fuzzyMatchAutoSugg (txt,key) {
	var counter = 0;
	var rac_key = false;
	if (key.toUpperCase() == 'RAC') rac_key = true;

	var v_key = key.split(' ');
	var key_len = v_key.length;

	if (!rac_key) {
		for (var i=0; i<key_len; i++)
			if (txt.toUpperCase().replace(/ +?/g, '').indexOf(v_key[i])!=-1)
				counter++;
	}
	else {
		for (var i=0; i<key_len; i++)
			if (txt.toUpperCase().indexOf(v_key[i]+' ')!=-1)
				counter++;
	}

	if (key_len==counter)
		return true;
	else
		return false;
}