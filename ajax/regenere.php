<?php
	ini_set("display_errors","0");
	require "../includes/fonctions.php"; 
	require "../includes/ini.php";
	genere_planning($bdd);
	header("location:../?page=temp");