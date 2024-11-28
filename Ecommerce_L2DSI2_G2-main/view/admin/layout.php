<!--layout est un modèle décorateur pour toutes les pages admin-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <div class="container mt-3">
        <h1><?= $titre ?></h1>
        <?php echo $contenu; ?>
    </div>
</body>

</html>