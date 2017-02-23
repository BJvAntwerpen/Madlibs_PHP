<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="Madlibs-CSS.css">
	<script type="text/javascript">
		function toOnkunde() {
			document.getElementById('Onkunde').style.display = "block";
			document.getElementById('Paniek').style.display = "none";
			document.getElementById('formOnkunde').style.display = "block"
			document.getElementById('formPaniek').style.display = "none"
			document.getElementById('buttonOnkunde').style.backgroundColor = "red";
			document.getElementById('buttonPaniek').style.backgroundColor = "green";
		}

		function toPaniek() {
			document.getElementById('Paniek').style.display = "block";
			document.getElementById('Onkunde').style.display = "none";
			document.getElementById('formPaniek').style.display = "block"
			document.getElementById('formOnkunde').style.display = "none"
			document.getElementById('buttonPaniek').style.backgroundColor = "red";
			document.getElementById('buttonOnkunde').style.backgroundColor = "green";
		}
	</script>
</head>
<body>
<button id="buttonOnkunde" onclick="toOnkunde();">Onkunde</button>
<button id="buttonPaniek" onclick="toPaniek();">Er is paniek...</button>
<h1 id="Onkunde">Onkunde</h1>
<form id="formOnkunde" action="madlibs_Onkunde.php" method="post">
	Wat zou je graag willen kunnen? <input type="text" name="AA"><br>
	Met welke persoon kun je goed opschieten? <input type="text" name="AB"><br>
	Wat is je favoriete getal? <input type="text" name="AC"><br>
	Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="AD"><br>
	Wat is je beste persoonlijke eigenschap? <input type="text" name="AE"><br>
	Wat is je slechtste persoonlijke eigenschap? <input type="text" name="AF"><br>
	Wat is het ergste dat je kan overkomen? <input type="text" name="AG"><br>
	<input type="submit">
</form>
<br>
<h1 id="Paniek">Er is paniek...</h1>
<form id="formPaniek" action="madlibs_Paniek.php" method="post">
	Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="BA"><br>
	Wie is de beangrijkste persoon in je leven? <input type="text" name="BB"><br>
	In welk land zou je graag willen wonen? <input type="text" name="BC"><br>
	Wat doe je als je je verveelt? <input type="text" name="BD"><br>
	Met welk speelgoed speelde je als kind het meest? <input type="text" name="BE"><br>
	Bij welke docent spijbel je het liefst? <input type="text" name="BF"><br>
	als je € 100.000,- had, wat zou je dan kopen? <input type="text" name="BG"><br>
	Wat is je favoriete bezigheid? <input type="text" name="BH"><br>
	<input type="submit">
</form>

</body>
</html>