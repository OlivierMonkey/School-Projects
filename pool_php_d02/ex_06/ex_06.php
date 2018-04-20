<?php

function my_create_continent($continentNameToAdd, $worldMap)
{
    $worldMap[$continentNameToAdd] = [];
    return $worldMap;
}

function my_create_country($countryNameToAdd, $continentName, $worldMap)
{
    $worldMap[$continentName] = [$countryNameToAdd];
    return $worldMap;
}

function my_create_city($cityNameToAdd, $postalCodeOfCityToAdd, $countryName, $continentName, $worldMap)
{
    $worldMap[$continentName][$countryName] = array_push($cityNameToAdd ,$postalCodeOfCityToAdd);
    return $worldMap;

}

function get_country_of_continent($continentName, $worldMap)
{
    if (array_key_exists($continentName, $worldMap))
        print_r($worldMap[$continentName]);
    else
        {
            echo "Failure to get continent.\n";
            return NULL;
        }
}

function get_cities_of_country($countryName, $continentName, $worldMap)
{
    if (array_key_exists(($countryName, $continentName) && ($continentName, $worldMap)))
        print_r($worldMap[$continentName][$countryName]);
    else
        {
            echo "Failure to get country.\n";
            return NULL;
        }
}

function get_city_postal_code($cityName, $countryName, $continentName, $worldMap)
{
    if (array_key_exists(($continentName, $worldMap) && ($countryName, $continentName) && ($cityName, $countryName)))
        print_r($worldMap[$continentName][$countryName][$cityName]);
    else
        {
            echo "Failure to get city.\n";
            return NULL;
        }
}
?>