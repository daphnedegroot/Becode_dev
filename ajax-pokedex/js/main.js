$(document).ready(function(){
    $("#btn").on('click', function(){
        let pokemon = $('#input').val().toLowerCase();
        //console.log(pokemon);

        $.ajax({url: "https://pokeapi.co/api/v2/pokemon/" + pokemon, success: function(poke){
            clear();
            getPokemon(poke);
            getEvolutionPokemon(poke);

            }

        });
    });

    function clear(){
        $('img').removeAttr('src');
    }

    function getPokemon(poke){
        //get id
        let poke_id = '<strong>Id: </strong>' + poke.id + '<br>';

        //get name
        let poke_name = '<strong>Name: </strong>' + poke.name + '<br>';

        //get moves
        let poke_moves = poke.moves;
        let moves = '<strong>Moves: </strong><br>';
        if (poke_moves.length >= 4){
            for (i =0; i < 4; i++){
                moves += poke_moves[i].move.name + '<br>';
            }
        } else {
            for (i = 0; i < poke_moves.length; i++){
                moves += poke_moves[i].move.name + '<br>';
            }
        }


        //get image
        let poke_img = poke.sprites.front_default;
        const img = document.createElement('img');
        img.src = poke_img;
        document.getElementById('picture').append(img);

        //display all
        document.getElementById('stats').innerHTML = poke_id + poke_name + moves;
    }

    function getEvolutionPokemon(poke){
        second_url = poke.species.url;
        $.ajax({url: second_url, success: function(evo) {
                //get name
                if (evo.evolves_from_species !== null){
                    evo = evo.evolves_from_species.name;
                    evo_from = '<strong>Evolves from: </strong>' + evo;
                    //display data
                    document.getElementById('stats').innerHTML += evo_from;
                    //get previous evolution

                    $.ajax({url: "https://pokeapi.co/api/v2/pokemon/" + evo, success: function(evolution){
                            //get image
                            evo_img = evolution.sprites.front_default;
                            img_evo = document.createElement('img');
                            img_evo.src = evo_img;
                            //display data
                            document.getElementById('picture').append(img_evo);
                        }
                    });
                }
            }
        });
    }
});