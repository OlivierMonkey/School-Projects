SELECT COUNT(id) AS "Number of movies ending with 'tion'"
FROM movies
WHERE title
LIKE "%tion";
