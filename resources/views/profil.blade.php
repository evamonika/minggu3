<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog</title>
  <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
  <link href="{{ asset('blog/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('blog/css/templatemo-xtra-blog.css') }}" rel="stylesheet">
  <!--
    
TemplateMo 553 Xtra Blog
https://templatemo.com/tm-553-xtra-blog
-->
</head>

<body>
  <header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
      <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="tm-site-header">
        <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
        <h1 class="text-center">My Blog</h1>
      </div>
      <nav class="tm-nav" id="tm-nav">
        <ul>
          <li class="tm-nav-item"><a href="http://127.0.0.1:8000/home" class="tm-nav-link">
              <i class="fas fa-home"></i>
              Blog Home

            </a></li>
          <li class="tm-nav-item active"><a href="http://127.0.0.1:8000/profil" class="tm-nav-link">
              <i class="fas fa-users"></i>
              About Me

            </a></li>
        </ul>
      </nav>
      <div class="tm-mb-65">
        <a href="https://facebook.com" class="tm-social-link">
          <i class="fab fa-facebook tm-social-icon"></i>
        </a>
        <a href="https://twitter.com" class="tm-social-link">
          <i class="fab fa-twitter tm-social-icon"></i>
        </a>
        <a href="https://instagram.com" class="tm-social-link">
          <i class="fab fa-instagram tm-social-icon"></i>
        </a>
        <a href="https://linkedin.com" class="tm-social-link">
          <i class="fab fa-linkedin tm-social-icon"></i>
        </a>
      </div>
      <p class="tm-mb-80 pr-5 text-white">
        My Blog is a multi-purpose HTML template from TemplateMe website. Left side is a sticky menu bar. Right side content will scroll up and down.
      </p>
    </div>
  </header>
  <div class="container-fluid">
    <main class="tm-main">
      <!-- Search form -->
      <div class="row tm-row">
        <div class="col-12">
          <form method="GET" class="form-inline tm-mb-80 tm-search-form">
            <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
            <button class="tm-search-button" type="submit">
              <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="row tm-row tm-mb-45">
        <div class="col-12">
          <hr class="tm-hr-primary tm-mb-55">
          <img src="{{asset ('blog/img/about-01.jpg') }}" alt="Image" class="img-fluid">
        </div>
      </div>
      <div class="row tm-row tm-mb-40">
        <div class="col-12">
          <div class="mb-4">
            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">Tentang Blog Ini</h2>
            <p>
              You can immediately download
              <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Blog Me Template</a>
            <h1>Hay everyone</h1><br>
            Aku adalah Eva Monika septiana, aku adalah sepasang sayap yang patah namun memilih untuk tetap tetap terbang dan kokoh. Aku mahasiswa
            D3 Manajemen Informatika di Politeknik Negeri Malang angkatan 2021. Saat ini dengan izin Allah aku sedang menfokuskan belajar di bidang
            UI/UX Desaigner. Bismillah semoga bidang tersebut sesuai dengan passion dan minatku dan semoga bermanfaat untuk aku dan orang-orang di sekitarku
            semoga ilmu yang akan aku pelajari tersebut dapat beguna untuk banyak orang. Ini adalah website pribadiku yang membahas tentang perjalanku menjadi
            seorang UI/UX Designer semoga bermanfaat hehe <br>
            </p>
            <p>
              Sebelumnya kenalan dulu yukk dengan apa itu UI/UX Design.<br>
              UI atau User Interface merupakan mekanisme komunikasi antara pengguna (user) dengan sistem pada sebuah program, baik itu aplikasi website, mobile, ataupun software.
              Mekanisme itu disesuaikan dengan kebutuhan pengguna terhadap program yang tengah dikembangkan. Cakupan UI itu meliputi tampilan fisik, penggunaan warna, tampilan animasi,
              hingga pola komunikasi suatu program dengan penggunanya.<br>
              User Experience memang tidak terlalu jauh berbeda dengan UI. Perbedaannya terletak pada fokus utama hubungan komunikasi antara pengguna dengan programnya, yakni berfokus
              pada pengalaman penggunanya.
            </p>
          </div>
        </div>
      </div>
      <div class="row tm-row tm-mb-120">
        <div class="col-lg-4 tm-about-col">
          <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
              <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Sosial Media</h2>
            <p class="mb-0 tm-line-height-short">
              <li>Instagram: @evamonika__</li>
              <li>WhatsApp : 085232753117</li>
            </p>
          </div>
        </div>
        <div class="col-lg-4 tm-about-col">
          <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
              <i class="fas fa-users-cog fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Biodata</h2>
            <p class="mb-0 tm-line-height-short">
            <ol>
              <li>Nama : Eva Monika Septiana</li>
              <li>TTL : Bojonegoro, 03 September 2002</li>
              <li>Jenis Kelamin: Perempuan </li>
              <li>Alamat : Jatitengah, Sugihwaras, Bojonegoro</li>
            </ol>
            </p>
          </div>
        </div>
        <div class="col-lg-4 tm-about-col">
          <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
              <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Pendidikan</h2>
            <p class="mb-0 tm-line-height-short">
            <ul>
              <li>SMA Negeri Sugihwaras --> lulusan 2020</li>
              <li>Politeknik Negeri Malang --> Sekarang</li>
            </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="row tm-row tm-mb-60">
        <div class="col-12">
          <hr class="tm-hr-primary  tm-mb-55">
        </div>
        <div class="col-lg-6 tm-mb-60 tm-person-col">
          <div class="media tm-person">
            <img src="{{ asset('custom/img/about-02.jpg') }}" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
              <h2 class="tm-color-primary tm-post-title mb-2">John Henry</h2>
              <h3 class="tm-h3 mb-3">UI/UX Designer</h3>
              <p class="mb-0 tm-line-height-short">
                Sebagai UI designer yang menjadi analis design UI dari blog ini
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 tm-mb-60 tm-person-col">
          <div class="media tm-person">
            <img src="{{ asset('custom/img/about-03.jpg') }}" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
              <h2 class="tm-color-primary tm-post-title mb-2">Timy Cake</h2>
              <h3 class="tm-h3 mb-3">Fotografer</h3>
              <p class="mb-0 tm-line-height-short">
                Sebagai fotografer
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 tm-mb-60 tm-person-col">
          <div class="media tm-person">
            <img src="{{ asset('custom/img/about-04.jpg') }}" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
              <h2 class="tm-color-primary tm-post-title mb-2">Jay Zoona</h2>
              <h3 class="tm-h3 mb-3">UI/UX Designer</h3>
              <p class="mb-0 tm-line-height-short">
                Sebagai UX researcher sekaligus UI designer
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 tm-mb-60 tm-person-col">
          <div class="media tm-person">
            <img src="{{ asset('custom/img/about-05.jpg') }}" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
              <h2 class="tm-color-primary tm-post-title mb-2">Catherine Soft</h2>
              <h3 class="tm-h3 mb-3">Team Leader</h3>
              <p class="mb-0 tm-line-height-short">
                Sebagai Tim Leader
              </p>
            </div>
          </div>
        </div>
      </div>
      <footer class="row tm-row">
        <div class="col-md-6 col-12 tm-color-gray">
          Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
        </div>
        <div class="col-md-6 col-12 tm-color-gray tm-copyright">
          Copyright 2020 Xtra Blog Company Co. Ltd.
        </div>
      </footer>
    </main>
  </div>
  <script src="{{ asset('custom/js/jquery.min.js') }}"></script>
  <script src="{{ asset('custom/js/templatemo-script.js') }}"></script>
</body>

</html>