<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Perfil - Freetecs</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Header -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="restritaaluno.php">
                    <span>
                        <h2>Olá, Empresa 1</h2>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mx-auto ">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.html">Início </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="restritaaluno.php">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfilempresa.php"> Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>
        </div>
    </header>
    <!-- end header -->


    <!-- Perfil Section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <br><br><br><br><br>
              
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="box p-4" style="text-align: left;">
                        <div class="detail-box">
                            <div class="profile-header">
                                <div class="profile-pic-container">
                                    <img src="images/client2.jpg" alt="Foto de perfil" class="profile-pic"
                                        id="profileImage">
                                </div>

                                <div style="text-align:left;">
                                    <br>

                                    <strong class="tituloperfil">Nome Completo:</strong>
                                    <p>João da Silva Santos</p>

                                    <strong>E-mail:</strong>
                                    <p>joaosilva@email.com</p>

                                    <strong>Telefone:</strong>
                                    <p>(11) 98765-4321</p>

                                    <strong>Curso:</strong>
                                    <p>Informática Para Internet</p>

                                    <strong>Descrição Pessoal:</strong>
                                    <p>Olá! Meu nome é João, tenho 15 anos e curso o 1º ano do Ensino Médio integrado ao
                                        técnico
                                        em Informática para Internet na Etec MCM. Moro em Ribeirão Pires com meus pais e
                                        minha
                                        gata. Sou apaixonado por música e livros, e gosto de aprender coisas novas,
                                        especialmente na área de tecnologia e design. Busco oportunidades para
                                        desenvolver
                                        minhas habilidades, colaborar com projetos criativos e ganhar experiência
                                        prática.
                                    </p>

                                    <strong>Habilidades e Competências</strong>
                                    <p>Inglês intermediário; HTML básico; CSS básico; JavaScript básico; Word básico;
                                        Excel
                                        básico; Photoshop básico; Pontualidade; Criatividade; Trabalho em Equipe.</p>
                                    <br>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
    </section>


    <!-- Footer -->
    <footer class="footer_section">
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
    <!-- Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        const uploadInput = document.getElementById('profileUpload');
        const profileImage = document.getElementById('profileImage');

        uploadInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>