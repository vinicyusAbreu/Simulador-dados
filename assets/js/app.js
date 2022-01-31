const entradaNumero = document.querySelector("#dados");
const entradaLados = document.querySelector("#lados-dados");
const valorEscolhido = document.querySelector(".valores-escolhidos");
const resultado = document.querySelector(".resultado");

if (valorEscolhido.innerText) {
  let valores = valorEscolhido.innerText.split(" ");
  console.log(valores);

  entradaNumero.value = valores[0];
  entradaLados.value = valores[1];
}

entradaNumero.onkeypress = function (e) {
  return "0123456789".indexOf(String.fromCharCode(e.which)) >= 0;
};

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
