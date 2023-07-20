<?php
require_once 'Selecao.php';

$busca = new Selecao();
$resultado = $busca->selecionarUsuario();

foreach($resultado as $listar){
        $idUsuario[]            =$listar['id'];
        $nomeUsuario[]          =$listar['nome'];
        $idade[]                =$listar['idade'];
        $email[]                =$listar['email'];
        $celular[]              = $listar['celular'];
        $cpf[]                  =$listar['senha'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color: black; 
        }
    </style>
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="f1506824eb8b77d75d3ae98c2557f617.png" alt="">
        </div>
        <div class="form">
            <form action="">
                <div class="form-header">
                    <div class="title">
                        <h1>TABELA DE DADOS</h1>
                    </div>
    
                </div>
                
                <table class="table">
                    
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">idade</th>
      <th scope="col">email</th>
      <th scope="col">celular</th>
      <th scope="col">cpf</th>
    </tr>
    <?php
         for($i=0; $i <cont($idUsuario); $i++){
            ?>
         }
                    
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>



                    
                </div>
                    
                
                
            </form>
        </div>
    </div> <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></body>

</html>