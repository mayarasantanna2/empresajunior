<!DOCTYPE html>
<html lang="pt-BR">

<body>

    <?php require 'headeradm.php' ?>

    <!-- Perfil Section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <br><br><br><br><br>
                <h2>Seu Perfil</h2>
            </div>
            <br>


            <?php
                $sql = "SELECT * FROM empresa";
                $stmt = $pdo->query($sql);
                while ($empresa = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    $id = $empresa['id_empresa'];
            ?>
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

                            <strong>Nome da Empresa: </strong>
                            <p><?php echo $empresa['nome_empresa']; ?></p>
                            <strong>E-mail:</strong>
                            <p><?php echo $empresa['email_empresa']; ?></p>
                            <strong>Telefone:</strong>
                            <p><?php echo $empresa['telefone_empresa']; ?></p>
                            <strong>Área de Atuação:</strong>
                            <p><?php echo $empresa['area_de_atuacao']; ?></p>
                            <strong>Descrição Institucional:</strong>
                            <p><?php echo $empresa['descricao_institucional']; ?></p>
                            <strong>Ano de Fundação:</strong>
                            <p><?php echo $empresa['ano_de_fundacao']; ?></p>
                            <br>
                            <hr class="linha">
                            <br>

                            <h5>Informações Privadas</h5>
                            <br>
                            <strong>CNPJ</strong>
                            <p><?php echo $empresa['CNPJ']; ?></p>
                            <strong>Senha:</strong>
                            <p><?php echo $empresa['senha_empresa']; ?></p>

                            <div class="btn-box">
                                <a style="background: red; color: white;" class="btn1" data-bs-dismiss="modal">
                                    Excluir
                                </a>
                                </div>

                                <div class="btn-box">
                                <a style="text-decoration: none;" href="javascript:void(0)" class="btn1" data-bs-toggle="modal" data-bs-target="#modalEditar">
                                    Editar
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php 
                } // fim do while
            ?>

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

                <?php
                    $sql = "SELECT * FROM empresa";
                    $stmt = $pdo->query($sql);
                    while ($empresa = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        $id = $empresa['id_empresa'];
                ?>
                <form action="processaedicaoempresa.php" method="POST">
                
                <div class="modal-body">
                    <input type="hidden" name="id_empresa" value="<?= $empresa['id_empresa']; ?>">

                    <div class="form-group mb-3">
                        <label for="titulo">Nome:</label>
                        <input type="text" class="form-control" name="novo_nome" value="<?= $empresa['nome_empresa']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="novo_email" value="<?= $empresa['email_empresa']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" name="novo_telefone" value="<?= $empresa['telefone_empresa']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="curso">Área de Atuação:</label>
                        <input type="text" class="form-control" name="nova_area_de_atuacao" value="<?= $empresa['area_de_atuacao']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="descricaoi">Descrição Institucional</label>
                        <textarea class="form-control" name="nova_descricao_institucional" rows="3"><?= $empresa['descricao_institucional']; ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ano">Ano de Fundação:</label>
                        <input type="number" class="form-control" name="novo_ano_de_fundacao" value="<?= $empresa['ano_de_fundacao']; ?>">
                    </div>
                    <hr>
                    <div class="form-group mb-3">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="form-control" name="novo_CNPJ" value="<?= $empresa['CNPJ']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="nova_senha" placeholder="Deixe vazio para não alterar a senha">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </form>
            <?php 
                    } // fim do while
                ?>
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