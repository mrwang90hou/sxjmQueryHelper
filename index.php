<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="lyy" />
<meta name="keyewords" content="桂电数学建模比赛信息查询" />
<meta name="description" content="桂电北海数学建模协会版权所有"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>桂电数学建模比赛信息查询</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<script src="js/showInfo.js"></script>
<!--<script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>-->
</head>
<body>
<div id="wrapper">
  <div class="bgImg">
    <div class="blur"></div>
  </div>
  <div class="signOut">
    <h1>桂电数学建模比赛信息查询</h1>
    <div class="container1">
      <form>
        <div class="form-group">
            <label for="outUserName"></label>
            <input type="text" class="outUserName" id="name" placeholder="姓名,年份,校区,指导老师..." onkeypress="BindEnter();">
			<select id="grade" style=display:none;>
            <option value="NationalCompetitionGrade" selected="selected"></option>
          </select>
        </div>
        <div class="btn-group">
            <button type="button" id="but" class="btn btnSignUp" onclick="showInfo()">查找一下</button>
        </div>
      </form>
    </div>
	<h5 id="result"></h5>
	<h6>版权所有 &copy; 桂电北海数学建模协会版</h6> 
  </div>
</div>
</body>
<!--<script>-->
    <!--$.ajax({-->
        <!--type: "GET",-->
        <!--url: "normalsearch.php",-->
        <!--data: {'content': 2014,'grade': grade},-->
        <!--success: function (result)-->
        <!--{-->
            <!--var data = JSON.parse(result);-->
            <!--document.getElementById("code").innerHTML = data.code-->
            <!--if (data.code == 1) {-->
                <!--//显示到网页上-->
                <!--document.getElementById("result").innerHTML = data.msg-->
            <!--}-->
            <!--else-->
            <!--{-->
                <!--document.getElementById("result").innerHTML = data.msg-->
            <!--}-->
        <!--}-->
    <!--});-->
<!--</script>-->
</html>