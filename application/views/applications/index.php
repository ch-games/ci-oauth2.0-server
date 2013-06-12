<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
     <div class="hero-unit">
       <h1>Hello, world!</h1>
     </div>
	<div class="row-fluid">
          <?php foreach ($applications as $application): ?>
		<div class="span12">
              <h2><?= $application->name;?></h2>
              <p>application description</p>
              <p><a class="btn" href="<?= site_url("applications/detail/{$application->id}");?>">View details &raquo;</a></p>
          </div><!--/span-->
          <?php endforeach ?>
	</div><!-- .row-fluid -->
<?php
/* End of file index.php */
/* Location: ./applications/index.php */