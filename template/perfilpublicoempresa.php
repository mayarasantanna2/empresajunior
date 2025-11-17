<!DOCTYPE html>
<html lang="pt-BR">

<body>

    <!-- Header -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="restritaaluno.php">
                    <span>
                        <h2>Olá, Aluno</h2>
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
                            <a class="nav-link" href="perfilaluno.php">Seu Perfil</a>
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
                <h2>Empresa 1</h2>
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="box p-4" style="text-align: left;">
                        <div class="detail-box">
                            <div class="profile-header">
                                <div class="profile-pic-container">
                                    <img src="images/prancheta2.png" alt="Foto de perfil" class="profile-pic"
                                        id="profileImage">
                                </div>

                                <div style="text-align:left;">
                                    <br>
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
                                        A Empresa 1 é uma startup localizada no ABC Paulista, especializada em soluções
                                        digitais
                                        para microempreendedores e artesãos locais. Fundada em 2022, a empresa nasceu
                                        com o
                                        propósito de impulsionar pequenos negócios criativos por meio da tecnologia,
                                        conectando
                                        o talento artesanal ao comércio eletrônico.
                                    </p>
                                    <p>
                                        Nosso foco é oferecer plataformas acessíveis e intuitivas, que permitam que
                                        empreendedores sem conhecimento técnico possam divulgar e vender seus produtos
                                        online. A
                                        Criarte acredita que o futuro do comércio está na integração entre criatividade
                                        e
                                        inovação tecnológica, e trabalha diariamente para tornar o ambiente digital mais
                                        inclusivo e sustentável.
                                    </p>
                                    <p>
                                        Além disso, a empresa participa ativamente de projetos educacionais em parceria
                                        com
                                        ETECs, oferecendo oportunidades para alunos colocarem em prática seus
                                        conhecimentos em
                                        desenvolvimento web, design e banco de dados. Essa colaboração reforça nosso
                                        compromisso
                                        com a formação de novos talentos e com o fortalecimento do ecossistema local de
                                        tecnologia.
                                    </p>
                                    <p>
                                        Missão: Tornar o comércio digital acessível para todos os empreendedores
                                        criativos. <br>

                                        Visão: Ser referência em soluções tecnológicas para micro e pequenos negócios no
                                        Brasil.
                                        Valores: Inovação, colaboração, sustentabilidade e inclusão digital.
                                    </p>
                                    <strong>Ano de Fundação:</strong>
                                    <p>2019</p>
                                    <br>
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
A Empresa 1 é uma startup localizada no ABC Paulista, especializada em soluções digitais para microempreendedores e artesãos locais. Fundada em 2019, a empresa nasceu com o propósito de impulsionar pequenos negócios criativos por meio da tecnologia, conectando o talento artesanal ao comércio eletrônico.

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
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" hr class="btn btn-primary">Salvar Alterações</button>

                </div>
            </div>
        </div>
    </div>

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