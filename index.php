<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pet Shop</title>
</head>
<body>
    <?php include_once "header.php" ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 main">
                <figure>
                    <img src="imagens/topo.jpg" alt="topo" class="figure-img img-fluid">
                </figure>
            </div>
        </div>
        <div class="row text-block">
            <div class="col-sm-12">
                <h1>Cadastro</h1>
                <p>Que tal Realizar o seu Cadastro Agora?<br>
                É muito Simples, preencha o formulário e Pronto!!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action="sistema.php" method="post" class="form-control">
                <input type="hidden" name="tipo" value="incluir">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Pet</label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="idade" class="form-label">Idade</label>
                        <input type="number" min="0" name="idade" id="idade" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="respon" class="form-label">Responsável</label>
                        <input type="text" class="form-control" id="respon" name="respon" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary btn-block">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>