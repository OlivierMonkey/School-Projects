SELECT COUNT(prod_year) "Number of movies", prod_year "Year of production"
FROM   movies
WHERE  prod_year != "0"
GROUP BY prod_year;
