<?php
include_once("./addslider.php");

?>
<section class="section section-0">
        <div class="container section px-md-0 mt-lg-0 mt-3">
            <div class="row justify-content-center mb-4 mx-md-0">
                <div class="col-xl-12 px-md-0">
                <div id="demo" class="carousel slide" data-ride="carousel">

                        <ul class="carousel-indicators">
                            <?php
                            $i = 0;
                            foreach($result as $row){
                                $actives = '';
                                if($i == 0){
                                    $actives = 'active';
                                
                                }
                            ?>
        <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

            <?php  $i++;
                }
            ?>
            </ul>


                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        foreach($result as $row){
                            $actives = '';
                            if($i == 0){
                                $actives = 'active';          
                            }
                        ?>
                    <div class="carousel-item <?= $actives; ?>">
                        <img src="<?= $row['filename'] ?>" width="100%" height="500">
                    </div>
                    <?php  $i++; } ?>
                    
                    </div>


                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="custom-icon carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="custom-icon carousel-control-next-icon" width="44"></span>
                </a>

                        </div>
                </div>
            </div>
            
           
            <div class="disable row justify-content-center ">
                <div class="col-lg-4 bg-dark rounded px-4">
                    <h4 class="text-center bg-dark text-light p-1">Select image to Upload</h4>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="image" value="" class="form-control p-1" require>                     
                        </div>
                        <div class="form-group">
                            <input type="submit" name="upload" class="btn btn-warning btn-block" value="Upload Image">
                        </div>
                        <div class="form-group">
                            <h5 class="text-center text-light"><?= $msg; ?></h5>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</section>