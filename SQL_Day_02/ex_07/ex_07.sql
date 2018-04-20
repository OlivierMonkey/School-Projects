SELECT title "Movie title"
FROM movies
WHERE LEFT(title, 1) BETWEEN 'O' AND 'T'
ORDER BY title;
