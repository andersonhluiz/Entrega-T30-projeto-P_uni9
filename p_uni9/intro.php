<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel= "stylesheet" href = "styleintro.css">
  	<link rel= "stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel= "shortcut icon" href="favicon.ico" type="image/x-icon">
	
	<link href="css/personalizado.css" rel="stylesheet">
	<title>QUEM É MELHOR?</title>
</head>
<body>
	<header>

<!--Cabeçalho - Menu (Login e Cadastro)-->

    	<nav>
        	<ul class="menu">
            	<li class="logo"><img src="imagens/QUEM É O MELHOR.png" alt=""></li>
            	<li class="item"><a href="consultar.php">RESULTADO</a></li>
            	<li class="item"><a href="index.php">INICIO</a></li>
        	</ul>
    	</nav>
	</header>

<!--Votação com integração ao banco de dados-->
<section>
	<div class="cand">
			<h2>JOGADORES:</h2></div>
			
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?>
			<div class="row">
				<?php
				//Pesquisar os candidatos
				$result_produto = "SELECT * FROM eleicao";
				$resultado_produto = mysqli_query($conn, $result_produto);
				
				while($row_produto = mysqli_fetch_assoc($resultado_produto)){
					?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<div class="caption">
							</div>
							
							<img src="imagens/<?php echo $row_produto['imagem']; ?>"style="width:500px;height: 416px; margin:50px; border-radius: 10%;">
						</div>
						<div class="descricao">
									<a href="votar.php?id=<?php echo $row_produto['id']; ?>" class="btn btn-success">
										Votar
									</a>
							<h3><?php echo $row_produto['nome']; ?></h3>
							
						</div>
					</div><?php
				}
				?>
			</div>
		</div>
		</section>
<!--framework do formato e posição das imagens e btn-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/personalizado.js"></script>
			
<!--Rodapé-->

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">

<!--Informações sobre o site-->

  	 			<h4>QUEM É MELHOR.COM</h4>
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
  	 				<li><a href="https://www.goal.com/br/not%C3%ADcias/quem-fez-mais-gols-cristiano-ronaldo-ou-lionel-messi/n5ptegfiku9a12rt6ba98c8p8">QUEM SÃO OS JOGADORES</a></li>
  	 			</ul>
  	 		</div>

<!--Informações sobre as areas do site-->

  	 		<div class="footer-col">
  	 			<h4>NAVEGAÇÃO</h4>
  	 			<ul>
  	 				<li><a href="https://www.goal.com/br/not%C3%ADcias/quem-fez-mais-gols-cristiano-ronaldo-ou-lionel-messi/n5ptegfiku9a12rt6ba98c8p8">JOGADORES</a></li>
  	 				<li><a href="#">RESULTADO</a></li>
  	 				<li><a href="https://www.espn.com.br/futebol/artigo/_/id/11681366/messi-ganha-the-best-da-fifa-eleito-melhor-do-mundo-7-vez-coroa-ano-perfeito">ULTIMO BOLA DE OURO</a></li>
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
