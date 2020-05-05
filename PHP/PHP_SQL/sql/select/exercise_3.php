<?php
//Display the first and last name of all octocats, in ascending alphabetical order of the first name.
"select firstname, lastname from octocats order by firstname asc";

//Display the first and last name of all octocats, in descending alphabetical order of the surname.
"select firstname, lastname from octocats order by lastname desc";

//Display the first name, last name and age of all octocats, from the youngest to the oldest.
"select firstname, lastname, age from octocats order by age asc";

//Display the first name, last name and age of all octocats, from the oldest to the youngest.
"select firstname, lastname, age from octocats order by age desc";

//Display the first name, last name and age of all octocats, from the youngest to the oldest, from the "promo1-central" promo.
"select firstname, lastname, age from octocats where promo='promo1-central' order by age asc";

//Display the first name, last name and age of all octocats, from the youngest to the oldest, from the "promo1-central" promo, whose age is between 23 and 28.
"select firstname, lastname, age from octocats where promo = 'promo1-central' and age between 23 and 28 order by age asc";

//Displays the first name, last name, age and gender of all octocats, from the youngest to the oldest, from the "promo1-central" promo and between 25 and 35 years old.
"select firstname, lastname, age, gender from octocats where promo = 'promo1-central' and age between 23 and 35 order by age asc";

//Displays the first name, last name, age and gender of all octocats, from the youngest to the oldest, from the "promo1-central" promo, which is between 25 and 35 years old and whose gender is masculine .
"select firstname, lastname, age, gender from octocats where promo = 'promo1-central' and age between 23 and 35 and gender LIKE 'M%' order by age asc";

//Display the first name, last name, age of the oldest octocate of Becode / Central. So you have to get a table with a single row.
"select firstname, lastname, max(age) from octocats where promo = 'promo1-central'";