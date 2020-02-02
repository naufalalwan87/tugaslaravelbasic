@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

  <head>
    <title>Ijen &mdash;</title>
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
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('oke.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
  
              <h2>Data Pendaki Kawah Ijen</h2>
  <table id="tabel-status-alat" class="table table-striped table-bordered table-hover">
  <thead  class="thead-dark">

<tr>
    <th with="100px">No</th>
    <th>Nama</th>
    <th>Alamat</th>
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
            <h1>Gunung Ijen</h1>
            <p class="lead" style="text-align: justify;">Gunung Ijen adalah sebuah gunung berapi yang terletak di perbatasan antara Kabupaten Banyuwangi dan Kabupaten Bondowoso, Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.386 mdpl dan terletak berdampingan dengan Gunung Marapi. Gunung Ijen terakhir meletus pada tahun 1999. Salah satu fenomena alam yang paling terkenal dari Gunung Ijen adalah blue fire di dalam kawah yang terletak di puncaknya. Pendakian gunung ini bisa dimulai dari dua tempat. Pendaki bisa berangkat dari Banyuwangi ataupun dari Bondowoso.</p>

            <h1>Rute Pendakian</h1>
            <p class="lead" style="text-align: justify;">
Untuk mencapai kawah Gunung Ijen di Banyuwangi, bisa menggunakan kereta api ekonomi dengan tujuan Banyuwangi dan turun di Stasiun Karangasem kemudian naik ojek dengan tujuan Kecamatan Licin dan Desa Banyusari. Dari Banyusari, perjalanan dilanjutkan menuju Paltuding dengan menumpang truk pengangkut belerang atau menggunakan bus dan turun di Banyuwangi kota kemudian naik ojek bisa langsung ke Paltuding atau ke Desa Banyusari juga bisa namun dengan menggunakan bus tarif yang dikeluarkan akan lebih mahal. Pintu gerbang utama ke Cagar Alam Taman Wisata Kawah Ijen terletak di Paltuding, yang juga merupakan Pos PHPA (Perlindungan Hutan dan Pelestarian Alam). Alternatif rute adalah Bondowoso - Wonosari - Tapen - Sempol - Paltuding. Fasilitas lain yang dapat dinikmati oleh pengunjung antara lain pondok wisata dan warung yang menjual keperluan pendakian untuk menyaksikan keindahan kawah Ijen. Dari Paltuding berjalan kaki dengan jarak sekitar 3 km. Lintasan awal sejauh 2 KM cukup berat karena menanjak. Sebagian besar jalur adalah dengan kemiringan 25-35 derajat. Selain menanjak, struktur tanahnya juga berpasir sehingga menambah semakin berat langkah kaki karena harus menahan berat badan agar tidak merosot ke belakang. Setelah beristirahat di Warung Pos Bundar (pos yang unik karena memiliki bentuk lingkaran), jalur selanjutnya naik agak curam dan licin, dilanjutkan 1 KM terakhir relatif landai, tetapi wisatawan / pendaki disuguhi pemandangan deretan pegunungan yang sangat indah. Untuk turun menuju ke kawah harus melintasi medan berbatu-batu sejauh 800 meter dengan kondisi yang terjal hingga kemiringan 45 derajat. </p>


           


            


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
   <div> IG.@SekilasIjen</div>
    <div>Email.SekilasIjen@gmail.com</div>
            </div>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Harga Tiket Masuk Kawah Ijen:</h2>
                <ul class="list-unstyled">
                


   <div> Wisatawan lokal :</div>
   <div> Weekdays          Rp5.000</div>
    <div>Weekend           Rp7.500</div>
    <div>Wisatawan mancanegara  :</div>
    <div>Weekdays          Rp100.000</div>
    <div>Weekend           Rp150.000</div>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Info Umum Gunung Ijen</h2>
               <div>Ketinggian: 2.799 m</div>
<div>Ketinggian relatif: 1.218 m</div>
<div>Letusan terakhir: 1999</div>
<div>Letak: Jawa Timur, Indonesia</div>
<div>Provinsi: Jawa Timur</div>
<div>Jenis gunung: Stratovolcano</div>
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