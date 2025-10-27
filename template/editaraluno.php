 <!-- Seção de edição -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Editar Perfil</h2>
        <p>Atualize as informações da sua conta</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="salvar-edicao.php" method="POST" class="needs-validation" novalidate>
            <div class="card shadow-sm p-4" style="border-radius: 20px;">
              <div class="form-group mb-3">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" value="João da Silva" required>
                <div class="invalid-feedback">Informe seu nome completo.</div>
              </div>

              <div class="form-group mb-3">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="joaosilva@email.com" required>
                <div class="invalid-feedback">Insira um e-mail válido.</div>
              </div>

              <div class="form-group mb-3">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" value="(11) 98765-4321"
                  pattern="\(\d{2}\)\s\d{5}-\d{4}" required>
                <div class="invalid-feedback">Insira um telefone válido no formato (XX) XXXXX-XXXX.</div>
              </div>

              <div class="form-group mb-3">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" value="12.345.678/0001-90"
                  pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}" required>
                <div class="invalid-feedback">Insira um CNPJ válido.</div>
              </div>

              <div class="form-group mb-4">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco"
                  value="Rua Exemplo, 123 - São Paulo/SP" required>
                <div class="invalid-feedback">Informe seu endereço completo.</div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">Salvar alterações</button>
                <a href="perfil.php" class="btn btn-secondary ml-2">Cancelar</a>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>