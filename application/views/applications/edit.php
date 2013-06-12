<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
	<?= form_open('', 'class="form-horizontal"');?>
		<div class="control-group">
			<label for="name" class="control-label">App Name:</label>
			<div class="controls">
				<input type="text" id="name" name="name">
			</div>
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit"><i class="icon-hdd icon-white"></i> Save</button>
		</div>
	</form>
<?php
/* End of file edit.php */
/* Location: ./applications/edit.php */