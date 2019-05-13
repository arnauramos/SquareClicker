/* SquareClicker's function.js*/
var punts = 0;
var multiplicador = 1;
/*Incrementar punts click segons multiplicador */
function clickx2(){ 
  punts = punts - multiplicador * 10;
  document.getElementById('punts').innerHTML = punts;
  document.getElementById("x2").style.display = "none";
  multiplicador = multiplicador + 1;
}

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
  var randomtop =  Math.floor((Math.random() * 50) + 1);
  var randomtamany =  Math.floor((Math.random() * 300) + 1);
  var amplada = parseInt( randomtamany, 10 ) + "px";
  var alçada = parseInt( randomtamany, 10 ) + "px";
  var esquerra = parseInt( randomesquerra, 10 ) + 10 + "%";
  var top = parseInt( randomtop, 10 ) + 30 + "%";
  punts = punts + multiplicador;
  document.getElementById('punts').innerHTML = punts;
  document.getElementById("quadrat").style.backgroundColor = getRandomColor();
  document.getElementById("body").style.backgroundColor = getRandomColor();
  document.getElementById("quadrat").style.width = amplada;
  document.getElementById("quadrat").style.height = alçada;
  document.getElementById("quadrat").style.left = esquerra;
  document.getElementById("quadrat").style.top = top;
  if (punts >= multiplicador * 10) {
    document.getElementById("x2").innerHTML = - multiplicador * 10;
    document.getElementById("x2").style.display = "flex";
  }
}
