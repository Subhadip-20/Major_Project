<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cable Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"  href="{{ asset('css/homepage.css') }}">
    <style>
    .search-container {
      display: flex;
    }

    .search-input {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .search-button {
        background: #fff;
      font-size: 20px;
      cursor: pointer;
    }
    
    .logo-img {
        width: 40px;
        height: auto; 
    }
    
  </style>
</head>
<body>
<div class="background-image"></div> 
<header>
<img src="{{ asset('image/tv.jpg') }}" alt="Logo"  class="logo-img" >
<p class="logo">Cable</p>
    <div id="menu-bar" class="fas fa-bars"></div>
<!-- <form action="search.php" method="GET">
    <div class="search-container"> -->
      <!-- <input type="text" class="search-input" name="search_query" placeholder="Search..."> -->
      <!-- <button type="submit" class="search-button"> -->
        <!-- <span>&#128269;</span>  -->
      <!-- </button>
    </div>
  </form> -->
    </div>
    <nav class="navbar">
        <!-- <a style="--i:0;" href="#home">Home</a>
        <a style="--i:1;" href="#features">Features</a>
        <a style="--i:2;" href="#project">Project</a>
        <a style="--i:3;" href="#services">Plans</a>
        <a style="--i:4;" href="#sservices">Packages</a>
        <a style="--i:5;" href="#team">Team</a>
        <a style="--i:6;" href="#contact">Contact us</a> -->
    </nav>
    <!-- <a style="--i:6;" id="lloginButton" ><b>Logout</b></a> -->
    <!-- homepage.blade.php -->

<form action="{{ route('admin.logout.submit') }}" method="POST">
    @csrf
    <button style="--i:6;" id="lloginButton" type="submit">Logout</button>
</form>

</header>



<section class="home" id="home">
    <div class="content">
        <h1>Channels for all your entertainment <br><br> Your trusted partner for all entertainment needs.</h1>
        <a href="#services" class="btn">Explore plans</a>
    </div>
</section>



<section class="features" id="features">
    
    <h2 class="heading"><b>Why choose our company?</b></h2>
    <p style="font-weight: bold;">Experience seamless TV cable management with our intuitive software, tailored to enhance efficiency and customer satisfaction. Streamline operations, improve service quality, and stay ahead in the industry with our advanced solutions.</p>
    <div class="box-container">

        <div class="box">
            <img src="{{ asset('image/regis1.webp') }}" alt="" height="150" width="150">
            <h3><b>Customer Registration</b></h3>
            <p>Unlock a world of personalized benefits and exclusive access by registering with us today, ensuring you never miss out on the latest offers.</p>
           <a href="{{route('Customer_registration')}}"> <button class="btn" id="feature1">Read More</button></a>
                <!-- <div id="feature1-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="image/fe1.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>High Quality</h1>
                                <p>We use high quality materials, professional tools and supplies and attention to detail not found in most home improvement companies. From small jobs to large ones, you can relay on the experience.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>

        <div class="box">
            <img src="{{ asset('image/custo.webp') }}" alt="" height="150" width="150">
            <h3><b>User Management</b></h3>
            <p>Streamline your experience and take control with our user management system, empowering you to customize preferences, track usage, and enhance security effortlessly         .<br><br></p>
            <a href="{{route('user_manage')}}"> <button class="btn" id="feature1">Read More</button></a>
                <!-- <div id="feature2-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="image/fe2.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>Professionalism</h1>
                                <p>Our experts exemplify unparalleled professionalism in their work. With deep knowledge, precision, and dedication, they consistently deliver high-quality results, setting the gold standard for excellence in our field.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>

        <div class="box">
            <img src="{{ asset('image/payment.webp') }}" alt="" height="150" width="150">
            <h3><b>Payment and Payment log</b></h3>
            <p>Simplify your transactions and stay informed with our payment system, offering seamless and secure transactions and log for your own convenience.<br></p>
             <button class="btn" id="loginButton">Read More</button>
                <!-- <div id="feature3-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="image/fe3.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>Flexibility</h1>
                                <p>You don't have to pay the most to get great work. Because each home repair project is unique, we create a customised plan that fits each customer's specific needs an expectations.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
        <div class="popup-container" id="loginPopupContainer">
    <div class="popup">
        <span class="close-popup" id="closePopup">&times;</span>
        <h2>Choose Payment or Payment log</h2>
        <div class="login">
            <a class="customer-button" href="{{route('Plan')}}" id="customerLoginButton" style="--i:7;"></a>
            <span id="cb">Payment</span>
        </div>
        <div class="login">
            <a class="provider-button" href="{{route('C_LOGIN')}}" id="providerLoginButton" style="--i:8;"></a>
            <span id="pb">Logs</span>
        </div>
    </div>
</div>

        <div class="box">
            <img src="{{ asset('image/service.webp') }}" alt="" height="150" width="150">
            <h3><b>Service Managemnt</b></h3>
            <p>We see this as an opportunity to save our customer's time, energy and frustations. Our customer's also appreciate the timely communication we provide regarding the questions and concerns.</p>
            <a href="C_LOGIN.html"> <button class="btn" id="feature1">Read More</button></a>
                <!-- <div id="feature4-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="image/fe4.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>Courteous</h1>
                                <p>We see this as an opportunity to save our customer's time, energy and frustations. Our customer's also appreciate the timely communication we provide regarding the questions and concerns.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                
        </div>
        
    </div>

</section>

<section class="project" id="project">

    <h2 class="heading"><b>Reliable, Trusted and Professional Services</b></h2>
    <p>At Home Service Provider, we take pride in offering a comprehensive range of services that are built on the pillars of reliability, trustworthiness, and professionalism. We understand that your home is your sanctuary, and you deserve nothing but the best when it comes to maintaining and improving it.</p>
    <div class="box-container">

        <div class="box">
            <span class="number">01</span>
            <img src="{{ asset('image/realibility.png') }}" alt="" height="250" width="330" >
            <div class="info">
                <h3>Reliability</h3>
                <p>The quality of the platform is being able to be trusted or believed because of it's best working and behaving character.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">02</span>
            <img src="{{asset('image/trustworthiness1.png')}}" alt="" height="250" width="320">
            <div class="info">
                <h3>Trustworthiness</h3>
                <p>It is a very secure platform that can be entrusted with your secrets or with anything else of importance.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">03</span>
            <img src="{{asset('image/remote.png')}}" alt="" height="250" width="310" position="center">
            <div class="info">
                <h3>Quality Connections</h3>
                <p>It is the quality that comes from creating with passion, care, and attention to detail</p>
            </div>
        </div>

        <div class="box">
            <span class="number">04</span>
            <img src="{{asset('image/customercentricapproch.png')}}" alt="" height="247" width="305">
            <div class="info">
                <h3>Customer-Centric Approach</h3>
                <p>we put our customers first and at the core of our business in order to provide a positive experience and build long-term relationships.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">05</span>
            <img src="{{asset('image/affordablity.png')}}" alt="" height="247" width="310">
            <div class="info">
                <h3>Affordability</h3>
                <p>It is such a platform where the customers get cheap enough at any service.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">06</span>
            <img src="{{asset('image/customer-satisfaction.png')}}" alt="" height="250" width="365">
            <div class="info">
                <h3>Customer Satisfaction</h3>
                <p>It determines that how happy customers are with a company's products, services, and capabilities.</p>
            </div>
        </div>
        
    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our plans </h1>
    <div class="box-container">

        <div class="box">
            <img src="{{asset('image/Bronze_Logo.jpg')}}" alt="" height="150" width="150">
            <h3>Bronze Plan</h3>
            <p>Dive into lots of entertainment with our Bronze Plan. You get 60 channels with all kinds of shows: dramas, documentaries, sports, lifestyle, and more. There’s something fun for everyone!</p>
            <button class="btn" id="service1">Read More</button>
                <div id="service1-popup" class="modal">
                    <div class="modal-content">
                        <span id="service1-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="{{asset('image/Bronze_Logo.jpg')}}" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Bronze Plan</h2>
                                <p id="popup-p">Dive into lots of entertainment with our Bronze Plan. You get 60 channels with all kinds of shows: dramas, documentaries, sports, lifestyle, and more. There’s something fun for everyone!</p>
                            </div>
                        </div>
                        <a href="{{route('customer_check')}}">
                        <button id="book-service1" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="{{asset('image/Silver_Logo.jpg')}}" alt="" height="150" width="150">
            <h3>Silver Plan</h3>
            <p>Enjoy a mix of 50 regular channels and 10 HD channels with our Silver Plan, bringing you a diverse range of entertainment options to elevate your viewing experience</p>
            <button class="btn" id="service2">Read More</button>
                <div id="service2-popup" class="modal">
                    <div class="modal-content">
                        <span id="service2-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="{{asset('image/Silver_Logo.jpg')}}" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Silver Plan</h2>
                                <p id="popup-p">Enjoy a mix of 50 regular channels and 10 HD channels with our Silver Plan, bringing you a diverse range of entertainment options to elevate your viewing experience</p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-service2" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="{{asset('image/Gold_Logo.jpg')}}" alt="" height="150" width="150">
            <h3>Gold Plan</h3>
            <p>Indulge in a rich selection of 60 regular channels and 20 HD channels with our Gold Plan, ensuring you have access to a wide variety of content in stunning high definition!</p>
            <button class="btn" id="service3">Read More</button>
                <div id="service3-popup" class="modal">
                    <div class="modal-content">
                        <span id="service3-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image/Gold_Logo.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Gold Plan</h2>
                                <p id="popup-p">Indulge in a rich selection of 60 regular channels and 20 HD channels with our Gold Plan, ensuring you have access to a wide variety of content in stunning high definition!</p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-service3" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image/Diamond-Logo.jpg" alt="" height="150" width="150">
            <h3>Diamond Plan</h3>
            <p>Experience the best of both worlds with our Diamond Plan, offering 60 regular channels and an impressive 40 HD channels. Dive into a world of high-quality entertainment like never before!</p>
            <button class="btn" id="service4">Read More</button>
                <div id="service4-popup" class="modal">
                    <div class="modal-content">
                        <span id="service4-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image/Diamond-Logo.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Diamond Plan</h2>
                                <p id="popup-p">Experience the best of both worlds with our Diamond Plan, offering 60 regular channels and an impressive 40 HD channels. Dive into a world of high-quality entertainment like never before!</p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-service4" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image/Platinum_Logo.jpg" alt="" height="150" width="150">
            <h3>Platinum Plan</h3>
            <p>Elevate your entertainment experience to new heights with our Platinum Plan, featuring 60 regular channels and an extensive 60 HD channels lineup. Immerse yourself in crystal-clear visuals and top-notch content across a range of genres!</p>
            <button class="btn" id="service5">Read More</button>
                <div id="service5-popup" class="modal">
                    <div class="modal-content">
                        <span id="service5-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image/Platinum_Logo.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Platinum Plan</h2>
                                <p  id="popup-p">Elevate your entertainment experience to new heights with our Platinum Plan, featuring 60 regular channels and an extensive 60 HD channels lineup. Immerse yourself in crystal-clear visuals and top-notch content across a range of genres!</p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-service5" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        
</section>


<section class="services" id="sservices">

    <h1 class="heading"> our packages </h1>
    <div class="box-container">

        <div class="box">
            <img src="image\Star.png" alt="" height="150" width="150">
            <h3>Star SD Channels</h3>
            <p>Elevate your viewing experience with our Star SD package, delivering a stellar lineup of premium channels for unparalleled entertainment.<br><br></p>
            <button class="btn" id="sservice1">Read More</button>
                <div id="sservice1-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice1-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\Star.png" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Star SD Channels</h2>
                                <p id="popup-p">
                                    This package includes: <br>
                                        ○ Star Plus SD<br>
                                        ○ Star Jalsha<br>
                                        ○ Star Bharat <br>
                                        ○ Star Utsav <br>
                                        ○ Star Gold <br>
                                        and many more<br>
                                        
                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice1" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\Zee.png" alt="" height="150" width="150">
            <h3>Zee SD Channel</h3>
            <p>Immerse yourself in top-notch entertainment with our Zee SD package, offering a diverse array of high-quality channels to cater to every viewer's preferences</p>
            <button class="btn" id="sservice2">Read More</button>
                <div id="sservice2-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice2-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\Zee.png" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Zee SD Channel</h2>
                                <p id="popup-p">
                                    This package includes: <br>
                                    ○ Zee TV SD<br>
                                    ○ Zee Bangla SD<br>
                                    ○ Zee Cinema SD<br>
                                    ○ Zee News SD<br>
                                    ○ Zee News Bangla SD<br>
                                    and many more<br>
                                    
                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice2" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\Sony.png" alt="" height="150" width="150">
            <h3>Sony SD channel</h3>
            <p>Dive into a world of captivating content with our Sony SD package, bringing you the latest and greatest shows and movies from one of the industry's leading networks.</p>
            <button class="btn" id="sservice3">Read More</button>
                <div id="sservice3-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice3-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\Sony.png" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Sony SD channel</h2>
                                <p id="popup-p">This package includes <br>
                                    ○ Sony Set SD<br>
                                    ○ Sony pal SD<br>
                                    ○ Sony  Mix SD<br>
                                    ○ Sony Yay! SD<br>
                                    ○ Sony Aath SD<br>
                                    and many more<br>

                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice3" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\43. Colorstv-logo-black-background.webp" alt="" height="150" width="150">
            <h3>Colors SD Channel</h3>
            <p>Experience a spectrum of excitement with our Colors SD package, delivering vibrant programming and compelling storytelling to captivate every viewer.</p>
            <button class="btn" id="sservice4">Read More</button>
                <div id="sservice4-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice4-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\43. Colorstv-logo-black-background.webp" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Cook</h2>
                                <p id="popup-p">
                                    This package includes :<br>
                                    ○ Colors Tv SD<br>
                                    ○ Colors Bangla SD<br>
                                    ○ News 18 SD<br>
                                    ○ News 18 Bangla SD<br>
                                    ○ CNN News 18 SD<br>
                                    and many more<br>

                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice4" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\58. StarSports3India.webp" alt="" height="150" width="150">
            <h3>Sports SD Channel</h3>
            <p>Embark on an interstellar journey of entertainment with our Star SD package, featuring a constellation of premier channels that promise stellar viewing experiences.</p>
            <button class="btn" id="sservice5">Read More</button>
                <div id="sservice5-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice5-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\58. StarSports3India.webp" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Sports SD Channel</h2>
                                <p  id="popup-p">
                                    This package includes :<br>
                                    ○ Star Sports 1<br>
                                    ○ Star Sports 2<br>
                                    ○ Star Sports 3<br>
                                    ○ Star Sports Hindi<br>
                                    ○ DD Sports<br>
                                    and many more<br>

                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice5" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\78. Nick_Jr._logo.svg" alt="" height="150" width="150">
            <h3>Kids SD Channel</h3>
            <p>Spark imagination and delight with our Kids SD package, offering a treasure trove of fun and educational content to keep young minds engaged and entertained.</p>
            <button class="btn" id="sservice6">Read More</button>
                <div id="sservice6-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice6-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\78. Nick_Jr._logo.svg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Kids SD Channel</h2>
                                <p id="popup-p">
                                    This package contain :<br>
                                    ○ Cartoon Network<br>
                                    ○ Discovery Kids<br>
                                    ○ Disney Channel<br>
                                    ○ Disney Junior<br>
                                    ○ ETV Bal Bharat<br>
                                    and many more<br>

                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice6" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\Star.png" alt="" height="150" width="150">
            <h3>Star HD Channels</h3>
            <p>Dive into a realm of high-definition excellence with our Star HD package, bringing you the best of entertainment with pristine clarity and immersive viewing experiences.</p>
            <button class="btn" id="sservice7">Read More</button>
                <div id="sservice7-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice7-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\Star.png" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Star HD Channels</h2>
                                <p id="popup-p">This package includes: <br>
                                    ○ Star Plus HD<br>
                                    ○ Star Jalsha HD<br>
                                    ○ Star Bharat HD<br>
                                    ○ Star Utsav HD<br>
                                    ○ Star Gold HD<br>
                                    and many more<br>
                                  </p>
                            </div>
                        </div>
                        <a href="{{route('customer_check')}}">
                        <button id="book-sservice7" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\Zee.png" alt="" height="150" width="150">
            <h3>Zee HD Channels</h3>
            <p>Elevate your viewing to the next level with our Zee HD package, delivering crisp visuals and immersive sound for an unparalleled entertainment experience.</p>
            <button class="btn" id="sservice8">Read More</button>
                <div id="sservice8-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice8-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\Zee.png" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Zee HD Channels</h2>
                                <p id="popup-p">
                                    This package includes: <br>
                                    ○ Zee TV HD<br>
                                    ○ Zee Bangla HD<br>
                                    ○ Zee Cinema HD<br>
                                    ○ Zee News HD<br>
                                    ○ Zee News Bangla HD<br>
                                    and many more<br>
                                    
                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice8" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\Sony.png" alt="" height="150" width="150">
            <h3>Sony HD Channels</h3>
            <p>Immerse yourself in cinematic brilliance with our Sony HD package, offering a rich tapestry of high-definition content ranging from blockbuster movies to captivating series.</p>
            <button class="btn" id="sservice9">Read More</button>
                <div id="sservice9-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice9-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\Sony.png" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Sony HD Channels</h2>
                                <p id="popup-p">
                                    This package includes <br>
                                    ○ Sony Set HD<br>
                                    ○ Sony pal HD<br>
                                    ○ Sony  Mix HD<br>
                                    ○ Sony Yay! HD<br>
                                    ○ Sony Aath HD<br>
                                    and many more<br>
                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice9" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>
        <div class="box">
            <img src="image\43. Colorstv-logo-black-background.webp" alt="" height="150" width="150">
            <h3>Colors HD Channel</h3>
            <p>Step into a world of vibrant colors and stunning visuals with our Colors HD package, where every moment comes to life in breathtaking high definition.</p>
            <button class="btn" id="sservice10">Read More</button>
                <div id="sservice10-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice10-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\43. Colorstv-logo-black-background.webp" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Colors HD Channel</h2>
                                <p id="popup-p">
                                    This package includes :<br>
                                    ○ Colors Tv HD<br>
                                    ○ Colors Bangla HD<br>
                                    ○ News 18 HD<br>
                                    ○ News 18 Bangla HD<br>
                                    ○ CNN News 18 HD<br>
                                    and many more<br> 
                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice10" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\58. StarSports3India.webp" alt="" height="150" width="150">
            <h3>Sports HD Channels</h3>
            <p>Experience the thrill of victory and the intensity of every match with our Sports HD package, delivering heart-pounding action and unmatched clarity for sports enthusiasts.</p>
            <button class="btn" id="sservice11">Read More</button>
                <div id="sservice11-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice11-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\58. StarSports3India.webp" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Sports HD Channels</h2>
                                <p id="popup-p">
                                    This package includes :<br>
                                    ○ Star Sports 1<br>
                                    ○ Star Sports 2<br>
                                    ○ Star Sports 3<br>
                                    ○ Star Sports Hindi<br>
                                    ○ DD Sports<br>
                                    and many more<br>
                                </p>
                            </div>
                        </div>
                         <a href="{{route('Plan')}}">
                        <button id="book-sservice11" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="image\78. Nick_Jr._logo.svg" alt="" height="150" width="150">
            <h3>Kids HD Channel</h3>
            <p>Ignite imagination and wonder with our Kids HD package, providing a kaleidoscope of colorful adventures and educational content in dazzling high definition</p>
            <button class="btn" id="sservice12">Read More</button>
                <div id="sservice12-popup" class="modal">
                    <div class="modal-content">
                        <span id="sservice12-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="image\78. Nick_Jr._logo.svg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Kids HD Channel</h2>
                                <p id="popup-p">
                                    This package contain :<br>
                                    ○ Cartoon Network HD<br>
                                    ○ Discovery Kids HD<br>
                                    ○ Disney Channel HD<br>
                                    ○ Disney Junior HD<br>
                                    ○ ETV Bal Bharat HD<br>
                                    and many more<br>
                                </p>
                            </div>
                        </div>
                        <a href="{{route('Plan')}}">
                        <button id="book-sservice12" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        
    </div>
</div>
</section>

<section class="team" id="team">

    <h1 class="heading">our team</h1>
    <div class="box-container">

        <div class="box">
            <img src="image/Arpita.jpeg" alt="">
            <h3>Arpita Das</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100022029309679&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/sourashis_ghosh?igshid=NzZlODBkYWE4Ng==" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/sourashis-ghosh-775a66246" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/dipanwita.jpg" alt="">
            <h3>Dipanwita Pramanik</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100070991185829" class="fab fa-facebook-f"></a>
                <a href="https://www.instagram.com/paramanik_dipanwita_02?igsh=eHE1OWVlYmNjbHpj" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/dipanwita-paramanik-489b14235" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/subhadip2.jpg" alt="">
            <h3>Subhadip Das</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100041144290769&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/the_ghosted_island?igshid=NzZlODBkYWE4Ng==" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/subhadip-das-34206724a" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/anish.jpg" alt="">
            <h3>Anish Das</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/kuheli.ghosh.777701?mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/kuhelighosh2004?igshid=NzZlODBkYWE4Ng==" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/anish-das-741a44247?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/agamani.jpg" alt="">
            <h3>Agamani Bannerjee</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100058735253060&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/art_world_dsr?igshid=MmU2YjMzNjRlOQ" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/diyasha-singha-roy-1baa79246" class="fab fa-linkedin"></a>
            </div>
        </div>

        <!-- <div class="box">
            <img src="image/annaya.jpg" alt="">
            <h3>Annaya Mukherjee</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100055283026328" class="fab fa-facebook-f"></a>
                <a href="https://www.linkedin.com/in/ananya-mukherjee-032432285" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/ananya-mukherjee-032432285" class="fab fa-linkedin"></a>
            </div>
        </div> -->

    </div>

</section>


<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
              <!-- <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
              <p>Don’t miss any updates of our new templates and extensions.!</p> -->
              <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                <!-- <input type="text" name="EMAIL" class="form-control memail" placeholder="Email"> -->
                <!-- <button class="btn btn_get btn_get_two" type="submit">Subscribe</button> -->
                <p class="mchimp-errmessage" style="display: none;"></p>
                <p class="mchimp-sucmessage" style="display: none;"></p>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
              <!-- <h3 class="f-title f_600 t_color f_size_18">Download</h3>
              <ul class="list-unstyled f_list">
                <li><a href="#">Company</a></li>
                <li><a href="#">Android App</a></li>
                <li><a href="#">ios App</a></li>
                <li><a href="#">Desktop</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">My tasks</a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
              <!-- <h3 class="f-title f_600 t_color f_size_18">Help</h3>
              <ul class="list-unstyled f_list">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Term &amp; conditions</a></li>
                <li><a href="#">Reporting</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Support Policy</a></li>
                <li><a href="#">Privacy</a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
              <!-- <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3> -->
              <div class="f_social_icon">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bg">
        <div class="footer_bg_one"></div>
        <div class="footer_bg_two"></div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-7">
            <p class="mb-0 f_400">© cakecounter Inc.. 2019 All rights reserved.</p>
          </div>
          <div class="col-lg-6 col-sm-5 text-right">
            <p>Made with <i class="icon_heart"></i> in <a href="http://cakecounter.com" target="_blank">CakeCounter</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="{{ asset('jss/homepage.js') }}"></script>

</body>
</html>