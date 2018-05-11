<?php 

include dirname( __FILE__) . ('/includes/class-mp3.php');

$directory = 'C:\xampp\htdocs\imas_radio\wp-content\imasmp3/';

$files = glob($directory . '*.mp3');

if ( $files !== false )
{
    $filecount = count( $files );
}
else
{
    $filecount = 0;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache">
	<meta name="keywords" content="anime, fansub, moesubs, moe, sub indo, subtitle indonesia, radio, im@s, the idolm@ster, idolm@ster, shizuka, mogami, idol, idolmaster, imas, the idolmaster, shizuka mogami">
	<meta property="og:keywords" content="anime, fansub, moesubs, moe, sub indo, subtitle indonesia, radio, im@s, the idolm@ster, idolm@ster, shizuka, mogami, idol, idolmaster, imas, the idolmaster, shizuka mogami">
	<meta name="description" content="THE iDOLM@STER Radio Streaming Online">
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="THE iDOLM@STER RADIO" />
	<meta property="og:description" content="THE iDOLM@STER Radio Streaming Online" />
	<meta property="og:url" content="http://shizuka.beauty.fm/" />
	<meta property="og:site_name" content="THE iDOLM@STER RADIO" />

	<link rel='shortcut icon' type='image/png' sizes="256x256" href="<?php echo get_template_directory_uri(); ?>/assets/img/shizuka-icons.png" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<title id="html_title">
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title('').' | '.get_bloginfo('description');
    }?>
  </title>

<?php wp_head(); ?>

</head>
<body>
<div id="ini-test"></div>
<div class="clearfix"></div>

<div class="container">

<div class="col-xs-12">
	<div class="row">	
		<div class="col-xs-12 col-md-8">
			
		<nav class="navbar navbar-default navbar-inverse">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php echo get_bloginfo('title'); ?></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <!-- START Add menu utama -->
            	<?php wp_nav_menu(array('theme_location' => 'menu_imas', 'items_wrap' => wrap_menu_imas())); ?>
            <!-- END Add menu utama -->
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

		</div>
		<div class="col-xs-12 col-md-8">
			<div class="card">