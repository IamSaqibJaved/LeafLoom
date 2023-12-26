<!-- Extend your main layout -->
@extends('layouts.layout')

@section('content')

<section id = clothes class="section-p1">
      <br>
      <h2>{{ ucfirst($ingredient) }} Products</h2>
  <div class="clothescontain">
    @foreach ($prod as $prod) 
            <div class="clo">
                <img src="{{asset($prod->product_image)}}" class="imgclothes" alt="Image Here">
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
@endsection