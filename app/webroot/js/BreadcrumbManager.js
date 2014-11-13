var _URLS = new Array();
_URLS["HOME"] = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=3";
_URLS["CERTIFICATION"] = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=39";
_URLS["COMMUNITY"] = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=539&p_key=Oracle_University_Community";
_URLS["PFAMILY"] = "/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=";
_URLS["PRODUCT"] = "/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=";
_URLS["COURSE"] = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=609";
_URLS["CDTRAINING"] = "/pls/web_prod-plq-dad/ou_product_category.getAllProductsPage";
_URLS["DISCOUNT_PACKAGES"] = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=644";
_URLS["DISCOUNT_SUBPACKAGE"] = "/pls/web_prod-plq-dad/db_pages.getpage?page_id=647";
_URLS["TRAINING"] = "/pls/web_prod-plq-dad/ou_product_category.getAllProductsPage";
_URLS["PILLAR"] = "/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=";

if(typeof REQUEST_GET != "undefined")
{
    if(typeof REQUEST_GET["mode"] != "undefined"  && typeof REQUEST_GET["pillar"] != "undefined")
    {
        _URLS["TRAINING"] = _URLS["TRAINING"] + "?p_mode="+REQUEST_GET["mode"];
        _URLS["PILLAR"] = "/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=" + REQUEST_GET["pillar"]+"&p_mode="+REQUEST_GET["mode"];
    }
    else if(typeof REQUEST_GET["mode"] != "undefined")
    {
        _URLS["TRAINING"] = _URLS["TRAINING"] + "?p_mode="+REQUEST_GET["mode"];
    }

    if(typeof REQUEST_GET["p_cat_list"] != "undefined" &&
       typeof REQUEST_GET["p_family_name"] != "undefined" &&
       typeof REQUEST_GET["cat_name"] != "undefined")
    {
        _URLS["DISCOUNT_SUBPACKAGE"] = _URLS["DISCOUNT_SUBPACKAGE"] 
                                       + "&get_params=p_cat_list:"  
                                       + REQUEST_GET["p_cat_list"]
                                       + ",p_family_name:"
                                       + REQUEST_GET["p_family_name"]
                                       + ",cat_name:"
                                       + REQUEST_GET["cat_name"];

        if(navigator.appName != "Microsoft Internet Explorer")
        {
            _URLS["DISCOUNT_SUBPACKAGE"] = _URLS["DISCOUNT_SUBPACKAGE"].replace(/ /g, '%20');
        }
    }
    else
    {
        _URLS["DISCOUNT_SUBPACKAGE"] = window.location.href;
    }
}

//rd_oracleuniversityhome
//mosaic_menu1
//mosaic_menu2
//mosaic_menu3
var breadCCookie = null;

function initBreadcrumb()
{
	loadBreadcrumbCookie(); 
	writeBreadCrumb();
}

function newBreadCCookie()
{
	breadCCookie = new Array();
	breadCCookie[0] = new Array();
	breadCCookie[0]["levelName"] = "<span style=\"color:RED; font-size:11px;\">Home</span>";
	breadCCookie[0]["levelUrl"] = _URLS["HOME"];
	
	breadCCookie[1] = new Array();
	breadCCookie[1]["levelName"] = "";
	breadCCookie[1]["levelUrl"] = "";
	
	breadCCookie[2] = new Array();
	breadCCookie[2]["levelName"] = "";
	breadCCookie[2]["levelUrl"] = "";
	
	breadCCookie[3] = new Array();
	breadCCookie[3]["levelName"] = "";
	breadCCookie[3]["levelUrl"] = "";
	
	breadCCookie[4] = new Array();
	breadCCookie[4]["levelName"] = "";
	breadCCookie[4]["levelUrl"] = "";
	
	return breadCCookie;
}

function loadBreadcrumbCookie()
{
	if(breadCCookie == null)
	{
		breadCCookie = deSerializeRecordSet(getCookie("BreadCrumb"));
		if(breadCCookie == null || breadCCookie == undefined)
		{
			breadCCookie = newBreadCCookie();
		}	
	}	
	return breadCCookie;
}

function saveBreadcrumbCookie()
{
	setCookie("BreadCrumb","");
	setCookie("BreadCrumb",serializeRecordSet(breadCCookie));
}

var allSet = false;
function writeBreadCrumb()
{
	var here = window.location.href;
	allSet = false;

	if(here.indexOf(_URLS["HOME"]) != -1)
	{
		breadCCookie = newBreadCCookie();
		allSet = true;
	}
	else if(here.indexOf(_URLS["TRAINING"]) != -1)
	{
		setTitleOnLevelTitle(1,"TRAINING");
		breadCCookie[1]["levelUrl"] = _URLS["TRAINING"];
		flushFromLevel(2);
	}
	else if(here.indexOf(_URLS["CERTIFICATION"]) != -1)
	{
		setTitleOnLevelTitle(1,"CERTIFICATION");
		//breadCCookie[1]["levelName"] = document.title;
		breadCCookie[1]["levelUrl"] = _URLS["CERTIFICATION"];
		flushFromLevel(2);
	}
	else if(here.indexOf(_URLS["COMMUNITY"]) != -1)
	{
		setTitleOnLevelTitle(1,"COMMUNITY");
		//breadCCookie[1]["levelName"] = document.title;
		breadCCookie[1]["levelUrl"] = _URLS["COMMUNITY"];
		flushFromLevel(2);
	}
	else if(here.indexOf(_URLS["PILLAR"]) != -1)
	{
		var pillSubstring = here.match(/p_pillar_id=[0-9]+/g);
		var pillarId = pillSubstring[0].split("=")[1];
		setPillar(pillarId);
		flushFromLevel(3);
	}
	else if(here.indexOf(_URLS["PFAMILY"]) != -1)
	{	
		var pfamilySubstring = here.match(/p_family_id=[0-9]+/g);
		var pfamilyId = pfamilySubstring[0].split("=")[1];
		setPfamily(pfamilyId);
		flushFromLevel(3);
	}
	else if(here.indexOf(_URLS["PRODUCT"]) != -1)
	{		
		var productSubstring = here.match(/p_cat_id=[0-9]+/g);
		var productId = productSubstring[0].split("=")[1];
		setProduct(productId);
		flushFromLevel(4);
	}
	else if(here.indexOf(_URLS["COURSE"]) != -1)
	{		
		var productSubstring = here.match(/dc:[a-zA-Z0-9]+/g);
		var dc = productSubstring[0].split(",")[0];
		dc = dc.split(":")[1];
    	setCourseDescription(dc);
		flushFromLevel(4);
	}
	else if(here.indexOf(_URLS["DISCOUNT_PACKAGES"]) != -1)
	{
		setTitleOnLevelTitle(1,"DISCOUNT_PACKAGES");
		breadCCookie[1]["levelUrl"] = _URLS["DISCOUNT_PACKAGES"];
		flushFromLevel(2);
	}
	else if(here.indexOf(_URLS["DISCOUNT_SUBPACKAGE"]) != -1)
	{
		setTitleOnLevelTitle(1,"DISCOUNT_PACKAGES");
		breadCCookie[1]["levelUrl"] = _URLS["DISCOUNT_PACKAGES"];
		setTitleOnLevelTitle(2,"DISCOUNT_SUBPACKAGE");
		breadCCookie[2]["levelUrl"] = _URLS["DISCOUNT_SUBPACKAGE"];
		flushFromLevel(3);
	}
	else
	{
	   if(document.title != "Loading")
	   {
		breadCCookie[1]["levelName"] = document.title;
		breadCCookie[1]["levelUrl"]  = here;
		flushFromLevel(1);
	   }
	   allSet = true;
	}
	
	var allSetInterval = window.setInterval(
			  function () 
			  {
			    try
			    {
				    if(allSet)
				    { 
				        clearInterval(allSetInterval);
				        saveBreadcrumbCookie();	
				        readCurrentBreadcrumb();
				    }
			    }
			    catch(e)
			    {		    	
			    		clearInterval(allSetInterval);
			    }
			  }
			  ,500);
}

function setTitleOnLevelTitle(level,section)
{
	var attToTranslate = new Array();
	if(section == "TRAINING"){
		if(REQUEST_GET["mode"]=="Certification")
			attToTranslate[0] = "mosaic_menu1_cert";
		else
			attToTranslate[0] = "mosaic_menu1";
	}
	else if(section == "CERTIFICATION")
		attToTranslate[0] = "mosaic_menu2";
	else if(section == "COMMUNITY")
		attToTranslate[0] = "mosaic_menu3";
    else if(section == "DISCOUNT_PACKAGES")
        attToTranslate[0] = "rd_offer";
    else if(section == "DISCOUNT_SUBPACKAGE")
    {
        breadCCookie[level]["levelName"] = REQUEST_GET["cat_name"].replace('-forwardslash-','/'); //See page_647.html
        return;
	}

	var ajaxCallObj = getNewAjaxObject();
	
    var url="/pls/web_prod-plq-dad/getTranslationXML";    
    var params = "";
    if (ajaxCallObj)
    {	
        try
        {
		   params+="p_org_id="+orgid;
		   params+="&p_lang="+lang;
		   params+="&p_attrArray="+attToTranslate;
		   ajaxCallObj.open("POST", url, true);            
           //ajaxObject.open("GET", url, true);
		   ajaxCallObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		   ajaxCallObj.setRequestHeader("Content-length", params.length);
		   ajaxCallObj.setRequestHeader("Connection", "close");            
		   ajaxCallObj.onreadystatechange = function() { setTitleOnLevelTitleReturn(ajaxCallObj,level,attToTranslate[0]); };
		   ajaxCallObj.send(params);                 
        }
        catch(err)
        {               
            alert("Problem Requesting setTitleOnLevelTitle()\n"+err);
        }
	}	

	
}

function setTitleOnLevelTitleReturn(ajaxCallObj,level,attName)
{
	try
	{
		if (ajaxCallObj.readyState==4) 
		{ 	  
		    if (ajaxCallObj.status == 200) 
		    {
			  if (ajaxCallObj.responseText) 
			  {					
				  	var resXml = ajaxCallObj.responseXML.documentElement;
				  	breadCCookie[level]["levelName"] = resXml.getElementsByTagName(attName.toUpperCase())[0].firstChild.nodeValue;
				  	allSet = true;
			  }
		    }
		}
	}
	catch(err)
	{
		alert("Problem Receiving setTitleOnLevelTitleReturn\n"+err);
	}
}

function setPillar(pillarId)
{
	var ajaxCallObj = getNewAjaxObject();
	
    var url="/pls/web_prod-plq-dad/OU_BREADCRUMB.getPillarsPath";    
    var params = "";
    if (ajaxCallObj)
    {	
        try
        {
           params+="herLevel=PILLARS";
           params+="&herId="+pillarId;
		   params+="&p_org_id="+orgid;
		   params+="&p_lang="+lang;
		   params+="&p_mode="+REQUEST_GET["mode"];
		   ajaxCallObj.open("POST", url, true);            
           //ajaxObject.open("GET", url, true);
		   ajaxCallObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		   ajaxCallObj.setRequestHeader("Content-length", params.length);
		   ajaxCallObj.setRequestHeader("Connection", "close");            
		   ajaxCallObj.onreadystatechange = function() { setPillarReturn(ajaxCallObj,pillarId); };
		   ajaxCallObj.send(params);                 
        }
        catch(err)
        {               
            alert("Problem Requesting setPillar()\n"+err);
        }
	}	
}

function setPillarReturn(ajaxCallObj,pillarId)
{
	try
	{
		if (ajaxCallObj.readyState==4) 
		{ 	  
		    if (ajaxCallObj.status == 200) 
		    {
			  if (ajaxCallObj.responseText) 
			  {					
				  	var resXml = ajaxCallObj.responseXML.documentElement;
				    
				  	var pillarURL = _URLS["PILLAR"] += pillarId + "&p_mode=" + REQUEST_GET["mode"];		
					breadCCookie[2]["levelName"] = resXml.getElementsByTagName("PILLAR_NAME")[0].firstChild.nodeValue;
					breadCCookie[2]["levelUrl"] = pillarURL;
					
					//if(breadCCookie[1]["levelName"] == "")
					//{
						breadCCookie[1]["levelName"] = resXml.getElementsByTagName("TRAINING_TITLE")[0].firstChild.nodeValue;
						breadCCookie[1]["levelUrl"] = _URLS["TRAINING"];
					//}		
				  	allSet = true;
			  }
		    }
		}
	}
	catch(err)
	{
		alert("Problem Receiving setPillarReturn\n"+err);
	}
}

function setPfamily(pfamilyId)
{
	var ajaxCallObj = getNewAjaxObject();
	
    var url="/pls/web_prod-plq-dad/OU_BREADCRUMB.getPillarsPath";    
    var params = "";
    if (ajaxCallObj)
    {	
        try
        {
           params+="herLevel=PFAMILY";
           params+="&herId="+pfamilyId;
		   params+="&p_org_id="+orgid;
		   params+="&p_lang="+lang;
		   params+="&p_mode="+REQUEST_GET["mode"];
		   ajaxCallObj.open("POST", url, true);            
           //ajaxObject.open("GET", url, true);
		   ajaxCallObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		   ajaxCallObj.setRequestHeader("Content-length", params.length);
		   ajaxCallObj.setRequestHeader("Connection", "close");            
		   ajaxCallObj.onreadystatechange = function() { setPfamilyReturn(ajaxCallObj,pfamilyId); };
		   ajaxCallObj.send(params);                 
        }
        catch(err)
        {               
            alert("Problem Requesting setPfamilyReturn()\n"+err);
        }
	}	
}

function setPfamilyReturn(ajaxCallObj,pfamilyId)
{
	try
	{
		if (ajaxCallObj.readyState==4) 
		{ 	  
		    if (ajaxCallObj.status == 200) 
		    {
			  if (ajaxCallObj.responseText) 
			  {					
				  	var resXml = ajaxCallObj.responseXML.documentElement;
				    
				  	var pfamilyURL = _URLS["PFAMILY"] += pfamilyId + "&p_mode=" + REQUEST_GET["mode"];			
					breadCCookie[3]["levelName"] = resXml.getElementsByTagName("PFAMILY_NAME")[0].firstChild.nodeValue;
					breadCCookie[3]["levelUrl"] = pfamilyURL;
					
					//if(breadCCookie[1]["levelName"] == "")
					//{
						breadCCookie[1]["levelName"] = resXml.getElementsByTagName("TRAINING_TITLE")[0].firstChild.nodeValue;
						breadCCookie[1]["levelUrl"] = _URLS["TRAINING"];
					//}		
					//if(breadCCookie[2]["levelName"] == "")
					//{
						breadCCookie[2]["levelName"] = resXml.getElementsByTagName("PILLAR_NAME")[0].firstChild.nodeValue;
						breadCCookie[2]["levelUrl"] = _URLS["PILLAR"] + resXml.getElementsByTagName("PILLAR_ID")[0].firstChild.nodeValue + "&p_mode=" + REQUEST_GET["mode"];
					//}
				  	allSet = true;
			  }
		    }
		}
	}
	catch(err)
	{
		alert("Problem Receiving setPillarReturn\n"+err);
	}
}

function setProduct(productId)
{
	var ajaxCallObj = getNewAjaxObject();
	
    var url="/pls/web_prod-plq-dad/OU_BREADCRUMB.getPillarsPath";    
    var params = "";
    if (ajaxCallObj)
    {	
        try
        {
           params+="herLevel=PRODUCT";
           params+="&herId="+productId;
		   params+="&p_org_id="+orgid;
		   params+="&p_lang="+lang;
		   ajaxCallObj.open("POST", url, true);            
           //ajaxObject.open("GET", url, true);
		   ajaxCallObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		   ajaxCallObj.setRequestHeader("Content-length", params.length);
		   ajaxCallObj.setRequestHeader("Connection", "close");            
		   ajaxCallObj.onreadystatechange = function() { setProductReturn(ajaxCallObj,productId); };
		   ajaxCallObj.send(params);                 
        }
        catch(err)
        {               
            alert("Problem Requesting setPfamilyReturn()\n"+err);
        }
	}	
}

function setProductReturn(ajaxCallObj,productId)
{
	try
	{
		if (ajaxCallObj.readyState==4) 
		{ 	  
		    if (ajaxCallObj.status == 200) 
		    {
			  if (ajaxCallObj.responseText) 
			  {					
				  	var resXml = ajaxCallObj.responseXML.documentElement;
				    			  
					breadCCookie[4]["levelName"] = resXml.getElementsByTagName("PRODUCT_NAME")[0].firstChild.nodeValue;
					breadCCookie[4]["levelUrl"] = _URLS["PRODUCT"] + productId;
				  	
				//	if(breadCCookie[1]["levelName"] == "")
				//	{
						breadCCookie[1]["levelName"] = resXml.getElementsByTagName("TRAINING_TITLE")[0].firstChild.nodeValue;
						breadCCookie[1]["levelUrl"] = _URLS["TRAINING"];
				//	}		
				//	if(breadCCookie[2]["levelName"] == "")
				//	{
						breadCCookie[2]["levelName"] = resXml.getElementsByTagName("PILLAR_NAME")[0].firstChild.nodeValue;
						breadCCookie[2]["levelUrl"] = _URLS["PILLAR"] + resXml.getElementsByTagName("PILLAR_ID")[0].firstChild.nodeValue + "&p_mode=" + REQUEST_GET["mode"];
				//	}
				//	if(breadCCookie[3]["levelName"] == "")
				//	{
						breadCCookie[3]["levelName"] = resXml.getElementsByTagName("PFAMILY_NAME")[0].firstChild.nodeValue;
						breadCCookie[3]["levelUrl"] = _URLS["PFAMILY"] + resXml.getElementsByTagName("PFAMILY_ID")[0].firstChild.nodeValue + "&p_mode=" + REQUEST_GET["mode"];
				//	}
				  	allSet = true;
			  }
		    }
		}
	}
	catch(err)
	{
		alert("Problem Receiving setPillarReturn\n"+err);
	}
}

function setCourseDescription(dc)
{
	var ajaxCallObj = getNewAjaxObject();
	
    var url="/pls/web_prod-plq-dad/OU_BREADCRUMB.getPillarsPath";    
    var params = "";
    if (ajaxCallObj)
    {	
        try
		{
           params+="herLevel=COURSES";
           params+="&herCID="+dc;
		   params+="&p_org_id="+orgid;
		   params+="&p_lang="+lang;
		   ajaxCallObj.open("POST", url, true);            
           ajaxCallObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		   ajaxCallObj.setRequestHeader("Content-length", params.length);
		   ajaxCallObj.setRequestHeader("Connection", "close");            
		   ajaxCallObj.onreadystatechange = function() { setCourseDescriptionReturn(ajaxCallObj,dc); };
		   ajaxCallObj.send(params);                 
        }
        catch(err)
        {               
            alert("Problem Requesting setPfamilyReturn()\n"+err);
        }
	}	
}

function setCourseDescriptionReturn(ajaxCallObj,dc)
{
	try
	{
		if (ajaxCallObj.readyState==4) 
		{ 	  
		    if (ajaxCallObj.status == 200) 
		    {
			  if (ajaxCallObj.responseText) 
			  {					
		   		  	var resXml = ajaxCallObj.responseXML.documentElement;
				    			  
					breadCCookie[4]["levelName"] = resXml.getElementsByTagName("PRODUCT_NAME")[0].firstChild.nodeValue;
					breadCCookie[4]["levelUrl"] = _URLS["PRODUCT"] + resXml.getElementsByTagName("PRODUCT_ID")[0].firstChild.nodeValue;
				  	
				//	if(breadCCookie[1]["levelName"] == "")
				//	{
						breadCCookie[1]["levelName"] = resXml.getElementsByTagName("TRAINING_TITLE")[0].firstChild.nodeValue;
						breadCCookie[1]["levelUrl"] = _URLS["CDTRAINING"];
				//	}		
				//	if(breadCCookie[2]["levelName"] == "")
				//	{
						breadCCookie[2]["levelName"] = resXml.getElementsByTagName("PILLAR_NAME")[0].firstChild.nodeValue;
						breadCCookie[2]["levelUrl"] = _URLS["PILLAR"] + resXml.getElementsByTagName("PILLAR_ID")[0].firstChild.nodeValue;
				//	}
				//	if(breadCCookie[3]["levelName"] == "")
				//	{
						breadCCookie[3]["levelName"] = resXml.getElementsByTagName("PFAMILY_NAME")[0].firstChild.nodeValue;
						breadCCookie[3]["levelUrl"] = _URLS["PFAMILY"] + resXml.getElementsByTagName("PFAMILY_ID")[0].firstChild.nodeValue;
				//	}
				  	allSet = true;
			  }
		    }
		}
	}
	catch(err)
	{
		//alert("Problem Receiving setCourseDescriptionReturn\n"+err);
	}
}


function readCurrentBreadcrumb()
{
  //writeBreadCrumb();
  var textContainerDiv = document.getElementById("breadCrumb").getElementsByTagName("div")[0].getElementsByTagName("div")[0];
  var pathString = "";  
  var textArrow = document.createTextNode (" > ");
  var aNode = document.createElement("A");
  
  var here = window.location.href;	
  if(here.indexOf(_URLS["HOME"]) == -1)
  {
	  textContainerDiv.innerHTML = "";
	  aNode.href = breadCCookie[0]["levelUrl"];
	  aNode.innerHTML = breadCCookie[0]["levelName"];
	  textContainerDiv.appendChild(aNode.cloneNode(true));
	  
	 // pathString += breadCCookie[0]["levelName"];
	  
	  if(breadCCookie[1]["levelName"] != "")
	  {
		  aNode = document.createElement("A");
		  aNode.href = breadCCookie[1]["levelUrl"];
		  aNode.innerHTML = breadCCookie[1]["levelName"];
		  textContainerDiv.appendChild(textArrow.cloneNode(true));
		  textContainerDiv.appendChild(aNode.cloneNode(true));
		 // pathString += " > " + breadCCookie[1]["levelName"]; 
	  }
	  if(breadCCookie[2]["levelName"] != "")
	  {
		  aNode = document.createElement("A");
		  aNode.href = breadCCookie[2]["levelUrl"];
		  aNode.innerHTML = breadCCookie[2]["levelName"];
		  textContainerDiv.appendChild(textArrow.cloneNode(true));
		  textContainerDiv.appendChild(aNode.cloneNode(true));
		 // pathString += " > " + breadCCookie[2]["levelName"]; 
	  }
	  if(breadCCookie[3]["levelName"] != "")
	  {
		  aNode = document.createElement("A");
		  aNode.href = breadCCookie[3]["levelUrl"];
		  aNode.innerHTML = breadCCookie[3]["levelName"];
		  textContainerDiv.appendChild(textArrow.cloneNode(true));
		  textContainerDiv.appendChild(aNode.cloneNode(true));
		  //pathString += " > " + breadCCookie[3]["levelName"]; 
	  }  
	  if(breadCCookie[4]["levelName"] != "")
	  {
		  aNode = document.createElement("A");
		  aNode.href = breadCCookie[4]["levelUrl"];
		  aNode.innerHTML = breadCCookie[4]["levelName"];
		  textContainerDiv.appendChild(textArrow.cloneNode(true));
		  textContainerDiv.appendChild(aNode.cloneNode(true));
		  //pathString += " > " + breadCCookie[3]["levelName"]; 
	  }  
  }  
}

function flushFromLevel(startLevel)
{
    if(breadCCookie !== undefined)
    {
	for(var i=startLevel ; i<breadCCookie.length ; i++)
	{
		breadCCookie[i]["levelName"] = "";
		breadCCookie[i]["levelUrl"] = "";
	}
    }
    else
      initBreadcrumb();  
}