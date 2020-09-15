
// switch affichage produits
// function displayChange() {
//   var x = document.getElementById("cardtable");
//   var y = document.getElementById("listtable");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//     y.style.display = "none";
//   } else {
//     x.style.display = "none";
//     y.style.display = "block";
//   }
// }


//filtre

// function deselect(value){
//   //document.getElementsByClassName('table').childNodes[value].style.display = 'none';
//   // table = document.getElementsByClassName('table');
//   // table.childNodes[value].style.display = 'none';
//
// var v = document.getElementById('listtable').childNodes[value];
// var w = document.getElementById('cardtable').childNodes[value];
//
// if(v.style.display === "" && w.style.display === ""){
//   v.style.display === "none";
//   w.style.display === "none";
// } else {
//   v.style.display === "";
//   w.style.display === "";
// }
// }
// document.getElementById('listtable').childNodes[value].style.display = 'none';
// document.getElementById('cardtable').childNodes[value].style.display = 'none';



// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};
// Get the header
var header = document.getElementById("header");
// Get the offset position of the navbar
var sticky = header.offsetTop;
// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
