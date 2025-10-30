<!DOCTYPE html>
<html>

<body>

  <?php require 'headerempresa.php' ?>
  
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

            <div class="col-sm-6 col-lg-4 all pizza">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/prancheta2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5> Sistema de Estoque para Mercado
                    </h5>
                    <p>
                      O projeto consiste em criar um sistema web simples que permita registrar produtos, controlar
                      entradas e saídas e gerar relatórios de estoque para um pequeno mercado de bairro
                    </p>
                    <div class="options">
                      <h6>empresa 1</h6>

                      <!-- Botão que abre o modal -->
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalProjeto1">
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
            <div class="modal fade" id="modalProjeto1" tabindex="-1" aria-labelledby="modalProjeto1Label"
              aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalProjeto1Label">Detalhes do Projeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                  </div>
                  <div class="modal-body">
                    <h5>Sistema de Estoque para Mercado</h5>
                    <strong>Descrição:</strong>
                    <p>O projeto consiste em criar um sistema web simples que permita registrar produtos, controlar
                      entradas e saídas e gerar relatórios de estoque para um pequeno mercado de bairro.</p>

                    <strong>Requisitos Necessários:</strong>
                    <p>Conhecimento em HTML, CSS, PHP e MySQL.</p>

                    <strong>Data Limite:</strong>
                    <p>10/12/2025</p>

                    <strong>Carga horária estimada:</strong>
                    <p>60 Horas</p>
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
            <div style=" font-family: 'Raleway', sans-serif;" class="modal fade" id="modalEditar" tabindex="-1"
              aria-labelledby="modalEditarLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 15px;">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Informações do Perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                  </div>

                  <div class="modal-body">
                    <form>
                      <div class="form-group mb-3">
                        <label for="Titulo">Título do Projeto:</label>
                        <input type="text" class="form-control" id="titulo" value="Sistema de Estoque para Mercado"
                          required>
                      </div>

                      <div class="form-group mb-3">
                        <label for="descricao">Descrição:</label>
                        <textarea class="form-control" id="descricao"
                          rows="3">O projeto consiste em criar um sistema web simples que permita registrar produtos, controlar entradas e saídas e gerar relatórios de estoque para um pequeno mercado de bairro.</textarea>
                      </div>

                      <div class="form-group mb-3">
                        <label for="requisitos">Requisitos Necessários:</label>
                        <input type="text" class="form-control" id="requisitos"
                          value="Conhecimento em HTML, CSS, PHP e MySQL">
                      </div>

                      <div class="form-group mb-3">
                        <label for="descricao">Data Limite:</label>
                        <input type="date" name="datalimite" id="datalimite" value="10/12/2025">
                      </div>

                      <div class="form-group mb-3">
                        <label for="habilidades">Habilidades e Competências</label>
                        <textarea class="form-control" id="habilidades"
                          rows="2">Inglês intermediário; HTML básico; CSS básico; JavaScript básico; Word básico; Excel básico; Photoshop básico; Pontualidade; Criatividade; Trabalho em Equipe.</textarea>
                      </div>

                      <div class="form-group mb-3">
                        <label for="carga">Carga Horária Estimada: </label>
                        <input type="number" class="form-control" id="carga" value="60">
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

            <div class="col-sm-6 col-lg-4 all pizza">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/prancheta2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      projeto 2
                    </h5>
                    <p>
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      repellendus sed eaque Lorem ipsum dolor sit amet consectetur adipisicing elit. In animi neque
                      accusantium dolorum sit consectetur facere ratione fugit, laudantium
                    </p>
                    <div class="options">
                      <h6>
                        empresa 1
                      </h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalProjeto1">
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

            <div class="col-sm-6 col-lg-4 all fries">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/prancheta2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      projeto 5
                    </h5>
                    <p>
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      repellendus sed eaque Lorem ipsum dolor sit amet consectetur adipisicing elit. In animi neque
                      accusantium dolorum sit consectetur facere ratione fugit, laudantium 
                    </p>
                    <div class="options">
                      <h6>
                        empresa 1
                      </h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalProjeto1">
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

            <div class="col-sm-6 col-lg-4 all pizza">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/prancheta2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      projeto 6
                    </h5>
                    <p>
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      repellendus sed eaque Lorem ipsum dolor sit amet consectetur adipisicing elit. In animi neque
                      accusantium dolorum sit consectetur facere ratione fugit, laudantium
                    </p>
                    <div class="options">
                      <h6>
                        empresa 1
                      </h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalProjeto1">
                        <svg version="1.1" id="icon_plus" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448 448"
                          style="enable-background:new 0 0 448 448;" xml:space="preserve">
                          <g>
                            <path d="M408 184H264V40c0-22.092-17.908-40-40-40s-40 17.908-40 40v144H40c-22.092 0-40 17.908-40 40s17.908 40 40 40h144v144
                c0 22.092 17.908  40 40 40s40-17.908 40-40V264h144c22.092 0 40-17.908 40-40s-17.908-40-40-40z" />
                          </g>
                        </svg>
                      </a>
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
            <form id="formCadastrarProjeto">
              <div class="mb-3">
                <label for="tituloProjeto" class="form-label">Título do Projeto</label>
                <input type="text" class="form-control" id="tituloProjeto" placeholder="Digite o título do projeto"
                  required>
              </div>
              <div class="mb-3">
                <label for="descricaoProjeto" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricaoProjeto" rows="3" placeholder="Digite a Descrição do Projeto"
                  required></textarea>
              </div>
              <div class="mb-3">
                <label for="requisitosProjeto" class="form-label">Requisitos Necessários</label>
                <input type="text" class="form-control" id="requisitosProjeto" placeholder="Ex: HTML, CSS, PHP..."
                  required>
              </div>
              <div class="mb-3">
                <label for="dataLimite" class="form-label">Data Limite</label>
                <input type="date" class="form-control" id="dataLimite" required>
              </div>
              <div class="mb-3">
                <label for="cargaHoraria" class="form-label">Carga Horária Estimada (em horas)</label>
                <input type="number" class="form-control" id="cargaHoraria" min="1" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="btn-box">
              <a class="btn1" data-bs-dismiss="modal" style="color:white;">Cancelar</a>
              <a style="text-decoration: none;" class="btn1" href="#" style="color:white;" onclick="salvarProjeto()">Cadastrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Modal Cadastrar Projeto -->

  </section>

  <?php require 'head_footer.php' ?>

  <!-- end food section -->

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