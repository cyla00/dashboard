var result = document.getElementById('result');

function debut(){
  var requete = new XMLHttpRequest();

  requete.onload = responseHandling;
  requete.open("get", "view/json.php", true);
  requete.send();

}

setTimeout(debut, 2000);

function responseHandling() {
  data = this.responseText;
  let json = JSON.parse(data);
  console.log(json);
 //document.body.innerHTML = this.responseText;

 repartCat(json);
}

function repartCat(json){

  let label= [];
  let series = [];

  json.forEach((item, i) => {
    label.push(item[0]);
    series.push(item[1]);
  });

  var data = {
    labels: label,
    series: series
  };

  var options = {
    labelInterpolationFnc: function(value) {
      return value[0]
    }
  };

  var responsiveOptions = [
    ['screen and (min-width: 640px)', {
      chartPadding: 30,
      labelOffset: 100,
      labelDirection: 'explode',
      labelInterpolationFnc: function(value) {
        return value;
      }
    }],
    ['screen and (min-width: 1024px)', {
      labelOffset: 80,
      chartPadding: 20
    }]
  ];
new Chartist.Pie('.ct-chart', data, options, responsiveOptions);
}
