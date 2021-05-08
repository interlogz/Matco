<?php 	/* Template Name: Home*/ ?>
<?php 	get_header(); ?>

		<?php 
		$args = array(
			'post_type' =>'slider',
			'postperpage' => -1,
			'order' => 'ASC',
			'order_by' => 'menu_order'
		);
		$slide = get_posts($args);
		//print_r($service);
		 ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<?php $index="";
        foreach ($slide as $serv): setup_postdata ($serv); ++$index;?>
<?php $serimg= wp_get_attachment_image_src(get_post_thumbnail_id( $serv->ID),'single-post-thumbnail');
 ?>
    <div class="carousel-item <?php if ($index == 1) { echo ' active'; } ?>">
    	<div class="row padd-t100">
    		<div class="col-6 bannTxt-padd">
    			<div>
    			<h2 class="txt-upper banner-head">Top Hr</h2>
    			<h2 class="txt-upper banner-head">Consultancy</h2>
    			<p>We are also Succesful trader your trusted partner in real estate, Building construction.</p>
    			</div>
    			<div class="d-flex">
    				<a href="<?= site_url('hr-banner');?>"><div class="home-learn">Learn More</div></a>
    				<div class="apply-btn">Apply Now</div>
    			</div>
    		</div>
    		<div class="col-6">
    			 <img class="d-block w-100" src="<?= $serimg[0];?>" alt="First slide">
    		</div>
    	</div>
     
    </div>
<?php endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>
		</div>
	</div>
<div class="container-fluid c-padd abt-bg">
	<div class="container">
	<div class="row align-items-center">
		<div class="col-6 abt-txt">
			<h2>Who are we?</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			<p class="mb-1m">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</p>
			<a href="<?= site_url('about-us');?>"><div class="learn-btn d-inline">Learn More</div></a>
		</div>
		<div class="col-6">
			<img src="http://localhost/matco/wp-content/uploads/2021/04/banner.png" class="abt-img img-fluid">
		</div>
	</div>
	</div>
</div>
<section class="service-banner">
<div class="container c-padd">
	<div class="row">
		<div class="col-md-12"><h2 class="text-center">Recruitment services</h2></div>
		<div class="col-12">
			<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
		<div class="col-12">
			<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
		<div class="col-md-12">
			<div class="text-center">
				<div class="learn-btn">Enquire Us</div>
			</div>
		</div>
				<?php 
		$args = array(
			'post_type' =>'service',
			'posts_per_page' => -1,
			'order' => 'ASC',
			'order_by' => 'menu_order'
		);
		$service = get_posts($args);
		//print_r($service);
		 ?>
		    <?php 
       
        foreach ($service as $serv){
        	$serimg= wp_get_attachment_image_src(get_post_thumbnail_id( $serv->ID),'single-post-thumbnail');

        	?>
		<div class="col-4 service-padd">
			<img src="<?= $serimg[0];?>" class="img-fluid cust-img">
			<div class="ser-wrap">
				<h4><?= $serv->post_title;?></h4>
				<p><?= $serv->post_content;?></p>
				<a href="#" class="r-font">Learn More</a>
			</div>
		</div>
		<?php }?>
	</div>
</div>
</section>
<section>
	<div class="container c-padd">
		<div class="row  align-items-center">
			<div class="col-6">
				<h2>WHY AVAIL SERVICES FROM MATCO ENTERPRISE?</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			<div class="col-6">
				<img src="http://localhost/matco/wp-content/uploads/2021/04/abt.png" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section>
	<div class="flex-wrapper">
		<div class="second-head ch-bg">Contact</div>
		<div class="flex-container d-flex">
			<div class="col-6 nopadd">
				<div class="banner">
	<div class="banner-inner">
						<h3 class="let-head">Let's Connect</h3>
				<p class="small-txt pl-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<p class="small-txt pl-20">Lorem Ipsum is simply dummy text of the printing </p>
				<div class="f-20">
					<i class="fa fa-map-marker soci-icon"></i>
				<div class="add-wrap">
					<p class="f-20">Address</p>
					<p class="f-bold">123 st., New York</p>
				</div>
				</div>

								<div class="f-20">
					<i class="fa fa-phone soci-icon"></i>
				<div class="add-wrap">
					<p class="f-20">Let's Talk</p>
					<p class="f-bold">123 st., New York</p>
				</div>
			</div>
<div class="f-20">
					<i class="fa fa-envelope soci-icon"></i>
				<div class="add-wrap">
					<p class="f-20">General Support</p>
					<p class="f-bold">123 st., New York</p>
				</div>
			</div>
	</div>
</div>

			</div>
			<div class="col-6 nopadd">
				<p class="submit-txt">Submit your Details</p>
				   <form id="contactForm" class="contactform">
				<div class="d-form">
					<div class="col-6 nopadd">
					<input type="text" name="name" placeholder="First Name" class="form-control">
				</div>
				<div class="col-6">
					<input type="text" name="lastname" placeholder="Last Name" class="form-control">
				</div>
				</div>
				<div class="d-form">
					<div class="col-6  nopadd">
					<input type="text" name="phone" placeholder="Mobile Number" class="form-control">
				</div>
				<div class="col-6">
					<input type="email" name="email" placeholder="E-mail" class="form-control">
				</div>
				</div>
				<div class="d-form">
					<div class="w-100">
					<input type="text" name="address" placeholder="Address" class="form-control">
					</div>
				</div>
				<div class="d-form">
					<div class="w-100">
					  <textarea placeholder="Message" id="message" name="msg" class="form-control" rows="2"></textarea>
					</div>
				</div>
				<div class="padd-30">
					<!-- <button class="send-btn">Send</button> -->
					<input type="hidden" name="ajax_for" value="contact">
                  <input type="hidden" name="action" value="my_user_vote">
                  <input type="submit" value="SUBMIT" class="send-btn" name="form_submit">
                  <div class="loader"></div>
               </div>
               <!-- End col-sm-6 -->
            </form>
				</div>
			
		</div>
	</div>
</section>
<?php 	get_footer(); ?>