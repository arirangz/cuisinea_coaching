<?php
require_once('templates/header.php');
require_once('lib/config.php');
require_once('lib/tools.php');
require_once('lib/pdo.php');
require_once('lib/recipe.php');

$messages = [];
$errors = [];


if (isset($_POST['saveRecipe'])) {

    if (isset($_FILES["file"]["tmp_name"]) && $_FILES["file"]["tmp_name"] != '') {
        $checkImage = getimagesize($_FILES["file"]["tmp_name"]);
        if ($checkImage !== false) {
            $fileName = slugify(basename($_FILES["file"]["name"]));
            $fileName = uniqid() . '-' . $fileName;

            if (move_uploaded_file($_FILES["file"]["tmp_name"], _RECIPES_FOLDER_ . $fileName)) {
            } else {
                $errors[] = 'Le fichier n\'a pas été uploadé';
            }
        } else {
            $errors[] = 'Le fichier doit être une image';
        }
    }

    $fileName = null;

    if (!$errors) {
        $res = saveRecipe($pdo, $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], $fileName, $_POST['category_id']);

        if ($res) {
            $messages[] = 'La recette a bien été sauvegardée';
        } else {
            $errors[] = 'La recette n\'a pas été sauvegardée';
        }
    }

}

?>

<h1>Ajouter recette</h1>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success" role="alert">
        <?= $message; ?>
    </div>
<?php } ?>
<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?= $error; ?>
    </div>
<?php } ?>

<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="ingredients" class="form-label">Ingrédients</label>
        <textarea class="form-control" id="ingredients" name="ingredients" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="instructions" class="form-label">Instructions</label>
        <textarea class="form-control" id="instructions" name="instructions" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Catégorie</label>
        <select name="category_id" id="category" class="form-select">
            <option value="1">Entrée</option>
            <option value="2">Plat</option>
            <option value="3">Dessert</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="file" name="file" id="file">
    </div>
    <input type="submit" name="saveRecipe" class="btn btn-primary" value="Enregistrer">

</form>

<?php
require_once('templates/footer.php');
?>