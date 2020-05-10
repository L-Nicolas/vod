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

        <div id="filmSupprimer">
	        <h1>Votre film</h1>

			<?php
				$lines = file("data/vod.csv");
				$titre = false;

				foreach($lines as $line){ 
					$unFilm = explode(":" , $line);

					if (strtoupper($unFilm[0]) == strtoupper($_POST['titre'])) {
						$titre = true;
						rtrim($line);

						unset($lines[array_search($line, $lines)]);

						file_put_contents("data/vod.csv", $lines);
		
					}
					if ($titre == true){
						echo "<h2>à été suprimé</h2>";
						break;
					}
				}
				if(! $titre){
					echo "<h2>n'existe pas :(</h2";
				}
			?>
		</div>
	</body>
</html>	
