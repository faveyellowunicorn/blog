<meta charset="utf-8">

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
	<?php
		//подключаемся к бд
		 //
		$connect = mysqli_connect("127.0.0.1","root","","full_posts");
		if ($connect==false) {
			echo "связь отсутствует";
		}
		else {
			echo "Есть подключение";
		}

		$text_query = 'SELECT * FROM full_posts';
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

		?>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			<?php
				echo "<h1 style='background-color: green'>".$DataBase[0]["title"]. "</h1>";
				echo "<h5>". $DataBase[0]["Short_text"] ."</h5>";
				echo "<img src = '". $DataBase[0]["img"] ."'></img>";
			?>
				
		</div>

	</div>
</form>