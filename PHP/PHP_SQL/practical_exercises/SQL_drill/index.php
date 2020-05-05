<?php

//Displays all data.
"select * from students join school on students.school = school.idschool";

//Shows only first names.
"SELECT prenom FROM `students`";

//Shows the names, birth dates and school of each.
"select concat(prenom, ' ' ,nom) as names, students.datenaissance, school.school from studentsjoin `school` on students.school = school.idschool";

//Shows only students who are female.
"select * from students where genre = 'F'";

//Shows only students who are part of Charleroi School.
"select * from students join `school` on students.school = school.idschool where school.school = 'Charleroi';";

//Shows only the first names of the students, in reverse order to the alphabet (ESCR). Then the same thing but limiting the results to 2.
"select prenom as names from students order by prenom desc limit 2;";

//Add Ginette Dalor, born 01/01/1930 and assign her to Central, still in SQL.


//Modify Ginette (always in SQL) and change his sex and his name in "Omer".


//Delete the person whose ID is 3.


///Change the contents of the School column so that "1" is replaced by "Central" and "2" is replaced by "Anderlecht". (pay attention to the type of the column!)


//Do other manipulations to see if you are well understood.