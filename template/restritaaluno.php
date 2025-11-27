<!DOCTYPE html>
<html>

<body>

  <?php require 'headeraluno.php' ?>
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
          Projetos Disponíveis
        </h2>
      </div>
      <br>

      <div class="container">
        <div class="filters-content">
          <div class="row grid">

            <?php
                $sql = "
                SELECT 
                  projeto.*, 
                  empresa.nome_empresa,
                  empresa.id_empresa
              FROM projeto
              LEFT JOIN empresa ON projeto.id_empresa = empresa.id_empresa
              ";
                $stmt = $pdo->query($sql);
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
                              <a style="width: 80px; background:transparent; text-decoration:none; color:inherit;"
                                href="perfilpublicoempresa.php?id="
                                class="link-empresa">
                                <h6><?php echo $projeto['nome_empresa']; ?></h6>
                              </a>

                              <a href="#" data-bs-toggle="modal"
                                data-bs-target="#modalProjeto<?php echo $projeto['id_projeto']; ?>">
                                <svg version="1.1" id="icon_plus" xmlns="http://www.w3.org/2000/svg"
                                  x="0px" y="0px" viewBox="0 0 448 448">
                                  <g>
                                    <path d="M408 184H264V40c0-22.092-17.908-40-40-40s-40..." />
                                  </g>
                                </svg>
                              </a>
                            </div>

                            <hr><br>

                      </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modalProjeto<?php echo $projeto['id_projeto']; ?>" tabindex="-1">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">

                  <div class="modal-header">
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
                      <a style="color: white;" id="btnCadastrar" class="btn1">
                        Candidatar-Se
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

            <?php 
              } // fim do while
            ?>

            <!-- <div class="modal fade" id="cadastroSucessoModal" tabindex="-1" role="dialog"
              aria-labelledby="cadastroSucessoModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Cadastro concluído!</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Seu cadastro foi realizado com sucesso!. Realize login para acessar a sua página.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div> -->
                
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>

  <?php require 'head_footer.php' ?>

  <!-- end food section -->

</body>