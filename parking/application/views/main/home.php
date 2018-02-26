<div class="intro">
    <div class="container">
        <div class="text-center">
            <h2 style="font-family: Pacifico;">parking</h2>
            <p class="lead">Where would you like to Park?</p>
        </div>
        <div class="intro-search">
            <a data-toggle="modal" href="<?php if (empty($this->session->userdata('airbnb')) && empty($this->session->userdata('web_session')) && empty($this->session->userdata('user'))) { ?>#login_model<?php }else{ ?><?php echo base_url() ?>user/become-a-host<?php } ?>" class="btn btn-default">Become a host</a>
            <a href="<?php echo base_url(); ?>home/find-parking" class="btn btn-white">Find parking</a>
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

<div class="main-wraper bg-dr-blue-2 color-2 padd-40">
    <div class="container">
        <div class="row padd-second-title">
            <div class="col-mob-12 col-sm-4">
                <div class="icon-block">
                    <img class="icon-img" src="<?php echo base_url(); ?>assets/images/icons/Magnify GlassW@2x.png" alt="Find parking">
                    <h5 class="icon-title color-white">Find</h5>
                    <div class="icon-text color-white" style="font-size: 20px">Search where you're going and dates and we'll show you the best spaces and rates for you.</div>
                </div>
            </div>
            <div class="col-mob-12 col-sm-4">
                <div class="icon-block">
                    <img class="icon-img" src="<?php echo base_url(); ?>assets/images/icons/Mobile@2x.png" alt="Reserve parking">
                    <h5 class="icon-title color-white">Reserve</h5>
                    <div class="icon-text color-white" style="font-size: 20px">Reserve through our free app and drive knowing that we've got a space with your name on it. No hassles, no worrying.</div>
                </div>
            </div>
            <div class="col-mob-12 col-sm-4">
                <div class="icon-block">
                    <img class="icon-img" src="<?php echo base_url(); ?>assets/images/icons/Location Pin 2W@2x.png" alt="Safe parking">
                    <h5 class="icon-title color-white">Park</h5>
                    <div class="icon-text color-white" style="font-size: 20px">Drive to the garage, driveway, or other parking space knowing that it's safe and trustworthy.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-parking-section">
    <div class="col-lg-6 col-md-6" style="padding:0px;">
        <div class="inner-banner style-5 background-block" style="background-image: url(&quot;<?php echo base_url(); ?>assets/images/college_ave.jpg&quot;);">
            <img class="center-image" src="<?php echo base_url(); ?>assets/images/college_ave.jpg" alt="" style="display: none;">
            <div class="vertical-align">
                <div class="row">
                    <h3 class="color-white">Need to Park?</h3>
                    <h2 class="color-white" style="font-weight:300;text-transform: none;letter-spacing:2px;">Find a space</h2>
                </div>
                <div class="row">
                    <p class="color-white">Why should you have to waste time searching for spaces?
                    <br>Don't stress about the search anymore.</p>
                    <br><a href="#" class="c-button bg-dr-blue-2 b-40 hv-dr-blue-2-o">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6" style="padding:0px;">
        <div class="inner-banner style-5 background-block" style="background-image: url(&quot;<?php echo base_url(); ?>assets/images/rent-house.jpg&quot;);">
            <img class="center-image" src="<?php echo base_url(); ?>assets/images/rent-house.jpg" alt="" style="display: none;">
            <div class="vertical-align">
                <div class="row">
                    <h3 class="color-white">Own a Space?</h3>
                    <h2 class="color-white" style="font-weight:300;text-transform: none;letter-spacing:2px;">Rent your Space</h2>
                </div>
                <div class="row">
                    <p class="color-white">Listing your space only takes a few minutes.
                        <br>All you need is an address and availability to get started.</p>
                    <br><a href="#" class="c-button bg-dr-blue-2 b-40 hv-dr-blue-2-o">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>