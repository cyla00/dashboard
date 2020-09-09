

<?php
include 'header.php';
?>


<form action="" method="post" class="col-lg-12 col-sm-12 row p-5" >
<div class="form-group col-lg-6 col-sm-12">
<label for="ncat">categorie:</label>
<input type="text" id="ncat" value="" class="form-control" placeholder="Entrer les categories"></input>
</div>
<div class="col-lg-12 col-sm-12">
  <button type="submit" class="btn btn-outline-danger" onclick="category()">Ajouter</button>
</div>
</form>
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

 for (var i = 0; i < categoryList.length; i++) {
    // var list = document.getElementById('categoryList');
    // list.innerHTML += "<tr><td>"+ categoryList[i] + "</td></tr>";
    let td = document.createElement('td');
    let tdtext = document.createTextNode(categoryList[i]);
    td.appendChild(tdtext);
    var list = document.getElementById('categoryList');
    list.appendChild(td);
  console.log(categoryList[i]);
//list.innerHTML = categoryList.join();
//document.write(categoryList[i]);
}

function category(){
  var cat = document.getElementById('ncat').value;
  // console.log(cat);
  categoryList.push(cat);
  
  // for (var i = 0; i < categoryList.length; i++) {
    // if (categoryList[i] === cat) {
    //   return alert("cette categorie exite déja");
    // } else {
    //   categoryList.push(cat);
    // }
  }


</script>
<?php
include 'footer.php';
?>
