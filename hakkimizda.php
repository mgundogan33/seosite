 <?php include 'header.php'; ?>

  <!-- About us Start -->
    <section class="section bg-light" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-5">
                        <h4 class="text-uppercase mb-0"><?php echo $hakkimizdacek['hakkimizda_baslik'] ; ?></h4>
                        <div class="my-3">
                            <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <p class="text-muted f-14"><?php echo $ayarcek['ayar_sitetitle'] ; ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="images/about-img.png" alt="" class="img-fluid mx-auto d-block">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="text-muted mt-5 mt-lg-0">
                        <h2 class="title font-weight-medium mb-4">Hakkımızda İçerik</h2>
                        <p class="mb-4 f-15"> <?php echo $hakkimizdacek['hakkimizda_icerik'] ; ?></p>
                       <h2 class="title font-weight-medium mb-4">Video</h2>
                        <p class="mb-4 f-15"> <?php echo $hakkimizdacek['hakkimizda_video'] ; ?></p>
                          <h2 class="title font-weight-medium mb-4">Gizlilik</h2>
                        <p class="mb-4 f-15"> <?php echo $hakkimizdacek['hakkimizda_gizlilik'] ; ?></p>
                          <h2 class="title font-weight-medium mb-4">Şartlar</h2>
                        <p class="mb-4 f-15"> <?php echo $hakkimizdacek['hakkimizda_sartlar'] ; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>