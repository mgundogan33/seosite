<?php include 'header.php'; 

$verisor=$db->prepare("SELECT * FROM servisler where servis_id=:id"); // database kancası sağlar
$verisor->execute(array(

  'id' =>$_GET['servis_id']
  ));
$vericek=$verisor ->fetch(PDO::FETCH_ASSOC);


?>
       

       
        <div class="content-body">

            <div class="row justify-content-between align-items-center mb-10">

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Seris   Ayar  <span></span></h3>
                        <span>
                            
         
                        </span>
                    </div>
                </div>

            </div>

            <div class="row mbn-30">

                <!--Default Form Start-->
                <div class="col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Servis Ayarlar Düzenleme </h4>
                        </div>
                        <div class="box-body">
                            <form action="islem.php" method="POST" >
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1">Servis Başlığı</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control"   value="<?php  echo $vericek['servis_baslik'] ?>" name="servis_baslik" > 
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Servis İçerik</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" value="<?php echo $vericek['servis_icerik'] ?>" name="servis_icerik" >
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Servis Detay</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control"  value="<?php  echo $vericek['servis_detay'] ?>"  name="servis_detay">
                                    </div>
                                    
                                
                                    

                                    

                                    <div align="right" class="col-12 mb-20">
                                        <input name="servisduzenle"  type="submit" value="Gönder" class="button button-primary">
                                       
                                    </div>
                                     <input type="hidden" name="servis_id" value="<?php echo $vericek['servis_id'] ?>"> 


                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>

        </div><!-- Content Body End -->

        <?php include 'footer.php';  ?>