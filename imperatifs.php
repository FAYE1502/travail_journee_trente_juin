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

 // 3.

  $codeEstValide = true;
    
   do { 
        
        $code = readline("saisir le code :");
        if (empty($code)) {
            echo "le code est obligatoire \n";
             $codeEstValide = false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["code"]) === $code) {
                $codeEstValide = false;
                echo "le code existe deja ...\n"; 
         }
       }  
}
        
    } while (!$codeEstValide);
    
     $nomEstValide = true;
  do { 
        
        $nom = readline("saisir le nom : ");
        if (empty($nom)) {
            echo "le nom est obligatoire";
             $nomEstValide = false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["nom"]) === $nom) {
                $nomEstValide = false;
                echo "le nom existe deja ..."; 
         }
       }  
}
    } while (!$nomEstValide);



    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" => []
         ];

         $categories[] = $categorie;