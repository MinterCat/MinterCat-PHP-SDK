<?php
include_once('../function.php');
$Language = Language('Russian');

echo "
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<link rel='shortcut icon' href='https://mintercat.com/static/img/icons/Cats.webp'>
<link rel='stylesheet' href='https://mintercat.com/static/css/lk.css'>
<link rel='stylesheet' href='https://mintercat.com/static/css/normalize.css'>
";

$nick = 'ID3';

$address = User::Nick($nick)->address;
$array_cats = Cats::Address($address);

echo '<div class="cat_content_none"><div class="cat_content">';
foreach ($array_cats as $value => $kity) {
	$value++;

	$img = $kity->img;
	$cat = Cats::Img($img);
	
	$series = $cat->series;
	$rarity = ($cat->rarity)*100;
	$price = $cat->price;
	$name = $cat->name;
	$count = $cat->count;
	$gender = $cat->gender;
	
	switch ($series)
		{
			case 0: {$u = '#C1B5FF'; break;}
			case 1: {$u = '#FFF6B5'; break;}
			case 2: {$u = '#FFB5B5'; break;}
			case 3: {$u = '#C7F66F'; break;}
			case 4: {$u = '#FFC873'; break;}
			case 5: {$u = '#6AF2D7'; break;}
			case 999: {$u = '#9BF5DA'; break;}
		}
	
	echo "
	<div class='cat_block' style='background: $u'>
		<div class='cat_img'>
			<picture>
			<source srcset='https://mintercat.com/static/img/Cat$img.webp' type='image/webp'>
			<img src='https://mintercat.com/png.php?png=$img'>
			</picture>
		</div>
		<div class='cat_text'>
			<b>$name</b> $gender
			<hr>
			$Language->Number_of_cats_of_this_breed <b>$count</b><br>
			$Language->Chance_of_falling_out : <b>$rarity%</b><br>
			<b>$price</b> MINTERCAT
			<br>
		</div>
	</div>";
}
echo "</div></div>";