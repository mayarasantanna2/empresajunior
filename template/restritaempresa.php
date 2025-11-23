<!DOCTYPE html>
<html>

<body>

  <?php require 'headerempresa.php' ?>
  <?php require 'conexao.php'; ?>
  <!-- food section -->

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
          Seus Projetos Cadastrados
        </h2>
      </div>
      <div  class="btn-box">
        <a style="text-decoration: none;" href="#" class="btn1" data-bs-toggle="modal" data-bs-target="#modalCadastrarProjeto">
          Cadastrar Projeto
        </a>

      </div>
      <br>

      <!-- card projeto -->
      <div class="container">
        <div class="filters-content">
          <div class="row grid">

          <?php
            $sql = "
            SELECT 
            projeto.nome_projeto,
            projeto.descricao_do_projeto,
            empresa.nome_empresa
            FROM projeto
            LEFT JOIN empresa ON projeto.id_empresa = empresa.id_empresa
            ";

            $stmt = $pdo->query($sql);

            if ($stmt->rowCount() == 0) {
              echo "<p>Nenhum projeto encontrado.</p>";
            }

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
                    <p><?php echo $projeto['descricao_do_projeto']; ?></p>
                    
                    <div class="options">

                      <!-- Botão que abre o modal -->
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalProjeto<?= $id ?>">
                        <svg version="1.1" id="icon_plus" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448 448"
                          style="enable-background:new 0 0 448 448;" xml:space="preserve">
                          <g>
                            <path d="M408 184H264V40c0-22.092-17.908-40-40-40s-40 17.908-40 40v144H40c-22.092 0-40 17.908-40 40s17.908 40 40 40h144v144
                            c0 22.092 17.908 40 40 40s40-17.908 40-40V264h144c22.092 0 40-17.908 40-40s-17.908-40-40-40z" />
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal do projeto -->
            <div class="modal fade" id="modalProjeto<?= $id ?>" tabindex="-1">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Projeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                  </div>
                  <div class="modal-body">
                      <h5><?php echo $projeto['nome_projeto']; ?></h5>
                      <strong>Descrição:</strong>
                      <p><?php echo $projeto['descricao_do_projeto']; ?></p>
                      <strong>Requisitos Necessários:</strong>
                      <p><?php echo $projeto['requisitos_necessarios']; ?></p>
                      <strong>Data Limite:</strong>
                      <p><?php echo $projeto['data_limite']; ?></p>
                      <strong>Carga horária estimada:</strong>
                      <p><?php echo $projeto['qt_horas']; ?></p>
                  </div>
                  <div class="modal-footer">
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

                    <div class="btn-box">
                      <a style="color: white;" class="btn1" data-bs-dismiss="modal">
                        Fechar
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- fim modal do projeto -->

            <!-- Modal de Edição -->
            <div class="modal fade" id="modalEditar<?= $id ?>" tabindex="-1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Projeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                  </div>

                  <div class="modal-body">
                    <form>
                      <div class="form-group mb-3">
                        <label>Título do Projeto</label>
                        <input type="text" class="form-control" value="<?= $projeto['nome_projeto']; ?>">
                      </div>

                      <div class="form-group mb-3">
                        <label>Descrição</label>
                        <textarea class="form-control" rows="3"><?= $projeto['descricao_do_projeto']; ?></textarea>
                      </div>

                      <div class="form-group mb-3">
                        <label>Requisitos Necessários</label>
                        <input type="text" class="form-control" value="<?= $projeto['requisitos_necessarios']; ?>">
                      </div>

                      <div class="form-group mb-3">
                        <label>Data Limite</label>
                        <input type="date" class="form-control" value="<?= $projeto['data_limite']; ?>">
                      </div>

                      <div class="form-group mb-3">
                        <label>Carga Horária</label>
                        <input type="number" class="form-control" value="<?= $projeto['qt_horas']; ?>">
                      </div>

                    </form>
                  </div>

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
          </div>

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

    <!-- Modal Cadastrar Projeto -->
    <div class="modal fade" id="modalCadastrarProjeto" tabindex="-1" aria-labelledby="modalCadastrarProjetoLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 15px;">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCadastrarProjetoLabel">Cadastrar Novo Projeto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <form id="formCadastrarProjeto" action="cadastroprojeto.php" METHOD="POST">
              <div class="mb-3">
                <label for="tituloProjeto" class="form-label">Título do Projeto</label>
                <input type="text" class="form-control" id="tituloProjeto" placeholder="Digite o título do projeto"
                  required name="nome_projeto">
              </div>
              <div class="mb-3">
                <label for="descricaoProjeto" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricaoProjeto" rows="3" placeholder="Digite a Descrição do Projeto"
                  required name="descricao_do_projeto"></textarea>
              </div>
              <div class="mb-3">
                <label for="requisitosProjeto" class="form-label">Requisitos Necessários</label>
                <input type="text" class="form-control" id="requisitosProjeto" placeholder="Ex: HTML, CSS, PHP..."
                  required name="requisitos_necessarios">
              </div>
              <div class="mb-3">
                <label for="dataLimite" class="form-label">Data Limite</label>
                <input type="date" class="form-control" id="dataLimite" required name="data_limite">
              </div>
              <div class="mb-3">
                <label for="cargaHoraria" class="form-label">Carga Horária Estimada (em horas)</label>
                <input type="number" class="form-control" id="cargaHoraria" min="1" required name="qt_horas">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="btn-box">
              <a class="btn1" data-bs-dismiss="modal" style="color:white;">Cancelar</a>
              <button id="modalOkBtn" type="submit" class="btn btn-primary btn-block" form="formCadastrarProjeto">Cadastrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Modal Cadastrar Projeto -->

  </section>

  <?php require 'head_footer.php' ?>

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
</body>

</html>