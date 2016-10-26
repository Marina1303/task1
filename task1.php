<html>
	<head> <meta charset="UTF-8">
	<link rel="stylesheet" href="task11.css">
	</head>
	<body>
	<?php
	$computers = [
		'Ноутбуки' => [
			[
				'vendor' => 'ASUS',
				'model' => 'X554LJ',
				'memory' => 4,
				'screen' => 15,
				'hdd' => 500,
				'OS' => 'Microsoft Windows 10',
				'price' => 40000,
				'photo' => 'http://www.technocity.ru/upload/resize_cache/iblock/7e0/400_400_1/z0000079381.jpg'
			],
			[
				'vendor' => 'Acer',
				'model' => 'ES1-571-P9S3',
				'memory' => 8,
				'screen' => 15,
				'hdd' => 1000,
				'OS' => 'Linux',
				'price' => 25000,
				'photo' => 'http://www.technocity.ru/upload/resize_cache/iblock/36e/400_400_1/z0000101288.jpg'
			],
			[
				'vendor' => 'Lenovo',
				'model' => 'IdeaPad Y700',
				'memory' => 12,
				'screen' => 15,
				'hdd' => 1000,
				'OS' => 'Microsoft Windows 10',
				'price' => 95000,
				'photo' => 'http://www.technocity.ru/upload/resize_cache/iblock/4a6/400_400_1/z0000092186.jpg'
			]
		],
		'Системные блоки' => [
			[
				'cpu' => 'AMD Sempron 2650 1.45 ГГц x2',
				'video' => 'RadeOn R3',
				'memory' => 2,
				'hdd' => 5000,
				'OS' => null,
				'price' => 14000
			],
			[
				'cpu' => 'Intel Celeron N3050',
				'video' => 'HD Graphics',
				'memory' => 4,
				'hdd' => 500,
				'OS' => null,
				'price' => 17000
			]
			
		]
	];
	foreach($computers as $key => $type){  
		echo " <p> <div class='sp'> $key: </div> <p> ";
		foreach ($type as $product ) {
		 	if (isset ($product['hdd'])){
			?> <div class="Add"> Жесткий диск: <?=htmlspecialchars($product['hdd'])?>Гб</div>
			<?php 
			}
			if (isset ($product['vendor'])){
			?> <div class="Add"> Продавец: <?=htmlspecialchars($product['vendor'])?></div>
			<?php 
			}
			if (isset ($product['model'])){
			?> <div class="Add"> Модель: <?=htmlspecialchars($product['model'])?></div>
			<?php 
			}
			if (isset ($product['memory'])){
			?> <div class="Add"> Память: <?=htmlspecialchars($product['memory'])?>Гб</div>
			<?php 
			}			
			if (isset ($product['screen'])){
			?> <div class="Add"> Экран: <?=htmlspecialchars($product['screen'])?> Дюйм</div>
			<?php 
			}
			if (isset ($product['OS'])){
			?> <div class="Add"> Операционная система: <?=htmlspecialchars($product['OS'])?></div>
			<?php
			}
			if (isset ($product['price'])){ 
			?> <div class="Add"> Цена: <?=htmlspecialchars(number_format($product['price'],2,',',' '));?> рублей </div> 
			<?php
			}
			if (isset ($product['cpu'])){
			?> <div class="Add"> Процессор: <?=htmlspecialchars($product['cpu'] )?></div>
			<?php
			}
			if (isset ($product['video'])){
			?> <div class="Add"> Видеокарта: <?=htmlspecialchars($product['video']) ?><p></div>
			<?php 
			}
			if (isset($product['photo'])){
			echo '<p><img src="'.$product['photo']. '"><p>';
			}	
		}
	} 
			?>
</body>
</html>
		  