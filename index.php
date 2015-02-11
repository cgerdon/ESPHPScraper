<form action="index.php" method="post">
 <p>ID: <input type="text" name="id" /> <input type="submit" /></p>
</form>

<?php 

if (!empty($_POST['id'])){
	$url = urldecode("http%3A//www.thegamesdb.net/api/GetGame.php%3Fid%3D" . $_POST['id']);
	$xml = simplexml_load_file($url) or die("Fehler beim XML laden");
	$Titel = $xml->Game->GameTitle;
	$Desc = $xml->Game->Overview;
	$Releasedate = $xml->Game->ReleaseDate;
	$Developer = $xml->Game->Developer;
	$Publisher = $xml->Game->Publisher;
	$Genres = $xml->Game->Genres[0]->genre;
	$Players = $xml->Game->Players;
	$Image = urldecode("http%3A//thegamesdb.net/banners/boxart/original/front/" . $_POST['id'] . "-1.jpg");
	echo htmlentities("<game>");
	echo "<br>";
	echo htmlentities("<path>");
	echo "TODO";
	echo htmlentities("</path>");
	echo "<br>";
	echo htmlentities("<name>");
	echo $Titel;
	echo htmlentities("</name>");
	echo "<br>";
	echo htmlentities("<desc>");
	echo $Desc;
	echo htmlentities("</desc>");
	echo "<br>";
	echo htmlentities("<image>");
	echo "~/.emulationstation/downloaded_images/nes/" . $Titel . "-image.jpg";
	echo htmlentities("</image>");
	echo "<br>";
	echo htmlentities("<rating>");
	echo "0.5";
	echo htmlentities("</rating>");
	echo "<br>";
	echo htmlentities("<releasedate>");
	echo substr($Releasedate,6 , 4) . substr($Releasedate,3 , 2) . substr($Releasedate,0 , 2) . "T000000";
	echo htmlentities("</releasedate>");
	echo "<br>";
	echo htmlentities("<developer>");
	echo $Developer;
	echo htmlentities("</developer>");
	echo "<br>";
	echo htmlentities("<publisher>");
	echo $Publisher;
	echo htmlentities("</publisher>");
	echo "<br>";
	echo htmlentities("<genre>");
	echo $Genres;
	echo htmlentities("</genre>");
	echo "<br>";
	echo htmlentities("<players>");
	echo $Players;
	echo htmlentities("</players>");
	echo "<br>";
	echo htmlentities("</game>");
	echo "<p>";
	} 
?>

<a href=" <?PHP echo urldecode("http%3A//thegamesdb.net/banners/boxart/original/front/" . $_POST['id'] . "-1.jpg"); ?> ">Cover download</a>