<?php require("libs/fetch_data.php");?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
    <meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
    <meta name="keywords" content="<?php getkeywords("titles");?>" />
    <script>
      addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
      }, false);
  
      function hideURLbar() {
        window.scrollTo(0, 1);
      }
    </script>
    <link href="new folder/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="new folder/css/jquery.desoslide.css">
    <link href="new folder/css/style.css" rel='stylesheet' type='text/css' />
    <link href="new folder/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
    rel="stylesheet">

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />


<title>JUST ONLINE JOURNAL</title>


<link href="images/favicon.png" rel="shortcut icon" type="image/png">



<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>

<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>

<link href="css/style-main.css" rel="stylesheet" type="text/css">

<link href="css/preloader.css" rel="stylesheet" type="text/css">

<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">

<link href="css/responsive.css" rel="stylesheet" type="text/css">


<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>


<link href="css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">


<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-plugin-collection.js"></script>


<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>


</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/7.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              
            </div>
          </div>
         
          
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default"><a class="menuzord-brand pull-left flip mt-20 mt-sm-15 mb-sm-15" href="index.php"><img src="images/justlogo.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="index.php"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a>
             
              </li>
              <li><a href="#">Authors</a>
                <ul class="dropdown">
                  <li><a href="authors_guidelines.html">Authors Guidelines</a></li>
                  <li><a href="publication_charge.html">Publication Charge</a></li>
                  <li><a href="thesis_publication.html">Thesis Publication</a></li>
                  <li><a href="publish_research_paper.html">How to Publish a research paper</a></li>
                  <li><a href="aims_and_scope.html">Aims and Scope</a></li>
                </ul>
              </li>
              <li><a href="#">Reviewers</a>
                <ul class="dropdown">
                  <li><a href="what_is_peer_review.html">What is Peer Review</a></li>
                  <li><a href="becoming_a_reviewer.html">Becoming a Reviewer</a></li>
                  <li><a href="features-preloader.html">Reviewing Proposals</a></li>
                  <li><a href="features-preloader.html">Reviewing Manuscripts</a></li>
                  <li><a href="features-preloader.html">Reviewing Published Materials</a></li>
                  
                
                  
                  
           
                </ul>
              </li>
              <li><a href="#">Editors</a>
                <ul class="dropdown">
                  <li><a href="enhancing_discoverability.html">Enhancing Discoverability</a></li>
                  <li><a href="editorial_office_guidelines.html">Editorial Office Guidelines</a></li>
                  <li><a href="monitoring_journal_performance.html">Monitoring Journal Performance</a></li>
                  <li><a href="attracting_submissions.html">Attracting Submissions</a></li>
                  <li><a href="ethical_guidelines.html">Ethical Guidelines</a></li>
                  
                </ul>
              </li>
              <li><a href="#">About</a>
                <ul class="dropdown">
                  <li><a href="page-service-business-consulting.html">About the Journal</a></li>
                  <li><a href="page-service-financial-analysis.html">Announcements</a></li>
                  <li><a href="page-service-investment-banking.html">Contact</a></li>
                  
                </ul>
              </li>
              <li><a href="#">Login</a>
                <ul class="dropdown">
                  <li><a href="blogadmin/index.php">Login</a></li>
                  <li><a href="blogadmin/membership_signup.php">Register</a></li>
                 
                  
                </ul>
              </li>
			  <form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form" style="padding-top:12px; ">
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
								<button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fa fa-search"></i></button> 
							</form>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>  












  <!-- Start main-content -->
  <div class="main-content">
  

   
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="images/bg/slide.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="row">
              <div class="col-md-12 col-md-offset-1">
                <h6 class="font-raleway text-blue font-poppigs font-56 font-weight-600 mt-0">
                  <span class="typed-text-carousel" data-speed="100" data-back_delay="500" data-loop="true">
                    <span >WELCOME TO JUST ONLINE JOURNAL</span>
                    
                  </span>
                </h6>
              </div>
           
             

            </div>
          </div>
        </div>
      </div>
    </section>


       <!-- Section: Features -->
       <section id="features">
        <div class="container pb-30">
          <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase title">Read Here</span></h2>
                <div class="diamond-line-left-theme-colored2"></div>
              </div>
            
          </div>
           
          
          <div class="section-content">
            <div class="row">
              <div class="col-md-4">
                <div class="icon-box text-center">
                  <a href="articles.html" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                    <i class="pe-7s-note2 font-weight-600 text-theme-colored2 font-48"></i>
                  </a>
                  <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="articles.html">Articles</a></h4>
                  <p>An article is a word used to modify a noun. In other words, we use articles to point out or refer to nouns in conversation and writing.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box text-center">
                  <a href="journals.html" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                    <i class="pe-7s-news-paper font-weight-600 text-theme-colored2 font-48"></i>
                  </a>
                  <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="journals.html">Journals</a></h4>
                  <p>Journalism refers to the production and distribution of reports on recent events.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box text-center">
                  <a href="research.html" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                    <i class="pe-7s-ribbon font-weight-600 text-theme-colored2 font-48"></i>
                  </a>
                  <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="research.html">Research</a></h4>
                  <p>Research comprises "creative and systematic work undertaken to increase the stock of knowledge, including knowledge of humans.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      


      <!-- Section: Services -->
    <section id="services" class="services bg-silver-light">
        <div class="container pb-20">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase title">Browse by  your specialist subject</span></h2>
                <div class="diamond-line-left-theme-colored2"></div>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-md-3">
                <div class="col3">
                 
                  <ul class="list-dashed list-icon">
                    <li><a href="astronomy.html"><i class="fa fa-angle-double-right"></i>Astronomy</a></li>
                    <li><a href="behavioral_sciences.html"><i class="fa fa-angle-double-right"></i>Behavioral Sciences</a></li>
                    <li><a href="biomedical_sciences.html"><i class="fa fa-angle-double-right"></i>Biomedical Sciences</a></li>
                    <li><a href="business_&_management.html"><i class="fa fa-angle-double-right"></i>Business & Management</a></li>
                    <li><a href="chemistry.html"><i class="fa fa-angle-double-right"></i>Chemistry</a></li>
                    <li><a href="climate.html"><i class="fa fa-angle-double-right"></i>Climate</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col3">
                  
                  <ul class="list-dashed list-icon">
                    <li><a href="computer_science.html"><i class="fa fa-angle-double-right"></i>Computer Science</a></li>
                    <li><a href="earth_sciences.html"><i class="fa fa-angle-double-right"></i>Earth Sciences</a></li>
                    <li><a href="economics.html"><i class="fa fa-angle-double-right"></i>Economics</a></li>
                    <li><a href="education_&_language.html"><i class="fa fa-angle-double-right"></i>Education & Language</a></li>
                    <li><a href="energy.html"><i class="fa fa-angle-double-right"></i>Energy</a></li>
                    <li><a href="engineering.html"><i class="fa fa-angle-double-right"></i>Engineering</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col3">
                 
                  <ul class="list-dashed list-icon">
                    <li><a href="environmental_sciences.html"><i class="fa fa-angle-double-right"></i>Environmental Sciences</a></li>
                    <li><a href="food_science_&_nutrition.html"><i class="fa fa-angle-double-right"></i>Food Science & Nutrition</a></li>
                    <li><a href="geography.html"><i class="fa fa-angle-double-right"></i>Geography</a></li>
                    <li><a href="law.html"><i class="fa fa-angle-double-right"></i>Law</a></li>
                    <li><a href="life_sciences.html"><i class="fa fa-angle-double-right"></i>Life Sciences</a></li>
                    <li><a href="materials.html"><i class="fa fa-angle-double-right"></i>Materials</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col3">
                  
                  <ul class="list-dashed list-icon">
                    <li><a href="mathematics.html"><i class="fa fa-angle-double-right"></i>Mathematics</a></li>
                    <li><a href="medicine.html"><i class="fa fa-angle-double-right"></i>Medicine</a></li>
                    <li><a href="philosophy.html"><i class="fa fa-angle-double-right"></i>Philosophy</a></li>
                    <li><a href="physics.html"><i class="fa fa-angle-double-right"></i>Physics</a></li>
                    <li><a href="social_sciences.html"><i class="fa fa-angle-double-right"></i>Social Sciences</a></li>
                    <li><a href="statistics.html"><i class="fa fa-angle-double-right"></i>Statistics</a></li>
                  </ul>
                </div>
              </div>
            </div>
        
        </div>
      </section>





      <!-- Section: Services -->
    <section id="services" class="services bg-silver-light">
        <div class="container pb-20">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase title">Latest Articles</h2>
                <div class="diamond-line-left-theme-colored2"></div>
              </div>
            </div>
          </div>

          <div class="section-content">
              <div class="row">
                <div class="col-md-12">
                  <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                    <div class="item">
                      <article class="post maxwidth400 border-1px mb-30">
                        
                        <div class="entry-content bg-white p-20">
                          <div class="entry-meta">
                            <ul class="list-inline font-12 letter-space-1 mb-0">
                              <li>POSTED BY ADMIN |</li>
                              <li>25 FEBRUARY 2019</li>
                            </ul>
                          </div>
                          <h4 class="entry-title font-weight-600 text-uppercase letter-space-1 mt-5 mb-10"><a href="art_seeing_the_trees.html" class="text-theme-colored">Seeing the trees for the (urban) forest: more-than-human geographies  </a></h4>
                         
                        </div>
                        
                      </article>
                    </div>
                    <div class="item">
                      <article class="post maxwidth400 border-1px mb-30">
                       
                        <div class="entry-content bg-white p-20">
                          <div class="entry-meta">
                            <ul class="list-inline font-12 letter-space-1 mb-0">
                              <li>POSTER BY ADMIN |</li>
                              <li>25 FEBRUARY 2019</li>
                            </ul>
                          </div>
                          <h4 class="entry-title font-weight-600 text-uppercase letter-space-1 mt-5 mb-10"><a href="res_educating_jurors.html" class="text-theme-colored">Educating jurors: technology, the Internet and the jury syste </a></h4>
                         
                        </div>
                        
                      </article>
                    </div>
                    <div class="item">
                      <article class="post maxwidth400 border-1px mb-30">
                        
                        <div class="entry-content bg-white p-20">
                          <div class="entry-meta">
                            <ul class="list-inline font-12 letter-space-1 mb-0">
                              <li>POSTER BY ADMIN |</li>
                              <li>25 FEBRUARY 2019</li>
                            </ul>
                          </div>
                          <h4 class="entry-title font-weight-600 text-uppercase letter-space-1 mt-5 mb-10"><a href="jou_network_neutrality.html" class="text-theme-colored">Network neutrality in the era of 5G – a matter of faith, hope, and design?</a></h4>
                          
                        </div>
                        
                      </article>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
        
        </div>
      </section>






      <section id="features">
        <div class="container pb-30">
          <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase title">Editor Upload</span></h2>
                <div class="diamond-line-left-theme-colored2"></div>
              </div>
            
          </div>
           
		  <section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-12 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
							<?php getblogridposts("blogs");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
				<!--//left-->
				
								
							</div>
						</div>
					</section>
         
        </div>
      </section>

      


       <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#152029">
    <div class="container pt-70 pb-40  " >
      <div class="col-md-3 " >
        <div class="widget dark ">
          <h4 class="widget-title">JUST ONINE JOURNAL</h4>
          <p class="font-14 mt-20 mb-20">Jashore University of Science and Technology Online Journal stands for a globally active publisher dedicated to the advancement of science, putting its authors and editors at the heart of the company’s publishing activities.</p>
          <a class="btn btn-default btn-sm btn-transparent mt-0" href="#">Read More</a>
          <p class="mt-20"></p>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
              <h4 class="widget-title">Information For</h4>
              <div class="latest-posts">
                <article class="post media-post clearfix pb-0 mb-10">
                 
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Authors</a></h5>
                    
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Editors</a></h5>
                    
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Librarians</a></h5>
                   
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Societies</a></h5>
                   
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
              <h4 class="widget-title">Open Access</h4>
              <div class="latest-posts">
                <article class="post media-post clearfix pb-0 mb-10">
                 
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Overview</a></h5>
                    
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Open Journals</a></h5>
                    
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Open Select</a></h5>
                   
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
              <h4 class="widget-title">Help & Info</h4>
              <div class="opening-hours">
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Help</a></h5>
                   
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">FAQs</a></h5>
                   
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Newsroom</a></h5>
                   
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Contact Us</a></h5>
                   
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="#">Commercial Services</a></h5>
                   
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#253039">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-12">
            <p class="font-16 text-black-777 text-center ">Copyright &copy;2020 JUST All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>  

   
<!-- Footer Scripts -->
<!-- JS | Chart-->
<script src="js/chart.js"></script>
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
       -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>


</html>