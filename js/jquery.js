$(document).ready(function(){
    
    function foo(elem_id) {
        $(".swiper-pagination-bullet")[elem_id].click();
    }
    $('#').click(function () {
        foo();
    });
});
