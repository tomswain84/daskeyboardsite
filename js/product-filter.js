// filterSelection("all")
// function filterSelection(c) {
//   var x, i;
//   x = document.getElementsByClassName("filterDiv");
//   if (c == "all") c = "";
//   // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
//   for (i = 0; i < x.length; i++) {
//     w3RemoveClass(x[i], "show");
//     if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
//   }
// }

// // Show filtered elements
// function w3AddClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     if (arr1.indexOf(arr2[i]) == -1) {
//       element.className += " " + arr2[i];
//     }
//   }
// }

// // Hide elements that are not selected
// function w3RemoveClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     while (arr1.indexOf(arr2[i]) > -1) {
//       arr1.splice(arr1.indexOf(arr2[i]), 1);
//     }
//   }
//   element.className = arr1.join(" ");
// }

// // Add active class to the current control button (highlight it)
// var btnContainer = document.getElementById("myBtnContainer");
// var btns = btnContainer.getElementsByClassName("btn");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("active");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += " active";
//   });
// }


$(function(){
  if (document.location.href.indexOf('filter') > 0)
  $("#filterProducts").hide();

  if (document.location.href.indexOf('filter=supercharged') > 0)
  $(".supercharged").show();

  if (document.location.href.indexOf('filter=minimalist') > 0)
  $(".minimalist").show();

  if (document.location.href.indexOf('filter=backlit') > 0)
  $(".backlit").show();

  if (document.location.href.indexOf('filter=smartrgb') > 0)
  $(".smart-rgb").show();

  if (document.location.href.indexOf('filter=aluminum') > 0)
  $(".aluminum").show();

  if (document.location.href.indexOf('filter=formac') > 0)
  $(".for-mac").show();

  if (document.location.href.indexOf('filter=forpc') > 0)
  $(".for-pc").show();

  if (document.location.href.indexOf('filter=linux') > 0)
  $(".linux").show();

  if (document.location.href.indexOf('filter=refurbished') > 0)
  $(".refurbished").show();

  if (document.location.href.indexOf('filter=bestsellers') > 0)
  $(".best-sellers").show();

  if (document.location.href.indexOf('filter=all') > 0)
  $(".filterDiv").show();
  $(".view-all").show();
}); 
