SELECT LEFT(summary, 92) "Summaries"
FROM   movies
WHERE  (id%2 = 1) && (id BETWEEN 42 AND 84);
