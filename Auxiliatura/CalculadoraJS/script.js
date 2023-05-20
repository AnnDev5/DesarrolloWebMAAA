/*botones = document.getElementsByClassName("boton");
pantalla = document.getElementById("pantalla");
for(let i = 0;i< botones.length;i++){
    botones[i].onclik = function(){
        escribir(this);
    }
}
function escribir(elemento){
    boton = elemento.innerHTML;
    if(boton == "="){
        numeros = pantalla.innerHTML.split("+");
        resultado = 0;
        numeros.forEach(numero => {
            resultado = resultado + parseInt(numero);
        });
        pantalla.innerHTML = resultado;
    }else{
        pantalla.innerHTML= pantalla.innerHTML + boton;
    }
    pantalla.innerHTML = pantalla.innerHTML + elemento.innerHTML;
}*/
v1 = 0;
v2 = 0;
pantalla_1 = document.getElementById("sec-1");
pantalla_2 = document.getElementById("sec-2");
igual = document.getElementById("igual");

botones = document.getElementsByClassName("boton");
for (var i = 0; i < botones.length; i++) {
  botones[i].onclick = function () {
    escribir(this);
  };
}

function escribir(elemento) {
  boton = elemento.innerHTML;
  switch (boton) {
    case "+":
      v1 = parseFloat(pantalla_2.innerHTML);
      pantalla_1.innerHTML = v1 + "+";
      pantalla_2.innerHTML = "";
      igual.onclick = function () {
        sumar();
      };
      break;
    case "-":
      v1 = parseFloat(pantalla_2.innerHTML);
      pantalla_1.innerHTML = v1 + "-";
      pantalla_2.innerHTML = "";
      igual.onclick = function () {
        restar();
      };
      break;
    case "X":
      v1 = parseFloat(pantalla_2.innerHTML);
      pantalla_1.innerHTML = v1 + "x";
      pantalla_2.innerHTML = "";
      igual.onclick = function () {
        multiplicar();
      };
      break;
    case "/":
      v1 = parseFloat(pantalla_2.innerHTML);
      pantalla_1.innerHTML = v1 + "/";
      pantalla_2.innerHTML = "";
      igual.onclick = function () {
        dividir();
      };
      break;
    case "!":
      v1 = parseFloat(pantalla_2.innerHTML);
      pantalla_2.innerHTML += "!";
      igual.onclick = function () {
        factorial(v1);
      };
      break;
    case "log()":
      pantalla_1.innerHTML = "log( ";
      igual.onclick = function () {
        logaritmo();
      };
      break;
    case "pow":
      v1 = parseFloat(pantalla_2.innerHTML);
      pantalla_1.innerHTML = v1 + "^(";
      pantalla_2.innerHTML = "";
      igual.onclick = function () {
        pow();
      };
      break;
      case "raiz":
        pantalla_1.innerHTML = "sqrt( ";
        igual.onclick = function () {
          raiz();
        };
        break;
    case "DEL":
      pantalla_1.innerHTML = "";
      pantalla_2.innerHTML = "";
      break;
    default:
      pantalla_2.innerHTML += boton;
      break;
  }
}
function sumar() {
  v2 = parseFloat(pantalla_2.innerHTML);
  pantalla_1.innerHTML += v2;
  pantalla_2.innerHTML = v1 + v2;
}

function restar() {
  v2 = parseFloat(pantalla_2.innerHTML);
  pantalla_1.innerHTML += v2;
  pantalla_2.innerHTML = v1 - v2;
}

function multiplicar() {
  v2 = parseFloat(pantalla_2.innerHTML);
  pantalla_1.innerHTML += v2;
  pantalla_2.innerHTML = v1 / v2;
}

function dividir() {
  v2 = parseFloat(pantalla_2.innerHTML);
  pantalla_1.innerHTML += v2;
  pantalla_2.innerHTML = (v1 / v2).toFixed(2);
}
function factorial(n) {
  if (n == 0 || n == 1) {
    return 1;
  }
  var factorial = 1;
  for (var i = 2; i <= n; i++) {
    factorial *= i;
  }
  pantalla_1.innerHTML += n + "!";
  pantalla_2.innerHTML = factorial;
}
function logaritmo() {
  v1 = parseFloat(pantalla_2.innerHTML);
  var logaritmo = Math.log10(v1).toFixed(5);
  pantalla_1.innerHTML = "log(" + v1 + ")";
  pantalla_2.innerHTML = logaritmo;
}
function pow() {
  v2 = parseFloat(pantalla_2.innerHTML);
  var pow = Math.pow(v1, v2);
  pantalla_1.innerHTML = v1 + "^" + " ("+v2+")";
  pantalla_2.innerHTML = pow;
}
function raiz() {
    v1 = parseFloat(pantalla_2.innerHTML);
    var raiz = Math.sqrt(v1);
    pantalla_1.innerHTML = "sqrt" + " ("+v1+")";
    pantalla_2.innerHTML = raiz.toFixed(2);
  }
