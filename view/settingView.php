

<?php
include 'header.php';
?>


<form action="" method="post" class="col-lg-12 col-sm-12 row p-5" >
<div class="form-group col-lg-8 col-sm-12">
<label for="ncat">categorie:</label>
<input type="text" id="ncat" value="" class="form-control" placeholder="Entrer les categories"></input>
</div>
<div class="col-lg-12 col-sm-12">
  <button type="submit" class="btn btn-outline-danger" onclick="category()">Ajouter</button>
</div>
</form>

<h4>Categories disponibles</h4>
<div class="col-lg-8 col-sm-12 border" id="categoryList">




</div>

<script type="text/javascript">
var categoryList = ['electromenager','multimédia', 'telephonie'];
//var categoryList = [];
var list = document.getElementById('categoryList');
// categoryList.forEach(element => console.log(element));
 for (var i = 0; i < categoryList.length; i++) {
  list.innerHTML = "<td>"+ categoryList[i] + "</td><br/>";
  console.log(categoryList[i]);

//list.innerHTML = categoryList.join();
//document.write(categoryList[i]);
}

function category(){
  var cat = document.getElementById('ncat').value;
  alert(cat);
  // for (var i = 0; i < categoryList.length; i++) {
  //   if ("categoryList[i]" === "cat") {
  //     return alert("cette categorie exite déja");
  //   }
    categoryList.push(cat);
  //}
  console.log(categoryList);
}




</script>
<?php
include 'footer.php';
?>
