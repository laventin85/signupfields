<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$fr = array(
	'signupfields' => 'Signup Fields',
    'com:signupfields:mobile:label' => 'N° de Mobile',
	'com:signupfields:mobile' => ' ',
	
	'com:signupfields:admin:settings:about:title' => 'Afficher le numéro de mobile sur la page "À propos" du composant "Champs de profil personnalisés" ?',
	'com:signupfields:admin:settings:about:note' => "<i class='fa fa-info-circle'></i><br><i>
	Étant donné que le composant Premium <u> Champs de profil personnalisés </u> utilise son propre gestionnaire d'affichage qui ne reconnaît pas les <u> champs d'inscription </u>,
la visibilité du <u> numéro de téléphone mobile </u> sur la page <u> À propos </u> du composant Premium ne peut être contrôlée qu'à partir d'ici.</i>
	<br><br>
	",
	'com:signupfields:admin:settings:about:no' => 'Non',
	'com:signupfields:admin:settings:about:yes' => 'Oui',
	'com:signupfields:admin:settings:save:error' => "Impossible d'enregistrer le paramètre ! Vérifiez votre fichier error_log.",
	'com:signupfields:admin:settings:saved' => 'Paramètres sauvegardés !',
);
ossn_register_languages('fr', $fr); 
