<?php 
    $title = explode('/', $_SERVER['PHP_SELF']);
    $title = $title[array_key_last($title)];
    $title = ucfirst(explode('.', $title)[0]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alex Martini - <?php echo $title ?> </title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- STYLES CSS -->
    <link rel="stylesheet" href="./src/css/styles.css">
    
    <!-- JS -->
    <script src="./src/js/btnBackToTop.js"></script>
    <script src="./src/js/controls.js"></script>

    <!-- BOOTSTRAP CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />

    <!-- ANIMATE CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
     
    <!-- FEATHER ICONS -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
