<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan Selection</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="{{asset('css/plan.css')}}">
  <title>Plan</title>
</head>
<body>
      
    <header>
      <div>
        <img class="logo" src="/image/tv.jpg" alt="Cable"><span style="font-weight: bold;"> Cable</span>
      </div>
      <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight:bold"><p>You're Selecting Plan for {{ $name }}</p>  </a>

    <nav>
        <ul class="nav_list">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
  </header>

    <section class="swiper mySwiper">
      <div class="swiper-wrapper">

        <div class="card swiper-slide">
          <div class="card_image">
            <img src="/image/Diamond-Logo.jpg" alt="Diamond-plan">
          </div>
          <div class="card_content">
            <span class="card_title">Diamond Plan</span>
            <span class="card_name"><span style='font-size:50px;'>&#8377;</span>499</span>
            <p class="card_text">40 Normal channels <br> 20 HD channels in Diamond Plan.</p>
            <a href="{{ route('PackageSelection', ['plan' => 'Diamond']) }}"><button class="card_btn" >View More</button></a>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card_image">
            <img src="/image/Platinum_Logo.jpg" alt="Platinum-plan">
          </div>
          <div class="card_content">
            <span class="card_title">Platinum Plan</span>
            <span class="card_name"><span style='font-size:50px;'>&#8377;</span>449</span>
            <p class="card_text">50 Normal channels <br> 10 HD channels in Platinum Plan .
            </p>
            <a href="{{ route('PackageSelection', ['plan' => 'Platinum']) }}"><button class="card_btn" >View More</button></a>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card_image">
            <img src="/image/Gold_Logo.jpg" alt="Gold-plan">
          </div>
          <div class="card_content">
            <span class="card_title">Gold Plan</span>
            <span class="card_name"><span style='font-size:50px;'>&#8377;</span>399</span>
            <p class="card_text">55 Normal channels <br> 5 HD channels in Gold Plan .
            </p>
            <a href="{{ route('PackageSelection', ['plan' => 'Gold']) }}"><button class="card_btn" >View More</button></a>
          </div>
        </div>
 
        <div class="card swiper-slide">
          <div class="card_image">
            <img src="/image/Silver_Logo.jpg" alt="Silver-plan">
          </div>
          <div class="card_content">
            <span class="card_title">Silver Plan</span>
            <span class="card_name"><span style='font-size:50px;'>&#8377;</span>349</span>
            <p class="card_text">In Silver plan 40 channels will be provided.</p>
            <a href="{{ route('PackageSelection', ['plan' => 'Silver']) }}"><button class="card_btn" >View More</button></a>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card_image">
            <img src="/image/Bronze_Logo.jpg" alt="Bronze-plan">
          </div>
          <div class="card_content">
            <span class="card_title">Bronze Plan</span>
            <span class="card_name"><span style='font-size:50px;'>&#8377;</span>299</span>
            <p class="card_text">In Bronze plan 20 channels will be provided</p>
            <a href="{{ route('PackageSelection', ['plan' => 'Bronze']) }}"><button class="card_btn" >View More</button></a>
          </div>
        </div>

      </div>
      <!-- Add pagination -->
      <div class="swiper-pagination"></div>
    </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper",{
      loop:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,

      effect:"coverflow",
      grabCursor:true,
      centcueredSlides:true,
      slidesPerView:"auto",
      coverflowEffect:{
        rotate:0,
        stretch:0,
        depth:600,
        modifier:0.2,
        slideShadows: false,
      },
      pagination: {
        el:".swiper-pagination" // Corrected the selector
      },
    });
  </script>
</body>
<footer>
  <div class="footer">&copy;<span id="year"> </span><span> Cable TV Operator Service Management System. All rights reserved.</span></div>
</footer>
</html>
