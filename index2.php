 <?php
		$solution=0;
		$solution=$_POST['field'];
        $numerator=0;
        $denominator=0;
                     
			$servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "csv_db";

            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT sum(divided_difference), sum(cumm_prob), sum(differnce_squared), sum(prob_squared), sum(product) FROM stocks";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
	                while($row = $result->fetch_assoc()) {
	                   
	                $divided_difference = $row["sum(divided_difference)"];
	                $cumm_prob = $row["sum(cumm_prob)"];
	                $difference_squared = $row["sum(differnce_squared)"];
	                $prob_squared = $row["sum(prob_squared)"];
	                $product = $row["sum(product)"];
	                }
                    }
                   // echo $divided_difference.'<br>';
                    //echo $cumm_prob.'<br>';
                    /*echo $difference_squared.'<br>';
                    echo $prob_squared.'<br>';
                    echo $product.'<br>';*/
	                if($solution<=100)
	                {
	                	//write calc here

                        $numerator=($divided_difference*$prob_squared)-($cumm_prob*$product);
                        $denominator=(500*$prob_squared)-($cumm_prob*$cumm_prob);
                        $a=$numerator/$denominator;
                      //  echo $a.'<br>';
                        $numerator=(500*$product)-($cumm_prob*$divided_difference);
                        $denominator=(500*$prob_squared)-($cumm_prob*$cumm_prob);
                        $b=$numerator/$denominator;
                       // echo $b;
                        $solution=$a + ($b*($solution/100));
                        
	                }                               
	            
            	
            $conn->close();

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./static/favicon.ico">
    <!-- Favicon -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Rohit jaiswal, Abhishek Chaudhary, Dhanesh Motwani">
    <title>Stock-Analyser - An Intelligent stock market predictor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link href="./static/css/ripples.min.css" rel="stylesheet">
    <link href="./static/css/main.css" rel="stylesheet">
    <link href="./static/css/responsive.css" rel="stylesheet">
    <link href="./static/css/animate.min.css" rel="stylesheet">
    <!-- Code highlighting -->
    <link href="./static/css/prism.css" rel="stylesheet" />
    <!-- Code highlighting -->
    <!-- Start Visual Website Optimizer Asynchronous Code -->

    <!-- End Visual Website Optimizer Asynchronous Code -->
</head>

<body>
    <div class="navbar navbar-invers menu-wrap">
        <div class="navbar-header text-center">
            <a class="navbar-brand logo-right" href="#home"><i class="mdi-image-timelapse"></i>Stock-Analyser</a>
        </div>
        <br>
        <ul class="nav navbar-nav main-navigation">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#cta">Demo</a></li>
            <li><a href="#why">Algorithm features</a></li>
        </ul>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    <div class="content-wrap">
        <header class="hero-area" id="home">
            <div class="container">
                <div class="col-md-12">
                    <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200" style="border-color:transparent">
                        <div class="container">
                            <div class="navbar-header">
                                <a class="logo-left" class="active" href="#home"><i class="mdi-image-timelapse"></i>Stock-Analyser</a>
                            </div>
                            <div class="navbar-right">
                                <button class="menu-icon" id="open-button">
                                    <i class="mdi-navigation-menu"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contents text-right">
                    <h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Stock-Analyser - An Intelligent stock market predictor</h1>
                    <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Built on top of a Custom Well built database over a period of time</p>
                    <a href="#cta" class="btn btn-lg btn-primary wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Try out Live Demo</a>
                </div>
        </header>
        <section id="features" class="section">
            <div class="container">
                <div class="section-header">
                    <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">Stock-Analyser's Features</h1>
                    <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms"><strong>Here for you</strong> </h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="features">
                            <div class="icon">
                                <i class="mdi-action-settings"></i>
                            </div>
                            <div class="features-text">
                                <h4>Web programming based</h4>
                                <p>
                                    Built on top of beautiful and expressive <strong><a href="html.com">HTML</a> <a href="www.css.com/">CSS</a> </strong> and <strong><a href="www.phpmyadmin.net">PHP</a></strong> .  
                                 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                        <div class="features">
                            <div class="icon">
                                <i class="mdi-image-blur-linear"></i>
                            </div>
                            <div class="features-text">
                                <h4>Regression Analysis</h4>
                                <p>
                                    Our algorithm uses the defined formula for calculation of the lines of the regression.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
                        <div class="features">
                            <div class="icon">
                                <i class="mdi-action-favorite"></i>
                            </div>
                            <div class="features-text">
                                <h4>Crafted with Love</h4>
                                <p>
                                    We put a lot of time and effort on Stock-Analyser so that users are faced with the least friction when using our service.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
                        <div class="features">
                            <div class="icon">
                                <i class="mdi-hardware-phonelink"></i>
                            </div>
                            <div class="features-text">
                                <h4>Minimum Downtime</h4>
                                <p>
                                    Our guys back at <a href="https://www.phpmyadmin.net/" target="_blank">phpmyadmin </a> ensure that we have minimum downtime.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cta">
            <div class="container">
                <div class="row text-center">
                    <h4 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">Please enter the a probability value between 40 - 90% to predict the movement pattern</h4>
                    <br>
                    <form class="col s12 m6 l6" name="stock" method="POST" action="index2.php">
                        <div class="row" id="addcard">
                            <div class="input-field col s12 m12 l12 wow slideInLeft white-text" data-wow-duration="2000ms" data-wow-delay="300ms">
                                <input id="textarea1" name="field" class="materialize-input" placeholder="Enter text here"></input>
                                <input class="btn btn-lg btn-border col s6 m5 l5" id="Submit" type="submit"></input>
                                <a class="btn btn-lg btn-border col s5 m5 l5 offset-l1 offset-m1 offset-s1" id="clear" type="clear">
                                    <i class="material-icons right">clear</i>Clear
                                </a>
                            </div>
                        </div>
                    </form>
                    <?php
                    if($solution>99)
                	{
                		echo '<div class="col s12 m4 l4" style="text-align: center;"><div class="card orange"><div class="card-content white-text"><span class="card-title">Please enter a valid data.</span><p></p></div></div></div>';
                	}
                	
                	else if($solution>0)
                	{
                		echo '<div class="col s12 m4 l4" style="text-align: center;"><div class="card green"><div class="card-content white-text"><span class="card-title">'.'The change is: '.$solution.'%'.'</span><p></p></div></div></div>';
                	}	
                ?>
                </div>

            </div>
        </section>
        <section id="why" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="pull-left content">
                            <h2>Tell me more about your Algorithm?</h2>
                            <p>
                                <h5>Sure! Stock-Analyser is powered by a custom algorithm which we built while taking a course on Internet and web programming.
                <br>
              </p>
              <ul class="list-item">
                <li><i class="mdi-action-done"></i>Algorithm works on the data collected for a period of more than 500 days.</li>
                <li><i class="mdi-action-done"></i>Dataset used is the closing price for the google</li>
                <li><i class="mdi-action-done"></i>Written in uncomplicated PHP</li>
                <li><i class="mdi-action-done"></i>Free To use</li>
                <li><i class="mdi-action-done"></i>You can run it locally!</li>
              </ul>
              </div>
          </div>
        </div>
      </div>
    </section>    

    <section id="footer">
      <div class="container">
          <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3 align="center">About</h3><br><br>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="#"><h4 align="center">Home</h4></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="#features"><h4 align="center">Features</h4></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="#cta"><h4 align="center">Demo</h4></a>
                        </div>
                </div>
            </div>      
        </div>  
              <!-- Go to Top Link -->
        <a href="#home" class="btn btn-primary back-to-top">
            <i class=" mdi-hardware-keyboard-arrow-up"></i>
        </a>
      </div>      
    </section> 

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text">
             © Stock-Analyser 2017 All rights reserved. 
            </p>
            <p class="copyright-text">
              Built with &nbsp;<i class="fa fa-heart"></i>&nbsp; by &nbsp;&nbsp;Rohit &nbsp; &nbsp; &nbsp; Dhanesh &nbsp;&nbsp; &nbsp; Abhishek
            </p>
          </div>
        </div>
      </div>
    </section>     
    </div>  
    
    <!-- <script type="text/javascript" src="./static/js/jquery-2.2.2.min.js"></script> -->
    <script src="./static/js/jquery-2.1.4.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="./static/js/bootstrap.min.js"></script>
    <script src="./static/js/ripples.min.js"></script>
    <script src="./static/js/wow.js"></script>
    <script src="./static/js/jquery.mmenu.min.all.js"></script> 
    <script src="./static/js/count-to.js"></script>   
    <script src="./static/js/jquery.inview.min.js"></script>     
    <script src="./static/js/classie.js"></script>
    <script src="./static/js/jquery.nav.js"></script>      
    <script src="./static/js/smooth-on-scroll.js"></script>
    <script src="./static/js/smooth-scroll.js"></script>
    <script src="./static/js/main.js"></script>
    <script src="./static/js/prism.js"></script>


    <!-- Main JS Script which calls the classifier -->

    <!-- Default text inside document dorm which is a ham -->
    <!-- Default text inside document dorm which is a ham -->

    <script type="text/javascript">
    
    $("#Submit").click(function(){
        var messageTxt = $('#textarea1').val();
        if(messageTxt.length >= 3){
          $('#addcard').find('div:nth-child(2)').remove();
          $('#addcard').append('<div class="row"><div class="col s12 m6 l6"><div class="card orange"><div class="card-content white-text"><span class="card-title">Please give a valid probability value!</span><p></p></div></div></div></div>');
        }
        
    });

    </script>

    <script type="text/javascript">

    $('#clear').click(function(){
      $('#addcard').find('div:nth-child(2)').remove();
      $('#textarea1').val("").trigger('autoresize');
    });
    </script>
                           

  </body>

</html>