<!-- header section strats -->
 <?php
    require 'conexao.php';
  ?>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="restritaempresa.php">
          <span>
            <?php
                $sql = "SELECT nome_empresa FROM empresa";
                $stmt = $pdo->query($sql);

                while ($empresa = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  echo "<h2>Olá, " . htmlspecialchars($empresa['nome_empresa']) . "</h2>";
                }
              ?>
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Início </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfilempresa.php">Seu Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="alunoscandidatados.php">Alunos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
          </ul>
        </div>
    </div>
    </nav>
    </div>
  </header>
  <!-- end header section -->