select title, body, Date0, authors.pseudo
from Posts
inner join authors
on authors.id = Posts.author_id
order by date0 desc limit 10;