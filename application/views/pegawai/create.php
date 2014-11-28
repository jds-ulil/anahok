<?php
    echo Form::open();
    ?>
    
    <?php if ($errors): ?>
        <p class="message">Some errors were encountered, please check the details you entered.</p>
        <ul class="errors">
        <?php foreach ($errors as $message): ?>
            <li><?php echo $message ?></li>
        <?php endforeach ?>
    <?php endif ?>
    
<?php 
    echo Form::input('nama', isset($post['nama'])?$post['nama']:'', array('placeholder'=>'Nama'));
    echo Form::input('posisi', isset($post['posisi'])?$post['posisi']:'', array('placeholder'=>'Posisi'));
    echo Form::input('gaji', isset($post['gaji'])?$post['gaji']:'', array('placeholder'=>'Gaji'));
    echo Form::button('Simpan', 'Daftar', array('type' => 'submit'));
    
    echo Form::close();