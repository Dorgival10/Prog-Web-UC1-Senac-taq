  // document.getElementById("txt").innerHTML vserve para inserir msg  do id ou clas criado
  document.getElementById("txt").innerHTML = "Maria"
  //console.log = serve para exibir texto..
  console.log("Ola mundo");
  // aumentando o tamanho e diminuindo o texto atravez do clique
  function aumentar(){
      document.getElementById("txt").style.fontSize = "50px";
  }
  function diminuir(){
      document.getElementById("txt").style.fontSize = "20px";
  }
  function acender(){
    document.getElementById("lampada").src ="img/acessa.jpeg";
  }
  function desligar(){
    document.getElementById("lampada").src = "img/apagada.jpeg";
  }
 