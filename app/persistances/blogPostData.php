<?php
function lastBlogPosts($PDO, $nbLastPosts)
{
    try {
        $query = "select title, body, Date0, authors.pseudo from Posts inner join authors on authors.id = Posts.author_id order by date0 desc limit $nbLastPosts";
        $request = $PDO->query($query);
        $listPosts = $request->fetchall(PDO::FETCH_ASSOC);
        $array = [$listPosts];
        return $array;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
}

;
