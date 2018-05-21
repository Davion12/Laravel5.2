$(function () {
    var titleName = document.title;
   $("#page_name").html(titleName);

   $(".display-person-info").on("mouseover", function () {
       $(".child-table").css("display", "block");
   });


});

//隐藏个人信息选择框
function hide(object) {
    object.css("display", "none");
}


//退出界面
function exit(){

}