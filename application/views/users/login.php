<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

	<div class="modal-header">
    	<h3>Log In</h3>
  	</div>
  	<div class="modal-body">
    	<?= form_open('', 'class="form-horizontal"');?>
    		<div class="control-group">
    			<label for="name" class="control-label">Email:</label>
    			<div class="controls">
					<input type="email" name="email" id="name" placeholder="Email" autocomplete="off">
    			</div>
    		</div>
    		<div class="control-group">
    			<label for="password" class="control-label">Password:</label>
    			<div class="controls">
					<input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
				</div>
    		</div>
    		<div class="form-actions">
	    		<button class="btn btn-success btn-large" type="submit"><i class="icon-lock icon-white"></i> Log in</button>
                <a href="<?= site_url('users/register');?>">register here</a>
    		</div>
    	<?= form_close();?>
  	</div>
<?php
/* End of file login.php */
/* Location: ./application/views/users/login.php */