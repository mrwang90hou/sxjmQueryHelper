var xmlHttp
//绑定输入
function BindEnter() {
 if (event.keyCode == 13) {
     event.cancelBubble = true;
     event.returnValue = false;
         document.getElementById('but').click();
   }
}
function showInfo() {
    var name
    var grade 
    name = document.getElementById("name").value 
    grade = document.getElementById("grade").value
    if (name.length == 0) {
        document.getElementById("result").innerHTML = "请先输入您要搜索的内容！"
        alert("请先输入您要搜索的内容！");
        return
    }
    xmlHttp = GetXmlHttpObject() 
    if (xmlHttp == null) {
        //document.getElementById("result").innerHTML = "浏览器不支持请求！！！"
        alert("浏览器不支持请求！！！") 
        return
    }
    var url = "normalsearch.php"
    url = url + "?name=" + name
    url = url + "&grade=" + grade 
    url = url + "&sid=" + Math.random()
    //在就绪状态变化
    //document.getElementById("result").innerHTML = "URL"
    xmlHttp.onreadystatechange = stateChanged
    xmlHttp.open("GET", url, true) 
    xmlHttp.send(null)
}

function stateChanged() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        document.getElementById("result").innerHTML = xmlHttp.responseText
    }
}
//获取Xml Http对象
function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch(e) {
        //Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}
