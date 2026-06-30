<?php
// 1.
$categories = [

 0=> [
    'code' => 'AZE0',
    'nom' => 'categ0',
    'listeDesProduits' =>[  
    0=>[
    'nom' => 'prod0',
    'ref' => 'ref0',
    'prix' => '2500',
    'quantite' => '9'
    ],

    1 =>[
    'nom' => 'prod1',
    'ref' => 'ref1',
    'prix' => '8800',
    'quantite' => '6'
    ]]

],

  1=> [
    'code' => 'AZE1',
    'nom' => 'categ1',
    'listeDesProduits' => []
    

],

];
 // 2.

  foreach ($categories as  $categorie ) {
    if (empty($categorie["produits"])) {
         echo $categorie["nom"]."\n";
    }
 }