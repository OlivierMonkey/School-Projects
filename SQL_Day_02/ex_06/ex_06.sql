SELECT title "Movie title",
       DATEDIFF(NOW(), release_date) "Number of days passed"
FROM movies
WHERE release_date != "0000-00-00";
