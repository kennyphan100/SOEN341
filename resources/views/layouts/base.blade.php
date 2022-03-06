<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Amazoon - @yield('title')</title>
      
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <!-- External CSS -->
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="/css/responsive.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   </head>
   <body>
      <div class="banner_bg_main">
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="{{ route('contact.create') }}">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="/">Amazoon</a></div>
                  </div>
               </div>
            </div>
         </div>

         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                       Categories
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                       <li><a class="dropdown-item" href="{{ route('categories.show', 'Books') }}">Books</a></li>
                       <li><a class="dropdown-item" href="{{ route('categories.show', 'Electronics') }}">Electronics</a></li>
                       <li><a class="dropdown-item" href="{{ route('categories.show', 'Jewellery & Watches') }}">Jewellery & Watches</a></li>
                       <li><a class="dropdown-item" href="{{ route('categories.show', 'Health & Beauty') }}">Health & Beauty</a></li>
                       <li><a class="dropdown-item" href="{{ route('categories.show', 'Sporting Goods') }}">Sporting Goods</a></li>
                       <li><a class="dropdown-item" href="{{ route('categories.show', 'Clothing') }}">Clothing</a></li>
                       <li><a class="dropdown-item" href="{{ route('categories.show', 'Grocery') }}">Grocery</a></li>
                     </ul>
                  </div>
                  <div class="main">
                     <div class="input-group" id="search-bar">
                        <input type="text" class="form-control" placeholder="Search for item">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: rgb(9, 29, 64); border-color:rgb(9, 29, 64); ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="login_menu">
                        <ul>
                           <li>
                              <a href="{{ url('/cart') }}">
                                 <span class="">Cart</span>
                                 ({{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }})
                              </a>
                           </li>
                           <li>
                              <!-- <a href=""><a href="{{ url('/dashboard') }}" class="text">{{ Auth::user()->name ?? "" }}</a></a> -->
                              <a href=""><a href="{{ route('categories.show', 'Health & Beauty') }}" class="text">{{ Auth::user()->name ?? "" }}</a></a>
                           </li>
                           <li>
                              <span class="" style="margin: 0px">
                                @if (Route::has('login'))
                                    <div class="">
                                        @auth
                                          <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')"
                                                      onclick="event.preventDefault();
                                                               this.closest('form').submit();">
                                                   {{ __('Logout') }}
                                                </x-dropdown-link>
                                          </form>
                                        @else
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="text">Register</a>
                                            @endif

                                            <a href="{{ route('login') }}" class="text">Sign in</a>
                                        @endauth
                                    </div>
                                @endif
                              </span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container" id="page-content">

         @yield('content')
         
      </div>
      
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><h1>Amazoon</h1></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line Number : <a href="#">+1 (766) 475-2129</a></div>
         </div>
      </div>

      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2022 All Rights Reserved.</a></p>
         </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   </body>
</html>