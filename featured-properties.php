<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Featured Properties | Holden New Homes</title>

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
    <header class="mid featured-properties">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Featured Properties</div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Contact Us</h2>
                    <br>
                    <br>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-first-last-name">First and Last Name: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buy-first-last-name" placeholder="First and last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-email">Email Address: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buy-email" placeholder="Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-phone">Phone Number: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="buy-phone" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-housing-status">I currently: </label>
                            <div class="col-sm-8" id="buy-housing-status">
                                <input type="radio" id="buy-housing-status-own"> Own
                                <input type="radio" id="buy-housing-status-rent"> Rent
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Builder I am interested in: </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option value="toll-brothers">Toll Brothers</option>
                                    <option value="landon-homes">Landon Homes</option>
                                    <option value="k-hovnanian">K Hovnanian</option>
                                    <option value="newcastle-homes">Newcastle Homes</option>
                                    <option value="dont-know">Don't know</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="buy-platt-map">I would like a copy of the Platt map: </label>
                            <div class="col-sm-8" id="buy-platt-map">
                                <input type="radio" id="buy-platt-map-yes"> Yes
                                <input type="radio" id="buy-platt-map-no"> No
                            </div>
                        </div>
                        <br>
                        <div class="form-group"> 
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<cms:editable name="featured_properties" type="richtext">
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ceNYx3og3tE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Minutes to Highway 121 (Sam Rayburn Tollroad) buyers in the new home market in the next couple years will have every convenience that they could imagine within 8 minutes from their door including: Stonebriar Mall, hundreds of restaurants, numerous parks and access to the Dallas North Tollroad. The Community will be called Richwoods.</p>
                    <p>The highly acclaimed Frisco ISD will make any family moving to DFW very happy providing their children with one of the best school districts in the metroplex.</p>
                    <p>The City of Frisco has given Richwoods permission to be a gated community. There will be three entrances with the main gate will be located on Independence and Kelmscott.</p>
                    <p>Landon Homes, KHOV, Newcastle, John Landon Signature Series and Toll Brothers have sold close to 300 homes total as of February 2013!</p>
                </div>
            </div>
            <br><br><br><br>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="http://lawlerparkfrisco.com/lawler-park-frisco-homesites/" target="_blank">
                        <img class="img-responsive" src="img/featured-properties/lawler-park.jpg">
                        <br>
                        <caption>Lawler Park</caption>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://phillipscreek.com/phillips-creek-ranch-frisco/" target="_blank">
                        <img class="img-responsive" src="img/featured-properties/phillips-creek.jpg">
                        <br>
                        <caption>Phillips Creek</caption>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://friscohomesites.com/landon-homes-in-austin-ridge-at-lone-star-ranch-in-frisco-texas/" target="_blank">
                        <img class="img-responsive" src="img/featured-properties/austin-ridge.jpg">
                        <br>
                        <caption>Austin Ridge</caption>
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
