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

	    <div id="collectionFilm">

	        <h1>Notre collection de films</h1>
	       
	        <?php
		        if (! file_exists("data/vod.csv")){
		        	echo "<h2>est vide désole :(</h2>";
		        }
		        elseif (file_exists("data/vod.csv")){
					$lines = file("data/vod.csv");
					$films = array() ;
					$i = 0;

					echo "<table>
						    	<tr>
						    		<th><b>Titre</b></th>
						    		<th><b>Année</b></th>
						    		<th><b>Réalisateur</b></th>
						    	</tr>";

					foreach($lines as $line){ 
						$unFilm = explode(":" , $line);
						$films[$i] = array($unFilm[0],$unFilm[1],$unFilm[2]);

						echo "<tr>";
						
							for($y=0 ; $y < count($films[$i]) ; $y++){
								echo "<td>" . $films[$i][$y] . "</td>";
							}

						echo "</tr>";
						$i++;
					}
					echo "</table>";
				}
			?>
	    </div>

	</body>

</html>	