<?php include 'header.php'; ?>
       

       
        <div class="content-body">

            <div class="row justify-content-between align-items-center mb-10">

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Genel Ayar  <span>/ İşlem Durumu</span></h3>
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
                            <h4 class="title">Genel Ayarlar Düzenleme Modülü</h4>
                        </div>
                        <div class="box-body">
                            <form action="islem.php" method="POST" >
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1">Site Başlığı</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control" placeholder="Site Başlığı"  value="<?php  echo $ayarcek['ayar_sitetitle'] ?>" name="ayar_sitetitle" > 
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Site Açıklaması</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Açıklaması"  value="<?php echo $ayarcek['ayar_sitedescription'] ?>" name="ayar_sitedescription" >
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Site Anahtar Kelimeleri</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Anahtar Kelimeleri" value="<?php  echo $ayarcek['ayar_sitekeywords'] ?>"  name="ayar_sitekeywords">
                                    </div>
                                    
                                   <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Site Yazarı</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Yazarı"  value="<?php  echo $ayarcek['ayar_siteauthor'] ?>" name="ayar_siteauthor">
                                    </div>
                                    

                                    

                                    <div align="right" class="col-12 mb-20">
                                        <input name="genelayarkaydet"  type="submit" value="Gönder" class="button button-primary">
                                        <input type="reset" value="Temizle" class="button button-danger">
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>

        </div><!-- Content Body End -->

        <?php include 'footer.php';  ?>