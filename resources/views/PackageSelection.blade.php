<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Channel Selection</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: whitesmoke;
    }
    header {
    background-color: #fff;
    padding: 5px;
    margin-left: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  .logo {
    width: 25px;
    height: auto;
  } 
  .nav_list {
    list-style: none;
    display: flex;
  }
  
  .nav_list li {
    margin-right: 40px;
  }
  
  .nav_list li:last-child {
    margin-right: 0;
  }
  
  .nav_list li a {
    text-decoration: none;
    color: #24252a;
    font-weight: bold;
    font-size: larger;
    transition: color 0.3s ease;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  
  .nav_list li a:hover {
    color: #0088a9;
  }
    .navbar {
        background-color: #333;
        color: white;
        padding: 10px;
    }
    .container {
        max-width: 900px;
        margin: 20px auto;
        text-align: center;
        
    }
    .plan-name {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        background-color: rgb(167, 240, 215);
        border-radius: 10px;
    }
    .package-name {

        font-size: 25px;
        font-weight: bold;
        background-color: rgb(212, 10, 10);
        color: white;
        margin: 30px;
        margin-left: 33%;
        margin-right: 33%;
        /* justify-content: center; */
        max-width: 300px;
        border-radius: 10px;
        cursor: pointer; /* Make the package name clickable */
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .channel-container {
        border-radius: 10px; /* Rounded corners */
        overflow: hidden; /* Hide overflowing shadows */
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; */
    }
    .channel-box {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* border: 2px solid #000; Sets a black border with a thickness of 1px */
        border-radius: 25px;
        padding: 20px;
        
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; */
        
    }
    .channel {
        width: 200px; /* Adjusted width */
        height: 200px; /* Adjusted height */
        margin: 20px; /* Adjusted margin */
        /* border: 2px solid #000000; Green border */
        border-radius: 10px; /* Rounded corners */
        transition: transform 0.3s ease-in-out; /* Add transition for smooth effect */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.39); /* Drop shadow */
        overflow: hidden; /* Hide overflowing content */
        position: relative; /* Set position to relative for absolute positioning of button */
    }
    .channel:hover {
        transform: scale(1.05); /* Scale up the channel when hovered */
    }
    .channel img {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 3%;
    }
    .channel-button {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .toggle-arrow {
        font-size: 24px;
        display: inline-block;
        margin-left: 5px;
    }
    .collapsed {
        display: none;
    }
    .icon img{
        max-height: 24px;
        margin-top: 11px;
    }
    .right-nav{
        float: right;
        
    }
    a.Cable{
    padding-left: 2px;
    }
    ul {
        list-style-type: none;
        margin-top: 10px;
        overflow: hidden;
        background-color: #fafafa00;
        /* opacity: 0.2; */
        display: inherit;
        height: 8vh;
        background-position: 1px;
        background-size: cover;
        /* visibility: hidden; */
        
    }
    
    li {
        float: left;
        font-size: larger;
    }
    
    li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: larger;
        font-weight: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: right;
        visibility: inherit;
    }
</style>
</head>
<body>

<header>
      <div>
        <img class="logo" src="/image/tv.jpg" alt="Cable"><span style="font-weight: bold;"> Cable</span>
      </div>
      <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight:bold">You're Selecting Packages for</a>

    <nav>
        <ul class="nav_list">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
  </header>
    <div class="container">
        <div class="plan-name" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #414141; letter-spacing: 5px;"><h1>{{$plan}} Plan</h1></div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Star SD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Star SD Channels"></div>
            
            <div class="channel-box">
                <div class="channel">
                    <img src="/image/28. StarPlus_Logo.png" alt="Channel 1 Image">

                </div>
                <div class="channel">
                    <img src="/image/30. Star_Jalsha_logo_2023.png" alt="Channel 2 Image">

                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 3 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/33. Star Utsav.jpeg" alt="Channel 4 Image">

                </div>
                <div class="channel">
                    <img src="/image/36. Movies-Ok.png" alt="Channel 5 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 6 Image">

                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 7 Image">

                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 8 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 9 Image">

                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 10 Image">

                </div>
                <!-- Add more channels with images -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Star HD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Star HD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="/image/29. star_plus_hd_india.webp" alt="Channel 11 Image">

                </div>
                <div class="channel">
                    <img src="/image/31. Star jalsha  HD.png" alt="Channel 12 Image">

                </div>
                <div class="channel">
                    <img src="Final Logo/35. Star-Gold-HD.jpg" alt="Channel 1 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 14 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/40. Nat_Geo_HD.png" alt="Channel 15 Image">

                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 16 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 17 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 18 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 19 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/37. Star Utsav Movies.jpg" alt="Channel 20 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Zee SD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Zee SD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="Final Logo/1. Zee-TV-Logo.png" alt="Channel 21 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/3. Zee_Bangla_logo.png" alt="Channel 22 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/5. Zee_Cinema_logo.png" alt="Channel 23 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/7. Zee_news.png" alt="Channel 24 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/9. Zee 24 Ganta.png" alt="Channel 25 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/11. Zee Business.jpeg" alt="Channel 26 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/12. Zee Anmol.jpeg" alt="Channel 27 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/13. Zee Action.png" alt="Channel 28 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/14. And_TV_logo.png" alt="Channel 29 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/16. Zee Hindustan.png" alt="Channel 30 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Zee HD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Zee HD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="/image/28. StarPlus_Logo.png" alt="Channel 31 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/30. Star_Jalsha_logo_2023.png" alt="Channel 32 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 33 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 34 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 35 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 36 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 37 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 38 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 39 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 40 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Sony SD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Sony SD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="Final Logo/19. Sony pal.jpeg" alt="Channel 41 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/20. Sony_Mix.jpg" alt="Channel 42 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/21. Sony_Aath_new.png" alt="Channel 43 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/22. Sony_Max_new_logo.png" alt="Channel 44 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/22. Sony_Max_new_logo.png" alt="Channel 45 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/25. Sony_Wah_new_logo.png" alt="Channel 46 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/26. Sony_BBC_Earth.png" alt="Channel 47 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/17. SET LOGO.png" alt="Channel 48 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Sony HD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Sony HD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="/image/28. StarPlus_Logo.png" alt="Channel 49 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/30. Star_Jalsha_logo_2023.png" alt="Channel 50 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 51 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 52 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 53 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 54 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 55 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 56 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Colors SD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Colors SD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="Final Logo/43. Colorstv-logo-black-background.webp" alt="Channel 57 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/45. Colors_Bangla_2021.webp" alt="Channel 58 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/47. news18-logo-vector.png" alt="Channel 59 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/48. CNN News18.avif" alt="Channel 60 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/49. CNBC news18.jpg" alt="Channel 61 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/50. Colors Infinity.jpg" alt="Channel 62 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/51. Colors_Rishtey_logo.png" alt="Channel 63 Image">
                    <button class="channel-button"></button>
                </div>
                <div class="channel">
                    <img src="Final Logo/52. CNBC_Awaaz_logo.png" alt="Channel 64 Image">
                    <button class="channel-button"></button>
                </div>
                <div class="channel">
                    <img src="Final Logo/52. CNBC_Awaaz_logo.png" alt="Channel 65 Image">
                    <button class="channel-button"></button>
                </div>
                <div class="channel">
                    <img src="Final Logo/52. CNBC_Awaaz_logo.png" alt="Channel 66 Image">
                    <button class="channel-button"></button>
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Colors HD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Colors HD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="/image/28. StarPlus_Logo.png" alt="Channel 67 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/30. Star_Jalsha_logo_2023.png" alt="Channel 68 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 69 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 70 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 71 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 72 Image">
 
                </div>
                <div class="channel">
                    <img src="" alt="Channel 73 Image">
 
                </div>
                <div class="channel">
                    <img src="" alt="Channel 74 Image">
 
                </div>
                <div class="channel">
                    <img src="" alt="Channel 75 Image">
 
                </div>
                <div class="channel">
                    <img src="" alt="Channel 76 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Sports SD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Sports SD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="Final Logo/54. Star-Sports-1.jpg" alt="Channel 77 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/56. STAR_Sports_2_logo.webp" alt="Channel 78 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/58. StarSports3India.webp" alt="Channel 79 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/60. Star_Sports-Hindi.jpg" alt="Channel 80 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/61. DD sports.jpeg" alt="Channel 81 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/62. Sony Espn sports.png" alt="Channel 82 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/64. Sony six.png" alt="Channel 83 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/65. SONY sports 10.png" alt="Channel 84 Image">

                </div>
                <div class="channel">
                    <img src="Final Logo/66. sports18.png" alt="Channel 85 Image">

                </div>
                <div class="channel">
                    <img src="Final Logo/68. Sports 18 2.png" alt="Channel 86 Image">

                </div>
                <div class="channel">
                    <img src="Final Logo/69. Sports 18 3.png" alt="Channel 87 Image">

                </div>
                <div class="channel">
                    <img src="Final Logo/70. sports18-khel.avif" alt="Channel 89 Image">

                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Sports HD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Sports HD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="/image/28. StarPlus_Logo.png" alt="Channel 90 Image">

                </div>
                <div class="channel">
                    <img src="/image/30. Star_Jalsha_logo_2023.png" alt="Channel 91 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 92 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 93 Image">

                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 94 Image">

                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 95 Image">

                </div>
                <div class="channel">
                    <img src="" alt="Channel 96 Image">

                </div>
                <div class="channel">
                    <img src="" alt="Channel 97 Image">

                </div>
                <div class="channel">
                    <img src="" alt="Channel 98 Image">

                </div>
                <div class="channel">
                    <img src="" alt="Channel 99 Image">
 
                </div>
                <div class="channel">
                    <img src="" alt="Channel 100 Image">
 
                </div>
                <div class="channel">
                    <img src="" alt="Channel 101 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    
        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Kids SD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Kids SD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="Final Logo/71. Cartoon-Network-logo.jpg" alt="Channel 102 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/72. Discovery_Kids_logo.png" alt="Channel 103 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/73. Disney.webp" alt="Channel 104 Image">
 
                </div>
                <div class="channFinal Logo/74. Disney Jr.pngel" alt="Channel 105 Image">
                    <img src="" alt="Channel 4 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/75. ETV_Bal_Bharat.jpg" alt="Channel 106 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/78. Nick_Jr._logo.svg" alt="Channel 107 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/79. New_Nick_Logo_2015.jpg" alt="Channel 108 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/80. Sony-YAY.jpg" alt="Channel 109 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/81. Pogo.webp" alt="Channel 110 Image">
 
                </div>
                <div class="channel">
                    <img src="Final Logo/76. Humgama.png" alt="Channel 111 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>

        <div class="channel-container">
            <div class="package-name" onclick="toggleChannels(this)">Kids HD Channels<span class="toggle-arrow"> </span><input type="checkbox" id="check" name="check" value="Kids HD Channels"></div>
            <div class="channel-box">
                <div class="channel">
                    <img src="/image/28. StarPlus_Logo.png" alt="Channel 112 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/30. Star_Jalsha_logo_2023.png" alt="Channel 113 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 114 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 115 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 116 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 117 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 118 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 119 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 120 Image">
 
                </div>
                <div class="channel">
                    <img src="/image/32. Star Barat.jpg" alt="Channel 121 Image">
 
                </div>
                <!-- Add channels for Premium HD Channels package -->
            </div>
        </div>
    </div>
    
<script>
    function toggleChannels(packageElement) {
        var channelBox = packageElement.nextElementSibling;
        channelBox.classList.toggle('collapsed');
        var arrow = packageElement.querySelector('.toggle-arrow');
        // arrow.innerHTML = channelBox.classList.contains('collapsed') ? '&#9654;' : ' ';
    }
</script>
</body>
</html>
