<?php

function getRecipes($pdo, $limit = null)
{
    $sql = 'SELECT * FROM recipes ORDER BY id DESC';
    if ($limit) {
        $sql .= ' LIMIT :limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(':limit', $limit, $pdo::PARAM_INT);
    }
    

    $query->execute();
    
    return $query->fetchAll();

}

function getRecipe($pdo, $id) {
    $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}


function saveRecipe($pdo, $title, $description, $ingredients, $instructions, $image, $category_id) {
    $query = $pdo->prepare("INSERT INTO recipes (title, description, ingredients, instructions, image, category_id) "
    ."VALUES(:title, :description, :ingredients, :instructions, :image, :category_id)");

    $query->bindValue(':title', $title, $pdo::PARAM_STR);
    $query->bindValue(':description', $description, $pdo::PARAM_STR);
    $query->bindValue(':ingredients', $ingredients, $pdo::PARAM_STR);
    $query->bindValue(':instructions',$instructions, $pdo::PARAM_STR);
    $query->bindValue(':image',$image, $pdo::PARAM_STR);
    $query->bindValue(':category_id',$category_id, $pdo::PARAM_INT);
    return $query->execute();  
}