<!-- header section strats -->
  <?php
    require 'conexao.php';
  ?>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="restritaaluno.php">
           <span>
           <?php
session_start();
require 'conexao.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['id'];

$sql = "SELECT nome_aluno FROM aluno WHERE id_aluno = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$aluno = $stmt->fetch(PDO::FETCH_ASSOC);
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
              <a class="nav-link" href="perfilaluno.php">Seu Perfil</a>
            </li>
          </ul>
        </div>
    </div>
    </nav>
    </div>
  </header>
  <!-- end header section -->