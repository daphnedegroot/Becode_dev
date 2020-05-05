//Check to see if script is linked properly.
console.log("This script is linked properly!")


let request = new XMLHttpRequest();

request.open('GET', 'https://character-database.becode.xyz/characters', true);

request.responseType = 'json';

request.send();

request.onload = function () {
    char = request.response;

        char.forEach(allChar => {

            const tbody = document.getElementById('tbody');

            //create table
            const tr = document.createElement('tr');
            const td = document.createElement('td');
            td.innerHTML = allChar.name;

            const td1 = document.createElement('td');
            td1.innerHTML = allChar.shortDescription;

            const tdImg = document.createElement('td');
            const img = document.createElement('img');
            img.src = 'data:image/gif;base64,' + allChar.image;

            const tdBtn = document.createElement('td');
            const btn = document.createElement('button');
            btn.setAttribute('id', 'myBtn');
            btn.innerHTML = 'Description';

            let modal = document.getElementById('myModal');
            let span = document.getElementsByClassName("close")[0];




            btn.onclick = function(){
                modal.style.display = "block";
                //btn.innerHTML = allChar.description;
                //console.log(allChar.description);
            }

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }


            tbody.append(tr);
            tr.append(td);
            tr.append(td1);
            tr.append(tdImg);
            tdImg.append(img);
            tr.append(tdBtn);
            tdBtn.append(btn);
         });
}