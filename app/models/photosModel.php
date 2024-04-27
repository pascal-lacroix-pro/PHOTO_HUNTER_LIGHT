<?php

namespace App\Models\PhotosModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 6): array
{
    $sql = "SELECT *, p.id AS photoID, a.id AS authorID
            FROM photos p
            INNER JOIN authors a ON p.author_id = a.id
            ORDER BY p.created_at DESC
            LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, string $id): array
{
    $sql = "SELECT *, p.id AS photoID, a.id AS authorID
            FROM photos p
            INNER JOIN authors a ON p.author_id = a.id
            WHERE p.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function findAllByAuthorId(PDO $connexion, int $id): array
{
    $sql = "SELECT *, p.id AS photoID, a.id AS authorID
            FROM photos p
            INNER JOIN authors a ON p.author_id = a.id
            WHERE p.author_id = :id
            ORDER BY p.title ASC;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
