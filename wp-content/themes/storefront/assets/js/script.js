$(function(){
    $(".bars").on("click",e=>{
        console.log(e.currentTarget);
        e.preventDefault();
        $(".primary").toggleClass("active");
    })
})