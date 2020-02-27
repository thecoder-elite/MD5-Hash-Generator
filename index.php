<!DOCTYPE html>
<html>
    <head>
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/style-hash.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hash Generator</title>
    </head>
<body>
    <?php
$PHP_SELF = &$_SERVER['PHP_SELF'];
 echo '<div id="newsletterform">
 <div class="wrap">
     <h1>MD5-Hash-Generator</h1>';

echo '<form action="'.$PHP_SELF.'" method="post"> 
<h2>Passwort:</h2>
	<input name="password" placeholder="Enter Your String">
 
    <input type="submit" name="md5" value="Ermittle MD5-Hash">
    
    <span class="arrow"></span>
	</form>';
echo "<h2>MD5-Hash:</h2>";
echo '<h3>'. md5($_POST["password"]) ."</h3>";
 
?>
</body>
</html>
