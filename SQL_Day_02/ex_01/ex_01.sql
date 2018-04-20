SELECT COUNT(*) "Number of members",
       ROUND(AVG(FLOOR(YEAR(NOW())-YEAR(birthdate)))) "Average age"
FROM   profiles;
