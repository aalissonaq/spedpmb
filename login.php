<?php
require_once './db/connection.php';
require_once './util/util.php';
require_once './util/outfunc.php';

$connection = novaConexao();
$sqlInitial = "SELECT * FROM organization";
$result = $connection->query($sqlInitial)->fetchAll(PDO::FETCH_ASSOC);
$information = $result[0];


if (isset($_POST['login']) && $_POST['login'] == 'entra') {

    $login['userName'] = strip_tags(trim(tiraMascara($_POST['userName'])));
    $login['password'] = strip_tags(trim(md5($_POST['password'])));

    if ($login['userName'] == '00000000000' && $login['password'] == md5('admin')) {
        session_start();

        $_SESSION['userName'] = 'Administrador do Sistema';
        $_SESSION['released'] = true;
        header('Location: index.php');
    } else {
        sweetalert('Oops...', 'Usuário ou senha inválidos!', 'error', 2500);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPED | <?= $information['fantasy_name'] ?> - <?= $information['slogan']; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/<?= $information['icon'] ?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-15 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    <img class="img-fluid " src="assets/images/logo/<?= $information['logo'] ?>" alt="<?= $information['fantasy_name'] ?>">
                </div>
                <!-- <div class="p-h-40 d-none d-md-flex " style="margin-top:-5.5rem; font-size: 1.2rem; letter-spacing: .1rem">
                    <p class="">
                        SPED | Sistema de Protocolo Eletronico de Documentos
                    </p>
                </div> -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h2 class="m-t-20">Sign In</h2> -->
                                    <p class="m-b-30">Insira sua credencial para obter acesso</p>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="login" value="entra" />

                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Usuário:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" name="userName" id="userName" placeholder="Digite seu CPF">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Senha:</label>
                                            <a class="float-right font-size-13 text-muted" href="">Esqueceu a senha?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Digita sua senha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    <!-- Não tem uma conta?
                                                    <a class="small" href=""> Inscrever-se</a> -->
                                                </span>
                                                <button class="btn btn-primary">SEntrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="assets/images/others/login-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
                    <span class="">
                        © <?= date('Y', time()); ?> <?= $information['fantasy_name']; ?> | Desenvolvido por
                        <a href="https://caririinovacao.com.br/" class="" style="color:orange;">
                            Cariri Inovação
                        </a>
                    </span>

                    <ul class="list-inline">
                        <!-- <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Legal</a>
                        </li> -->
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
