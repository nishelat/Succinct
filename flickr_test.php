<?php

if(!empty($_GET['tag'])) {
	$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=eca302393f034b5435dbe39c81103a10&tags=' . urlencode($_GET['tag']) . '&safe_search=1&sort=relevance&format=json&nojsoncallback=1';
	$json = file_get_contents($url);
	$array = json_decode($json, true);
	$farm_id = $array['photos']['photo'][0]['farm'];
	$server_id = $array['photos']['photo'][0]['server'];
	$id = $array['photos']['photo'][0]['id'];
	$secret = $array['photos']['photo'][0]['secret'];
	$image_source = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' . $id . '_' . $secret . '.jpg';
	echo '<img src=' . $image_source . '>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Flickr Photos</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form id="inputform" action="">
	<input id="inputbar" type="text" placeholder="Find photos..." name="tag"/>
</form>
</body>
</html>