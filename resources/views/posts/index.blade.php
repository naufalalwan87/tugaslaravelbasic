@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

  <head>
    <title>Alat Kopi Malang &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('alat.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
  
              <h2>Data Stok Alat Kopi</h2>
  <table id="tabel-status-alat" class="table table-striped table-bordered table-hover">
  <thead  class="thead-dark">

<tr>
    <th with="100px">No</th>
    <th>Alat</th>
    <th>Stok</th>
    <th with="200px" class="text-center" >
      <a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
        <i>TAMBAH</i>
      </a>
    </th>
  </tr>
  <?php $no=1; ?>
  @foreach ($post as $key => $value)
  <tr>
    <th>{{$no++}}</td>
    <th>{{ $value->nama}}</td>
    <th>{{ $value->alamat}}</td>
    <td>
      <a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
        <i >Tampil</i></a>
        <a class="btn btn-info btn-sm" href="{{route('posts.edit',$value->id)}}">
          <i>Edit</i></a>

          {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display']) !!}
          <a><button type="submit" style="display: inline;" class="btn btn-info btn-sm"><i>Hapus</i> </button> </a>
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
      
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
 <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-content">
            <h1>Alat Kopi Malang</h1>
            <p class="lead" style="text-align: justify;">Jual Mesin Kopi Dan Aneka Makanan Import, Supermarket Malang
Sukses Jaya merupakan Supermarket yang telah berdiri lama di kota Malang. Produk yang dijual oleh Sukses Jaya juga beragam, mulai dari peralatan dapur, perlengkapan dapur, aneka bahan makananan lokal dan import, hingga mesin-mesin seperti mesin kopi. Jika Anda memiliki usaha atau bisnis di dunia makanan, seperti rumah makan, cafe, ataupun restoran maka Sukses Jaya adalah tempat yang cocok untuk menjadi supplier berbagai kebutuhan bisnis Anda. Sukses Jaya,Supermarket dan Supplier Mesin Kopi & Bahan Makanan Malang.</p>

            <h1>Alat Kopi</h1>
            <p class="lead" style="text-align: justify;">
Alat kopi manual merupakan suatu alat yang dipakai untuk membuat kopi dengan cara manusia yang menggerakan alat tersebut tanpa adanya bantuan dari mesin. Karena alat kopi manual tidak mengandalkan mesin, hasil yang didapat bisa lebih mengena tergantung dari tangan atau racikan sendiri. Alat kopi manual atau juga dikenal dengan nama manual brew, saat ini memang sering digunakan dan dipakai untuk meracik kopi atau membuat kopi di café café ataupun coffee shop.alat kopi manual atau manual brew ini memiliki harga yang relativ murah dan dapat dijangkau oleh segala kalangan. Dilihat dari tipe dan jenisnya alat manual brew harus disesuaikan dimana kebutuhanmu apakah untuk traveling, konsumsi harian di rumah bahkan bisa juga untuk usaha. Untuk mengetahui jenis jenis dari alat kopi </p>


           


            


            <div class="pt-5">
              
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

               
              </ul>

                </form>
              </div>
            </div>

          </div>
          
          </div>
        </div>
      </div>
    </div>
    

     <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-1">
            <h2 class="footer-heading mb-3">Info Contact</h2>
            <div class="row">

   <div> Telp.089637601776</div>
   <div> IG.@Alatkopimalang</div>
    <div>Email.AlatKopiMalang.com</div>
            </div>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Kategori Alat</h2>
                <ul class="list-unstyled">
                


   <div> Vietnam drip</div>
   <div> V60</div>
    <div> Aeropress</div>
    <div> Grinder</div>
    <div>FrenchPress</div>
    
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Navigasi</h2>
               <div>Home</div>
<div>Tentang Kami</div>
<div>Hubungi Kami</div>
<div>Kebijakan Privasi</div>

                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>Naufaloyi_ <i class="icon-heart text-danger" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank" ></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
     <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                             

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

@endsection