<?php
function lastBlogPosts($PDO, $nbLastPosts)
{
    try {
        $query = "select title, body, Posts.id, Date0, authors.pseudo as pseudo from Posts inner join authors on authors.id = Posts.author_id order by date0 desc limit $nbLastPosts";
        $request = $PDO->query($query);
        $listPosts = $request->fetchall(PDO::FETCH_ASSOC);
        return $listPosts;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function commentsByBlogPost($PDO, $id)
{
    try {
        $query = "select Comments.body as body, Comments.publication_date as datec, authors.pseudo as pseudo from Comments inner join authors on authors.id=Comments.author_id where Comments.Post_id=$id";
        $request = $PDO->query($query);
        $listCommentsPosts = $request->fetchall(PDO::FETCH_ASSOC);
        return $listCommentsPosts;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};
function blogPostByld($PDO, $id)
{
    try {
        $query = "select title, body, authors.pseudo as pseudo from Posts inner join authors on authors.id = Posts.author_id where Posts.id = $id";
        $request = $PDO->query($query);
        $Postsid = $request->fetchall(PDO::FETCH_ASSOC);
        return $Postsid;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
};




















