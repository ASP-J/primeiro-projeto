// <?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        echo "Connected successfully";
        
        $sql = "INSERT INTO usuarios (nome, email, telefone, assunto, mensagem) VALUES ('$nome','$email','$telefone','$assunto','$mensagem')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
</head>
  <body>


<div class="box">
    <legend><b>Formulário Clientes</b></legend>

        <form action="formulario.php" method="post">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>
            </div>

            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" required>
            </div>

            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <input type="text" class="form-control" id="mensagem" name="mensagem" required>
            </div>

            <input class="btn btn-primary" type="submit" value="submit" name="submit">

        </form>
</div>


    <div class="resultado">
    <?php
        if(isset($_POST['submit']))
        {
            print_r('Respostas do Formulário');
            print_r('<br>');
            print_r('Nome: ' . $_POST['nome']);
            print_r('<br>');
            print_r('Email: ' . $_POST['email']);
            print_r('<br>');
            print_r('Telefone: ' . $_POST['telefone']);
            print_r('<br>');
            print_r('Assunto: ' . $_POST['assunto']);
            print_r('<br>');
            print_r('Mensagem: ' . $_POST['mensagem']);
            print_r('<br>');
            

        }
    ?> 
    </div>

  </body>
</html>