<?php

//Displays all octocats and their data
"select * from octocats";

//Shows only the first names
"select firstname from octocats ";

//Display the first names, names and ages of each octocat
"select firstname, lastname, age from octocats";

//Shows octocats whose name starts with 'N'
"select * from octocats where lastname LIKE 'N%'";

//Display the first and last name of the octocats of promo promo-central
"select firstname, lastname from octocats where promo = 'promo1-central'";

//Display the first name, last name and year of birth of the octocats of the promo "promo1-anderlecht"
"select firstname, lastname, birthdate from octocats where promo = 'promo1-anderlecht'";