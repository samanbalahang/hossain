$(function(){
    $(".bars").on("click",e=>{
        console.log(e.currentTarget);
        e.preventDefault();
        $(".primary").toggleClass("active");
    });
    $("video").get(0).play();
    $("video").on("ended",function(){
        $("#loader").remove();
    })
});

// $(document).ready(function() {
//     $("#loader").remove();
// });