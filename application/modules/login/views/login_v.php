<div class="logo" ><h4 id="title-page"><i class="fa fa-adjust"></i>Default Template</h4><p id="date"><i class="fa fa-calendar"></i><?php echo date('l,M Y')?></p></div> <!--img src="<?php echo base_url().'assets/images/logo.jpg' ?>"  /--> 
<div class="container">
	<?php echo form_open('login/process_credentials');?>
	<?php echo form_fieldset('', array('id' => 'login_legend'));?>
	<legend id="login_legend">
		<i class="fa fa-info-circle" style="padding-right:5px"></i>Log In
	</legend>

	<?php echo $this->session->flashdata('error_message');?>
	<div class="item">	
		<?php echo form_error('username', '<div class="error_message">', '</div>');?>
		<?php echo form_label('Username:', 'username');?>
		<div class="input-group">
  			<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<?php echo form_input(array('name' => 'username', 'id' => 'username', 'size' => '24', 'class' => 'textfield form-control', 'placeholder' => 'username'));?>
		</div>
	</div>
	<div class="item">
		<?php echo form_error('password', '<div class="error_message">', '</div>');?>
		<?php echo form_label('Password:', 'password');?>
		<div class="input-group">
  			<span class="input-group-addon"><i class="fa fa-key"></i></span>
			<?php echo form_password(array('name' => 'password', 'id' => 'password', 'size' => '24', 'class' => 'textfield form-control', 'placeholder' => '********'));?>
		</div>
	</div>
	<?php echo form_fieldset_close();?>
	<?php echo form_fieldset('', array('class' => 'tblFooters'));?>
	<?php echo form_submit('input_go', 'Go');?>
	<?php echo form_fieldset_close();?>
	<?php echo form_close();?>
</div>