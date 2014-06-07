<div class="container">
	<?php

		$filenames = get_filenames("assets/img/portfolio/portfolio_small");
		
		
		foreach($filenames as &$f){
			?>
				<div class="col-lg-4">
					<img class="img-circle" src="<?php echo (base_url("assets/img/portfolio/portfolio_small") . "/" . $f);?>">
				</div><!-- /.col-lg-4 -->
        	<?php
		}
		
      ?>
</div>