<!DOCTYPE html>
<?php 
	include("dados.php");
	//var_dump($cardapio);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cardapio</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<nav>
		<ul>
			<li>home</li>
			<li>blog</li>
			<li>contato</li>
			
		</ul>
	</nav>
	<br>
	<header><h1>Cardapio de marmitas</h1></header>
	<br>
	<?php 
		$id= $_GET['id'];

		foreach($cardapio as $key => $value){
			if($value['id'] == $id){
	?>
	<article>
		<img src=<?=$value['imagem'];?>>
		<h2><?=$value['nome'];?></h2>
		<h4>peso da porção: <?=$value['tamanho'];?></h4>
		<h4>preço: <?=$value['preco'];?></h4>
		<h4>Ingredientes: <?=$value['ingredientes'];?></h4>
		<button type="button" class="btn btn-success"><h4>encomendar</h4></button>
	</article>
	<?php 
		};
	}
	?>
	<br>
	<footer>Angelo Rafael dos Santos RA = 21108160-5</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<style type="text/css">
	nav{
		background-color: lightblue;
		height: 50px;
	}
	header{
		text-align: center;
		text-shadow: 3px 2px 1px lightgrey;
	}
	li{
		width: 25%;
		display: inline-block;
		text-align: right;
		font-size: 35px;
	}
	article{
		margin-left: 50px;
		text-align: center;
		width: 90%;
		height: 500px;
		display: inline-block;
		margin-top: 10px;
		background-color: lightgrey;
        border-radius: 5%;
        border: solid;
        border-width: 1px; 
        box-shadow: 3px 5px 5px grey;
        border-color: black;
	}
	img{
		margin-top: 25px;
		height: 250px;
		width: 400px;
	}
	footer{
		height: 50px;
		background-color: gray;
		text-align: center;
		font-size: 35px;
		margin-top: 15px;
		color: white;
	}
</style>

</body>
</html>