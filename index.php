<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		
		 <?php 
		 	$DataBase = [
					[ 
						"title" => "Статья 1", 
						"Short_text" => "lorem",
						"img" => "img/bc.jpg",
					],
					[ 
						"title" => "Статья 2", 
						"Short_text" => "lorem",
						"img" => "img/cw.jpg",
					],
					[ 
						"title" => "Статья 3", 
						"Short_text" => "lorem",
						"img" => "img/kk.jpg",
					],
					[ 
						"title" => "Статья 4", 
						"Short_text" => "lorem",
						"img" => "img/Ks.jpg",
					],
					[ 
						"title" => "Статья ", 
						"Short_text" => "lorem",
						"img" => "img/ev.jpg",
					]
				] 
			 ?>
	</div>
		<?php
		//подключаемся к бд
		 //
		$connect = mysqli_connect("127.0.0.1","root","","Block");
		if ($connect==false) {
			echo "связь отсутствует";
		}
		else {
			echo "Есть подключение";
		}

		$text_query = 'SELECT * FROM posts';
		$query = mysqli_query($connect, $text_query); //table

		if ($query==false) {
			echo "запрос не работает";
		}

		else {
			echo "запрос еще как работает";
		}

		$result = $query->fetch_assoc();

		echo $result["title"];
		echo $result["text"];
		echo $result["img"];

		$result2 = $query->fetch_assoc();
		echo $result2["title"];
		?>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;"> 
		<h1 class="text-center">БЛОГ</h1>
				<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->

			<?php
				echo $_GET["login"];
			?>
			 <?php 
			 	for ($i=0; $i < 5 ; $i++) { 
			 		# code..
				echo "<h1 style='background-color: green'>".$DataBase[$i]["title"]. "</h1>";
				echo "<h5>". $DataBase[$i]["Short_text"] ."</h5>";
				echo "<img src = '". $DataBase[$i]["img"] ."'></img>";

			}
				?>
				<a href="more.php">Далее</a>
		</div>

	</div>

</body>
</html>