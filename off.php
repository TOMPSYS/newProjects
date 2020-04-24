<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exam</title>
</head>
<body>
	
	<h1>Готово!</h1>
		
<?php 
		$link = mysqli_connect('localhost','root','','exam');
		if(mysqli_connect_errno()) 
		{
			echo 'ОШИБКА В ПОДКЛЮЧЕНИИ (' . mysqli_connect_errno(). ')';
			exit();
		}

		$Name = $_POST['Name'];
		$NumberRooms = $_POST['NumberRooms'];
		$Floor = $_POST['Floor'];
		$Metryc = $_POST['Metryc'];
		$cost = $_POST['cost'];
		$typeAd = $_POST['typeAd'];
		$go = $_POST['go'];

		if (isset($_POST['go'])) {
		
		$result = $link->query("INSERT INTO receipts (Name,NumberRooms,Floor,Metryc,cost,typeAd) VALUES ('$Name', '$NumberRooms', '$Floor', '$Metryc', '$cost', '$typeAd')");
		
		echo "<b>Новая заявка создана</b><br> ";
		echo "<b>Адрес:</b> " . $Name . "<br>";
		echo "<b>Тип объявления:</b> " . $typeAd . "<br>";


	}
	?>
	<br>

		<a href="index.php"> ПЕРЕЙТИ НАЗАД </a>

</body>
</html>