<?php

class View
{
     public static function CreationForm()
     {
     echo '<section class="p-4 bg-white shadow mb-4">';
	 echo '<h3 class="mb-4">Új kapcsolat hozzáadása a klubcsapathoz</h3>';
	 echo '<form method="post" action="index.php">';
	 
	 echo self::CreateInput('Vezetéknév','firstname');
	 echo self::CreateInput('Keresztnév','lastname');
	 echo self::CreateInput('Becenév','nickname');
	 echo self::CreateInput('Életkor','age');
	 echo self::CreateInput('Állampolgárság','nationality');
	 echo self::CreateInput('Magasság (cm)','height');
	 echo self::CreateInput('Testtömeg (kg)','weight');
	 echo self::CreateInput('Mezszám','number');
	 echo self::CreateInput('Poszt','position');
	 echo self::CreateInput('Gólok száma','goals');
	 echo self::CreateInput('Mérkőzések száma','apps');
	 echo self::CreateInput('Piaci érték (euro)','market-value');
	 echo self::CreateInput('Előző klub','former club');
	 
	 
	 echo '<div id="formDynamic"></div>';
	 echo '<button class="btn btn-primary" name="sent"><i class="fa-solid fa-check"></i>Kapcsolat létrehozása</button>';
	 
	 echo '</form>';
	 echo '</section>';
     }
	 private static function CreateInput($text, $name)
	 {
		 $html = '<div class="mb-3">';
		 $html .= '<label for="'. $name .'" class="form-label">'. $text .'</label>';
		 $html .= '<input type="text" name="'. $name .'" id="'. $name .'" class="form-control">';
		 $html .= '</div>';
		 
		return $html;
	 }	
	 public static function ShowPlayers($items)
	 {
		 echo '<section class="p-4 bg-white shadow mb-4">';
		echo '<table class="table table-striped table-hover">';
		echo '<thead><tr>';
		echo '<th>Vezetéknév</th><th>Keresztnév</th><th>Becenév</th><th>Életkor</th><th>Állampolgárság</th><th>Magasság (cm)</th><th>Testtömeg (kg)</th><th>Mezszám</th><th>Poszt</th><th>Gólok száma</th><th>Mérkőzések száma</th>';
		echo '</tr></thead><tbody>';
		
		foreach($items as $obj)
		{
			$firstname = "-";
			
			if(isset($obj['firstname']))
			{
			$firstname = $obj['firstname']; 
			}
			
			$lastname = "-";
			if(isset($obj['lastname']))
			{
			$lastname = $obj['lastname']; 
			}
			
			$nickname = "-";
			
			if(isset($obj['nickname']))
			{
			$nickname = $obj['nickname']; 
			}
			
			$age = "-";
			if(isset($obj['age']))
			{
				$age = $obj['age'];
			}
			
			$nationality = "-";
			if(isset($obj['nationality']))
			{
				$nationality = $obj['nationality'];
			}
			
			$height = "-";
			if(isset($obj['height']))
			{
				$height = $obj['height'];
			}
			
			$weight = "-";
			if(isset($obj['weight']))
			{
				$weight = $obj['weight'];
			}
			
			$number = "-";
			if(isset($obj['number']))
			{
				$number = $obj['number'];
			}
			
			$position = "-";
			if(isset($obj['position']))
			{
				$position = $obj['position'];
			}
			
			$goals = "-";
			if(isset($obj['goals']))
			{
				$goals = $obj['goals'];
			}
			
			$apps = "-";
			if(isset($obj['apps']))
			{
				$apps = $obj['apps'];
			}
			
			$market_value = "-";
			if(isset($obj['market_value']))
			{
				$market_value = $obj['market_value'];
			}
			
			$former_club = "-";
			if(isset($obj['former club']))
			{
				$former_club = $obj['former club'];
			}
			
			$id = $obj['_id']->serialize();
			
			echo '<tr>';
			echo '<td>'. $firstname .'</td>';
			echo '<td>'. $lastname .'</td>';
			echo '<td>'. $nickname .'</td>';
			echo '<td>'. $age .'</td>';
			echo '<td>'. $nationality .'</td>';
			echo '<td>'. $height .'</td>';
			echo '<td>'. $weight .'</td>';
			echo '<td>'. $number .'</td>';
			echo '<td>'. $position .'</td>';
			echo '<td>'. $goals .'</td>';
			echo '<td>'. $apps .'</td>';
			echo '</tr>';
		}
		echo '</tbody></table>';
		echo '</section>';
	 }
}

