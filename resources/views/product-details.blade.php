<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>PHPJabbers.com | Free Online Store Website Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">



</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2>Online Store Website<em>.</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('index')}}">Home
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('produk')}}">Products</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="checkout.html">Checkout</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">About</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="about.html">About Us</a>
                <a class="dropdown-item" href="blog.html">Blog</a>
                <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                <a class="dropdown-item" href="terms.html">Terms</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>@rupiah($details->harga)</h4>
              <h2>{{$details->nama}}</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div>
            <img src="{{$details->foto}}" alt="" class="img-fluid wc-image">
          </div>
        </div>

        <div class="col-md-5">
          <div class="sidebar-item recent-posts">
            <div class="sidebar-heading">
              <h2>Deskripsi</h2>
            </div>

            <div class="content">
              <p>{{$details->deskripsi}}</p>
            </div>
            <div class="content">
              <p>{{$details->quantity}}</p>
            </div>
          </div>

          <br>
          <br>

          <div class="contact-us">
            <div class="sidebar-item contact-form">
              <div class="sidebar-heading">
                <h2>Add to Cart</h2>
              </div>

              <div class="content">
                <form id="contact" action="{{ route('add_to_cart') }}" method="post">
                  @csrf
                  <input type="hidden" name="produk_id" value="{{ $details->id }}">
                  <!-- Ganti ini dengan ID produk yang akan ditambahkan -->

                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <fieldset>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" value="1" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button">Add to Cart</button>
                      </fieldset>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>

          <br>
        </div>
      </div>
    </div>
  </section>

  <div class="section contact-us">
    <div class="container">
      <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
          <h2>Description</h2>
        </div>

        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia doloremque sit, enim sint odio corporis
            illum perferendis, unde repellendus aut dolore doloribus minima qui ullam vel possimus magnam ipsa deleniti.
          </p>

          <br>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus ab numquam magnam aliquid,
            odit provident consectetur corporis eius blanditiis alias nulla commodi qui voluptatibus laudantium quaerat
            tempore possimus esse nam sed accusantium inventore? Sapiente minima dicta sed quia sunt?</p>

          <br>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum qui, corrupti consequuntur. Officia
            consectetur error amet debitis esse minus quasi, dicta suscipit tempora, natus, vitae voluptatem quae
            libero. Sunt nulla culpa impedit! Aliquid cupiditate, impedit reiciendis dolores, illo adipisci, omnis dolor
            distinctio voluptas expedita maxime officiis maiores cumque sequi quaerat culpa blanditiis. Quia tenetur
            distinctio rem, quibusdam officiis voluptatum neque!</p>
        </div>

        <br>
        <br>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>
            Rayo Shop
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language="text/Javascript">
      red[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
         clearField(t) {                     //declaring the array outside of the
      if  (!le ard[t.id])  {                       // function makes it static and global
            t.id] = 1;  // you could use true and false, but that's more typing
                ' ;           // with more chance of typos
                r = ' # fff'; 
         }
  </script>

</body>

</html>