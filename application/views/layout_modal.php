<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('_components/page_head');?>
<div id="modal-wrap">
	<div class="modal">
	<?php $this->load->view($subview);?>
	</div>
</div>
<?php $this->load->view('_components/page_tail');?>
<?php
/* End of file layout_modal.php */
/* Location: ./application/views/layout_modal.php */