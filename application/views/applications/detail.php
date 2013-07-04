<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
	<div class="hero-unit">
		<h1><?= $application->name;?></h1>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<dl class="dl-horizontal">
				<dt>App Key:</dt>
				<dd><?= $application->client_id;?></dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>App Secret:</dt>
				<dd><?= $application->client_secret;?></dd>
			</dl>
		</div>
	</div>
<?php
/* End of file detail.php */
/* Location: ./applications/detail.php */