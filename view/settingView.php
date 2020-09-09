

<?php
include 'header.php';
?>

<div class="form-group col-lg-8 col-sm-12">
<label for="ncat">categorie:</label>
<input type="text" id="ncat" value="" class="form-control" placeholder="Entrer les categories"></input>
</div>
<div class="col-lg-12 col-sm-12">
  <button type="submit" class="btn btn-outline-danger" onclick="category()">Ajouter</button>
</div>


<h4>Categories disponibles</h4>
<div class="col-lg-8 col-sm-12 border" id="categoryList">




</div>

<script type="text/javascript">
var categoryList = ['electromenager','multimédia', 'telephonie'];
//var categoryList = [];
var list = document.getElementById('categoryList');
var x = "";
// categoryList.forEach(element => console.log(element));
 for (var i = 0; i < categoryList.length; i++) {
  x += " " + categoryList[i] + " ";
  console.log(categoryList[i]);
//list.innerHTML = categoryList.join();
//document.write(categoryList[i]);
}
list.innerHTML = x;
function category(){
  var cat = document.getElementById('ncat').value;
  // for (var i = 0; i < categoryList.length; i++) {
  //   if ("categoryList[i]" === "cat") {
  //     return alert("cette categorie exite déja");
  //   }
  console.log(cat)
    categoryList.push(cat);
  //}
  console.log(categoryList);
}




</script>
<?php
include 'footer.php';
?>
