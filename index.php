<?php

define('_RECIPES_FOLDER_', 'uploads/recipes/');

$recipes = [
    ['title' => 'Mousse au chocolat', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam explicabo odio nesciunt velit quis soluta quas dicta mollitia necessitatibus non', 'image' => '1-chocolate-au-mousse.jpg'],
    ['title' => 'Gratin dauphinois', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam explicabo odio nesciunt velit quis soluta quas dicta mollitia necessitatibus non', 'image' => '2-gratin-dauphinois.jpg'],
    ['title' => 'Salade de chèvre', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam explicabo odio nesciunt velit quis soluta quas dicta mollitia necessitatibus non', 'image' => '3-salade.jpg'],
];




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img width="200" src="assets/images/logo-cuisinea-horizontal.jpg" alt="Logo Cuisinea">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>

        <main>

            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="assets/images/logo-cuisinea.jpg" alt="Logo Cuisinea" width="350">
                <h1 class="display-5 fw-bold">Cuinea | Recettes faciles</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <?php foreach ($recipes as $key => $recipe) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?=_RECIPES_FOLDER_.$recipe['image']; ?>" class="card-img-top" alt="<?=$recipe['title']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?=$recipe['title']; ?></h5>
                                <p class="card-text"><?=$recipe['description']; ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </main>



        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 Cuisinea</p>
        </footer>
    </div>


</body>

</html>