<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Kuiz Sejarah</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
 <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Kuiz Sejarah</em> Tingkatan 4 Bab 3</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="index.php" class="external">Home</a></li>
        <li><a href="login.php" class="external">Login</a></li>
        <li><a href="daftar.php" class="external">Pendaftaran Murid</a></li>

        <li><a href="pilihkuiz.php" class="external">Pilih Kuiz</a></li>
        <li><a href="semak.php" class="external">Semakan Pencapaian</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="./admin" class="external">Laman Admin</a></li>
        <li><a href="logout.php" class="external">Logout</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
   <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Pengurusan Kuiz Online Sejarah Tingkatan 4</h6>
              <h2><em>Bab 3 :</em> Konflik Dunia Dan Pendudukan Jepun Di Negara Kita</h2>
              
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


 
<section>
        <article>
        <?php
        session_start();
        $id = $_SESSION['no_ic'];
        $nama_murid = $_SESSION['nama'];
        $namakuiz = $_GET['kuiz'];
        if(empty($id)){ ?>
          <script type="text/javascript">
            window.alert("Sila login dahulu.");
            window.location='login.php';
          </script>
      <?php }else{ ?>
      <h3> Soalan <?php echo $namakuiz ?></h3>
          <?php
          if(isset($_GET['jawapan'])){
            include 'prosesjawapan.php';
          }else{
            include 'paparkuiz.php';
            }
          } ?>
        </article>
</section>


  

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'footer.php'; ?>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>