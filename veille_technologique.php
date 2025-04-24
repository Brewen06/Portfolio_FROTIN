<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Veille Technologique</title>
	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<table class="table_header">
	<tr class="td_links">
		<td><a href="index.html">Accueil</a></td>
		<td><a href="presentation.html">Présentation</a></td>
		<td><a href="competences.html">Compétences</a></td>
		<td><a href="projet.html">Projet</a></td>
		<td><a href="experiences.html">Expériences</a></td>
		<td><a href="diplomes_certifications.html">Diplômes et certifications</a></td>
        <td><a href="veille_technologique.php">Veille</a></td>
		<td><a href="cv.html">CV</a></td>
	</tr>
</table>
</header>
<hr>
<div class="veille">
    <h1>Veille technologique</h1>
    <h2>Voici ma veille technologique sur l'intelligence artificielle, mise à jour automatiquement grâce à un flux RSS.</h2>

    <?php
	$xml = simplexml_load_file('https://www.actuia.com/feed/');

	foreach ($xml->channel->item as $item) {
    	print('<a href="' . $item->link . '">' . $item->title . '</a><br/>');
	}
    ?>
</div>

<footer class="footer">
    <center>
        <a href="contact.html">Contact</a>
        <p>&copy; 2025 - Mon Portfolio</p>
    </center>
</footer>
</body>
</html>

