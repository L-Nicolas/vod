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

	    <div id="filmRecherche">

		    <h1>Votre film</h1>

			<?php
				$lines = file("data/vod.csv");
				$titre = false;

				foreach($lines as $line){ 
					$unFilm = explode(":" , $line);

					if (strtoupper($unFilm[0]) == strtoupper($_POST['titre'])){
						echo "<table>
					    		<tr>
					    			<th><b>Titre</b></th>
					    			<th><b>Année</b></th>
					    			<th><b>Réalisateur</b></th>
					    		</tr>";

								for($i=0 ; $i < count($unFilm) ; $i++){
										echo "<tr> 
												<td>" . $unFilm[0] . "</td>
												<td>" . $unFilm[1] . "</td>
												<td>" . $unFilm[2] . "</td>
											</tr>";
										break;
								}
						echo "</table>";
						$titre = true;
						break;
					}
				}
				if (! $titre){
				echo "<h2>n'existe pas :(</h2";
				}
			?>
			
		</div>

	</body>

</html>	