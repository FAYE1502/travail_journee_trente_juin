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

 function champObligatoire(string $value,string $message): bool{
    if (empty($value)) {
        echo $message."\n";
        return  false;
    }
        return true;
 }

 function rechercheCategorieParCle(array $categories, string $key, string $value): int|bool {
    foreach ($categories as $index  => $categorie ) {
        if (($categorie[$key]) === $value) {
            return $index ;
        }
    } 
    return false;
 }

 function saisieChampObligatoireEtUnique(array $categories,string $smsSaisie, string $smsError,string $key): string{
        
    $valueEstValide = true;
    do {   
        $value = saisieChaine($smsSaisie);
        $valueEstValide = champObligatoire($value,$smsError);
        if($valueEstValide){     
            $valueEstValide =rechercheCategorieParCle($categories,$key,$value);
        }
    } while (!$valueEstValide);
    return $value;
 }

  function enregistrerCategorie(): void{
    global $categories;
    $code = saisieChampObligatoireEtUnique($categories,"Entrez le code svp:", "champs de code est obligatoire : ", "code");
    $nom = saisieChampObligatoireEtUnique($categories,"Entrez le nom svp:", "champs de nom est obligatoire : ", "nom");

    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" => []
         ];

    $categories[] = $categorie;
 }

