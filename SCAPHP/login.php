<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <style>
        .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a href="#" class="navbar-brand">
        <h1>Sistema de Cadastro de Alunos</h1>
    </a>
</nav>
<div class="container">
    <div class="row">
        <div class="card-login">
            <div class="card">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="./validaLogin.php">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <?php if (isset($erroLogin)): ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            <?php echo $erroLogin; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>