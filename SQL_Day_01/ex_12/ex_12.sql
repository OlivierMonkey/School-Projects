SELECT COUNT(title) AS "Number of 'western' movies"
FROM movies, genres, producers
WHERE genres.id = movies.genre_id && producers.id = movies.producer_id
      && genres.name = "western"
      && (producers.name = "tartan movies" || producers.name = "lionsgate uk");
