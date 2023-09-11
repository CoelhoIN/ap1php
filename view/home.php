<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

    <h2 class="text-center p-4">Atividade de AP1 - Isadora Coelho</h2>

    <div class="container">
        <section class="row mt-4">
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card">
                    <img class="img-fluid" src="https://i0.wp.com/jornal.usp.br/wp-content/uploads/2020/11/20201125_00_escola_sala_de_aula_quadro.jpg?w=800&ssl=1" alt="Mesa de professor com materiais escolares em cima">
                    <div class="card-body">
                        <h4 class="card-title">Universidade</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, hic.</p>
                        <a href="bolo1.html" class="btn btn-success">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card">
                    <img class="img-fluid" src="https://i0.wp.com/jornal.usp.br/wp-content/uploads/2020/11/20201125_00_escola_sala_de_aula_quadro.jpg?w=800&ssl=1" alt="Mesa de professor com materiais escolares em cima">
                    <div class="card-body">
                        <h4 class="card-title">Cursos</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, hic.</p>
                        <a href="#" class="btn btn-success">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card">
                    <img class="img-fluid" src="https://i0.wp.com/jornal.usp.br/wp-content/uploads/2020/11/20201125_00_escola_sala_de_aula_quadro.jpg?w=800&ssl=1" alt="Mesa de professor com materiais escolares em cima">
                    <div class="card-body">
                        <h4 class="card-title">Matrícula</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, hic.</p>
                        <a href="#" class="btn btn-success">Ver mais</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>