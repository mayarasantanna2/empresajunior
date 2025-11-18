<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Freetecs </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img class="imglogo" src="images/imgfundo2.png" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img class="imglogo" src="images/logo.png" alt="">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Início </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.html">Contato</a>
              </li>


            </ul>
            <div class="user_option">
              <div class="dropdown">
                <a class="order_online dropdown-toggle" href="#" id="dropdownCadastro" data-toggle="dropdown">
                  Cadastrar
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="cadastro.php">Aluno</a>
                  <a class="dropdown-item" href="cadastroempresa.php">Empresa</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="container ">
          <div class="row">
            <div class="col-md-7 col-lg-6 ">
              <div class="detail-box">
                <h3 class="efeito">
                  Transforme ideias em realidade com Freetecs: Estudantes se candidatam, participam de projetos de
                  empresas ainda recebem certificado por sua contribuição.
                </h3>
                <div class="btn-box">
                  <a href="login.php" class="btn1">
                    Entre
                  </a>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- end slider section -->
  </div>





  <!-- listar projetos -->
  <?php
    require 'conexao.php';
  ?>

 <section class="food_section layout_padding-bottom">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="titulo">
          Projetos Disponíveis
        </h2>
      </div>
      <br>
      
      <div class="container">
        <div class="filters-content">
          <div class="row grid">

            <?php
              $sql = "SELECT * FROM projeto";
              $stmt = $pdo->query($sql);
              while ($projeto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <div class="col-sm-6 col-lg-4 all pizza">
                  <div class="box">
                    <div>
                      <div class="img-box">
                        <img src="images/prancheta2.png" alt="">
                      </div>

                      
                      <div class="detail-box">
                        
                            <h5><?php echo $projeto['nome_projeto']; ?></h5>

                            <p><?php echo $projeto['descrição_projeto']; ?></p>

                            <div class="options">
                              <a style="width: 80px; background:transparent; text-decoration:none; color:inherit;"
                                href="perfilpublicoempresa.php?id="
                                class="link-empresa">
                                <h6><?php echo $projeto['nome_empresa']; ?></h6>
                              </a>

                              <a href="login.php">
                                <svg version="1.1" id="icon_plus" xmlns="http://www.w3.org/2000/svg"
                                  x="0px" y="0px" viewBox="0 0 448 448">
                                  <g>
                                    <path d="M408 184H264V40c0-22.092-17.908-40-40-40s-40 17.908-40 40v144H40c-22.092 
                                    0-40 17.908-40 40s17.908 40 40 40h144v144c0 22.092 17.908 40 40 40s40-17.908 
                                    40-40V264h144c22.092 0 40-17.908 40-40s-17.908-40-40-40z"/>
                                  </g>
                                </svg>
                              </a>
                            </div>

                            <hr><br>

                        <?php 
                          } // fim do while
                        ?>
                      </div>



                    </div>
                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- fim listar projetos -->




  
  <!-- about section -->

  <section id="sobre" class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img style="width: 9000px; margin-right: 20%; " src="images/image-removebg-preview.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Sobre a Freetecs
              </h2>
            </div>
            <p>
              A FREETECS é uma plataforma que conecta empresas parceiras a alunos voluntários da ETEC, criando
              oportunidades reais de aprendizado e colaboração. Nosso objetivo é aproximar o mercado e a escola,
              permitindo que as empresas publiquem projetos ou demandas e que os alunos se candidatem para realizá-los
              de forma voluntária e prática.
              Além de contribuir com soluções para o mundo real, os participantes desenvolvem suas habilidades,
              fortalecem seus portfólios e recebem certificados digitais de voluntariado.
              Mais do que um sistema, a FREETECS é um espaço para crescimento, experiência e impacto.

            </p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  


  <!-- client section -->
  <br>
  <br>
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          Desenvolvedores
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Banco de Dados
                </p>
                <h6>
                  16 Anos
                </h6>
                <p>
                  Katarina Vitória da Silva
                </p>
              </div>
              <div class="img-box">
                <img src="images/kat.jpeg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Back-end
                </p>
                <h6>
                  17 Anos
                </h6>
                <p>
                  João Vinícius Costa
                </p>
              </div>
              <div class="img-box">
                <img src="images/jv.jpeg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Front-end
                </p>
                <h6>
                  16 Anos
                </h6>
                <p>
                  Mayara de Oliveira Sant'Anna
                </p>
              </div>
              <div class="img-box">
                <img src="images/may.jpeg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Banco de Dados
                </p>
                <h6>
                  16 Anos
                </h6>
                <p>
                  Rihanna C. G. Arantes
                </p>
              </div>
              <div class="img-box">
                <img src="images/rih.jpeg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Back-end
                </p>
                <h6>
                  17 Anos
                </h6>
                <p>
                  Pedro H. Rillo de Carvalho
                </p>
              </div>
              <div class="img-box">
                <img src="images/pe.jpeg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contato
            </h4>
            <div class="contact_link_box">

              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Tel +55 (11)97398-3920
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  freetecs@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Freetecs
            </a>
            <p>
              Transforme aprendizado em experiência e conquiste seu certificado.
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Horário de funcionamento
          </h4>
          <p>
            Seg-Sex: 7:00-19:00
          </p>
          <p> Sábado: 9:00-16:00</p>

        </div>
      </div>
      <div class="footer-info">
        <p>@2025 Todos os direitos reservados à FreeTecs</p> <br>
          
        <p>Distribuído por ETEC MCM</p>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script>
    $(document).ready(function () {
      $(".client_owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
          0: { items: 1 },
          600: { items: 2 },
          1000: { items: 3 }
        }
      });
    });
  </script>
</body>

</html>