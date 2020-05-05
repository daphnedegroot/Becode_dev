<?php
/*
$arr = ["i", "you", "he", "we", "you", "them"];
print_r($arr[3]);
*/

/*
$land = array('Belgium', 'France', 'Germany', 'The Netherlands', 'Spain');
//this will display an error because $countrys doesn't resist.
echo $countrys[2];
*/

//array family
$family = array('Fer', 'Mariet', 'Kirsten', 'Jean', 'Ada', 'Frans', 'Peter', 'Samira', 'Finn', 'Mika', 'Lina', 'Sandra', 'Rob', 'Cas', 'Fenne');

//array food
$fav_food = array('Zuurkoolstampot', 'lasagne', 'canneloni');

//print_r($fav_food);

//favorite movies en series
$fav_movies = array('Shrek', 'Ice Age');
$fav_series = array("grey's Anatomy", "Desperate Housewives");

$dad = array(
    "name" => "Fer",
    "lastname" => "de Groot",
    "age" => 64,
    "brown hair" => true,
    "hobbies" => array(
        "walking",
        "eating bonbons",
        "cycling"
    )
);

$child = array(
    "hobbies" => array(
        "play ball",
        "making a mess",
        "ruining clothes"
    )
);

$soulmate = array(
    "name" => "Jean",
    "lastname" => "Verhasselt",
    "age" => 35,
    "hobbies" => array(
        "walking",
        "cooking",
        "baking",
        "fitness"
    )
);

$me = array(
    "name" => "Daphne",
    "lastname" => "de Groot",
    "age" => 32,
    "papa" => $dad,
    "boyfriend" => $soulmate,
    "child" => $child,
    "hobbies" => array(
        "walking",
        "cooking",
        "baking",
        "fitness"
    )
);

$count = count($me['papa']['hobbies']) . " dad's hobbies" . "<br>" . count($me['hobbies']) . " my hobbies";
//add something to array
array_push($me['hobbies'], "Taxidermy");
//replace something in array
$me['lastname'] = "Peeters";
//print_r($me);

// array_intersect
$arr1 = $me['boyfriend']['hobbies'];
$arr2 = $me['papa']['hobbies'];
$result = array_intersect($arr1, $arr2);


$results = array_merge($arr1, $arr2);
//print_r($results);


/*
    OPTIONAL EXERCISE 4
*/

$web_development = array(
        "frontend" => array(
            "xhtml",
            "CSS",
            "Flash",
            "JavaScript"
        ),
        "Backend" => array(
            "Ruby on Rails"
        )
);

//echo '<pre>';
//print_r($web_development);
//echo '</pre>';
$web_development['frontend'][0] = 'html';

//echo '<pre>';
//print_r($web_development);
//echo '</pre>';

//remove
unset($web_development['frontend'][2]);
//print_r($web_development);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Family</h2>
<p><?php echo '<pre>'; print_r($family); echo '</pre>';?></p>

<h2>Food</h2>
<p><?php echo '<pre>'; print_r($count); echo '</pre>';?></p>

<h2>Movies & series</h2>
<p><?php echo '<pre>My favorite movie: '; print_r($fav_movies[1]); echo '</pre>';?></p>
<p><?php echo '<pre>My favorite series: '; print_r($fav_series[0]); echo '</pre>';?></p>

<h2>Count</h2>
<p><?php echo '<pre>'; print_r($count); echo '</pre>';?></p>

<h2>array_intersect</h2>
<p><?php echo '<pre>'; print_r($result); echo '</pre>';?></p>

<h2>array_merge</h2>
<p><?php echo '<pre>'; print_r($results); echo '</pre>';?></p>

<h1>Exercise 4 "Optional"</h1>

<h2>Replace "xhtml" with "html"</h2>
<p><?php echo '<pre>'; print_r($web_development); echo '</pre>';?></p>

<h2>Remove "Flash"</h2>
<p><?php echo '<pre>'; print_r($web_development); echo '</pre>';?></p>
</body>
</html>

