@extends('layouts.base')

@section('title', 'Products')

@section('content')

<link rel="stylesheet" href="/css/products.css">

<h1 class="title">Books</h1><br>

<div class="container">
  <div class="row 1 row-2-cols-3">
    <div class="col">
      <a href=""><img src="images/twilight.jpg"></a> <br>
      <div class="product_description">Fantasy / Romance</div>
      <h2 class="product_name"><a href="">Twilight</a></h2>
      <div class="product_price">$9.99</div> <br><br>
    </div>

    <div class="col">
      <a href=""><img src="images/the_da_vinci_code.jpg"></a> <br>
      <div class="product_description">Mystery Thriller</div>
      <h2 class="product_name"><a href="">The Da Vinci Code</a></h2>
      <div class="product_price">$11.99</div> <br><br>
    </div>

    <div class="col">
      <a href=""><img src="images/infinity_gauntlet.jpg"></a> <br>
      <div class="product_description">Superhero</div>
      <h2 class="product_name"><a href="">The Infinity Gauntlet</a></h2>
      <div class="product_price">$38.99</div> <br><br>
    </div>
  </div>

  <div class="row 2 row-2-cols-3">
    <div class="col">
      <a href=""><img src="images/fifty_shades_of_grey.jpg"></a> <br>
      <div class="product_description">Romance</div>
      <h2 class="product_name"><a href="">Fifty Shades of Grey</a></h2>
      <div class="product_price">$13.99</div> <br>
    </div>

    <div class="col">
      <a href=""><img src="images/sorcerers_stone.jpg"></a> <br>
      <div class="product_description">Fantasy / Adventure</div>
      <h2 class="product_name"><a href="">Harry Potter and The Sorcerer's Stone</a></h2>
      <div class="product_price">$16.99</div> <br>
    </div>

    <div class="col">
      <a href=""><img src="images/a_game_of_thrones.jpg"></a> <br>
      <div class="product_description">Political Fiction</div>
      <h2 class="product_name"><a href="">A Game of Thrones</a></h2>
      <div class="product_price">$13.99</div> <br>
    </div>
  </div>

  
</div>


@endsection