<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exam</title>
</head>
<body>

	<?php 
		$link = mysqli_connect('localhost','root','','exam');
		if(mysqli_connect_errno()) 
		{
			echo 'ОШИБКА В ПОДКЛЮЧЕНИИ (' .mysqli_connect_errno(). ')';
			exit();

			// SELECT * FROM `receipts` where data between "2020-04-21" and "2020-04-23"
		}


	function get_serials($Obmen, $Pokupka,$Prodaja){

    global $link;
    $sql = "SELECT * FROM `receipts` WHERE `typeAd` IN ('$Obmen', '$Pokupka','$Prodaja')";
    $result = mysqli_query($link, $sql);
    $serial = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $serial;

    }


    function IsCheckedSerial($serial_nm,$value){
        if(!empty($_POST[$serial_nm]))
        {
            foreach($_POST[$serial_nm] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }


    function checkedS( $value ){
        $serial_nm = $_POST['type_nm'];
        if( in_array( $value, (array)$serial_nm ) )
        { return "checked";}
        else
        { return false; }
    }


		$serial_nm = $_POST['types'];
		if(empty($serial_nm)) {
			echo '<p class="error">Пожалуйста, выберете тип.</p>';
		}
		else {
			if(IsCheckedSerial('type_nm','Obmen')){$Obmen='Обмен';}
			if(IsCheckedSerial('type_nm','Pokupka')){$Pokupka='Покупка';}
			if(IsCheckedSerial('type_nm','Prodaja')){$Prodaja='Продажа';}
		} 


		if(isset( $_POST['types'])){
    	
    	$serial = get_serials($Obmen, $Pokupka,$Prodaja);
    	foreach ($serial as $serials) 
		{
			echo '<div class="rezC">';
			echo '<span class="cName"><b> Номер-заявки: </b>' .$serials[id] . '.</span>';
			echo '<span class="cName"><b> Адрес: </b>' . $serials[Name] . '.</span>';
			echo '<span class="cName"><b> Количество комнат: </b>' . $serials[NumberRooms] . '.</span>';
			echo '<span class="cName"><b> Этаж: </b>' . $serials[Floor] . ' этаж.</span>';
			echo '<span class="cName"><b> Метраж: </b>' .$serials[Metryc] . ' кв. м.</span>';
			echo '<span class="cName"><b> Цена: </b>' .$serials[cost] . ' Руб.</span>';
			echo '<span class="cName"><b> Тип oъбявления: </b>' . $serials[typeAd] . '. </span></div>';
		}
	}

	 ?>
		
		<hr>
	 <form action="off.php" method="post">
	 	<input type="text" placeholder="Адрес" name="Name" required class="forms">
	 	<input type="number" placeholder="Количество комнат" name="NumberRooms" required min="1" max="10" class="forms">
	 	<input type="number" placeholder="Этаж" name="Floor" required min="1" max="100" class="forms">
	 	<input type="text" placeholder="Метраж" name="Metryc" required class="forms">
	 	<input type="text" placeholder="Цена" name="cost" required class="forms">
	 	<br>
	 	<label>Выберете тип заявки
	 	<select name="typeAd" id="typeAds" class="forms_2">
	 		
	 		<option value="Обмен">Обмен</option>
	 		<option value="Покупка">Покупка</option>
	 		<option value="Продажа">Продажа</option>

	 	</select></label>

	 	<input type="submit" value="Отправить" name="go" class="forms_2_1">
	 	<br><br>

	 </form>

	 <form action="" method="post">
	 	Отобразить тип 
	 	<br>
	 		
		<input type="submit" name="types" value="Отобразить тип" class="forms_2_1">
		
		<br>
		<label><input type="checkbox" <?=checkedS("Obmen")?> name="type_nm[]" value="Obmen"><span>Обмен</span></label>
		<label><input type="checkbox" <?=checkedS("Pokupka")?> name="type_nm[]" value="Pokupka"><span>Покупка</span></label>
		<label><input type="checkbox" <?=checkedS("Prodaja")?> name="type_nm[]" value="Prodaja"><span>Продажа</span></label>

	 </form>

		<br>
	<style>
		.cName{
			font-size: 15px;
			margin:10px 20px 10px 20px;
		}
	
		.forms{
			margin-top: 20px;
			margin-left: 10px;
			width: 19%;
			height: 30px;
		}

		.forms_2{
			margin-top: 20px;
			margin-left: 10px;
			width: 200px;
			height: 30px;
		}

		.forms_2_1{
			margin-top: 20px;
			margin-left: 10px;
			margin-bottom: 20px;
			width: 200px;
			height: 30px;
			background-color: #84e084;
			border:none;
			cursor: pointer;
			box-shadow: 1px 1px 1px 1px black;
		}

	</style>

</body>
</html>