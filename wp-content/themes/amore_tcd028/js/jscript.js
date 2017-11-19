jQuery(document).ready(function($){


// コンテンツをふわっと表示させる_4
$('#animation_4').css('visibility','hidden');
$(window).scroll(function(){
 var windowHeight = $(window).height(),
     topWindow = $(window).scrollTop();
 $('#animation_4').each(function(){
  var targetPosition = $(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 200){
   $(this).addClass("fadeInDown");
  }
 });
});
// ここまで

// コンテンツをふわっと表示させる_0
$('#animation_0').css('visibility','hidden');
$(window).scroll(function(){
 var windowHeight = $(window).height(),
     topWindow = $(window).scrollTop();
 $('#animation_0').each(function(){
  var targetPosition = $(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 100){
   $(this).addClass("fadeInDown");
  }
 });
});
// ここまで

// コンテンツをふわっと表示させる_1
$('#animation_1').css('visibility','hidden');
$(window).scroll(function(){
 var windowHeight = $(window).height(),
     topWindow = $(window).scrollTop();
 $('#animation_1').each(function(){
  var targetPosition = $(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 100){
   $(this).addClass("fadeInDown");
  }
 });
});
// ここまで

// コンテンツをふわっと表示させる2
$('#animation_2').css('visibility','hidden');
$(window).scroll(function(){
 var windowHeight = $(window).height(),
     topWindow = $(window).scrollTop();
 $('#animation_2').each(function(){
  var targetPosition = $(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 100){
   $(this).addClass("fadeInDown");
  }
 });
});
// ここまで

$(document).ready(function() {
$('.page-bgText').fadeIn(2000);
});

   $(".parent_category > a").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $(this).next().hide();
       return false;
     } else {
       $(this).addClass("active");
       $(this).next().show();
       return false;
     };
   });

  $("a").bind("focus",function(){if(this.blur)this.blur();});
  $("a.target_blank").attr("target","_blank");

  $(".styled_post_list1 > li:last-child").addClass("last");
  $('.footer_widget:nth-child(3n)').addClass('right_widget');
  $('#global_menu > ul > li:nth-child(9)').addClass('hide_menu');
  $('#global_menu > ul > li:nth-child(10)').addClass('hide_menu');
  $('#global_menu > ul > li:nth-child(11)').addClass('hide_menu');
  $('#global_menu > ul > li:nth-child(12)').addClass('hide_menu');

  jQuery.easing.easeOutExpo = function (x, t, b, c, d) {
   return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
  };

	var topBtn = $('#return_top');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
  topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000, 'easeOutExpo');
		return false;
  });

  $("#comment_area ol > li:even").addClass("even_comment");
  $("#comment_area ol > li:odd").addClass("odd_comment");
  $(".even_comment > .children > li").addClass("even_comment_children");
  $(".odd_comment > .children > li").addClass("odd_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");

  $("#trackback_switch").click(function(){
    $("#comment_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#comment_area").animate({opacity: 'hide'}, 0);
    $("#trackback_area").animate({opacity: 'show'}, 1000);
    return false;
  });

  $("#comment_switch").click(function(){
    $("#trackback_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#trackback_area").animate({opacity: 'hide'}, 0);
    $("#comment_area").animate({opacity: 'show'}, 1000);
    return false;
  });


  $("#index_post_list_tab a").click(function() {
    $("#index_post_list_tab a").removeClass('active');
    $(this).addClass("active");
    return false;
  });

  $("#index_post_list_tab > li:first-child a").addClass("active");

   var index_post_list1 = $('#index_post_list1');
   var index_post_list2 = $('#index_post_list2');
   var index_post_list3 = $('#index_post_list3');

   var index_post_list_button1 = $('#index_post_list_button1 a');
   var index_post_list_button2 = $('#index_post_list_button2 a');
   var index_post_list_button3 = $('#index_post_list_button3 a');

   $('.index_post_list').hide();
   $('#index_post_list_wrap .index_post_list:first-child').show();

   index_post_list_button1.click(function () {
      index_post_list1.show();
      index_post_list2.hide();
      index_post_list3.hide();
   });

   index_post_list_button2.click(function () {
      index_post_list2.show();
      index_post_list1.hide();
      index_post_list3.hide();
   });

   index_post_list_button3.click(function () {
      index_post_list3.show();
      index_post_list1.hide();
      index_post_list2.hide();
   });

function mediaQueryClass(width) {

 if (width > 991) { //PC

   $("html").removeClass("mobile");
   $("html").addClass("pc");

   $(".menu_button").css("display","none");

   $("#global_menu").show();

   $("#global_menu li").hover(function(){
     $(">ul:not(:animated)",this).slideDown("fast");
     $(this).addClass("active");
   }, function(){
     $(">ul",this).slideUp("fast");
     $(this).removeClass("active");
   });

 } else { //�X�}�z

   $("html").removeClass("pc");
   $("html").addClass("mobile");

   $("#global_menu li").off('hover');
   $("#global_menu ul ul").removeAttr('style');

   $(".menu_button").css("display", "block");
   $('.menu_button').off('click');

   $(".menu_button").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $('#global_menu').hide();
       return false;
     } else {
       $(this).addClass("active");
       $('#global_menu').show();
       return false;
     };
   });

   $(".child_menu_button").remove();
   $('#global_menu li > ul').parent().prepend("<span class='child_menu_button'><span class='icon'></span></span>");
   $("#global_menu .child_menu_button").on('click',function() {
     if($(this).parent().hasClass("open")) {
       $(this).parent().removeClass("open");
       return false;
     } else {
       $(this).parent().addClass("open");
       return false;
     };
   });

   $("#global_menu li.menu-item-has-children a").hover(function(){
     $(this).prev().addClass("active");
   }, function(){
     $(this).prev().removeClass("active");
   });


 };
};

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

var ww = viewport().width;
var timer = false;

mediaQueryClass(ww);

$(window).bind("resize orientationchange", function() {

  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function() {
    var ww = viewport().width;
    mediaQueryClass(ww);
  }, 200);

})

});
