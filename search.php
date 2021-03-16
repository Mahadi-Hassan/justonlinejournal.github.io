<?php require("libs/fetch_data.php");?>
<?php
define("ROW_PER_PAGE",6);
require_once('database/db.php');//db config file
?>




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












<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Page Title -->
<title>JUST ONLINE JOURNAL</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">


<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>

<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
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
              <ul class="list-inline xs-text-center text-white">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i> 123-456-789</a> </li>
                <li class="m-0 pl-10 pr-10"> 
                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> contact@yourdomain.com</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <li class="m-0 pl-10"> <a href="blogadmin/index.php" class="text-white "><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
              <li class="m-0 pl-0 pr-10"> 
                <a href="blogadmin/membership_signup.php" class="text-white "><i class="fa fa-edit mr-5"></i>Register</a> 
              </li>
            </ul>
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













  


      

      


   
        



        <?php	
    $search_keyword = '';
    if(!empty($_POST['search']['keyword'])) {
    	$search_keyword = $_POST['search']['keyword'];
    }
    $sql = 'SELECT * FROM blogs WHERE title LIKE :keyword OR content LIKE :keyword  OR tags LIKE :keyword OR author LIKE :keyword ORDER BY id DESC ';
    
    /* Pagination Code starts */
    $per_page_html = '';
    $page = 1;
    $start=0;
    if(!empty($_POST["page"])) {
    	$page = $_POST["page"];
    	$start=($page-1) * ROW_PER_PAGE;
    }
    $limit=" limit " . $start . "," . ROW_PER_PAGE;
    $pagination_statement = $pdo_conn->prepare($sql);
    $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pagination_statement->execute();

    $row_count = $pagination_statement->rowCount();
    if(!empty($row_count)){
    	$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
    	$page_count=ceil($row_count/ROW_PER_PAGE);
    	if($page_count>1) {
    		for($i=1;$i<=$page_count;$i++){
    			if($i==$page){
    				$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current btn-warning" />';
    			} else {
    				$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page btn-danger" />';
    			}
    		}
    	}
    	$per_page_html .= "</div>";
    }

    $query = $sql.$limit;
    $pdo_statement = $pdo_conn->prepare($query);
    $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    ?>
    
    
    
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Search Results</h3>
			<div class="inner-sec">
				<?php  if ($row_count==0) {
		# code...
    						echo "<p style=color:#E9573F><b>sorry your search for:<u style=color:black>$search_keyword</u> returned zero results</b></p>";
    						echo "<p><b style=color:#4FC1E9>Suggestions<b><br>Your search item is not available on Our Website<br>Try being more specific with key words<br>Enter key word using title<br>Try search using category<br>Try again later<br></p>";
    						echo "<p><a href=\"http://www.google.com/search?q=" 
    						. $search_keyword . "\" target=\"_blank\" title=\"Look up 
    						" . $search_keyword . " on Google\" style=color:#37BC9B>Click here</a> to try the 
    						search on google</p>";
    					}
    					else{
    						echo "<p style=color:#4FC1E9><b>you searched for:<u style=color:black> $search_keyword</u></b></p>";
    						echo "<p style=color:#37BC9B><b>Results($row_count)..</b></p>";
    					}
    					?>
				<!--left-->
				<div class="left-blog-info-w3layouts-agileits text-left">
					<div class="row">
						<?php
    					if(!empty($result)) { 
    						foreach($result as $row) {
                                ?>
						<div class="col-lg-4 card">
							<a href="single.php?id=<?php echo $row['id']; ?>">
								<img src="blogadmin/images/<?php echo $row['photo']; ?>" class="card-img-top img-fluid" alt="fantastic cms" style="width: 480px;height: 300px">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="fa fa-calendar-alt"></i> <?php echo $row['date']; ?></a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="fa fa-user"></i><?php echo $row['author']; ?></a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-tags"></i><?php echo $row['tags']; ?></a>
									</li>

								</ul>
								<h5 class="card-title">
									<a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
								</h5>
								<a href="single.php?id=<?php echo $row['id']; ?>" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<?php
                                  }
                              }
                              ?>
                              
                              <?php echo $per_page_html; ?>
					</div>
					<!--//left-->
				</div>
			</div>
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
                    <h5 class="post-title mt-0 mb-5"><a href="#">Newseoom</a></h5>
                   
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
            <p class="font-16 text-black-777 text-center ">Copyright &copy;2019 JUST All Rights Reserved</p>
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