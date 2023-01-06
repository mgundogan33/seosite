<?php 
include 'header.php'; 
       //Belirli veriyi seçme işlemi
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id"); // database kancası sağlar
$hakkimizdasor->execute(array(
  'id' => 0
  ));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>
       
        <div class="content-body">

            <div class="row justify-content-between align-items-center mb-10">

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Hakkımızda Ayar  <span>/ İşlem Durumu</span></h3>
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
                            <h4 class="title">Hakkımızda Ayarlar Düzenleme Modülü</h4>
                        </div>
                        <div class="box-body">
                            <form action="islem.php" method="POST" >
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1">Hakkımızda Başlık</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control" placeholder="Site Başlığı"  value="<?php  echo $hakkimizdacek['hakkimizda_baslik'] ?>" name="hakkimizda_baslik" > 
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Hakkımızda İçerik </label>
                                        <textarea  class="ckeditor" id="editor1" name="hakkimizda_icerik"><?php echo $hakkimizdacek['hakkimizda_icerik']; ?> </textarea>
                                    </div>
                                     <script>
                                  CKEDITOR.replace( 'editor1' );
                                     </script>
                                    

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Hakkımızda Video</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control"  value="<?php  echo $hakkimizdacek['hakkimizda_video'] ?>"  name="hakkimizda_video">
                                    </div>
                                    
                                   <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Hakkımızda Gizlilik</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control"   value="<?php  echo $hakkimizdacek['hakkimizda_gizlilik'] ?>" name="hakkimizda_gizlilik">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Hakkımızda Şartlar</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control"   value="<?php  echo $hakkimizdacek['hakkimizda_sartlar'] ?>" name="hakkimizda_sartlar">
                                    </div>
                                    

                                    

                                    <div align="right" class="col-12 mb-20">
                                        <input name="hakkimizdaayarkaydet"  type="submit" value="Gönder" class="button button-primary">
                                        
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>

        </div><!-- Content Body End -->

        <?php include 'footer.php';  ?>