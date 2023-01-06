<?php include 'header.php';




 ?>

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Servisler <span></span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

               
               
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Servisler</h3><span>Düzenlemek İçin Servise Tıklayınız</span>
                        </div>
                        <div class="box-body">

                            <table class="table table-bordered data-table data-table-export">
                                <thead>
                                    <tr>
                                        <th>Servis Başlık</th>
                                        <th>Servis İçerik</th>
                                        <th>Servis Detay</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    while ($serviscek=$servissor->fetch(PDO::FETCH_ASSOC)) {?>
                                        
                                    <tr>
                                        <td><?php echo $serviscek['servis_baslik']; ?></td>
                                        <td><?php echo $serviscek['servis_icerik']; ?></td>
                                        <td><?php echo $serviscek['servis_detay']; ?></td>
                                        <td><a href="servisayar.php?servis_id=<?php echo$serviscek['servis_id']; ?>"><button  class="button button-primary btn-xs" >Düzenle</button></a></td>
                                        <td><a href="islem.php?servis_id=<?php echo $serviscek['servis_id']; ?>&servissil=ok"><button  class="button button-danger btn-xs" >Sil</button></a></td>
                                       
                                    </tr>

                                    <?php }

                                    ?>
                                    
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Servis Başlık</th>
                                        <th>Servis İçerik</th>
                                        <th>Servis Detay</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                       
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!--Export Data Table End-->

                

            </div>

        </div><!-- Content Body End -->

     <?php  include 'footer.php'; ?>

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>

</body>

</html>