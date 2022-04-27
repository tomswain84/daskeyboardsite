
$(function(){
  if (document.location.href.indexOf('filter') > 0)
  $("#filterProducts").hide();

  if (document.location.href.indexOf('filter=supercharged') > 0)
  $(".supercharged").show();
  if (document.location.href.indexOf('filter=supercharged') > 0)
  $(".tag-supercharged").addClass("active");

  if (document.location.href.indexOf('filter=minimalist') > 0)
  $(".minimalist").show();
  if (document.location.href.indexOf('filter=minimalist') > 0)
  $(".tag-minimalist").addClass("active");

  if (document.location.href.indexOf('filter=backlit') > 0)
  $(".backlit").show();
  if (document.location.href.indexOf('filter=backlit') > 0)
  $(".tag-backlit").addClass("active");

  if (document.location.href.indexOf('filter=smartrgb') > 0)
  $(".smart-rgb").show();
  if (document.location.href.indexOf('filter=smartrgb') > 0)
  $(".tag-smart-rgb").addClass("active");

  if (document.location.href.indexOf('filter=aluminum') > 0)
  $(".aluminum").show();
  if (document.location.href.indexOf('filter=aluminum') > 0)
  $(".tag-aluminum").addClass("active");

  if (document.location.href.indexOf('filter=formac') > 0)
  $(".for-mac").show();
  if (document.location.href.indexOf('filter=formac') > 0)
  $(".tag-mac").addClass("active");

  if (document.location.href.indexOf('filter=forpc') > 0)
  $(".for-pc").show();
  if (document.location.href.indexOf('filter=forpc') > 0)
  $(".tag-pc").addClass("active");

  if (document.location.href.indexOf('filter=ubuntu') > 0)
  $(".ubuntu").show();
  if (document.location.href.indexOf('filter=ubuntu') > 0)
  $(".tag-ubuntu").addClass("active");

  if (document.location.href.indexOf('filter=linux') > 0)
  $(".linux").show();
  if (document.location.href.indexOf('filter=linux') > 0)
  $(".tag-linux").addClass("active");

  if (document.location.href.indexOf('filter=refurbished') > 0)
  $(".refurbished").show();
  if (document.location.href.indexOf('filter=refurbished') > 0)
  $(".tag-refurbished").addClass("active");

  if (document.location.href.indexOf('filter=bestsellers') > 0)
  $(".best-sellers").show();

  if (document.location.href.indexOf('filter=all') > 0)
  $(".filterDiv").show();
  $(".view-all").show();
  if (document.location.href.indexOf('filter=all') > 0)
  $(".tag-all").addClass("active");
}); 
