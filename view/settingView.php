

<?php
include 'header.php';
?>


<div class="col-lg-12 col-sm-12 row p-5" >
  <div class="col-lg-6 col-sm-12 m-2">
  <label for="ncat">categorie:</label>
  <input type="text" id="ncat" value="" class="form-control" placeholder="Entrer les categories"></input>
  </div>
  <div class="col-lg-12 col-sm-12 m-2">
    <button type="submit" class="btn btn-outline-danger" onclick="category()">Ajouter</button>
  </div>
</div>
<div class="row p-5">
  <div class="col-lg-6 col-sm-12 border">
    <div class="table table-striped">
      <tr>
        <th>Categories disponibles</th>
      </tr>
      <div id="categoryList">

      </div>


    </div>
  </div>

</div>


<script type="text/javascript">
var categoryList = ['electromenager','multimédia', 'telephonie'];
var x = "";
var list = document.getElementById('categoryList');
for (var i = 0; i < categoryList.length; i++) {
  x += " " + categoryList[i] + " ";
  console.log(categoryList[i]);
}
list.innerHTML = x;

function category(){
  var cat = document.getElementById('ncat').value;


  for (var j = 0; j < categoryList.length; j++) {
    if (categoryList[j] === cat) return alert("cette categorie exite déja");
  }
  categoryList.push(cat);
  console.log(categoryList[i]);
  x += " " + categoryList[i] + " ";
  list.innerHTML = x;
  i++;
}

</script>
<?php
include 'footer.php';
?>
