


function displayChange() {
  var x = document.getElementById("cardtable");
  var y = document.getElementById("listtable");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}



//filtre

var ici = document.querySelector('input[type=checkbox]');
var affichage = [];

ici.onclick = modifAffichage();

function modifAffichage(){
  var valeur = document.querySelector('input[type=checkbox]:checked').value;


  console.table(valeur);
  console.log(valeur);
  alert(valeur);
}
