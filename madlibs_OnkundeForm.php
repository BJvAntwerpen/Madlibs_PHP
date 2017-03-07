<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="Madlibs-CSS.css">
</head>
<body>
<button id="buttonOnkunde"><a href="Index.php">Onkunde</a></button>
<button id="buttonPaniek"><a href="madlibs_Paniek.php">Er is paniek...</a></button>
<h1>Onkunde</h1>
<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["AA"]//AA?>.<br>
Neem nou <?php echo $_POST["AB"]//AB?>.<br>
Zelfs met de hulp van een <?php echo $_POST["AD"]//AD?> of zelfs <?php echo $_POST["AC"]//AC?> kan <?php echo $_POST["AB"]//AB?> niet <?php echo $_POST["AA"]//AA?>.<br>
Dat heeft niet te maken met een gebrek aan <?php echo $_POST["AE"]//AE?>, maar met een te veel aan <?php echo $_POST["AF"]//AF?>.<br>
Te veel <?php echo $_POST["AF"]//AF?> leidt tot <?php echo $_POST["AG"]//AG?> en dat is niet goed als je wilt <?php echo $_POST["AA"]//AA?>.<br>
Helaas voor <?php echo $_POST["AB"]//AB?>.</p>
</body>
</html>