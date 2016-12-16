<!-- head.inc -->

<!DOCTYPE html>
<html>
<head>

<?php require_once("./functions.inc"); ?>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php echo $pages->get("/site-settings/")->site_meta_description; ?>" />


	<title><?php echo $pages->get("/site-settings/")->site_title; ?></title>
	<!--   <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/build-full.css" /> -->
	<!--   <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/custom.css" /> -->
	<!--   <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/superfish.css" media="screen"> -->

	<!-- link to main style sheet -->
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/style.css" />
	<!-- link to responsive style sheet -->
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/responsive.css" />

	<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false'></script>

	<!-- font awesome link -->
	<script src="https://use.fontawesome.com/a5061823dc.js"></script>

	<!-- google fonts link -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>

<body>

<header>
<?php include("./nav.inc"); ?>
<?php include("./banner.inc"); ?>
</header>

<!-- end head.inc -->
