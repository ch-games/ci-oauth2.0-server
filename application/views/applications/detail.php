<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
	<div class="hero-unit">
		<h1><?= $application->name;?></h1>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<dl>
				<dt>App Key:</dt>
				<dd><?= $application->key;?></dd>
			</dl>
			<dl>
				<dt>App Secret:</dt>
				<dd><?= $application->secret;?></dd>
			</dl>
		</div>
	</div>
<?php
/* End of file detail.php */
/* Location: ./applications/detail.php */