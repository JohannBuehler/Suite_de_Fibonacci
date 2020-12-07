<?php 

/**
 * Auteur 				: Johann Bühler
 * Date de Création 	: 07.12.2020
 * Date de Modification : 07.12.2020
 * Description 			: Cette classe permet de calculer et d'afficher la suite de Fibonacci
 */
class SuiteDeFibonacci
{
	/**
	 * 
	 * Cette fonction calcule et affiche la suite de Fibonacci
	 * 
	 * @param int $_max  : le nombre maximum à afficher
	 */
	public static function Display($_max)
	{
		// ----- VARIABLES ------------------------- //
		$firstValue = 0; 
		$secondValue = 1;
		$thirdValue = 0;
		$cpt = 0;
		// ----- END - VARIABLES ------------------- //

		// ----- ALGORITHME ET AFFICHAGE ----------- //
		echo "<p class='text_align_justify'>";
		while ($firstValue <= $_max)
		{
			// affichage
			if($firstValue === $_max)
				echo $firstValue;
			else
				echo $firstValue.", ";

			// somme de la première valeur et de la deuxième valeur
			$thirdValue =  $firstValue + $secondValue;
			
			$firstValue = $secondValue; 
			 
			$secondValue = $thirdValue; 
			
			// incrémentation du compteur
			$cpt++; 
		} // END - while ($cpt <= $_max)
		echo "</p>";
		// ----- END - ALGORITHME ET AFFICHAGE ----- //

	} // END - function Display($_min, $_max, $_size)



} // END - class SuiteDeFibonacci

?>