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