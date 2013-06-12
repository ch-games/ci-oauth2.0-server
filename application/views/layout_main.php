<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->view('_components/page_head');?>
	<div id="wrap">
		<div class="navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="brand" href="<?= site_url();?>"><?= $appName;?></a>
	          <div class="nav-collapse collapse">
	            <p class="navbar-text pull-right">
	              Logged in as <?= $loginedUser['name'];?>
	            </p>
	            <ul class="nav">
	              <li><a href="<?= site_url();?>">Home</a></li>
	              <li><a href="<?= site_url('applications');?>">Applications</a></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>

	    <div class="container">
	      <div class="row-fluid">
	        <div class="span3">
	          <div class="well sidebar-nav">
	            <ul class="nav nav-list">
	              <li class="nav-header">Applications</li>
	              <li><a href="<?= site_url('applications/index');?>">All Applications</a></li>
	              <li><a href="<?= site_url('applications/edit');?>">Create Application</a></li>
	              <li class="nav-header">Users</li>
	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->
	        <div class="span9">
				<?php $this->load->view($subview);?>
			</div><!--/span-->
	      </div><!--/row-->
	    </div><!--/.fluid-container-->

	</div>
    <footer>
    	<div class="container credit">
	        <p>&copy; Company 2013</p>
    	</div>
    </footer>
<?php $this->load->view('_components/page_tail');?>
<?php
/* End of file layout_main.php */
/* Location: ./application/views/layout_main.php */