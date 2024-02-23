<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <main>
      <div class="section">
        <div class="content">
          <h1 class="title-login">Cadastro de login</h1>
          <div class="content_form">
              <div class="content_modal">
                <label class="text-login" for="email">Email:</label>
                <input
                  class="input-login"
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Digite seu email"
                />

                <label class="text-login" for="senha">Senha:</label>
                <input
                  class="input-login"
                  type="password"
                  id="senha"
                  name="senha"
                  placeholder="Digite sua senha"
                />

                <button class="input-button" type="submit" name="submit">
                  Cadastrar
                </button>
                <div class="before"><div/>
                <div class="link_content">
                <a class="link" href="login/login.php">Não tenho conta</a>
                <div/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script src="login/script.js"></script>
</html>
