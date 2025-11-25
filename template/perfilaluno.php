<!DOCTYPE html>
<html lang="pt-BR">

<body>

    <?php
    session_start();
    require 'headeraluno.php';
    require 'conexao.php';

    // Se não estiver logado, redireciona
    if (!isset($_SESSION['id'])) {
        header("Location: login.php");
        exit;
    }
    $id = $_SESSION['id'];
    ?>

    <!-- Perfil Section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <br><br><br><br><br>
                <h2>Seu Perfil</h2>
            </div>
            <br>

            <?php
                $sql = "SELECT * FROM aluno WHERE id_aluno = :id LIMIT 1";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $aluno = $stmt->fetch(PDO::FETCH_ASSOC);
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

                            <strong>Nome Completo:</strong>
                            <p><?php echo $aluno['nome_aluno']; ?></p>
                            <strong>E-mail:</strong>
                            <p><?php echo $aluno['email_aluno']; ?></p>
                            <strong>Telefone:</strong>
                            <p><?php echo $aluno['telefone_aluno']; ?></p>
                            <strong>Curso:</strong>
                            <p><?php echo $aluno['curso']; ?></p>
                            <strong>Descrição Pessoal:</strong>
                            <p><?php echo $aluno['descricao']; ?></p>
                            <strong>Habilidades e Competências</strong>
                            <p><?php echo $aluno['habilidades']; ?></p>

                            <hr class="linha">
                            <br>
                            <h5>Informações Privadas</h5>
                            <br>
                            <strong>Data de Nascimento:</strong>
                            <p><?php echo $aluno['datanasc']; ?></p>
                            <strong>Registro de Matrícula:</strong>
                            <p><?php echo $aluno['RM']; ?></p>
                            <strong>Senha:</strong>
                            <p><?php echo $aluno['senha_aluno']; ?></p>
                            
                                <div class="btn-box">
                                 <form action="deletealuno.php" method="POST"> 
                                        <input type="hidden" name="id" value="<?php echo $aluno['id_aluno']; ?> " > 
                                <button  type="submit" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">
                                    Excluir
                </button>
                </form>
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
                    $sql = "SELECT * FROM aluno WHERE id_aluno = :id LIMIT 1";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <form action="processaedicaoaluno.php" method="POST"> 
                <div class="modal-body">
                    
                    <input type="hidden" name="id_aluno" value="<?= $aluno['id_aluno']; ?>">
                    
                    <div class="form-group mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="novo_nome" value="<?= $aluno['nome_aluno']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="novo_email" value="<?= $aluno['email_aluno']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" name="novo_telefone" value="<?= $aluno['telefone_aluno']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="curso">Curso</label>
                        <input type="text" class="form-control" name="novo_curso" value="<?= $aluno['curso']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="descricao">Descrição Pessoal</label>
                        <textarea class="form-control" name="nova_descricao" rows="3"><?= $aluno['descricao']; ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="habilidades">Habilidades e Competências</label>
                        <textarea class="form-control" name="novas_habilidades" rows="3"><?= $aluno['habilidades']; ?></textarea>
                    </div>
                    <hr>
                    <div class="form-group mb-3">
                        <label for="matricula">Data de Nascimento</label>
                        <input type="date" class="form-control" name="nova_datanasc" value="<?= $aluno['datanasc']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="matricula">Registro de Matrícula</label>
                        <input type="text" class="form-control" name="novo_RM" value="<?= $aluno['RM']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="nova_senha" placeholder="Digite uma nova senha (ou deixe vazio)">
                    </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div> 
                </form>
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