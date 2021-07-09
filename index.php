<?php require_once __DIR__.'/classes/Client.php'; 
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>
<body>
    <?php 
        $user=new Client("beatrice","baccano","F","pinvjdjvdh","bhashdsh",$cardBeatrice);
    ?>

    <main>
        <section>
            <h2>DATI CLIENTE:</h2>
            <h3><?= $user->getFullName() ?></h3>
            <p>Residente in : <?= $user->address?></p>
            <h4>Numero Carta: <?= $cardBeatrice->card?></h4>
            <p><?= $user->getDiscount()?></p>
        </section>
    </main>
    
</body>
</html>