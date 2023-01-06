<?php include 'header.php'; ?>
       

       
        <div class="content-body">

            <div class="row justify-content-between align-items-center mb-10">

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>İletişim  Ayar  <span>/ İşlem Durumu</span></h3>
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
                            <h4 class="title">İletişim  Ayarlar Düzenleme Modülü</h4>
                        </div>
                        <div class="box-body">
                            <form action="islem.php" method="POST" >
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1">Telefon Numarası</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control"   value="<?php  echo $ayarcek['ayar_sitetel'] ?>" name="ayar_sitetel" > 
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Telefon Numarası (GSM)</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Açıklaması"  value="<?php echo $ayarcek['ayar_sitegsm'] ?>" name="ayar_sitegsm" >
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Faks Numarası</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Anahtar Kelimeleri" value="<?php  echo $ayarcek['ayar_sitefaks'] ?>"  name="ayar_sitefaks">
                                    </div>
                                    
                                   <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Site Mail</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Yazarı"  value="<?php  echo $ayarcek['ayar_sitemail'] ?>" name="ayar_sitemail">
                                    </div>
                                    
                                     <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">İlçe</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Yazarı"  value="<?php  echo $ayarcek['ayar_siteilce'] ?>" name="ayar_siteilce">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">İl</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Yazarı"  value="<?php  echo $ayarcek['ayar_siteil'] ?>" name="ayar_siteil">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Adres</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Yazarı"  value="<?php  echo $ayarcek['ayar_siteadres'] ?>" name="ayar_siteadres">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1">Mesai</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control" placeholder="Site Yazarı"  value="<?php  echo $ayarcek['ayar_sitemesai'] ?>" name="ayar_sitemesai">
                                    </div>

                                    

                                    <div align="right" class="col-12 mb-20">
                                        <input name="iletisimayarkaydet"  type="submit" value="Gönder" class="button button-primary">
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