<!DOCTYPE html>
<html>
<head>
	<title>Matco</title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri();?>/assets/css/public.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div class="container-fluid prime-head">
	<div class="container">
	<div class="row">
		<div class="col-md-3">
			&nbsp;
		</div>
		<div class="col-md-6">
			<div class="head-mp">
				<p class="fa fa-envelope"><a href="mailto:matcogroup@gmail.com" class="padd-l10">Matcogroup@gmail.com</a></p>
				<p class="fa fa-phone"><a href="tel:+91-8122728445" class="padd-l10">+91-8122728445</a></p>
			</div>
			</div>
			<div class="col-md-3">
			<ul class="header-social col">
				<li class="fa fa-facebook"><a href="#" ></a></li>
				<li class="fa fa-instagram"><a href="#" ></a></li>
				<li class="fa fa-linkedin"><a href="#" ></a></li>
				<li class="fa fa-twitter"><a href="#" ></a></li>
			</ul>
			</div>
		</div>
	</div>
	</div>
    <header>
    	<div class="float-logo">
    		<a href="<?= home_url();?>"><img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			echo $image[0];?>" class="logo"></a>
        </label>
    	</div>
        <nav>
        	
            <input type="checkbox" id="check-btn" name="check-btn">
            <label for="check-btn" class="check-btn"></label>
             
			<?= wp_nav_menu();?>

        </nav>
    </header>

<?php wp_head(); ?>


