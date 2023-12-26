@extends('layouts.layout') 
@section('content')

<section>
<div id="carouselExample" class="carousel slide transparent-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/img3.png') }}"width="1550" height="620" class="d-block mx-auto" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img3.png') }}" width="1550" height="620" class="d-block mx-auto" alt="Image 2"> 
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img3.png') }}" width="1550" height="620" class="d-block mx-auto" alt="Image 3">
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

<section id = clothes class = "section-p1">
      <br>
      <h2>Featured Products</h2>
  <div class="clothescontain">
    @foreach ($prod as $prod) 
            <div class="clo">
                <img src="{{$prod->product_image}}" class="imgclothes" alt="Image Here">
                <div class="clodes">
                    <span>{{$prod->company_name}}</span>
                    <br>
                    <span><strong>{{$prod->product_name}}</strong></span>
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>PKR {{{$prod->product_price}}}/-</h4>
                </div>
                <a href="#" class="cartt">&#128722;</a>
</div>
@endforeach 
</div>
</section>
            <section id = clothes class="section-p1">
      <br>
      <h2>By Category</h2>
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
                <a href="/showbycategory/skincare">Check Products</a>
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
                <a href="/showbycategory/haircare">Check Products</a>
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
                <a href="/showbycategory/makeup">Check Products</a>
            </div>
        </div>
    </div>
    </section>
</section>

</div>
            <section id = clothes class="section-p1">
      <h2>By Skin Type</h2>
  <section class = "cardbody">
      <div class="cardcontainer">
        <div class="card" style="--clr: #009688">
            <div class="cardimg-box">
                <img src="{{ asset('images/s31.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Oily Skin</h2>
                <p>
                "Revitalize your skin with our premium skincare products, delivering radiance, hydration, and a youthful glow. Unveil your natural beauty!"
                </p>
                <a href="/showbytype/oilyskin">Check Products</a>
            </div>
        </div>
        <div class="card" style="--clr: #FF3E7F">
            <div class="cardimg-box">
                <img src="{{ asset('images/s30.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Dry Skin</h2>
                <p>
                "Nourish and transform your hair with our exquisite hair care essentials. Achieve stunning shine, strength, and vitality for gorgeous, healthy locks."
                </p>
                <a href="/showbytype/dryskin">Check Products</a>
            </div>
        </div>
        <div class="card" style="--clr: #03A9F4">
            <div class="cardimg-box">
                <img src="{{ asset('images/s26.png') }}">
            </div>
            <div class="cardcontent">
                <h2>All Skin Types</h2>
                <p>
                "Discover the artistry of beauty with our makeup collection. Elevate your look with vibrant colors and high-quality formulas for a flawless and radiant finish."
                </p>
                <a href="/showbytype/allskintypes">Check Products</a>
            </div>
        </div>
    <div class="card" style="--clr: #03A9F4">
            <div class="cardimg-box">
                <img src="{{ asset('images/s26.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Dry & Damage Hair</h2>
                <p>
                "Discover the artistry of beauty with our makeup collection. Elevate your look with vibrant colors and high-quality formulas for a flawless and radiant finish."
                </p>
                <a href="/showbytype/damage">Check Products</a>
            </div>
        </div>
    <div class="card" style="--clr: #03A9F4">
            <div class="cardimg-box">
                <img src="{{ asset('images/s26.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Split Ends</h2>
                <p>
                "Discover the artistry of beauty with our makeup collection. Elevate your look with vibrant colors and high-quality formulas for a flawless and radiant finish."
                </p>
                <a href="/showbytype/splitend">Check Products</a>
            </div>
        </div>
    <div class="card" style="--clr: #03A9F4">
            <div class="cardimg-box">
                <img src="{{ asset('images/s26.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Hair Fall</h2>
                <p>
                "Discover the artistry of beauty with our makeup collection. Elevate your look with vibrant colors and high-quality formulas for a flawless and radiant finish."
                </p>
                <a href="/showbytype/hairfall">Check Products</a>
            </div>
        </div>
    </div>

    </section>
</section>

<section id = clothes class="section-p1">
      <h2>By Ingredients</h2>
  <section class = "cardbody">
      <div class="cardcontainer">
        <div class="card" style="--clr: #009688">
            <div class="cardimg-box">
                <img src="{{ asset('images/s31.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Vitamin C</h2>
                <p>
                "Revitalize your skin with our premium skincare products, delivering radiance, hydration, and a youthful glow. Unveil your natural beauty!"
                </p>
                <a href="/showbyingredient/vitaminc">Check Products</a>
            </div>
        </div>
        <div class="card" style="--clr: #FF3E7F">
            <div class="cardimg-box">
                <img src="{{ asset('images/s30.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Retinol</h2>
                <p>
                "Nourish and transform your hair with our exquisite hair care essentials. Achieve stunning shine, strength, and vitality for gorgeous, healthy locks."
                </p>
                <a href="/showbyingredient/retinol">Check Products</a>
            </div>
        </div>
        <div class="card" style="--clr: #03A9F4">
            <div class="cardimg-box">
                <img src="{{ asset('images/s26.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Arbutin</h2>
                <p>
                "Discover the artistry of beauty with our makeup collection. Elevate your look with vibrant colors and high-quality formulas for a flawless and radiant finish."
                </p>
                <a href="/showbyingredient/arbutin">Check Products</a>
            </div>
        </div>
        <div class="card" style="--clr: #009688">
            <div class="cardimg-box">
                <img src="{{ asset('images/s31.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Keratin</h2>
                <p>
                "Revitalize your skin with our premium skincare products, delivering radiance, hydration, and a youthful glow. Unveil your natural beauty!"
                </p>
                <a href="/showbyingredient/keratin>Check Products</a>
            </div>
        </div>
        <div class="card" style="--clr: #FF3E7F">
            <div class="cardimg-box">
                <img src="{{ asset('images/s30.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Biotin</h2>
                <p>
                "Nourish and transform your hair with our exquisite hair care essentials. Achieve stunning shine, strength, and vitality for gorgeous, healthy locks."
                </p>
                <a href="/showbyingredient/biotin">Check Products</a>
            </div>
        </div>
        <div class="card" style="--clr: #03A9F4">
            <div class="cardimg-box">
                <img src="{{ asset('images/s26.png') }}">
            </div>
            <div class="cardcontent">
                <h2>Argan Oil</h2>
                <p>
                "Discover the artistry of beauty with our makeup collection. Elevate your look with vibrant colors and high-quality formulas for a flawless and radiant finish."
                </p>
                <a href="/showbyingredient/arganoil">Check Products</a>
            </  div>
        </div>
    </div>
    </section>
</section>
@endsection
