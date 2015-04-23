
    <?php echo form_open('contact/login'); ?>
    <?php echo validation_errors(); ?>
    <label>username</label>
    <?php echo form_input(array('name' => 'username')); ?> <br/>
    
    <label>password</label>
    <?php echo form_password(array('name' => 'password')); ?> <br/>
    <?php echo form_submit(array('name' => 'submit'), 'Login'); ?>

    <?php echo form_close(); 
