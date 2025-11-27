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
            <?php
                $sql = "SELECT * FROM empresa";
                $stmt = $pdo->query($sql);
                while ($empresa = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    $id = $empresa['id_empresa'];
            ?>
            <div class="heading_container heading_center">
                <br><br><br><br><br>
                <h2><?php echo $empresa['nome_empresa']; ?></h2>
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