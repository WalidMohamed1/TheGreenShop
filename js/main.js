$(function(){
  $(".showPop").on("click",function(){
    $(this).next().toggleClass("active");
  })
  $('.popContent .hidePop').on("click",function(){
    $(this).parents().removeClass("active");
  })
})
