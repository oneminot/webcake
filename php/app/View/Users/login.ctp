<div class="login">
<h2>Greenings Document Signing Portal Login</h2>    
    <?php echo $this->form->create('User', array('action' => 'login'));?>
        <?php echo $this->form->input('username');?>
        <?php echo $this->form->input('password');?>
        <?php echo $this->form->submit('Login');?>
    <?php echo $this->form->end(); ?>
</div> 