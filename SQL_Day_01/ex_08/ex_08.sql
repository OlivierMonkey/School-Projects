SELECT title
FROM movies, genres
WHERE genres.id = movies.genre_id
      && (genres.name = "romance" OR genres.name = "action");
