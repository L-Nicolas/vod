<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/vod.css" />
        <script src="https://kit.fontawesome.com/54bba90930.js" crossorigin="anonymous"></script>
        <title>VOD FR</title>
    </head>

    <body>
    	<div id="acceuil"> 
            <a href="vod.html" id="logo"><i class="fas fa-video fa-1x"></i>  VOD FR</a>
        </div>
        
		<div id='filmAjouter'>
	        <h1>Votre film à été ajouter</h1>

			<?php 
				$file = fopen("data/vod.csv", "a");

				fwrite($file, ucwords($_POST['titre']) . ":" . date('Y' , strtotime($_POST["date"])) . ":" . ucwords($_POST['réalisateur']) . "\n" );

				echo "<table>
							<tr>
								<th><b>Titre</b></th>
								<th><b>Année</b></th>
								<th><b>Réalisateur</b></th>
							</tr>

							<tr> 
								<td>" . ucwords($_POST['titre']) . "</td>
								<td>" . date('Y' , strtotime($_POST['date'])) . "</td>
								<td>" . ucwords($_POST['réalisateur']) . "</td>
							</tr>
						</table>";
				fclose($file);	
			?>
		</div>

	</body>

</html>	