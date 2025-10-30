<!DOCTYPE html>
<html lang="pt-BR">

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

    <?php require 'head_footer.php' ?>
    
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