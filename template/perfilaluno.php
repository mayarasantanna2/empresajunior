<!DOCTYPE html>
<html lang="pt-BR">

<body>

    <?php require 'headeraluno.php' ?>

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

                            <strong class="tituloperfil">Nome Completo:</strong>
                            <p>João da Silva Santos</p>

                            <strong>E-mail:</strong>
                            <p>joaosilva@email.com</p>

                            <strong>Telefone:</strong>
                            <p>(11) 98765-4321</p>

                            <strong>Curso:</strong>
                            <p>Informática Para Internet</p>

                            <strong>Descrição Pessoal:</strong>
                            <p>Olá! Meu nome é João, tenho 15 anos e curso o 1º ano do Ensino Médio integrado ao técnico
                                em Informática para Internet na Etec MCM. Moro em Ribeirão Pires com meus pais e minha
                                gata. Sou apaixonado por música e livros, e gosto de aprender coisas novas,
                                especialmente na área de tecnologia e design. Busco oportunidades para desenvolver
                                minhas habilidades, colaborar com projetos criativos e ganhar experiência prática.
                            </p>

                            <strong>Habilidades e Competências</strong>
                            <p>Inglês intermediário; HTML básico; CSS básico; JavaScript básico; Word básico; Excel
                                básico; Photoshop básico; Pontualidade; Criatividade; Trabalho em Equipe.</p>
                            <br>
                            <hr class="linha">
                            <br>
                            <h5>Informações Privadas</h5>
                            <br>

                            <strong>Data de Nascimento:</strong>
                            <p>12/03/2009</p>

                            <strong>CPF:</strong>
                            <p>155.584.634-01</p>

                            <strong>Registro de Matrícula:</strong>
                            <p>23678</p>

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
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" value="João da Silva Santos" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" value="joaosilva@email.com" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="telefone">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" value="(11) 98765-4321">
                        </div>

                        <div class="form-group mb-3">
                            <label for="curso">Curso</label>
                            <input type="text" class="form-control" id="curso" value="Informática para Internet">
                        </div>

                        <div class="form-group mb-3">
                            <label for="descricao">Descrição Pessoal</label>
                            <textarea class="form-control" id="descricao" rows="3">Olá! Meu nome é João, tenho 15 anos e curso o 1º ano do Ensino Médio integrado ao técnico em Informática para Internet na Etec MCM. Moro em Ribeirão Pires com meus pais e minha gata. Sou apaixonado por música e livros, e gosto de aprender coisas novas, especialmente na área de tecnologia e design. Busco oportunidades para desenvolver minhas habilidades, colaborar com projetos criativos e ganhar experiência prática.</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="habilidades">Habilidades e Competências</label>
                            <textarea class="form-control" id="habilidades" rows="2">Inglês intermediário; HTML básico; CSS básico; JavaScript básico; Word básico; Excel básico; Photoshop básico; Pontualidade; Criatividade; Trabalho em Equipe.</textarea>
                        </div>

                        <hr>

                        <div class="form-group mb-3">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" value="155.584.634-01">
                        </div>

                        <div class="form-group mb-3">
                            <label for="matricula">Registro de Matrícula</label>
                            <input type="text" class="form-control" id="matricula" value="23678">
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