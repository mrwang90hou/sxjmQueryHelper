
function showInfo2() {
    var name
    var grade
    name = document.getElementById("name").value
    grade = document.getElementById("grade").value
    if (name.length == 0) {
        document.getElementById("result").innerHTML = "请先输入您要搜索的内容！"
        return
    }
    $.ajax({
        type: "GET",
        url: "normalsearch.php",
        data: {'content': name,'grade': grade},
        success: function (result)
        {
            var data = JSON.parse(result);
            document.getElementById("code").innerHTML = data.code
            if (data.code == 1) {
                //显示到网页上
                document.getElementById("result").innerHTML = data.msg
            }
            else
            {
                document.getElementById("result").innerHTML = data.msg
            }
        }
    });
}