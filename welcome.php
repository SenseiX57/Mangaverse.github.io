<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangaVerse</title>
    <link rel="stylesheet" href="Ecom.css">
    <link rel="stylesheet" href="utils.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/g/jquery@2.2.4,jquery.owlcarousel@1.31"></script>
    <script src="scriptecom.js">
    </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>

    <header class="bgclr">
        <nav class="flex space-between">
            <div class="left flex items-center">
                <ul class="flex items-center justify-centre uppercase semibold">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                        <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                      </svg>
                    </li>
                </ul>
                <p> <b>10% off</b> on All Prepaid Offers</p>
            </div>

            <div >
            <h3 style="color: rgb(255, 255, 255); letter-spacing: 1px;"><?php echo "Welcome ". $_SESSION['username']?>!</h3>
            </div>

            <div class="right flex items-center uppercase">
                <div class="register ">
                    <a href="http://localhost/webd/register.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                    </a>
                </div>
                &nbsp; &nbsp;
                <div class="login">
                    <a href="http://localhost/webd/login.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                          </svg>
                    </a>
                </div>
                &nbsp; &nbsp;
                <div class="logout" >
                    <a href="http://localhost/webd/logout.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg>
                    </a>
                &nbsp; &nbsp; &nbsp;
                </div>
            </div>
        </nav>
    </header>





    <header class="container">
        <nav class="flex space-between">
            <div class="left flex items-center">
                <ul class="flex items-center justify-centre uppercase semibold">
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn uppercase semibold">Top product
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                  </svg>
                            </button>
                            <div class="dropdown-content">
                              <a href="products/manga.html">Manga</a>
                              <a href="products/oversize.html">Oversized Tees</a>
                              <a href="products/winter.html">Winter wears</a>
                              <a href="products/cosplay.html">cosplay</a>
                            </div>
                          </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn uppercase semibold">shop by anime
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                  </svg>
                                
                            </button>
                            <div class="dropdown-content">
                              <a href="products/naruto.html">Naruto</a>
                              <a href="products/op.html">One Piece</a>
                              <a href="products/aot.html">attack on titan</a>
                              <a href="products/jjk.html">Jujutsu kaisen</a>
                            </div>
                          </div>
                    </li>
                    <li>
                        <button class="glowbtn" type="button" onclick="location.href='products/offerzone.html'">OFFER ZONE !</button>
                    </li>
                </ul>    
             </div>
                <div class="center flex items-center justify-centre ">
                    <h1 class="uppercase">manga<span class="uppercase">verse</span></h1>
                </div>
            
            
                <div class="right flex items-center uppercase">
                <input class="search" id="dgwt-wcas-search-input-1" type="search" class="dgwt-wcas-search-input" name="s" value="" placeholder="Search Merch Here Senpai !" autocomplete="off">

                <div class="profile mx-2">
                    <a href="login.html"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg>
                      </a>
                    </div>
                <div class="Wishlist mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                          </svg>

                    </div>
                <div class="bag mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                      </svg>  
                </div>
            
            </div>
        </nav>
    </header>


    <div class="owl-carousel">
    <div class="item">
        <a href="products/oversize.html"><img src="banneroversize.webp" alt="tee"></a>
        
    </div>
    <div class="item">
        <a href="products/bucketlist.html"><img src="banner_scratch_it.webp" alt="scract"></a>
        
    </div>
    <div class="item">
        <a href="products/manga.html"><img src="banner_manga.webp" alt="manga"></a>
        
    </div>
    <div class="item">
        <a href="products/pochita.html"><img src="pochita_banner_compressed.webp" alt="poc"></a>
        
    </div>
        
    <div class="item">
        <a href="products/winter.html"><img src="wintercoming.webp" alt="poc"></a>

    </div>


    </div>
    </div>


    <h2 class="uppercase h2part1">T<span>op</span> cate<span>go</span>ries</h2>

    <div class="topcategories">
    <div class="topcat">
        <a href="products/stickers.html"><img src="topcategories/stickers.webp" alt="sticker"></a>
    </div>
    <div class="topcat">
        <a href="products/cosplay.html"><img src="topcategories/cosplay.webp" alt="cosplay"> </a>
    </div>
    <div class="topcat">
       <a href="products/manga.html"><img src="topcategories/mangaS.webp" alt="manga"></a>
    </div>
    <div class="topcat">
        <a href="products/winter.html"><img src="topcategories/winterwear.webp" alt="ww"></a>
    </div>
    </div>


    <h2 class="uppercase h2part2">Top anime</h2>

    <div class="topanime">
    <div class="topanimecat">
        <a href="products/naruto.html"><img src="topanime/naruto.webp" alt="sticker"></a>    
    </div>
    <div class="topcat">
        <a href="products/op.html"><img src="topanime/onepiece.webp" alt="sticker"></a>    
    </div>
    <div class="topcat">
        <a href="products/aot.html"><img src="topanime/aot.webp" alt="sticker"></a>    
    </div>
    <div class="topcat">
        <a href="products/jjk.html"><img src="topanime/jjk.webp" alt="sticker"></a>    
    </div>
    </div>

    <br><br>
    <footer class="footer">
        <div class="container2">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>More Info</h4>
                    <ul>
                        <li><a href="#">T&C</a></li>
                        <li><a href="#">Stores near me</a></li>
                
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://discord.gg/BUMYfJu47N"><i class="fab fa-discord"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

</body>
</html>