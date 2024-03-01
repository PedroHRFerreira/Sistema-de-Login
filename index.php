<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/mediaIndex.css" />
  </head>
  <body>
    <main>
    <div class="content-timeline">
        <div class="timeline-outside">
        <div class="cicule-before"></div>
        </div>
        <div class="timeLine-before"></div>
    </div>
      <div class="section-index">
        <div class="content">
          <h1 class="title-login">Login</h1>
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
                <div class="content-link-button">
                <button class="input-button" type="submit" name="submit">
                  Cadastrar
                </button>

                <a class="input-button imagem" href="login/login.php">Não tenho conta<img width="25px" src="/image/adicionar-usuario.png" alt="criação de conta" /></a>

              </div>
              <div class="before"></div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script src="IndexJS/main.js"></script>
</html>
