<?php
    require 'conexao.php';
    $sql = "SELECT * FROM projeto";
    $stmt = $pdo->query($sql);
    while ($projeto = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $projeto['id_projeto'] . "<br>";
        echo "Nome: " . $projeto['nome_projeto'] . "<br>";
        echo "Preço: R$" . $projeto['descrição_projeto'] . "<br>";
        echo "Estoque: " . $projeto['estoque'] . "<br><br>";
    }
?>

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
                    <h5>Projeto 1</h5>
                    <p>
                      Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem
                      repellendus
                      sed eaque
                    </p>
                    <div class="options">
                      <a style=" width: 80px; background:transparent; text-decoration: none; color: inherit;"
                        href="perfilpublicoempresa.php" class="link-empresa">
                        <h6>empresa 1</h6>
                      </a>
                      <!-- Botão que abre o modal -->
                      <a href="login.php">
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
    </div>
  </section>