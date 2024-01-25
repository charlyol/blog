<?php
function lastBlogPosts($PDO, $nbLastPosts)
{
    try {
        $query = "select title, body, Date0, authors.pseudo as pseudo from Posts inner join authors on authors.id = Posts.author_id order by date0 desc limit $nbLastPosts";
        $request = $PDO->query($query);
        $listPosts = $request->fetchall(PDO::FETCH_ASSOC);
        return $listPosts;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
}

;
