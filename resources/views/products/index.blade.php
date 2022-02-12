@extends('layouts.base')

@section('title', 'Products')

@section('content')

<link rel="stylesheet" href="/css/products.css">

<h1 class="title">Books</h1><br>

<div class="container">
  <div class="row 1 row-2-cols-3">
    <div class="col">
      <a href=""><img src="images/twilight.jpg"></a> <br>
      <div class="genre1">Fantasy / Romance</div>
      <a href=""><h2 class="name1">Twilight</h2></a>
      <div class="price1">$9.99</div> <br><br>
    </div>

    <div class="col">
      <a href=""><img src="images/the_da_vinci_code.jpg"></a> <br>
      <div class="genre1">Mystery Thriller</div>
      <a href=""><h2 class="name1">The Da Vinci Code</h2></a>
      <div class="price1">$11.99</div> <br><br>
    </div>

    <div class="col">
      <a href=""><img src="images/infinity_gauntlet.jpg"></a> <br>
      <div class="genre1">Superhero</div>
      <a href=""><h2 class="name1">The Infinity Gauntlet</h2></a>
      <div class="price1">$38.99</div> <br><br>
    </div>
  </div>

  <div class="row 2 row-2-cols-3">
    <div class="col">
      <a href=""><img src="images/fifty_shades_of_grey.jpg"></a> <br>
      <div class="genre1">Romance</div>
      <a href=""><h2 class="name1">Fifty Shades of Grey</h2></a>
      <div class="price1">$13.99</div> <br>
    </div>

    <div class="col">
      <a href=""><img src="images/sorcerers_stone.jpg"></a> <br>
      <div class="genre1">Fantasy / Adventure</div>
      <a href=""><h2 class="name1">Harry Potter and The Sorcerer's Stone</h2></a>
      <div class="price1">$16.99</div> <br>
    </div>

    <div class="col">
      <a href=""><img src="images/a_game_of_thrones.jpg"></a> <br>
      <div class="genre1">Political Fiction</div>
      <a href=""><h2 class="name1">A Game of Thrones</h2></a>
      <div class="price1">$13.99</div> <br>
    </div>
  </div>

  
</div>


@endsection