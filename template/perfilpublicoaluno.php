<!DOCTYPE html>
<html lang="pt-BR">

<body>

    <?php require 'headerempresa.php' ?>


    <!-- Perfil Section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <br><br><br><br><br>
              
            </div>
            <br>

            <?php
                $sql = "SELECT * FROM aluno";
                $stmt = $pdo->query($sql);
                while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    $id = $aluno['id_aluno'];
            ?>
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
                                    <br>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            <?php 
                } // fim do while
            ?>
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