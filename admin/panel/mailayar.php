<?php include 'header.php'; ?>
       

       
        <div class="content-body">

            <div class="row justify-content-between align-items-center mb-10">

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Mail   Ayar  <span>/ </span></h3>
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
                            <h4 class="title">Mail  Ayarlar Düzenleme Modülü</h4>
                        </div>
                        <div class="box-body">
                            <form action="islem.php" method="POST" >
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername1"  >SMTP Host</label>
                                        <input type="text" id="formLayoutUsername1" class="form-control"  value="<?php  echo $ayarcek['ayar_smtphost'] ?>" name="ayar_smtphost" > 
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1" > SMTP User</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control"  value="<?php echo $ayarcek['ayar_smtpuser'] ?>" name="ayar_smtpuser" >
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1" >SMTP Password</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control"  value="<?php  echo $ayarcek['ayar_smtppassword'] ?>"  name="ayar_smtppassword">
                                    </div>
                                    
                                   <div class="col-12 mb-20">
                                        <label for="formLayoutEmail1"   >SMTP Port</label>
                                        <input type="text" id="formLayoutEmail1" class="form-control"  value="<?php  echo $ayarcek['ayar_smtpport'] ?>" name="ayar_smtpport">
                                    </div>
                                    

                                    

                                    <div align="right" class="col-12 mb-20">
                                        <input name="mailayarkaydet"  type="submit" value="Gönder" class="button button-primary">
                                       
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>

        </div><!-- Content Body End -->

        <?php include 'footer.php';  ?>