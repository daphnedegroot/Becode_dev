let player = null;


let lost = 0;
let win = 0;

//make array game
let computer = ["rock", "paper", "scissors"];

    //get value list item rock
    $('#rock').on('click', function () {
        player = "rock";
        console.log(player);
    });

    $('#paper').on('click', function () {
        player = "paper";
        console.log(player);
    });

    $('#scissors').on('click', function () {
        player = "scissors";
        console.log(player);
    });

   $('#btn').on('click', function () {

       //random pick from array
       let rand = computer[Math.floor(Math.random()* computer.length)];
       //console.log(rand);
       $('#picker').html('<strong>Players choice: </strong>' + player + '<br>' + '<strong>Computer: </strong>' + rand);

       if (player !== null){
           if(player === "rock"){
               switch (rand) {
                   case "rock" :
                       $('#output').html('<h3>Tie!</h3>');
                       break;
                   case "paper" :
                       $('#output').html('<h3>You lose!</h3>');
                       lost++;
                       break;
                   case "scissors" :
                       $('#output').html('<h3>You win!</h3>');
                       win++;
                       break;
               }
           }
           if (player === "paper"){
               switch (rand) {
                   case "rock" :
                       $('#output').html('<h3>You win!</h3>');
                       win++;
                       break;
                   case "paper" :
                       $('#output').html('<h3>Tie!</h3>');
                       break;
                   case "scissors" :
                       $('#output').html('<h3>You lose!</h3>');
                       lost++;
                       break;
               }
           }
           if (player === "scissors"){

               switch (rand) {
                   case "rock" :
                       $('#output').html('<h3>You lose!</h3>');
                       lost++;
                       break;
                   case "paper" :
                       $('#output').html('<h3>You win!</h3>');
                       win++;
                       break;
                   case "scissors" :
                       $('#output').html('<h3>Tie!</h3>');
                       break;
               }
           }
           $('#wins').html('<strong>You have won: </strong>' + win);
           $('#lost').html('<strong>You have lost: </strong>' + lost);
       }
   });