//RETORNA UMA PROMESSA
function send(url, options) {
  return fetch(url, options);
}

async function lista() {
  const pesquisa = document.getElementById("frmpesquisa");
  const linha = document.getElementById("dados");
  const form = new FormData(pesquisa);

  const options = {
    method: "GET",
    mode: "cors",
    // body: form,
    cache: "default",
  };
  //APOS TERMINAR RECEBEMOS O RETORNO DA FUNÇÃO
  const result = await send(`funcionario.php`, options);
  //APOS RECEBERMOS O RETORNO DA FUNÇÃO TENTAMOS CONVERTER PRA JSON
  const data = await result.text();

  linha.innerHTML = data;
}

async function pesquisa() {
  const pesquisa = document.getElementById("frmpesquisa");
  const linha = document.getElementById("dados");
  const form = new FormData(pesquisa);

  const options = {
    method: "POST",
    mode: "cors",
    body: form,
    cache: "default",
  };
  //APOS TERMINAR RECEBEMOS O RETORNO DA FUNÇÃO
  const result = await send(`pesquisa.php`, options);
  //APOS RECEBERMOS O RETORNO DA FUNÇÃO TENTAMOS CONVERTER PRA JSON
  const data = await result.text();

  linha.innerHTML = data;
}
document.addEventListener("DOMContentLoaded", function (event) {
  lista();
  const busca = document.querySelector("#btnpesquisa");
  busca.addEventListener("click", function () {
    pesquisa();
  });
});
