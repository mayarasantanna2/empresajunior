<!DOCTYPE html>
<html>

<body>

  <?php require 'headeradm.php' ?>

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
          Empresas Cadastradas
        </h2>
      </div>
      <br>

      <?php
        $sql = "SELECT * FROM empresa";
        $stmt = $pdo->query($sql);
        while ($empresa = $stmt->fetch(PDO::FETCH_ASSOC)) {

              $id = $empresa['id_empresa'];
      ?>

      <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold"> <a style="text-decoration: none; color: inherit;" href="perfilempresa.php"><?php echo $empresa['nome_empresa']; ?></a></div>
          </div>
        </li>
      </ol>
      <?php 
        } // fim do while
      ?>

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