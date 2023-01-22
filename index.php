<?php
	// Check Website Status
   $id = 5;
   $website_title = 'VIP Produções - DJ Ipatinga e Cabine de Fotos';
	$website_status = file_get_contents('https://hi.isaquecosta.com.br/webservices/getWebsiteStatus.php?id='.$id);

   switch($website_status): 
		case 'CLEARED':
         $page_to_mount = '_site/index.php';
			break;
		case 'MAINTENANCE':
         $page_to_mount = 'https://cdn.ideyou.com.br/_error/503.php';
			break;
		case 'BLOCKED':
         $page_to_mount = 'https://cdn.ideyou.com.br/_error/402.php';
			break;

		default:
         $page_to_mount = '_site/index.php';
			break;
	endswitch;

   // DEFAULTS API FETCH
   $url = 'http://cdn.ideyou.com.br/defaults/header.php';
   
   $data = array( 'title'     => $website_title,
                  'keywords' 	=> 'noivastimoteo, noivasvaledoaco, noivasipatinga, casamentovaledoaço, timoteo, coronelfabriciano,
                                  santanadoparaíso, iapu, belooriente, ipatinga, noivadoano, casamentovaledoaco, noivas, casamentos, cabinedefotosipatinga, cabinefotográfica, cabinedefotosvaledoaço, cabinedefotosoronelfabriciano, cabinedefotos, 15anosipatinga, festaseeventos, 15anos, debutantes, Bethânia, Naque, noivas2020, debutantesvaledoaco, love,instagood '
               );

	// use key 'http' even if you send the request to https://...
	$options = array(
			'http' => array(
					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
					'method'  => 'POST',
					'content' => http_build_query($data)
			)
	);
	$context  = stream_context_create($options);
	$defaults = file_get_contents($url, false, $context);
?>


<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
   <?=$defaults;?>
</head>
<frameset frameborder="0" framespacing="0">
    <frame src="<?=$page_to_mount;?>">
<noframes>
<body>
</body>
</noframes>
</frameset>
</html>