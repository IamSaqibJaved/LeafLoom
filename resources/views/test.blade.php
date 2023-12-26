<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/test.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<section id = "header"  >
      <!--  <a href="#"><img src="{{ asset('images/logo.png') }}" height="40px" width="40px" class="logo" alt="LOGO HERE"></a> -->
      <p class="LeafLoom">LEAF LOOM</p>
       
        
        <div>
            <ul id = "navbar">
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#cart">&#128722; Cart</a></li>
            </ul>
        </div>
 </section>
  <!--<section>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
 <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('images/image3.jpg') }}" height = 550px alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/image3.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/Img1.jpg') }}" alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  </section>-->
<section>
<div id="carouselExample" class="carousel slide transparent-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- Image on the right -->
                <img src="{{ asset('images/img3.png') }}"width="1400" height="500" class="d-block mx-auto" alt="Image 1">
              
            </div>
            <div class="carousel-item">
                <!-- Image on the right -->
                <img src="{{ asset('images/img3.png') }}" width="1400" height="500" class="d-block mx-auto" alt="Image 2">
               
            </div>
            <div class="carousel-item">
                <!-- Image on the right -->
                <img src="{{ asset('images/img3.png') }}" width="1400" height="500" class="d-block mx-auto" alt="Image 3">
              
            </div>
        </div>
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    </section>

    <section id = clothes class="section-p1">
        <br>
        <h2>Featured Products</h2>
        
        <div class="clothescontain">
            <div class="clo">
                <img src="{{ asset('images/s1.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Brightening Serum</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 2000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s5.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Mosturizing Lotion</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 1900/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s6.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Organic JOJOBA oil</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 1199/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s8.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Hair Volume Shampoo</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 2200/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s10.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Aloe vera Facewash</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 1900/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s13.png') }}"  class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Rose Mauev</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 3000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s15.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Nude Pink</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 1500/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s17.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Light Medium warm Gold</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 2000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s9.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>hair Growth shampoo</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 2000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s29.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Saffron Complexion Builder</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 2100/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s24.png') }}"  class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Teracotta Matte</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 1100/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s22.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Deep Berry Blush</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 1100/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
        </div>
        </section>
   <!-- <section id = clothes class="section-p1">
        <h2>Make-up Products</h2>
         <div class="clothescontain">
         <div class="clo">
                <img src="{{ asset('images/s13.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Rose Mauve</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 3000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s14.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Deep Dusty Plum</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 3000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s15.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Nude Pink</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 3000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s16.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Watermelon Pink</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 3000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s17.png') }}"class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Light Medium warm Gold</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 5000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s18.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Medium tan with pink</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 5000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s19.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Light Weight Cool peach</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 3500/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s20.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Medium natural peach</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 3500/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s21.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Soft Neutral Pink</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 6000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s22.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Deep Berry Blush</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 6000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s23.png') }}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLoom</span>
                    <h5>Nude Mauev</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 4000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
            <div class="clo">
                <img src="{{ asset('images/s24.png') }}" widht = 200px height = 300px class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>LeafLOoom</span>
                    <h5>Teracotta Matte</h5>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR 4000/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
            </div>
        </div>
        

    </section>
 <section id="banner3">
        <div class="banner-box">
          <h2>All Shades</h2>
          <h3>Great variety of shades</h3>
           </div>
        
           <div class="banner-box2">
            <h2>For Your body care</h2>
            <h3>Keep your Body & heart at peace</h3>
             </div>

             <div class="banner-box3">
            <h2>Live Life</h2>
                <h3>Try all our products</h3>
                 </div>
    </section>
<br>
<br>
<section id="newsletter" class="section-p1 section-m1" sec>
    <div  class="newstext">
        <h4>Sign up for LeafLoom</h4>
        <p>Get E-mail updates about our latest shop and <span>specail offers.</span></p>
    </div>

    <div class="form">
        <input type="text" placeholder="Enter your Email">
        <button class="normal">Sign up</button>
    </div>
</section>
-->
<section class = "cardbody">
<div class="cardcontainer">
        <div class="card" style="--clr: #009688">
            <div class="cardimg-box">
                <img src="{{ asset('images/s31.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Skin Care</h2>
                <p>
                "Revitalize your skin with our premium skincare products, delivering radiance, hydration, and a youthful glow. Unveil your natural beauty!"
                </p>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="card" style="--clr: #FF3E7F">
            <div class="cardimg-box">
                <img src="{{ asset('images/s30.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Hair Care</h2>
                <p>
                "Nourish and transform your hair with our exquisite hair care essentials. Achieve stunning shine, strength, and vitality for gorgeous, healthy locks."
                </p>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="card" style="--clr: #03A9F4">
            <div class="cardimg-box">
                <img src="{{ asset('images/s26.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Make-Up</h2>
                <p>
                "Discover the artistry of beauty with our makeup collection. Elevate your look with vibrant colors and high-quality formulas for a flawless and radiant finish."
                </p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>
    </section>

    <footer class="site-footer">
<div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-6">
    <h6>About</h6>
    <p class="text-justify">
Welcome to Leaf Loom, where beauty meets nature.
 Explore our curated collection of skincare, haircare,
  and makeup products designed to enhance your natural radiance. 
  Immerse yourself in the essence of self-care as our skincare line
   embraces botanical wonders, nurturing your skin with each application.</p>
</div>
<div class="col-6 col-md-3">
<h6>Categories</h6>
<ul class="footer-links ">
<li><a href="#">Skin Care</a></li>
<li><a href="#">Hair Care</a></li>
<li><a href="#">Make-Up</a></li>

</ul>
</div>
<div class="col-6 col-md-3">
<h6>Quick Links</h6>
<ul class="footer-links">
<li><a href="#">About Us</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Contribute</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
</div>
<hr class="small">
</div>
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-6 col-12">
<p class="copyright-text">Thank You for visiting <span class="logo">Leaf Loom</span>

</p>
</div>
<div class="col-md-4 col-sm-6 col-12">
<ul class="social-icons">
<li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
<li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
<li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
</div>
</div>
</footer>

<!--<footer class="section-p1">
    <div class="col">
        <img src="logo.png" alt="" width="35px">
        <h4>Contact</h4>
        <p><strong>Address:</strong> dsgduwytdu-hwudgywd Pakistan</p>
        <p> <strong>Phone:</strong> +92 330-5389705/332-1791244</p>
        <p><strong>Hours:</strong> 10:00 - 18:00, Mon-Sat</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign Up</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App store or Google Play</p>
        <div class="row">
            <img src="app-store.png" alt="App Store">
            <img src="google-play.png" alt="Google Play">
        </div>
        <p>Secure Payment Gateways</p>
        <img src="secure-payment.png" alt="Secure Payment">
    </div>

    <div class="copyright">
        <p>@2023, Thanks for visiting our website</p>
    </div>
</footer>-->


</body>
</html>