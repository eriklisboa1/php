
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="f1506824eb8b77d75d3ae98c2557f617.png" alt="">
        </div>
        <div class="form">
            <form action="script.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="lastname">Idade</label>
                        <input id="idade" type="text" name="idade" placeholder="Digite sua idade" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="celular" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Cpf</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Digite seu Cpf" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>
                    
                
                

                <div class="continue-button">
                    <button><a href="#">Cadastrar</a> </button>
                </div>
            </form>
        </div>
    </div>
   
</body>

</html>