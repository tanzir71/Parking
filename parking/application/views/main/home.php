<div class="intro" data-stellar-background-ratio="0.55">
    <div class="container">
        <div class="text-center">
            <h2 style="font-family: Pacifico;">parking</h2>
            <p class="lead">Where would you like to Park?</p>
        </div>
        <div class="intro-search">
            <a data-toggle="modal" href="<?php if (empty($this->session->userdata('airbnb')) && empty($this->session->userdata('web_session')) && empty($this->session->userdata('user'))) { ?>#login_model<?php }else{ ?><?php echo base_url() ?>user/become_a_host<?php } ?>" class="btn btn-default">Become a host</a>
            <a href="<?php echo base_url(); ?>home/find_parking" class="btn btn-white">Find parking</a>
        </div>
    </div>
</div>


<div class="steps-section">
	<div class="container">
		<div class="steps-header text-center">
			<h3>Find a match in 3 easy steps</h3>
		</div>
	</div>
</div>

<div class="steps-section-2">
	<div class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="steps-list">
						<h4>List your space</h4>
						<ul>
							<li> <span><img src="<?php echo base_url(); ?>assets/images/icons/tellus.png" class="img-responsive" alt="Image"></span>1. Tell us a little about your parking space</li>
							<li> <span><img src="<?php echo base_url(); ?>assets/images/icons/putaprice.png" class="img-responsive" alt="Image"></span>2. Put a price on it</li>
							<li> <span><img src="<?php echo base_url(); ?>assets/images/icons/shareit.png" class="img-responsive" alt="Image"></span>3. Share it with the world!</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">				
					<div class="steps-list">
						<h4>Find parking</h4>
						<ul>
							<li> <span><img src="<?php echo base_url(); ?>assets/images/icons/feature2.png" class="img-responsive" alt="Image"></span>1. Tell us where you're headed</li>
							<li> <span><img src="<?php echo base_url(); ?>assets/images/icons/feature1.png" class="img-responsive" alt="Image"></span>2. Pick your favorite parking space</li>
							<li> <span><img src="<?php echo base_url(); ?>assets/images/icons/feature3.png" class="img-responsive" alt="Image"></span>3. Book it!</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="content-part text-center">
	<div class="container">
		<div class="content-part-header">
			<h3>Be Part of the Solution!</h3>
			<p>We believe in a greener and smarter city, by renting or booking <br>your space you are taking 76.800.000 cars off the streets evert day! </p>
		</div>
		<div class="contant-description">
			<div class="video-placeholder">
                <div class="play-button"></div>
            </div>
		</div>
	</div>
</div>
<div class="featured-logo-section">
	<div class="container">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-md-3">
					<h4 class="logo-header-text">Featured in:</h4>
				</div>
				<div class="col-md-3">
					<div class="featured-logo">
						<img src="<?php echo base_url(); ?>assets/images/featured/product-hunt.png" class="img-responsive" alt="Image">
					</div>
				</div>
				<div class="col-md-3">
					<div class="featured-logo logo-2-feature">
						<img src="<?php echo base_url(); ?>assets/images/featured/list-hunt.png" class="img-responsive" alt="Image">
					</div>
				</div>				
				<div class="col-md-3">
					<div class="featured-logo">
						<img src="<?php echo base_url(); ?>assets/images/featured/alltopsstartups.png" class="img-responsive" alt="Image">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="parking-apps-content">
	<div class="parking-apps-for-bg">
		<div class="container">
			<div class="col-md-offset-2 col-md-8">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="apps-inage hidden-xs">
							<img src="<?php echo base_url(); ?>assets/images/mobile-size.png" class="img-responsive" alt="apps image">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="apps-content">
							<h3>Take your parking buddy<br>wherever you go.</h3>
							<p>Download the mobile app for FREE.</p>
							<a href="#"><img src="<?php echo base_url(); ?>assets/images/icons/button-app-store.jpg" class="img-responsive" alt="apple app"></a>
							<a href="#"><img src="<?php echo base_url(); ?>assets/images/icons/button-google-play.jpg" class="img-responsive" alt="android app"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>