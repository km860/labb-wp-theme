<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<div class="container-fluid header-container">
      <div class="blog-header">
        <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name '); ?></a></h1>
        <p class="lead blog-description">
          <?php echo get_bloginfo( 'description' ); ?>
        </p>
      </div>
			<nav class="blog-nav">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a href="<?php echo get_bloginfo( 'wpurl' ); ?>">Home</a>
            <?php wp_list_pages( '&title_li=' ); ?> 
          </li>          
			</nav>
		</div>
	</div>
	
