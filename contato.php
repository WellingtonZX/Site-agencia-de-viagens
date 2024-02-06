<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Styles/contato.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Entre em Contato</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="destinos.php">Destinos</a></li>
        <li><a href="pacotes.php">Pacotes</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>
  <div class="wrapper">
  <div class="container my-5">
    <h1 class="text-center">Formulário de Contato</h1>
    <form action="book_form.php" method="post" class="book-form">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="name">
      </div>
      <div class="form-group">
        <label for="email">Endereço de E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="Seu e-mail" name="email">
      </div>
      <div class="form-group">
        <label for="telefone">Número de Telefone</label>
        <input type="tel" class="form-control" id="telefone" placeholder="Seu telefone" name="phone">
      </div>
      
        <input type="submit" value="submit" class="btn" name="send">
      
    </form>
  </div>
  
  <footer>
    <p>&copy; 2023 Agência de Viagens. Todos os direitos reservados.</p>
  </footer>
  </div>

</body>
</html>