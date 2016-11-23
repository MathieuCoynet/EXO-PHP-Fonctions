<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EXO fonctions</title>
	</head>
	<body>
		<p>
			<?php
				function maFonction(){
					return true;
				}
				var_dump(maFonction());
				echo "<br/>";

							/* EXO 1 ci dessus*/

				function ma_Fonction(string $text){
					return $text;
				}
				echo ma_Fonction("Il fait beau aujourd'hui!! ");
				echo "<br/>";

							/* EXO 2 ci dessus */

				function ma_Fonction2(string $text1 , string $text2){
					return $text1 . " " . $text2;
				}
				echo ma_Fonction2("Comment vas-tu," , "l'ami ?");
				echo "<br/>";

							/* EXO 3 ci dessus*/
				function ma_Fonction3(int $num1 , int $num2){
					if ($num1 > $num2){
						return "Le premier nombre est plus grand";
					}
					elseif ($ $num1 == $num2) {
						return "Les deux nombres sont identiques";
					}
					else{
						return "Le premier nombre est plus petit";
					}

				}

				echo ma_Fonction3(8 , 5);
				echo "<br/>";

							/* EXO 4 ci dessus */

				function ma_Fonction4(int $num1 , string $text1 ){
					return $num1 . " " . $text1;
				}
				echo ma_Fonction4(14, "Je vais bien !");
				echo "<br/>";

							/* EXO 5 ci dessus */
				function ma_Fonction5(string $nom , string $prenom , int $age){
					return "Bonjour, " . $nom . " " . $prenom . ", tu as " . $age . " ans !!";
				}
				echo ma_Fonction5("Coynet" , "Mathieu" , 23);
				echo "<br/>";

							/*Exo 6 ci dessus*/
				function ma_Fonction6(int $age , string $genre){
					if ($age >= 18){
						if ($genre == "Homme"){
							return "Vous etes un homme et vous etes majeur";
						}
						else{
							return "Vous etes une femme et vous etes majeure";
						}
					}
					else{
						if ($genre == "Homme"){
							return "Vous etes un homme et vous etes mineur";
						}
						else{
							return "Vous etes une femme et vous etes mineure";
						}
					}
				}
				echo ma_Fonction6(40 , "Homme");
				echo "<br/>";

							/* Exo 7 ci dessus*/
				function ma_Fonction7(int $nombre1 , int $nombre2 , int $nombre3){
					return $nombre1 + $nombre2 + $nombre3;
				}
				echo ma_Fonction7(18 , 20, 45);
							/* Exo 8 ci dessus*/


			?>
		</p>
	</body>
</html>