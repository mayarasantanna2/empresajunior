 <?php
    require 'conexao.php';
 ?>

 <?php
    $sql = "SELECT * FROM projeto";
    $stmt = $pdo->query($sql);
    while ($projeto = $stmt->fetch(PDO::FETCH_ASSOC)) {
  ?>
 
              <div class="modal fade" id="modalProjeto1" tabindex="-1" aria-labelledby="modalProjeto1Label"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                      <h5><?php echo $projeto['nome_projeto']; ?></h5>
                      <strong>Descrição:</strong>
                      <p><?php echo $projeto['descrição_projeto']; ?></p>
                      <strong>Requisitos Necessários:</strong>
                      <p><?php echo $projeto['requisitos_necessários']; ?></p>
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