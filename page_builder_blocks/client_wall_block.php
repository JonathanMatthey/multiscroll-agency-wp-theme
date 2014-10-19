<?php
class AQ_Client_Wall_Block extends AQ_Block {

	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Client Wall',
			'size' => 'span12',
			'resizable' => false,
			'block_icon' => '<i class="fa fa-font"></i>',
			'block_description' => 'Client Wall of Logos'
			);
		parent::__construct('aq_client_wall_block', $block_options);
	}

	function form($instance) {

		$defaults = array(
			'bg_image' => ''
			);

		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
		?>

		<p class="description">
			<label for="<?php echo $this->get_field_id('bg_image') ?>">
				Upload Background Image
				<?php echo aq_field_upload('bg_image', $block_id, $bg_image, $media_type = 'image') ?>
			</label>
		</p>


		<?php
	}// end form

	function block($instance) {
		extract($instance);
		?>

	<section class="main-section-with-bg" <?php if($bg_image) { echo 'style="background-image:url('.$bg_image.')"';}?> >
		<div class="row">
			<section class="container full-img-bg client-wall-container">
				<div class="trans-bg-dark col-xs-10 col-xs-offset-1">
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-3 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-4 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-4 client-logo"></div>
					<div class="col-xs-12 col-sm-6 col-md-4  col-lg-4 client-logo"></div>
				</div>
			</section>
		</div>
	</section>

	<?php
	}//end block

}//end class