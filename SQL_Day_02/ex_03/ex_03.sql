SELECT floor "Floor number",
       SUM(seats) "Total number of seats",
       COUNT(room_number) "Total number of rooms"
FROM   rooms
GROUP BY floor
ORDER BY SUM(seats);
