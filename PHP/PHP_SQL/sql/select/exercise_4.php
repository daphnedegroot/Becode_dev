<?php

/*
 * Becode fiddle
 */

//How many boys are there in Becode?
"select count(*) from octocats where gender LIKE 'M%'";

//How many girls are there in Becode / Central?
"select count(*) from octocats where promo = 'promo1-central' and gender LIKE 'F%'";

//How many boys are there in Becode / Central?
"select count(*) from octocats where promo = 'promo1-central' and gender LIKE 'M%'";

//How many octocats are there whose first name is 'Nadia' at becode?
 "select count(*) from octocats where firstname = 'Nadia'";

//On this new SQLFiddle, finds the function to display only the year of the "birthdate" column and displays the first name of all octocts and their year of birth. (hint: how do you say "year" in English?)
"select firstname, year(birthdate) from octocats";


/*
 * Weather fiddle
 */

//Find the function to return a table containing only the maximum temperature expected ("Tomorrow the maximum observed in Belgium will be ... degrees")
"SELECT CONCAT('Tomorrow the maximum observed in Belgium will be ', max(haut), ' degrees')as Maximum_Weather FROM météo";

//Find the function to return a table containing only the expected minimum temperature ("Tomorrow the minima observed in Belgium will be ... degrees)"
"SELECT CONCAT('Tomorrow the minima observed in Belgium will be ', min(haut), ' degrees')as Minimum_Weather FROM météo";
