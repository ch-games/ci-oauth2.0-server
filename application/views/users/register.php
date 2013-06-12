<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
	<div class="modal-header">
    	<h3>Register</h3>
  	</div>
  	<div class="modal-body">
    	<?= form_open('', 'class="form-horizontal"');?>
    		<div class="control-group">
    			<label for="email" class="control-label">Email:</label>
    			<div class="controls">
					<input type="text" name="user" id="email" placeholder="Email">
    			</div>
    		</div>
    		<div class="control-group">
    			<label for="password" class="control-label">Password:</label>
    			<div class="controls">
					<input type="password" id="password" placeholder="Password">
				</div>
    		</div>
    		<div class="control-group">
    			<label for="name" class="control-label">Name:</label>
    			<div class="controls">
    				<input type="text" id="name" name="name" placeholder="Name">
    			</div>
    		</div>
    		<div class="form-actions">
	    		<button class="btn btn-success btn-large" type="submit"><i class="icon-lock icon-white"></i> Sign up</button>
    		</div>
    	<?= form_close();?>
  	</div>
<?php
/* End of file register.php */
/* Location: ./application/views/users/register.php */