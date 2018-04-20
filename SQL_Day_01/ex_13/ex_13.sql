SELECT room_number "Room numbers", name "Room names"
FROM rooms
WHERE floor != "1" && seats > "0";
