<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?= base_url();?>">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      	<script src="assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      	<div class="navbar-inner">
	        <div class="container-fluid">
	          	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	          	</button>
	          	<a class="brand" href="<?= site_url('admin/dashboard');?>">OAuth 2.0 Server</a>
	          	<div class="nav-collapse collapse">
	            	<p class="navbar-text pull-right">
	              		Logged in as <a href="#" class="navbar-link">Username</a>
	            	</p>
		            <ul class="nav">
		              	<li class="active"><a href="<?= site_url('admin/dashboard');?>">Home</a></li>
		              	<li><a href="<?= site_url('admin/users');?>">Users</a></li>
		              	<li><a href="<?= site_url('admin/applications');?>">Applications</a></li>
		            </ul>
	         	</div><!--/.nav-collapse -->
	        </div>
      	</div>
    </div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">Users</li>
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="nav-header">Applications</li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div><!--/.well -->
            </div><!--/span-->
            <div class="span9">
              	<?php $this->load->view($subview);?>
            </div><!--/span-->
        </div><!--/row-->

        <hr>

        <footer>
            <p>&copy; Company <?= date('Y');?> by donald</p>
        </footer>

    </div><!--/.fluid-container-->
</body>
</html>