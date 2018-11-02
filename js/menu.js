$(document).ready(function(){
    $("#menu_button").click(function(){
        $(".menu-button-line").toggleClass("menu-button-active");
        $(".menu").toggleClass("menu-active");
        $(".menu-items-li").toggleClass("menu-items-li-active");
        $(".rectangl-menu").toggleClass("rectangl-menu-active");
    });
});
