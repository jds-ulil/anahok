    
    <div class="container col-md-8">
        <?php echo Formbootsrap::open('',array(                                   
                                    'class'=>'form-signin',
                                    'role'=>"form",
                                    'id'=>'formdaftar',
                                )); ?> 
        <br /><br /><br />
        <div class="form-group">
          <label for="usr">Nama:</label>
          <input name='nama' type="text" class="form-control" id="nm">
        </div>
        <div class="form-group">
          <label for="pwd">AjaxPage:</label>
          <input name='ajaxPage' ype="text" class="form-control" id="ajx">
        </div>
      <button class="btn btn-danger" type="button" name="yt1" onclick="daftar();">Simpan</button>
        <?php echo Formbootsrap::close(); ?>
        
    </div> <!-- /container -->
   