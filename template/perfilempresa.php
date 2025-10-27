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
                            <a class="nav-link" href="restritaempresa.php">Projetos</a>
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
                <h2>Seu Perfil</h2>
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="box p-4" style="text-align: left;">
                        <div class="detail-box">
                            <h5>Informações Públicas</h5>
                            <br>
                            <div class="profile-header">
                                <div class="profile-pic-container">
                                    <img src="images/default-profile.png" alt="Foto de perfil" class="profile-pic"
                                        id="profileImage">
                                    <input type="file" id="profileUpload" accept="image/*">
                                    <label for="profileUpload" class="upload-icon">
                                        <i class="fa fa-camera"></i>
                                    </label>
                                </div>
                            </div>

                            <strong class="tituloperfil">Nome da Empresa: </strong>
                            <p>Empresa 1</p>

                            <strong>E-mail:</strong>
                            <p>empresa1@email.com</p>

                            <strong>Telefone:</strong>
                            <p>(11) 98765-4321</p>

                            <strong>Área de Atuação:</strong>
                            <p>Tecnologia</p>

                            <strong>Descrição Institucional:</strong>
                            <p>
                                A Empresa 1 é uma startup localizada no ABC Paulista, especializada em soluções digitais
                                para microempreendedores e artesãos locais. Fundada em 2022, a empresa nasceu com o
                                propósito de impulsionar pequenos negócios criativos por meio da tecnologia, conectando
                                o talento artesanal ao comércio eletrônico.
                            </p>
                            <p>
                                Nosso foco é oferecer plataformas acessíveis e intuitivas, que permitam que
                                empreendedores sem conhecimento técnico possam divulgar e vender seus produtos online. A
                                Criarte acredita que o futuro do comércio está na integração entre criatividade e
                                inovação tecnológica, e trabalha diariamente para tornar o ambiente digital mais
                                inclusivo e sustentável.
                            </p>
                            <p>
                                Além disso, a empresa participa ativamente de projetos educacionais em parceria com
                                ETECs, oferecendo oportunidades para alunos colocarem em prática seus conhecimentos em
                                desenvolvimento web, design e banco de dados. Essa colaboração reforça nosso compromisso
                                com a formação de novos talentos e com o fortalecimento do ecossistema local de
                                tecnologia.
                            </p>
                            <p>
                                Missão: Tornar o comércio digital acessível para todos os empreendedores criativos. <br>

                                Visão: Ser referência em soluções tecnológicas para micro e pequenos negócios no Brasil.
                                Valores: Inovação, colaboração, sustentabilidade e inclusão digital.
                            </p>
                            <strong>Ano de Fundação:</strong>
                            <p>2019</p>
                            <br>
                            <hr class="linha">
                            <br>


                            <h5>Informações Privadas</h5>
                            <br>

                            <strong>CNPJ</strong>
                            <p>00.000.000/0000-00</p>

                            <strong>Senha:</strong>
                            <p>********</p>

                            <div class="btn-box">
                                <a href="javascript:void(0)" class="btn1" data-bs-toggle="modal"
                                    data-bs-target="#modalEditar">
                                    Editar
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Modal de Edição -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Informações do Perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="titulo">Título:</label>
                            <input type="text" class="form-control" id="titulo" value="Empresa 1" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" value="empresa1@email.com" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="telefone">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" value="(11) 98765-4321">
                        </div>

                        <div class="form-group mb-3">
                            <label for="curso">Área de Atuação:</label>
                            <input type="text" class="form-control" id="atuacao" value="Tecnologia">
                        </div>

                        <div class="form-group mb-3">
                            <label for="descricaoi">Descrição Institucional</label>
                            <textarea class="form-control" id="descricaoi" rows="3">
A Empresa 1 é uma startup localizada no ABC Paulista, especializada em soluções digitais para microempreendedores e artesãos locais. Fundada em 2022, a empresa nasceu com o propósito de impulsionar pequenos negócios criativos por meio da tecnologia, conectando o talento artesanal ao comércio eletrônico.

Nosso foco é oferecer plataformas acessíveis e intuitivas, que permitam que empreendedores sem conhecimento técnico possam divulgar e vender seus produtos online. A Criarte acredita que o futuro do comércio está na integração entre criatividade e inovação tecnológica, e trabalha diariamente para tornar o ambiente digital mais inclusivo e sustentável.

Além disso, a empresa participa ativamente de projetos educacionais em parceria com ETECs, oferecendo oportunidades para alunos colocarem em prática seus conhecimentos em desenvolvimento web, design e banco de dados. Essa colaboração reforça nosso compromisso com a formação de novos talentos e com o fortalecimento do ecossistema local de tecnologia.

Missão: Tornar o comércio digital acessível para todos os empreendedores criativos.
Visão: Ser referência em soluções tecnológicas para micro e pequenos negócios no Brasil. Valores: Inovação, colaboração, sustentabilidade e inclusão digital.</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="ano">Ano de Fundação:</label>
                            <input type="number" class="form-control" id="number" value="2019">
                        </div>

                        <hr>

                        <div class="form-group mb-3">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control" id="cnpj" value="00.000.000/0000-00">
                        </div>

                        <div class="form-group mb-3">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" value="123456">
                        </div>

                    </form>
                    <div class="modal-footer">
                        <div class="btn-box">
                            <a style="color: white;" data-bs-dismiss="modal"> Cancelar </a>
                        </div>
                        <div class="btn-box">
                            <a style="color: white;" data-bs-dismiss="modal"> Salvar Alterações </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>Contact Us</h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Location</span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Call +01 1234567890</span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>demo@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">Feane</a>
                        <p>Necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin
                            words, combined with
                        </p>
                        <div class="footer_social">
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>Opening Hours</h4>
                    <p>Everyday</p>
                    <p>10.00 Am -10.00 Pm</p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a><br><br>
                    &copy; <span id="displayYear"></span> Distributed By
                    <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
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