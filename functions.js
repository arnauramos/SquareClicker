/* SquareClicker's function.js*/
var punts = 0;


function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function clickquadrat() {
  var randomesquerra =  Math.floor((Math.random() * 80) + 1);
  var randomalçada =  Math.floor((Math.random() * 50) + 1);
  var amplada = 200 - parseInt( punts, 10 ) + "px";
  var alçada = 200 - parseInt( punts, 10 ) + "px";
  var esquerra = parseInt( randomesquerra, 10 ) + 10 + "%";
  var top = parseInt( randomalçada, 10 ) + 30 + "%";
  punts = punts + 1;
  document.getElementById('punts').innerHTML = punts;
  document.getElementById("quadrat").style.backgroundColor = getRandomColor();
  document.getElementById("body").style.backgroundColor = getRandomColor();
  document.getElementById("quadrat").style.width = amplada;
  document.getElementById("quadrat").style.height = alçada;
  document.getElementById("quadrat").style.left = esquerra;
  document.getElementById("quadrat").style.top = top;
  if (punts == 200) {
    document.getElementById("quadrat").style.display = "none";
    alert("Ben Jugat");
  }
}
