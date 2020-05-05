<?php

//only cities
"select ville from météo";

//all cities and their maximum temperature
"select ville, haut from météo";

//all cities and their minimum temperature
"select ville, bas from météo";

//Where cities whose maximum temperature exceeds 27 degrees
"select ville from météo where haut = 27";

//Where cities whose minimum temperature will be less than or equal to 15 degrees
"select ville from météo where bas <= 15";

//Where cities with a minimum temperature of 15 degrees
"select ville from météo where bas = 15";

//Where cities whose minimum temperature will NOT be equal to 15 degrees
"select ville from météo where bas != 15";

//Where cities whose name begins with "Br"
"select * from météo where ville LIKE 'Br%'";

//Where cities with a maximum temperature between 26 and 28 degrees
"select ville from météo where haut between 26 AND 28";

//Where cities with a minimum temperature of 14 or 16 degrees
"select ville from météo where bas = 14 or bas = 16";

//Where cities with a maximum temperature of 26 or higher and a minimum temperature of less than 14
"select ville from météo where haut >= 26 and bas < 14";