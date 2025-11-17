<!DOCTYPE html>
<html>

<body>

  <?php require 'headeraluno.php' ?>

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

            <div class="col-sm-6 col-lg-4 all pizza">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/prancheta2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>Sistema de Estoque para Mercado</h5>
                    <p>
                      O projeto consiste em criar um sistema web simples que permita registrar produtos, controlar
                      entradas e saídas e gerar relatórios de estoque para um pequeno mercado de bairro.
                    </p>
                    <div class="options">
                      <a style=" width: 80px; background:transparent; text-decoration: none; color: inherit;"
                        href="perfilpublicoempresa.php" class="link-empresa">
                        <h6>empresa 1</h6>
                      </a>

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

            <div class="modal fade" id="modalProjeto1" tabindex="-1" aria-labelledby="modalProjeto1Label"
              aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
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

            <div class="modal fade" id="cadastroSucessoModal" tabindex="-1" role="dialog"
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
            </div>

            <div class="col-sm-6 col-lg-4 all burger">
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
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      cupiditate quo, quisquam velit, magnam voluptatem
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
                      projeto 3
                    </h5>
                    <p>
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      cupiditate quo, quisquam velit, magnam voluptatem
                    </p>
                    <div class="options">
                      <h6>
                        empresa 3
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
            <div class="col-sm-6 col-lg-4 all pasta">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/prancheta2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      projeto 4
                    </h5>
                    <p>
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      cupiditate quo, quisquam velit, magnam voluptatem
                    </p>
                    <div class="options">
                      <h6>
                        empresa 2
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
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      cupiditate quo, quisquam velit, magnam voluptatem
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
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      cupiditate quo, quisquam velit, magnam voluptatem
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

</html>