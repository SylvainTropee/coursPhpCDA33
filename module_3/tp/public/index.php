<?php


//use App\Entity\City;
use App\Entity\CityWithConstructor;
use App\Entity\CityWithDistrict as City;
use App\Form\Form;

require_once '../vendor/autoload.php';


$bayonne = new City("Pyrénnées-Atlantique", "Bayonne", "Nouvelle-Aquitaine");
//$bayonne->setCounty("Pyrénnées-Atlantique");
//$bayonne->setName("Bayonne");


$brest = new City("Finistère", "Brest", "Bretagne");
//$brest->setCounty("Finistère");
//$brest->setName("Brest");


$rennes = new City("Lyon", "Rhône", "Auvergne-Rhone-Alpes");



echo $bayonne;
echo '<br>';
echo $brest;
echo '<br>';
echo $rennes;
echo '<br>';



$a = new CityWithConstructor("aa", "");
$b = new CityWithConstructor("bbbbbb", "");
$c = new CityWithConstructor("cccxcvfgfdgfg", "");

echo CityWithConstructor::getLongestCityName();

$form = new Form("Inscription");
$form->addInput("name", "Votre nom");
$form->addInput("age", "Votre age", "number");
$form->addSubmit("Envoyer");

echo $form->getForm();



