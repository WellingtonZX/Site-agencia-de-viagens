<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles/contato.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
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

    <div class="container my-5">
        <h1 class="text-center">Reserve sua viagem!</h1>
        <form action="book_form.php" method="post" class="book-form">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Seu nome" name="name">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Seu e-mail" name="email">
            </div>

            <div class="form-group">
                <label for="telefone">Número de Telefone</label>
                <input type="tel" class="form-control" id="telefone" placeholder="Seu telefone" name="phone">
            </div>

            <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control" placeholder="Seu endereço" name="adress">
            </div>
            <div class="form-group">
                <label>Para onde?</label>
                <input type="text" class="form-control" placeholder="Digite o nome do local" name="location">
            </div>

            <div class="form-group">
                <label for="telefone">Quantas pessoas?</label>
                <input type="number" class="form-control" placeholder="Digite o número de pessoas" name="guests">
            </div>

            <div class="form-group">
                <label>Ida</label>
                <input type="date" class="form-control" name="arrivals">
            </div>

            <div class="form-group">
                <label>Volta</label>
                <input type="date" class="form-control" name="leaving">
            </div>
            
            <input type="submit" value="submit" class="btn" name="send">
           
        </form>
    </div>

    <footer>
        <p>&copy; 2023 Agência de Viagens. Todos os direitos reservados.</p>
    </footer>
</body>
</html>