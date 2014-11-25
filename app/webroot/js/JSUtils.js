var stopWatch = 0;
var stopWatchInterval;
var checkAlarmInterval;
function JSUtils()
{
  JSUtils.prototype.startStopWatch = startStopWatch;
  JSUtils.prototype.stopStopWatch = stopStopWatch;
  JSUtils.prototype.stopWatchSetAlarm = stopWatchSetAlarm;
  JSUtils.prototype.cancelStopWatchAlarm = cancelStopWatchAlarm;
}

function startStopWatch()
{
  stopWatchInterval = window.setInterval(
  function ()
  {
    stopWatch++;
  }
  ,1000);
}

function stopStopWatch()
{
    var stopTmp = stopWatch;
    stopWatch = 0;
    clearInterval(stopWatchInterval);
    return stopTmp;
}

function stopWatchSetAlarm(sec,scriptToExec)
{
  if(stopWatch == 0)
    this.startStopWatch();

  checkAlarmInterval = window.setInterval(
  function ()
  {
    if(stopWatch >= sec)
    {
        this.stopStopWatch();
        clearInterval(checkAlarmInterval);
        eval(scriptToExec);
    }
  }
  ,1000);
}

function cancelStopWatchAlarm()
{
     this.stopStopWatch();
     clearInterval(checkAlarmInterval);
}

function addOmnitureSiteCatalyst(objToSave,keywordToSave)
{
    var s=s_gi('rsid');
    s.linkTrackVars='prop21';
    s.prop21=keywordToSave;
    s.tl(objToSave,'o','OU keyword: '+keywordToSave);
}

var autoFlow = "DESC";
function sortTableByColumn(tabl,colNum,flow,dataType)
{
    flow = flow==undefined?"ASC":flow;
    if(flow == "AUTO")
    {
        flow = autoFlow=="DESC"?"ASC":"DESC";
    }
    autoFlow = flow;

    //setArrows(allTabl.getElementsByTagName("THEAD")[0],colNum,flow);
    dataType = dataType==undefined?"STR":dataType;

    //alert("flow :" +flow+"\ndataType:"+dataType);

    //var tabl = allTabl.getElementsByTagName("TBODY")[0];

    var rowAux;
    var rowList = tabl.getElementsByTagName("tr");


    var rtArr = new Array();
    var rl = rtArr.length

    if(rowList.length != undefined && rowList.length > 0 )
    {
        for(var x=0;x<rowList.length;x++)
        {
          var isHeaderRow = rowList[x].getElementsByTagName("th")[0] != undefined?true:false;
          if(!isHeaderRow)
              rtArr[x] = rowList[x];
        }

        //alert(rtArr);

        for(var j=0;j<rtArr.length;j++)
        {
            for(var i=0;i<rtArr.length;i++)
            {
                if(compareItemsSort(rtArr[i].getElementsByTagName("td")[colNum],rtArr[j].getElementsByTagName("td")[colNum],flow,dataType))
                {
                    var rowAux = new Array();
                    var rowAux = rtArr.splice(i,1, rtArr[j].cloneNode(true));
                    rtArr.splice(j,1, rowAux[0].cloneNode(true));
                    //rowsToArray[i+1] = rowAux.cloneNode(true);
                }
            }
        }
        for(var x=rowList.length-1;x>=0;x--)
        {
            tabl.removeChild(rowList[x]);
        }
        for(var i=0;i<rtArr.length;i++)
        {
            tabl.appendChild(rtArr[i]);
        }
    }
}


function compareItemsSort(itemA,itemB,flow,dataType)
{
    //  DATE_RE = /^(\d\d?)[\/\.-](\d\d?)[\/\.-]((\d\d)?\d\d)$/;

    if(itemA.getElementsByTagName("A")[0] == undefined)
    {
        itemA = itemA.innerHTML;
    }
    else
    {
        itemA = itemA.getElementsByTagName("A")[0].innerHTML;
    }
    if(itemB.getElementsByTagName("A")[0] == undefined)
    {
        itemB = itemB.innerHTML;
    }
    else
    {
        itemB = itemB.getElementsByTagName("A")[0].innerHTML;
    }
    //alert(typeof(itemA));

    var boolResult;
    if(dataType == "STR")
    {
        itemA = (itemA.replace(" ","")).toLowerCase();
        itemB = (itemB.replace(" ","")).toLowerCase();
    }
    else if(dataType == "NUM")
    {
        itemA = parseFloat(itemA.replace(/[^0-9.-]/g,""));
        itemB = parseFloat(itemB.replace(/[^0-9.-]/g,""));
    }
    else if(dataType == "DATE")
    {
        itemA = formatDateType(itemA);
        itemB = formatDateType(itemB);
    }

    if(flow == "ASC")
        boolResult=itemA>itemB?true:false;
    else
        boolResult=itemA<itemB?true:false;

    return boolResult;
}

function formatDateType(dateItem)
{
    dateItem = dateItem.replace(/-/g,"/");
    var checkGlobForArr = dateItem.split("/");

    if(checkGlobForArr[2].length > 2)
    {
        dateItem = checkGlobForArr[2]+"/"+checkGlobForArr[1]+"/"+checkGlobForArr[0];
    }
    var currDate = new Date(dateItem);
    return currDate;
}

function setSortArrows(tHead,tdSelected)
{
    var flow = autoFlow=="DESC"?"ASC":"DESC";
    var imgSelected;

    for(var i=0;i<tdSelected.getElementsByTagName("img").length;i++)
    {
        if(tdSelected.getElementsByTagName("img")[i].name == "sortArr")
        {
            imgSelected = tdSelected.getElementsByTagName("img")[i];
            break;
        }
    }

    for(var i=0;i<tHead.getElementsByTagName("img").length;i++)
    {
        if(tHead.getElementsByTagName("img")[i].name == "sortArr")
        {
                tHead.getElementsByTagName("img")[i].src = "/education/images/upDownImg.gif";
        }
    }

    if(flow == "ASC")
        imgSelected.src = "/education/images/descImg.gif";
    else
        imgSelected.src = "/education/images/ascImg.gif";

}

function createLoadingDiv(styleBack)
{
    var newBackDiv = document.createElement("DIV");
    newBackDiv.id="loadingBack";

    if(styleBack != undefined && styleBack != "")
    {
        newBackDiv.className = styleBack;
    }
    else
    {
        newBackDiv.style["background-color"]="#FFFFFF";
        newBackDiv.style["position"]="absolute";
        newBackDiv.style["width"]="100%";
        newBackDiv.style["height"]="100%";
        newBackDiv.style["z-index"]="20002";
        newBackDiv.style["left"]="0";
        newBackDiv.style["top"]="0";
        // FOR IE
        newBackDiv.style["filter"]="alpha(opacity=60)";
        // CSS3 standard
        newBackDiv.style["opacity"]="0.6";
        newBackDiv.style["background-image"]="url(/education/images/loading2.gif)";
        newBackDiv.style["background-repeat"]="no-repeat";
        newBackDiv.style["background-position"]="center";
        newBackDiv.style["list-style-position"]="outside";
    }
    document.body.appendChild(newBackDiv);
    return newBackDiv;
}

function showLoadingPage(styleBack)
{
    var divLoad = document.getElementById("loadingBack");
    divLoad = (divLoad)?divLoad:createLoadingDiv(styleBack);
    
    var currScrollY = typeof(window.pageYOffset) == 'number'?window.pageYOffset:document.documentElement.scrollTop;
    
    var scrTop = parseFloat(currScrollY);
    document.documentElement.style.overflow = 'hidden';     // firefox, chrome
    window.scrollTo(0,scrTop);
    divLoad.style["top"]=scrTop + "px";
    divLoad.style["display"]="";
}

function stopLoadingPage()
{
    var divLoad = document.getElementById("loadingBack");
    divLoad = (divLoad)?divLoad:createLoadingDiv();
    var currScrollY = typeof(window.pageYOffset) == 'number'?window.pageYOffset:document.documentElement.scrollTop;
    var scrTop = parseFloat(currScrollY);
    document.documentElement.style.overflow = 'scroll';     // firefox, chrome
    window.scrollTo(0,scrTop);
    divLoad.style["display"]="none";

}

function lockEntiredPage()
{
    //backColor != null?backColor:"#CCCCCC";

    window.scrollTo(0,0);
        var newBackDiv = document.createElement("DIV");
        newBackDiv.id="lockBackground";
        newBackDiv.style.backgroundColor="#CCCCCC";
        newBackDiv.style.position="absolute";
        newBackDiv.style.width="100%";
        newBackDiv.style.height="100%";
        newBackDiv.style.zIndex="20002";
        newBackDiv.style.left="0px";
        newBackDiv.style.top="0px";

        if(document.all)
            newBackDiv.style.filter="alpha(opacity=60)"; // FOR IE
        else
            newBackDiv.style.opacity="0.6";     // CSS3 standard


        newBackDiv.style["list-style-position"]="outside";


        //var darkDiv = document.getElementById("darkBack");
        var scrTop = parseFloat(document.documentElement.scrollTop);
        document.documentElement.style.overflow = 'hidden';     // firefox, chrome
        window.scrollTo(0,scrTop);
        newBackDiv.style["top"]=scrTop + "px";
        //darkDiv.style["display"]="";

        document.body.appendChild(newBackDiv);
        return newBackDiv;
}

function unlockEntiredPage()
{
    document.body.removeChild(document.getElementById("lockBackground"));
}


function showIframeLightBox(src,w,h)
{
    var backDiv = lockEntiredPage(true);

    var iframContainer = document.createElement("div");
    iframContainer.style.position="absolute";
    iframContainer.id= "iFrameFlexCont";
    iframContainer.style.zIndex="20006";
    iframContainer.style.left="15%";
    iframContainer.style.top="9%";
    iframContainer.style.width=(parseInt(w)+35)+"px";
    iframContainer.style.height=(parseInt(h)+35)+"px";
    iframContainer.style.overflow = 'hidden';     // firefox, chrome


    var iFramCont = document.createElement("iframe");
    //iFramCont.id="iFrameFlexCont";
    iFramCont.style.position="absolute";
    iFramCont.style.width=w+"px";
    iFramCont.style.height=h+"px";
//    iFramCont.style.zIndex="20006";
//    iFramCont.style.left="15%";
    iFramCont.style.bottom="0px";
    iFramCont.style.border = "0px";
    iFramCont.style.overflow = 'hidden';     // firefox, chrome
    iFramCont.scrolling = "no";
    iFramCont.src = src;

    var closeImg = document.createElement("div");
    closeImg.innerHTML = "<img src='/education/images/tod_closebutton.png' border='0' />";
    closeImg.style.top = "0px";
    closeImg.style.right = "0px";
    closeImg.style.position = "absolute";
    closeImg.style.cursor = "pointer";
    closeImg.style.zIndex="20007";
    closeImg.id = "iFrameFlexCloseButt";
    closeImg.onmousedown = function()
    {
        closeIframeLightBox();
    }

    iframContainer.appendChild(closeImg);
    iframContainer.appendChild(iFramCont);

    document.body.appendChild(iframContainer);
    //document.body.appendChild(iFramCont);
}

function showHTMLContentLightBox(src,w,h)
{
    var backDiv = lockEntiredPage(true);

    var ligtBoxContainer = document.createElement("div");
    ligtBoxContainer.style.position="absolute";
    ligtBoxContainer.id= "htmlFlexCont";
    ligtBoxContainer.style.zIndex="20008";
    ligtBoxContainer.style.left="30%";
    ligtBoxContainer.style.top="20%";
    ligtBoxContainer.style.width=(parseInt(w)+35)+"px";
    ligtBoxContainer.style.height=(parseInt(h)+35)+"px";
    ligtBoxContainer.style.overflow = 'hidden';     // firefox, chrome


    var messageContainer = document.createElement("div");
    messageContainer.style.position="absolute";
    messageContainer.style.width=w+"px";
    messageContainer.style.height=h+"px";
    messageContainer.style.bottom="0px";
    //messageContainer.style.backgroundColor="black";
    messageContainer.style.border = "0px";
    messageContainer.style.overflow = 'hidden';     // firefox, chrome
    messageContainer.scrolling = "no";
    messageContainer.innerHTML = src;

    var closeImg = document.createElement("div");
    closeImg.innerHTML = "<img src='/education/images/tod_closebutton.png' border='0' />";
    closeImg.style.top = "0px";
    closeImg.style.right = "0px";
    closeImg.style.position = "absolute";
    closeImg.style.cursor = "pointer";
    closeImg.style.zIndex="20009";
    closeImg.id = "iFrameFlexCloseButto";
    closeImg.onmousedown = function()
    {
        closeHTMLContentLightBox();
    }

    ligtBoxContainer.appendChild(closeImg);
    ligtBoxContainer.appendChild(messageContainer);

    document.body.appendChild(ligtBoxContainer);
}

function closeHTMLContentLightBox()
{
    document.body.removeChild(document.getElementById("htmlFlexCont"));
    unlockEntiredPage();
    document.documentElement.style.overflow = 'scroll';     // firefox, chrome
    window.scrollTo(0,0);
}

function closeIframeLightBox()
{
    document.body.removeChild(document.getElementById("iFrameFlexCont"));
    //document.body.removeChild(document.getElementById("iFrameFlexCloseButt"));
    unlockEntiredPage();
    document.documentElement.style.overflow = 'scroll';     // firefox, chrome
    window.scrollTo(0,0);
}

function extractOnlyNumber(_num)
{
    return parseFloat(_num.replace(/[^0-9.-]/g,""));
}


function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function readSECookie(c_name)
{
 try
 {
   if (document.cookie.length>0)
   {
          c_start=document.cookie.indexOf(c_name + "=")
          if (c_start!=-1) {
            c_start=c_start + c_name.length+1
            c_end=document.cookie.indexOf(";",c_start)
            if (c_end==-1) c_end=document.cookie.length
            return unescape(document.cookie.substring(c_start,c_end))
   }
  }
  return "";
 }
 catch(e)
 {
     return "";
 }
}

function writeSECookie(c_name,value,expiredays) {
   var exdate=new Date();
   exdate.setDate(exdate.getDate()+expiredays);
   document.cookie=c_name+ "=" +escape(value);
}


function getUserInfo()
{
    var userInfo = new Array();
    var cookieValue = decodeURIComponent(readCookie("ORA_UCM_INFO"));
    if(cookieValue != undefined)
    {
        var results = cookieValue.split("~");
        userInfo["fullName"] = results[2] +" "+ results[3];
        userInfo["firstName"] = results[2] ;
        userInfo["lastName"] =  results[3];
        userInfo["email"] = results[4];
    }
    else
    {
        userInfo["fullName"] = "Guest";
        userInfo["firstName"] = "" ;
        userInfo["lastName"] =  "";
        userInfo["email"] = "";
    }
    return userInfo;
}


function waitToExecute(cond,toExecute,eachMilSeconds)
{
   var nextRound = "waitToExecute('"+cond+"','"+toExecute+"',"+eachMilSeconds+");";
   if(eval(cond))
   {
      eval(toExecute);
   }
   else
   {
 // alert(nextRound);
       setTimeout(nextRound ,eachMilSeconds);
   }
}

function serializeRecordSet(recordSetArr)
{
  var stringSerialize = "";
    for(var i=0 ; i<recordSetArr.length ; i++)
    {
        stringSerialize += i!=0?"|||":"";
        stringSerialize += "{";
        var firstEntry = true;
        for(var index in recordSetArr[i])
        {
            stringSerialize += !firstEntry?"##":"";
            firstEntry = false;
            stringSerialize += index+"::"+recordSetArr[i][index];
        }
        stringSerialize += "}";
    }
  return escape(stringSerialize);
}

function deSerializeRecordSet(recordSetString)
{
  var objArray = null;
  if(recordSetString != undefined && recordSetString != "")
  {
      objArray = new Array();
      recordSetString = unescape(recordSetString);
      var rowsArray = recordSetString.split("|||");
      for(var i=0; i < rowsArray.length ; i++)
      {
          objArray[i] = new Array();

          rowsArray[i] = rowsArray[i].replace(/[{}]/g,"");

          var colsArray = rowsArray[i].split("##");
          for(var j=0;j<colsArray.length ; j++)
          {
              objArray[i][colsArray[j].split("::")[0]] = colsArray[j].split("::")[1]
          }
      }
  }
  return objArray;
}

//-----------------------------

function serializeVector(vectorArr)
{
  var stringSerialize = "";
    for(var i=0 ; i<vectorArr.length ; i++)
    {
        stringSerialize += i!=0?";;":"";
                stringSerialize += vectorArr[i];
    }
  return escape(stringSerialize);
}

function deSerializeVector(vectorStr)
{
  var objArray = new Array();
  if(vectorStr != undefined && vectorStr != "")
  {
     // objArray = new Array();
      vectorStr = unescape(vectorStr);
      objArray = vectorStr.split(";;");
  }
  return objArray;
}


function jsObjClone(obj) {
    // Handle the 3 simple types, and null or undefined
    if (null == obj || "object" != typeof obj) return obj;

    // Handle Date
    if (obj instanceof Date) {
        var copy = new Date();
        copy.setTime(obj.getTime());
        return copy;
    }

    // Handle Array
    if (obj instanceof Array) {
        var copy = [];
        for(var index in obj)
        {
          copy[index] =  jsObjClone(obj[index]);
        }
        /*
        for (var i = 0, len = obj.length; i < len; i++) {
            copy[i] = jsObjClone(obj[i]);
        }
        */
        return copy;
    }

    // Handle Object
    if (obj instanceof Object) {
        var copy = {};
        for (var attr in obj) {
            if (obj.hasOwnProperty(attr)) copy[attr] = jsObjClone(obj[attr]);
        }
        return copy;
    }

    throw new Error("Unable to copy obj! Its type isn't supported.");
}



function getNewAjaxObject()
{
    aObject = null;
        if (window.XMLHttpRequest)
            aObject = new XMLHttpRequest();
        else
        {
          if (window.ActiveXObject)
          {
            try
            {
                aObject = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e)
            {
                aObject=null;
                alert("Could not create wa.XMLHTTP Object");
            }
          }
        }
    return aObject;
}

//-------- PROTOTYPE UTILS --------------------

Number.prototype.toMoney = function(decimals, decimal_sep, thousands_sep)
{
   var n = this,
   c = isNaN(decimals) ? 2 : Math.abs(decimals), //if decimal is zero we must take it, it means user does not want to show any decimal
   d = decimal_sep || ',', //if no decimal separetor is passed we use the comma as default decimal separator (we MUST use a decimal separator)

   /*
   according to [http://stackoverflow.com/questions/411352/how-best-to-determine-if-an-argument-is-not-sent-to-the-javascript-function]
   the fastest way to check for not defined parameter is to use typeof value === 'undefined'
   rather than doing value === undefined.
   */
   t = (typeof thousands_sep === 'undefined') ? '.' : thousands_sep, //if you don't want ot use a thousands separator you can pass empty string as thousands_sep value

   sign = (n < 0) ? '-' : '',

   //extracting the absolute value of the integer part of the number and converting to string
   i = parseInt(n = Math.abs(n).toFixed(c)) + '',

   j = ((j = i.length) > 3) ? j % 3 : 0;
   return sign + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '');
} 


function showIframeLightBox2(src,w,h)
{
	var backDiv = lockEntiredPage(true);
	
	var iframContainer = document.createElement("div");
	iframContainer.style.position="absolute";
	iframContainer.id= "iFrameFlexCont";
	iframContainer.style.zIndex="20006";
	iframContainer.style.left="15%";
	iframContainer.style.top="9%";	
	iframContainer.style.width=(parseInt(w)+35)+"px";
	iframContainer.style.height=(parseInt(h)+35)+"px";
	iframContainer.style.overflow = 'hidden';	 // firefox, chrome
	
	
	var iFramCont = document.createElement("iframe");	
	//iFramCont.id="iFrameFlexCont";		
	iFramCont.style.position="absolute";
	iFramCont.style.width=w+"px";
	iFramCont.style.height=h+"px";
//	iFramCont.style.zIndex="20006";
//	iFramCont.style.left="15%";
	iFramCont.style.bottom="0px";
	iFramCont.style.border = "0px";
	iFramCont.style.overflow = 'hidden';	 // firefox, chrome
	iFramCont.scrolling = "no";
	iFramCont.src = src;
		
	var closeImg = document.createElement("div");
	closeImg.innerHTML = "<img src='/education/images/tod_closebutton.png' border='0' />";
	closeImg.style.top = "0px";
	closeImg.style.right = "0px";
	closeImg.style.position = "absolute";
	closeImg.style.cursor = "pointer";
	closeImg.style.zIndex="20007";
	closeImg.id = "iFrameFlexCloseButt";
	closeImg.onmousedown = function()
	{	
		closeIframeLightBox2();
	} 
		
	iframContainer.appendChild(closeImg);
	iframContainer.appendChild(iFramCont);
	
	$("html").append(iframContainer);
}

function closeIframeLightBox2()
{
	$('#iFrameFlexCont').remove();
	//document.body.removeChild(document.getElementById("iFrameFlexCloseButt"));	
	unlockEntiredPage();
	document.documentElement.style.overflow = 'scroll';	 // firefox, chrome				
	window.scrollTo(0,0);	
}

function encodeSpecialCharacters(sometext)
{
    var specCharacters = /[\$\&\+\,\/\:\;\=\?@]/g;
    return sometext.replace(specCharacters, function(m){ return escape(m); });
}

function boldMatchedText(keyword,text)
{
  var resultText = text; //.replace(/<\/?[^>]+>/gi, '');
    if(keyword != undefined && keyword != "" && keyword.length > 0)
    {
        var keywList = keyword.split(" ");
        for(var i=0;i<keywList.length;i++)
        {
          resultText = resultText.replace(new RegExp('(<\/?[^>]+>)|' + keywList[i] + '', 'gi'), function(m)
          { 
              if(m.match(/<\/?[^>]+>/gi))
                return m;
              else 
                return "<strong>"+m+"</strong>";
          });
         }
    }
    return resultText;
}