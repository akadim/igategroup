function drawM() {
	document.write('<div id="mmenuData" class="responseMenu">');
	getMosaicMenu2();
	document.write('</div>');

	/* User menu */
	document.write('<div id="muserData" class="responseMenu"><p class="filler"></p><div class="menuPad2">');
	
	var block = '';
	if (isUCMRegistered() != true)
		block += '<dl><dd><a target="_top" href="' + __$$rd_loginurl$$__ + document.location.href + '">' + __$$rd_registeraccount$$__ + '</a></dd></dl>';
	else if (isUCMRegistered() != -1) {
		block += '<h1>' + __$$rd_welcome$$__ + ' ' + USER.firstname + '</h1>';
		block += '<dl>';
		block += '<dd><a href="javascript:signMeout()" target="">' + __$$rd_signout$$__ + '</a></dd>';
		block += '<dd><a target="_top" href="' + __$$rd_accountlabelurl$$__ + location.href +'"> ' + __$$rd_accountlabel$$__ + '</a></dd>';
		block += '</dl>';
	}
	else
		block += '<dl><dd><a target="_top" href="' + __$$rd_loginurl$$__ + '">' + __$$rd_registeraccount$$__ + '</a></dd></dl>';
	document.write(block);

	document.write('<h1>Country</h1>');
	document.write('<dl><dd><p>'+__$$rd_oucountryname$$__.toLowerCase()+'</p><b class="right3"></b></dd></dl>');

	document.write('<h1><b class="pnoneIcon"></b>'+__$$rd_phonenumber$$__+'</h1>');
	document.write('<dl>');
	if (__$$livechat_yn$$__ == 'Y' && site_section != 'Certification' && site_section != 'OCP')
		document.write('<dd><a href="JavaScript:liveChatWin();">Live Chat</a></dd>');
	
	document.write('	<dd><a href="'+dynamic_base+__$$rd_contactusurl$$__+'" target="_top">'+__$$rd_customer_service$$__+'</a></dd>');
	document.write('	<dd><a class="rname" href="'+dynamic_base+__$$rd_dc_link$$__+'">'+__$$rd_request_info$$__+'</a></dd>');
	
	if (site_section == 'Certification')
		document.write('	<dd><a href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=459" target="_blank">' + __$$rd_helpcontactus$$__ + '</a></dd>');
	else
		document.write('	<dd><a href="'+dynamic_base+dad_pathname+'/db_pages.getpage?page_id=121" target="_top">'+__$$rd_helpcontactus$$__+'</a></dd>');
	document.write('</dl>');

	try {
		if (cartItm <= 0)
			document.write('	<h1><span class="shoppingCartIcon"></span>'+__$$mosaic_header_no_cart_item$$__+'</h1>');
		else if (cartItm == 1)
			document.write('	<h1><span class="shoppingCartIcon"></span>' + cartItm + ' '+__$$mosaic_header_cart_itm$$__+'</h1>');
		else
			document.write('	<h1><span class="shoppingCartIcon"></span>' + cartItm + ' '+__$$mosaic_header_cart_items$$__+'</h1>');
	}
	catch(err) {
		document.write('	<h1>'+__$$mosaic_header_no_cart_item$$__+'</h1>');
	}
	document.write('	<dl>');
	try {
		if (cartItm >= 1)
			document.write('	<dd><a href="'+dynamic_base+dad_pathname+__$$rd_viewcarturl$$__+'">'+__$$mosaic_header_cart_item$$__+'</a></dd>');
	}
	catch(err) {
		//
	}
	document.write('	<dd><a href="' + dynamic_base + dad_pathname + '/db_pages.getpage?page_id=518" target="_top">' + __$$rd_orderstatus$$__ + '</a></dd>');
	document.write('	<br><br><br><br></dl>');
	document.write('</div>');

	mCountries();

	document.write('</div>');
}

jQuery(document).ready(function($) {
	var docHeight = $(window).height();
	$('div.top-level .menuPad').css('height',docHeight-133);
	$('#mAutoitems').css('height',docHeight-113);
	$('#muserData .menuPad2, #muserData .menuPad3').css('height',docHeight-60);
	
	$( window ).resize(function() {
		docHeight = $(window).height();
		$('div.top-level .menuPad').css('height',docHeight-133);
		$('#mAutoitems').css('height',docHeight-113);
		$('#muserData .menuPad2, #muserData .menuPad3').css('height',docHeight-60);
	});
	
	var clickEventType=((document.ontouchstart!==null)?'click':'touchend');
	
	$('div.mmenuH').bind(clickEventType, function(e) {//Action~Mobile~ Menu icon clicked
		if (clickEventType!='click') e.preventDefault();
		if($('#mmenuData').hasClass( "active" ))
			$('#mmenuData, .mmenuH, .groupHead, .top-level, .submenu2, .submenu3, .muserH, #muserData').removeClass( "active" );
		else {
			$('#mmenuData, .mmenuH, #g1, .g1').addClass( "active" );
			$('.muserH, #muserData, .menuPad3, .closeMenu').removeClass( "active" );
			$("#mAutoitems").css('display','none');
		}
		$('li').removeClass('hideLi');
		$('div.columns').removeClass('inactive');
		$('.menuPad').scrollTop(0);
		$('.autoComp.acActive').val('');
	});

	$('div.groupHead').bind(clickEventType, function(e) { //One of the top 3 icons are clicked
		if (clickEventType!='click') e.preventDefault();
		var thisOne = $(this).attr('class').split(' ')[1];

		$('.top-level, .groupHead, .submenu2, .submenu3').removeClass( "active" );
		$('.columns').removeClass( "inactive" );
		$('#'+thisOne).addClass( "active" );
		$(this).addClass( "active" );

		$('li').removeClass('hideLi');
		$('div.columns').removeClass('inactive');

		$('#'+thisOne+' .menuPad').scrollTop(0);
	});

	$('.right1').bind(clickEventType, function(e) { //First level submenu requested
		if (clickEventType!='click') e.preventDefault();
		$(this).parent().children('.submenu2').addClass('active');
		$(this).parents('.top-level').find('div.columns:not(#mosaicHead_pillar)').addClass('inactive');
		$('.submenu3').removeClass('active');
		$(this).parent().parent().children('li').addClass('hideLi');
		$('.menuPad').scrollTop(0);
	});

	$('.left1').bind(clickEventType, function(e) { //First level submenu go back
		if (clickEventType!='click') e.preventDefault();
		$(this).parents('.submenu2').removeClass('active');
		$('div.columns').removeClass('inactive');
		$(this).parents('#mosaicHead_pillar').find('li').removeClass('hideLi');
	});

	$('.right2').bind(clickEventType, function(e) { //Second level submenu requested
		if (clickEventType!='click') e.preventDefault();
		$(this).parent().children('.submenu3').addClass('active');
		$(this).parent().parent().children('li').addClass('hideLi');
		$('.menuPad').scrollTop(0);
	});

	$('.left2').bind(clickEventType, function(e) { //Second level submenu go back
		if (clickEventType!='click') e.preventDefault();
		$(this).parents('.submenu3').removeClass('active');
		$(this).parents('.submenu2').find('li').removeClass('hideLi');
	});

	$('.right3').bind(clickEventType, function(e) { //Country submenu requested
		if (clickEventType!='click') e.preventDefault();
		$('#muserData .menuPad3').addClass( "active" );
		$('.menuPad3').scrollTop(0);
	});

	$('.left3').bind(clickEventType, function(e) { //Country submenu requested
		if (clickEventType!='click') e.preventDefault();
		$('#muserData .menuPad3').removeClass( "active" );
	});
	
	$('.groupHead a').attr('href','JavaScript:void(0);');

	/* User menu */
	$('div.muserH').bind(clickEventType, function(e) {//Action~Mobile~ user icon clicked
		if (clickEventType!='click') e.preventDefault();

		if($('#muserData').hasClass( "active" ))
			$('#mmenuData, .mmenuH, .groupHead, .top-level, .submenu2, .submenu3, .muserH, #muserData').removeClass( "active" );
		else {
			$('.muserH, #muserData').addClass( "active" );
			$('#mmenuData, .mmenuH, .groupHead, .top-level, .submenu2, .submenu3, .menuPad3, .closeMenu').removeClass( "active" );
			$("#mAutoitems").css('display','none');
		}
		$('li').removeClass('hideLi');
		$('div.columns').removeClass('inactive');
		$('.menuPad2').scrollTop(0);
	});

	if (clickEventType!='click') {
		$('div.top-level .menuPad, #muserData .menuPad2').css('margin-right','0'); //on Touch device don't hide the menu scrollbar
		$('#muserData .menuPad3').css('left','5%');

		$('#searchForm2 .autoComp').keyup(function (e) { //auto suggestion close button
			var e=window.event || e;
			var keyunicode=e.charCode || e.keyCode;

			if ($(".autoComp.acActive").val().length<1)
				$('.closeMenu').removeClass( "active" );

			if (keyunicode != 13 && keyunicode != 27 && !(keyunicode >= 16 && keyunicode <=18) && !(keyunicode >= 32 && keyunicode <=40))
				$('.closeMenu').addClass( "active" );
		});
	}
	else {
		$('div.top-level .menuPad, #muserData .menuPad2, #mAutoitems').css('margin-right','-17px');
		$('#muserData .menuPad3').css('right','-17px');
	}

	$('.closeMenu').bind(clickEventType, function(e) {
		if (clickEventType!='click') e.preventDefault();

		$(".autoComp.acActive").val('');
		$("#mAutoitems").css('display','none');
		$('.closeMenu').removeClass( "active" );
	});

	if ('createTouch' in document) { //Remove the hover event in touch devices
		try {
			var ignore = /:hover\b/;
			for (var i=0; i<document.styleSheets.length; i++) {
				var sheet = document.styleSheets[i];
				for (var j=sheet.cssRules.length-1; j>=0; j--) {
					var rule = sheet.cssRules[j];
					if (rule.type === CSSRule.STYLE_RULE && ignore.test(rule.selectorText))
						sheet.deleteRule(j);
				}
			}
		}
		catch(e){}
	}
});

function getMosaicMenu2() {
	var mosaicMenuHolder = '';
	
	mosaicMenuHolder += '<div class="mSearch"><i></i><b class="closeMenu">X</b>\
	<form id="searchForm2" name="searchForm2" method="post" action="">\
	<input type="hidden" value="'+orgid+'" name="p_org_id">	<input type="hidden" value="'+orgid+'" name="p_country">	<input type="hidden" value="'+lang+'" name="p_lang"><input type="hidden" value="" name="p_search_category_id">\
	<input class="autoComp" name="p_search_keyword" type="text" maxlength="70" autocomplete="off" placeholder="'+__$$mosaic_search_text$$__+'">\
	<div id="mAutoitems" class="autoCompHold"></div>\
	</form>\
	</div>';

	//headings
	mosaicMenuHolder += '<div class="groupHeadContent">'
	mosaicMenuHolder += '<div class="groupHead g1"><i></i><a href="#">'+mosaic_head_set1[0][2]+'</a></div>';
	mosaicMenuHolder += '<div class="groupHead g2"><i></i>'+main_menu[0][1]+'</div>'
	mosaicMenuHolder += '<div class="groupHead g3"><i></i><a href="#">'+mosaic_head_set3[0][2]+'</a></div>';
	mosaicMenuHolder += '</div><div class="clear"></div>'

	//Training Menu
	mosaicMenuHolder += '<div id="g1" class="top-level"><div class="menuPad"><div class="topHead"><a href="'+mosaic_head_set1[0][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set1[0][2]+'</a></div>';
	mosaicMenuHolder += getDynamicHead2(headPillarXML);
	var n = mosaic_head_set1.length;
	var m = n;
	while (--n) {
		mosaicMenuHolder += '<div class="columns"><h1><a href="'+mosaic_head_set1[m-n][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set1[m-n][2]+'</a></h1><dl>';
		var j = mosaic_head_set1[m-n][3].length;
		for (var i=0; i<j; i++)
			mosaicMenuHolder += '<dd><a href="'+mosaic_head_set1[m-n][3][i][0].replace('~','/pls/web_prod-plq-dad')+'" target="_blank">'+mosaic_head_set1[m-n][3][i][1]+'</a></dd>';
		mosaicMenuHolder += '</dl></div>';
	}
	mosaicMenuHolder += '<br><br><br><br></div></div>';

	//Certification Menu
	mosaicMenuHolder += '<div id="g2" class="top-level"><div class="menuPad"><div class="topHead">'+main_menu[0][1]+'</div>';
	mosaicMenuHolder += getDynamicHead2(headPillarCertXML);
	for(var i=2; i<main_menu.length; i++) {
		mosaicMenuHolder += '<div class="columns">';
		mosaicMenuHolder += '<h1>'+main_menu[i][1]+'</h1>';
		mosaicMenuHolder += '<dl>';
		for (var j=0; j<main_menu[i][2].length; j++)
			if (main_menu[i][2][j][1]!='x')
				mosaicMenuHolder += '<dd><a href="'+main_menu[i][2][j][0]+'">'+main_menu[i][2][j][1]+'</a></dd>';
		mosaicMenuHolder += '</dl>';
		mosaicMenuHolder += '</div>';
	}
	mosaicMenuHolder += '<br><br><br><br></div></div>';

	//Communities Menu
	mosaicMenuHolder += '<div id="g3" class="top-level"><div class="menuPad"><div class="topHead"><a href="'+mosaic_head_set3[0][1].replace('~','/pls/web_prod-plq-dad')+'">'+mosaic_head_set3[0][2]+'</a></div>';
	var n = mosaic_head_set3.length;
	var m = n;
	while (--n) {
		mosaicMenuHolder += '<div class="columns"><h1>'+mosaic_head_set3[m-n][2]+'</h1><dl>';
		var j = mosaic_head_set3[m-n][3].length;
		for (var i=0; i<j; i++)
			mosaicMenuHolder += '<dd><a href="'+mosaic_head_set3[m-n][3][i][0]+'" target="_blank">'+mosaic_head_set3[m-n][3][i][1]+'</a></dd>';
		mosaicMenuHolder += '</dl></div>';
	}
	mosaicMenuHolder += '<br><br><br><br></div></div>';
	document.writeln(mosaicMenuHolder);
}

function getDynamicHead2 (para) {
	var mMenuHyb2 = '';
	var result = $.parseXML(para);

	mMenuHyb2 += '<div class="columns" id="mosaicHead_pillar">';
	mMenuHyb2 += '<h1>'+$(result).find('header1').text()+'</h1><ul>';

	$(result).find('L1').each(function () {
		mMenuHyb2 += '<li><span class="cat1">' + $(this).find('L1T').text() + '</span><b class="mmover1 right1"></b>';
		mMenuHyb2 += '<div class="submenu2">';
		mMenuHyb2 += '<h1><b class="mmover2 left1"></b>' + $(this).find('L2B_head').text() + '</h1>';
		mMenuHyb2 += '<ul>';

		$(this).find('L2S').each(function () {
			$(this).find('L2').each(function () {						
				mMenuHyb2 += '<li><span class="cat2">' + $(this).find('L2T').text() + '</span><b class="mmover1 right2"></b>';
				mMenuHyb2 += '<div class="submenu3"><h1><b class="mmover2 left2"></b>' + $(this).find('L3B_head').text() + '</h1>';
				mMenuHyb2 += '<div>';

				$(this).find('L3S').each(function () {
					$(this).find('L3').each(function () {
						mMenuHyb2 += '' + $(this).text() + '';
					});
				});
				mMenuHyb2 += '</div></div></li>';
			});
		});
		mMenuHyb2 += '</ul></div></li>';
	});

	mMenuHyb2 += '<li><span class="cat1">' + $(result).find('level4').text() + '</span></li>';
	mMenuHyb2 += '<li><span class="cat1">' + $(result).find('level5').text() + '</span></li>';
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

function mCountries() {
	document.writeln("<div class='menuPad3'>");
	document.writeln("<h1><b class='left3'></b>Back</h1>");
	document.writeln("<dl>");

	for (i = 0; i < cntr_arr.length; i++) {
		if (cntr_arr[i][1] == 0) {
			if (cntr_arr[i][2] == "KO") //rd_Kosovo
				document.writeln('<dd><a href="http://www.oracle.com/si/education/oracle-university-slovenia-338033-sl.html">' + cntr_arr[i][0] + '</a></dd>');
			else if 
				(cntr_arr[i][2] == "lad") document.writeln('<dd><a href="' + ocom_base + '/lad/index.html">' + cntr_arr[i][0] + '</a></dd>');
			else 
				document.writeln('<dd><a href="' + dynamic_base + '/' + cntr_arr[i][2] + '/index.html">' + cntr_arr[i][0] + '</a></dd>');
		}
		else 
			document.writeln('<dd><a href="' + change_country(cntr_arr[i][1], cntr_arr[i][2]) + '">' + cntr_arr[i][0] + '</a></dd>');
	}
	document.writeln("<br><br><br><br></dl></div>");
}