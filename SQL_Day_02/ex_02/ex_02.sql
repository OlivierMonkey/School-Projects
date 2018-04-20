SELECT zipcode "Zip codes"
FROM profiles
GROUP BY zipcode HAVING COUNT(zipcode) > 1
ORDER BY zipcode;
