<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Neighborhoods in DFW | Holden New Homes</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Lora|Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <?php include('navigation.php'); ?>

    <!-- Header -->
    <header class="mid neighborhoods">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Featured Neighborhoods</div>
            </div>
        </div>
    </header>

	<cms:editable name="body" type="richtext">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Our Featured Neighborhoods are the Communities we take pride in Promoting the New Home Builders Beautiful Design, Great Location, Exceptional Schools, the Development and its Amenities or the Great Deals!  Look around and you just might find that Perfect Location and Dream Home you have been looking for!</p>
                </div>
            </div>
        </div>
    </section>
	</cms:editable>

	<cms:editable name="featured_neighborhoods" type="richtext">
    <section id="featured-neighborhoods" class="bg-light-gray">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 neighborhood-item">
                    <a href="#">
                        <div class="col-md-12">
                            <img src="/img/neighborhoods/richwoods.jpg" class="img-responsive">
                            <br>
                            <h3>Richwoods</h3>
                            <h4>Frisco, Texas</h4>
                            <h5>$350's-$750's</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 neighborhood-item">
                    <a href="#">
                        <div class="col-md-12">
                            <img src="/img/neighborhoods/lexington.jpg" class="img-responsive">
                            <br>
                            <h3>Lexington</h3>
                            <h4>Frisco, Texas</h4>
                            <h5>$250's-$410's</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 neighborhood-item">
                    <a href="#">
                        <div class="col-md-12">
                            <img src="/img/neighborhoods/edgestone.jpg" class="img-responsive">
                            <br>
                            <h3>Edgestone</h3>
                            <h4>Frisco, Texas</h4>
                            <h5>$250's-$410's</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
	</cms:editable>

    <?php include('footer.php'); ?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>
