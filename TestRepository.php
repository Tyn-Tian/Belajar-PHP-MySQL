<?php

use Repository\CommentRepositoryImpl;
use Model\Comment;

require_once "./GetConnection.php";
require_once "./Model/Comment.php";
require_once "./Repository/CommentRepository.php";

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "repository@test.com", comment: "Hello");
// $newComment = $repository->insert($comment);
// var_dump($newComment);

// $comment = $repository->findById(2);
// var_dump($comment);

$comments = $repository->findAll();
var_dump($comments);

$connection = null;