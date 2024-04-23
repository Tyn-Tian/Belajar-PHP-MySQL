<?php

namespace Repository;

use Model\Comment;

interface CommentRepository
{
    function insert(Comment $comment): Comment;

    function findById(int $id): ?Comment;

    function findAll(): array;
}

class CommentRepositoryImpl implements CommentRepository
{
    public function __construct(private \PDO $connection)
    {
    }

    public function insert(Comment $comment): Comment
    {
        $sql = "INSERT INTO comments(email, comment) VALUES (?, ?)";
        $result = $this->connection->prepare($sql);
        $result->execute([$comment->getEmail(), $comment->getComment()]);

        $id = $this->connection->lastInsertId();
        $comment->setId($id);

        return $comment;
    }

    public function findById(int $id): ?Comment
    {
        $sql = "SELECT * FROM comments WHERE id = ?";
        $result = $this->connection->prepare($sql);
        $result->execute([$id]);

        if ($row = $result->fetch()) {
            return new Comment(
                id: $row["id"],
                email: $row["email"],
                comment: $row["comment"]
            );
        } else {
            return null;
        }
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM comments";
        $result = $this->connection->query($sql);

        $array = [];

        while ($row = $result->fetch()) {
            $array[] = new Comment(
                id: $row["id"],
                email: $row["email"],
                comment: $row["comment"]
            );
        }

        return $array;
    }
}
