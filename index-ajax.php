<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    
</head>
<body>

    <!-- header -->

    <!-- prende l'header una singola volta e include la scheda come con vue  -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

<!-- Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->

    <!-- main -->

<div id="app">
  <main>
    <div class="container">
      <div class="row mb-4">
        <div class="search d-flex justify-content-center">
        </div>
        <div class="row cards"> 
      </div>
    </div>
  </main>
      
</div>



  
    <script src="main.js"></script>
</body>
</html>