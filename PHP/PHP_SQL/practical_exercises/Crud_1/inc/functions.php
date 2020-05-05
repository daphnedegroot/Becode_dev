<?php
 require "db_config.php";

 function getClients(){
     global $conn;

     $sql = "SELECT * FROM clients ";

     $result = $conn->query($sql);

                if ($result->num_rows > 0){

                    echo "<table class='table table-hover table-sm'>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>Firstname</th>";
                            echo "<th>Lastname</th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                            while($row = $result->fetch_assoc()){
                            echo "<tr>";
                                echo "<td>" . $row['firstName'] . "</td>";
                                echo "<td>" . $row['lastName'] . "</td>";
                            echo "</tr>";
                       }
                        echo "</tbody>";
                    echo "</table>";
                 }
 }

 function getShows(){
     global $conn;
     $sql = "select shows.title, shows.performer, showTypes.type from shows join showTypes on shows.showTypesId = showTypes.id";

     $result = $conn->query($sql);

     if ($result->num_rows > 0){

         echo "<table class='table table-hover table-sm'>";
            echo "<thead>";
                echo "<tr>";
                     echo "<th>Title</th>";
                     echo "<th>Performer</th>";
                     echo "<th>Show type</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                while($row = $result->fetch_assoc()){
                 echo "<tr>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['performer'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                 echo "</tr>";
         }
            echo "</tbody>";
         echo "</table>";
     }
 }

 function customers(){
     global $conn;

     $sql = "SELECT * FROM clients limit 20 ";

     $result = $conn->query($sql);

     if ($result->num_rows > 0){

         echo "<table class='table table-hover table-sm'>";
         echo "<thead>";
         echo "<tr>";
         echo "<th>Id</th>";
         echo "<th>Firstname</th>";
         echo "<th>Lastname</th>";
         echo "</tr>";
         echo "</thead>";
         echo "<tbody>";
         while($row = $result->fetch_assoc()){
             echo "<tr>";
                 echo "<td>" . $row['id'] . "</td>";
                 echo "<td>" . $row['firstName'] . "</td>";
                 echo "<td>" . $row['lastName'] . "</td>";
             echo "</tr>";
         }
         echo "</tbody>";
         echo "</table>";
     }

 }

 function getLoyalty(){
     global $conn;

     $sql = "select clients.firstName, clients.lastName, cards.cardTypesId, cardTypes.type from clients join cards on clients.id = cards.cardTypesId join cardTypes on cards.cardTypesId = cardTypes.id where cardTypesId = 1";

     $result = $conn->query($sql);

     if ($result->num_rows > 0){

         echo "<table class='table table-hover table-sm'>";
         echo "<thead>";
         echo "<tr>";
         echo "<th>Firstname</th>";
         echo "<th>Lastname</th>";
         echo "<th>CardType ID</th>";
         echo "<th>Card type</th>";
         echo "</tr>";
         echo "</thead>";
         echo "<tbody>";
         while($row = $result->fetch_assoc()){
             echo "<tr>";
             echo "<td>" . $row['firstName'] . "</td>";
             echo "<td>" . $row['lastName'] . "</td>";
             echo "<td>" . $row['cardTypesId'] . "</td>";
             echo "<td>" . $row['type'] . "</td>";
             echo "</tr>";
         }
         echo "</tbody>";
         echo "</table>";
     }
 }

 function getNames(){
     global $conn;
     $sql = "select firstName as Customers_first_name, lastName as Customers_Name from clients where lastName like 'M%' order by lastName asc";

     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
         echo "<table class='table table-hover table-sm'>";
         echo "<thead>";
         echo "<tr>";
         echo "<th>Customer's first name</th>";
         echo "<th>Customer Name</th>";
         echo "</tr>";
         echo "</thead>";
         echo "<tbody>";
         while ($row = $result->fetch_assoc()) {
             echo "<tr>";
             echo "<td>" . $row['Customers_first_name'] . "</td>";
             echo "<td>" . $row['Customers_Name'] . "</td>";
             echo "</tr>";
         }
         echo "</tbody>";
         echo "</table>";
     }
 }

 function allShows(){
     global $conn;

     $sql = "select concat(title, ' - ', performer) as Show_by_Artist, concat(date, ' ', startTime) as Date_at_Time from shows
order by title asc";

     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
         echo "<table class='table table-hover table-sm'>";
         echo "<thead>";
         echo "<tr>";
         echo "<th>Show by Artist</th>";
         echo "<th>Date at Time</th>";
         echo "</tr>";
         echo "</thead>";
         echo "<tbody>";
         while ($row = $result->fetch_assoc()) {
             echo "<tr>";
             echo "<td>" . $row['Show_by_Artist'] . "</td>";
             echo "<td>" . $row['Date_at_Time'] . "</td>";
             echo "</tr>";
         }
         echo "</tbody>";
         echo "</table>";
     }
 }

 function allCustomers(){

     global $conn;

     $sql = "select lastName as Clients_last_name, firstName as Customers_first_name, birthDate as Date_of_birth_of_client, cardNumber, case when card = 1 then 'Yes' else 'No' end as Loyalty_card from clients";

     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
         echo "<table class='table table-hover table-sm'>";
         echo "<thead>";
         echo "<tr>";
         echo "<th>Clients last name</th>";
         echo "<th>Clients first name</th>";
         echo "<th>Date of birth of client</th>";
         echo "<th>Cardnumber</th>";
         echo "<th>Loyalty card</th>";
         echo "</tr>";
         echo "</thead>";
         echo "<tbody>";
         while ($row = $result->fetch_assoc()) {
             echo "<tr>";
             echo "<td>" . $row['Clients_last_name'] . "</td>";
             echo "<td>" . $row['Customers_first_name'] . "</td>";
             echo "<td>" . $row['Date_of_birth_of_client'] . "</td>";
             echo "<td>" . $row['cardNumber'] . "</td>";
             echo "<td>" . $row['Loyalty_card'] . "</td>";
             echo "</tr>";
         }
         echo "</tbody>";
         echo "</table>";
     }

 }