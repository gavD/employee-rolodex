<?php if ($loginFailed): ?>
    <div class="text-error">Login failed - please check your credentials</div>
<?php endif; ?>
<?=$this->form->create(); ?>
<?=$this->form->field('username');?>
<?=$this->form->field('password', array('type'=>'password'));?>
<?=$this->form->submit('Log in');?>
<?=$this->form->end();?>