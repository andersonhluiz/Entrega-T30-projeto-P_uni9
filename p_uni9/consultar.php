<!DOCTYPE html>
<html lang="pt-br">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel= "stylesheet" href = "consultar.css">
  	<link rel= "stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel= "shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>QUEM É MELHOR?</title>
</head>
<body>
	<header>

<!--Cabeçalho - Menu (Login e Cadastro)-->

    	<nav>
        	<ul class="menu">
            	<li class="logo"><img src="imagens/QUEM É O MELHOR.png" alt=""></li>
            	<li class="item"><a href="index.php">INICIO</a></li>
            	<li class="item"><a href="intro.php">VOTAR</a></li>
        	</ul>
    	</nav>
	</header>

<section>
	
<h1>
    <?php
include_once "conexao.php";

//consultar no banco de dados
$result_produto = "SELECT * FROM eleicao ORDER BY id DESC";       //ele seleciona a tabela do banco de dados
$resultado_produto = mysqli_query($conn, $result_produto);         //ele consulta a conexao com o bd

//Verificar se encontrou resultado na tabela "eleicao"

if(($resultado_produto) AND ($resultado_produto->num_rows != 0)){
	while($row_produto = mysqli_fetch_assoc($resultado_produto)){  //cria um laco de repeticao para consultar no banco de dados
		echo $row_produto['nome'] . " = ";                        //puxa e exibe o campo nome no bd
        echo $row_produto['qnt_voto'] . "<br>";                  //puxa e exibe o campo qnt voto no bd
	}
}else{
	echo "Nenhum jogador encontrado";
}
?>
</div>
</section>


























<!--Rodapé-->

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">

<!--Informações sobre o site-->

  	 			<h4>URNA.COM</h4>
  	 			<ul>
  	 				<li><a href="#">SOBRE</a></li>
  	 				<li><a href="#">TERMOS DE PRIVACIDADE</a></li>
  	 				<li><a href="#"></a></li>
  	 			</ul>
  	 		</div>

<!--Informações sobre suporte do site-->

  	 		<div class="footer-col">
  	 			<h4>SUPORTE</h4>
  	 			<ul>
  	 				<li><a href="https://forms.gle/FfXhUD7eYz2Emm2n7">BUGS</a></li>
  	 				<li><a href="https://forms.gle/jPBydU3ATsGvn3JT8">PROBLEMAS NA VOTAÇÃO</a></li>
  	 				<li><a href="https://www.tse.jus.br/eleitor/titulo-e-local-de-votacao/titulo-e-local-de-votacao">NÃO TENHO TITULO</a></li>
  	 			</ul>
  	 		</div>

<!--Informações sobre as areas do site-->

  	 		<div class="footer-col">
  	 			<h4>NAVEGAÇÃO</h4>
  	 			<ul>
  	 				<li><a href="#">CANDIDATOS</a></li>
  	 				<li><a href="#">RESULTADO</a></li>
  	 				<li><a href="#">DATAS DAS ELEIÇÕES</a></li>
  	 			</ul>
  	 		</div>

<!--Rede Social (GitHub)-->

  	 		<div class="footer-col">
  	 			<h4>MAIS INFORMAÇÕES</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://github.com/andersonhluiz/p_Uni9"><i class="fab fa-github"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
</body>
</html>