<?php include_once __DIR__ . '../server/db.php' ?>

<div class="col-2 card mx-3 my-2">
    <?php foreach ($cards as $card) { ?>
        <img src="" alt="">
        <h2 class="f2-bold">
            <?php echo ($card['title']) ?>
        </h2>
        <h5 class="fs-5 my-0"></h5>
        <h6 class="fs-6"></h6>
   <?php } ?>



</div>


