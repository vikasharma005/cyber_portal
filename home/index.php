<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Crime Report </title>

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">


    </head>
    
    <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Police Headquarters, Rajasthan
                        </p>

                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@company.com">
                                help@police.gov.in
                            </a>
                        </p>
                    </div>

                    <!-- <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
          <div class="container">
              <a class="navbar-brand" href="index.php">
                  <img src="images/Logo.png" class="logo img-fluid" alt="Crime Portal">
                  <span>
                      Cyber Portal
                      <small>Police Headquarters</small>
                  </span>
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#top">Home</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_2">About</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_3">Laws</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                      </li>

                      <li class="nav-item dropdown">
                          <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">News</a>

                          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                              <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                              <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                          </ul>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="#section_6">Contact</a>
                      </li>

                      <?php
                      //session_start();

                      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                          // User is logged in
                          echo '
                              <li class="nav-item ms-3">
                                  <a class="nav-link custom-btn custom-border-btn btn" href="logout.php">Logout</a>
                              </li>
                          ';
                      } else {
                          // User is not logged in
                          echo '
                              <li class="nav-item ms-3">
                                  <a class="nav-link custom-btn custom-border-btn btn" href="login.php">Login</a>
                              </li>
                          ';
                      }
                      ?>
                  </ul>
              </div>
          </div>
      </nav>

        <main>

            <section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slide/policek.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>be a Kind Heart</h1>
                                            
                                            <p>Professional charity theme based on Bootstrap 5.2.2</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slide/station.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Non-profit</h1>
                                            
                                            <p>You can support us to grow more</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slide/army.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Humanity</h1>
                                            
                                            <p>Please tell your friends about our website</p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Welcome to Cyber Portal</h2>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="index.php#section_4" class="d-block">
                                    <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="index.php#section_3" class="d-block">
                                    <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Cyber</strong> Laws</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="index.php#section_5" class="d-block">
                                    <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Make a <strong>Change</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"> Register an <strong>FIR</strong></p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding section-bg" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <img src="images/policeguylookingup.png" class="custom-text-box-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2">Our Story</h2>

                                <h5 class="mb-3">Cyber Portel, Police HeadQuarters</h5>

                                <p class="mb-0">The Cyber Portel a constituted body of persons empowered by a state, with the aim to enforce the law, to ensure the safety, health and possessions of citizens, and to prevent crime and civil disorder.</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <h5 class="mb-3">Our Mission</h5>

                                        <p>To reduce the crime rate and make our country crime free.</p>

                                        <ul class="custom-list mt-2">
                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Say no to Crime
                                            </li>

                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Help others
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="2022" data-speed="1000"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Founded</span>
                                        </div> 

                                        <div class="counter-thumb mt-4"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="12000" data-speed="1000"></span>
                                                <span class="counter-number-text">+</span>
                                            </div>

                                            <span class="counter-text">Cases solved</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- <section class="about-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-5 col-12">
                            <img src="images/portrait-volunteer-who-organized-donations-charity.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-md-7 col-12">
                            <div class="custom-text-block">
                                <h2 class="mb-0">Sandy Chan</h2>

                                <p class="text-muted mb-lg-4 mb-md-4">Co-Founding Partner</p>

                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>

                                <p>You are not allowed to redistribute this template ZIP file on any other template collection website. Please contact TemplateMo for more information.</p>

                                <ul class="social-icon mt-4">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section> --!>

            <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                            <a href="#" class="me-4">Make your first step</a>

                            <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2>Our Causes</h2>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="images/causes/edu.jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Right to Education</h5>

                                        <p>The Right of Children to Free and Compulsory Education Act or Right to Education Act (RTE) is an Act of the Parliament of India enacted on 4 August 2009, which describes the modalities of the importance of free and compulsory education for children between the age of 6 to 14 years in India.. 😎</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="mb-0">
                                                <strong>Educated:</strong>
                                                80+ Cr. Studentd
                                            </p>

                                            <p class="ms-auto mb-0">
                                                <strong>Goal:</strong>
                                                120+ Cr. Students
                                            </p>
                                        </div>
                                    </div>

                                    <a href="donate.html" class="custom-btn btn">Register a Case</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="images/causes/lab.jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Child Labour</h5>

                                        <p>Child labour refers to the exploitation of children through any form of work that deprives children of their childhood, interferes with their ability to attend regular school, and is mentally, physically, socially and morally harmful. Such exploitation is prohibited by legislation worldwide.. 😎</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="mb-0">
                                                <strong>Saved:</strong>
                                                20+ Cr. Childrens
                                            </p>

                                            <p class="ms-auto mb-0">
                                                <strong>Goal:</strong>
                                                100+ Cr. Childrens
                                            </p>
                                        </div>
                                    </div>

                                    <a href="donate.html" class="custom-btn btn">Register a Case</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block-wrap">
                                <img src="images/causes/water (1).jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Water Management law</h5>


                                        <p>These include laws on embankments, drinking water supply, irrigation, floods, water conservation, river water pollution, rehabilitation of evacuees and displaced persons, fisheries and ferries. Article 21 of the Indian Constitution guarantees to all persons a fundamental right to life worldwide.. 😎</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="mb-0">
                                                <strong>Saved:</strong>
                                                10+ Cr. Gallon 
                                            </p>

                                            <p class="ms-auto mb-0">
                                                <strong>Goal:</strong>
                                                20+ Cr. Gallon
                                            </p>
                                        </div>
                                    </div>

                                    <a href="donate.html" class="custom-btn btn">Register a Crime</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="volunteer-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-4">Volunteer</h2>
                            <?php
                              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                  // Retrieve form data
                                  $name = $_POST["volunteer-name"];
                                  $email = $_POST["volunteer-email"];
                                  $subject = $_POST["volunteer-subject"];
                                  $message = $_POST["volunteer-message"];

                                  // Connect to the database
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "";
                                  $dbname = "registered";

                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }

                                  // Insert data into the database
                                  $sql = "INSERT INTO volunteers (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

                                  if ($conn->query($sql) === TRUE) {
                                      echo "Data inserted successfully";
                                  } else {
                                      echo "Error: " . $sql . "<br>" . $conn->error;
                                  }

                                  // Close the database connection
                                  $conn->close();
                              }
                              ?>

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <h3 class="mb-4">Become a volunteer today</h3>

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="Jack Doe" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Subject" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="input-group input-group-file">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            
                                            <label class="input-group-text" for="inputGroupFile02">Upload your Aadhar card</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div>
                                    </div>
                                </div>

                                <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                                <button type="submit" class="form-control">Submit</button>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="images/voluntter.png" class="volunteer-image img-fluid" alt="">

                            <div class="custom-block-body text-center">
                                <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                                <p class="text-white">Volunteers can be an important part of any organization and are proven to be a valuable asset to law enforcement agencies. Many volunteer with their law enforcement to fulfill civic responsibility and to give back to officers that provide for their safety.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="news-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5">
                            <h2>Latest News</h2>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div class="news-block">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Lifestyle,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Clothing Donation
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                October 12, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                By Admin
                                            </p>
                                        </div>

                                        <div class="news-block-comment">
                                            <p>
                                                <i class="bi-chat-left custom-icon me-1"></i>
                                                32 Comments
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to urban area</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based on Bootstrap</p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block mt-3">
                                <div class="news-block-top">
                                    <a href="news-detail.html">
                                        <img src="images/news/medium-shot-people-collecting-foodstuff.jpg" class="news-image img-fluid" alt="">
                                    </a>

                                    <div class="news-category-block">
                                        <a href="#" class="category-block-link">
                                            Food,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Donation,
                                        </a>

                                        <a href="#" class="category-block-link">
                                            Caring
                                        </a>
                                    </div>
                                </div>

                                <div class="news-block-info">
                                    <div class="d-flex mt-2">
                                        <div class="news-block-date">
                                            <p>
                                                <i class="bi-calendar4 custom-icon me-1"></i>
                                                October 20, 2036
                                            </p>
                                        </div>

                                        <div class="news-block-author mx-5">
                                            <p>
                                                <i class="bi-person custom-icon me-1"></i>
                                                By Admin
                                            </p>
                                        </div>

                                        <div class="news-block-comment">
                                            <p>
                                                <i class="bi-chat-left custom-icon me-1"></i>
                                                35 Comments
                                            </p>
                                        </div>
                                    </div>

                                    <div class="news-block-title mb-2">
                                        <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h4>
                                    </div>

                                    <div class="news-block-body">
                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto">
                            <form class="custom-form search-form" action="#" method="get" role="form">
                                <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">

                                <button type="submit" class="form-control">
                                    <i class="bi-search"></i>
                                </button>
                            </form>

                            <h5 class="mt-5 mb-3">Recent news</h5>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="images/news/africa-humanitarian-aid-doctor.jpg" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 16, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="news-block news-block-two-col d-flex mt-4">
                                <div class="news-block-two-col-image-wrap">
                                    <a href="news-detail.html">
                                        <img src="images/news/close-up-happy-people-working-together.jpg" class="news-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="news-block-two-col-info">
                                    <div class="news-block-title mb-2">
                                        <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a></h6>
                                    </div>

                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 24, 2036
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="category-block d-flex flex-column">
                                <h5 class="mb-3">Categories</h5>

                                <a href="#" class="category-block-link">
                                    Drinking water
                                    <span class="badge">20</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Food Donation
                                    <span class="badge">30</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Children Education
                                    <span class="badge">10</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Poverty Development
                                    <span class="badge">15</span>
                                </a>

                                <a href="#" class="category-block-link">
                                    Clothing Donation
                                    <span class="badge">20</span>
                                </a>
                            </div>

                            <div class="tags-block">
                                <h5 class="mb-3">Tags</h5>

                                <a href="#" class="tags-block-link">
                                    Donation
                                </a>

                                <a href="#" class="tags-block-link">
                                    Clothing
                                </a>

                                <a href="#" class="tags-block-link">
                                    Food
                                </a>

                                <a href="#" class="tags-block-link">
                                    Children
                                </a>

                                <a href="#" class="tags-block-link">
                                    Education
                                </a>

                                <a href="#" class="tags-block-link">
                                    Poverty
                                </a>

                                <a href="#" class="tags-block-link">
                                    Clean Water
                                </a>
                            </div>

                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                // Check if the 'subscribe-email' key is set
                                if (isset($_GET['subscribe-email'])) {
                                    // Establish connection to the database
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "registered";

                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Retrieve the email from the form
                                    $email = $_GET['subscribe-email'];

                                    // Insert the email into the database
                                    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";

                                    if ($conn->query($sql) === true) {
                                        echo "Thank you for subscribing!";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }

                                    // Close the database connection
                                    $conn->close();
                                }
                            }
                            ?>

                            <form class="custom-form subscribe-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get" role="form">
                                <h5 class="mb-4">Newsletter Form</h5>
                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required>
                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control">Subscribe</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </section>


            <section class="testimonial-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="mb-lg-3">Happy Volunteers</h2>
                            
                                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           <div class="carousel-caption">
                                                <h4 class="carousel-title">Great place to volunteer to help and assist community also to learn about the operation of the police and their procedure. Also help educate people of the community. </h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Mohini</span>, Volunteer</small>
                                           </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Great organization! I fell in love with the aspect of the job, being the one whom society looks to and just the bond that you create amongst each other.</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Ram</span>, Admin</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Well with opportunity, it really wasn't a job it was voluntary. I had to help the Police officers track down those who were doing selling illegal items to under age and individuals.</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Tanvi</span>, Advisor</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">On a typical volunteer day, we'd meet and discuss what community projects we'd tackle during the week. Our group leader, assisted us in my favorite part of the job.</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Samarth</span>, Volunteer</small>
                                           </div>
                                        </div>

                                          <ol class="carousel-indicators">
                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                                    <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                                    <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                                    <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                                    <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>
                                          </ol>

                                 </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                            <div class="contact-info-wrap">
                                <h2>Get in touch</h2>

                                <div class="contact-image-wrap d-flex flex-wrap">
                                    <img src="images/Logo.png" class="img-fluid avatar-image" alt="">

                                    <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0">Cyber Portel</p>
                                        <p class="mb-0"><strong>Police Headquarters</strong></p>
                                    </div>
                                </div>

                                <div class="contact-info">
                                    <h5 class="mb-3">Contact Infomation</h5>

                                    <p class="d-flex mb-2">
                                        <i class="bi-geo-alt me-2"></i>
                                        Police Headquarters, India
                                    </p>

                                    <p class="d-flex mb-2">
                                        <i class="bi-telephone me-2"></i>

                                        <a href="tel: 120-240-9600">
                                            120-240-9600
                                        </a>
                                    </p>

                                    <p class="d-flex">
                                        <i class="bi-envelope me-2"></i>

                                        <a href="mailto:info@yourgmail.com">
                                            help@police.gov.in
                                        </a>
                                    </p>

                                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto">
                        <?php
                          // Check if the form is submitted
                          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              // Retrieve form data
                              $firstName = $_POST["first-name"];
                              $lastName = $_POST["last-name"];
                              $email = $_POST["email"];
                              $message = $_POST["message"];

                              // Database connection parameters
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "registered";

                              // Create a new PDO instance
                              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                              // Prepare and execute the SQL query
                              $stmt = $conn->prepare("INSERT INTO contact (first_name, last_name, email, message) VALUES (:firstName, :lastName, :email, :message)");
                              $stmt->bindParam(":firstName", $firstName);
                              $stmt->bindParam(":lastName", $lastName);
                              $stmt->bindParam(":email", $email);
                              $stmt->bindParam(":message", $message);
                              $stmt->execute();

                              // Close the database connection
                              $conn = null;

                              // Redirect to a success page or display a success message
                              header("Location: success.php");
                              exit;
                          }
                          ?>

                          <!-- HTML code with the form -->
                          <form class="custom-form contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
                              <h2>Contact form</h2>
                              <p class="mb-4">Or, you can just send an email: <a href="#">help@police.gov.in</a></p>
                              <div class="row">
                                  <div class="col-lg-6 col-md-6 col-12">
                                      <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Jack" required>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-12">
                                      <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" required>
                                  </div>
                              </div>
                              <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                              <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>
                              <button type="submit" class="form-control">Send Message</button>
                          </form>

                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-4">
                        <img src="images/Logo.png" class="logo img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Quick Links</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Cyber Laws</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel: 120-240-9600" class="site-footer-link">
                                120-240-9600
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                help@police.gov.in
                            </a>
                        </p>

                        <p class="text-white d-flex mt-3">
                            <i class="bi-geo-alt me-2"></i>
                            Police Headquarters, Rajasthan
                        </p>

                        <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © 2022 <a href="#">Government of India.</a> 
                        	</p>
                        </div>
                        
                        <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
