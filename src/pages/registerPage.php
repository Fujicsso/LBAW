<?php
include_once('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <!-- Navbar -->
        <?php draw_navbar(); ?>

        <div class="row-form">
            <form>
                <h3 class="text-center">Registar</h3>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <img src="../assets/profilepadrao.jpg" class="rounded mx-auto d-block" alt="imagempadrao" width="150" height="150">
                        <br>
                        <div class="custom-file">
                            <input type="image" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Escolha uma nova imagem</label>
                            <div class="invalid-feedback">Ficheiro Inválido</div>
                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAge">Idade</label>
                        <input type="number" class="form-control" id="inputAge">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Código Postal</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>

                <br>
                <h5>Dados de Facturação</h5>
                <br>

                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Código Postal</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>

                <button type="button" class="btn btn-primary">Criar minha conta</button>


            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>