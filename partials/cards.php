<?php include_once __DIR__ . '/../server/db.php' ?>



<div class="row cards">
    <?php foreach ($cards as $card) { ?>
        <div class="col-2 card mx-3 my-2">
            <img src="<?php echo ($card['poster']) ?>" alt="">
            <h2 class="f2-bold">
                <?php echo ($card['title']) ?>
            </h2>
            <h5 class="fs-5 my-0">
            <?php echo ($card['author']) ?>
            </h5>
            <h6 class="fs-6">
            <?php echo ($card['year']) ?>
            </h6>  
        </div>
    <?php } ?>
</div>






