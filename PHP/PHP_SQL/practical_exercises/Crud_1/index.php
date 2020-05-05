<?php require "inc/header.php"; ?>

<?php
 $sql = "SELECT * FROM clients ";

 $result = $conn->query($sql);
?>

<? include "inc/navbar.php"?>

<div class="container">
    <div class="row">


        <div class="col-md-6 mt-5">

            <!-- CLIENTS -->
            <section id="exercise_1">
                <h2>Clients</h2>
                <p class="lead">View all customers.</p>
                    <?php getClients() ?>
            </section><!-- /CLIENTS -->

        </div>

        <div class="col-md-6 mt-5">

            <!-- SHOWS -->
            <section id="exercise_2">
                <h2>Shows</h2>
                <p class="lead">Show all types of shows possible.</p>
                <?php getShows() ?>
            </section><!-- /SHOWS -->

        </div>

        <div class="col-md-6 mt-5">

            <!-- CUSTOMERS -->
            <section id="exercise_3">
                <h2>20 Clients</h2>
                <p class="lead">View the top 20 customers.</p>
                <?php customers() ?>
            </section><!-- /CUSTOMERS -->

        </div>

        <div class="col-md-6 mt-5">

            <!-- LOYALTY -->
            <section id="exercise_4">
                <h2>Customers with loyalty card</h2>
                <p class="lead">Only show customers with a loyalty card.</p>
                <?php getLoyalty() ?>
            </section><!-- /LOYALTY -->

        </div>

        <div class="col-md-6 mt-5">

            <!-- NAMES -->
            <section id="exercise_5">
                <h2>Names</h2>
                <p class="lead">Show only the first and last names of all customers whose names begin with the letter "M".</p>
                <p class="lead">Sort the names in alphabetical order.</p>
                <?php getNames() ?>
            </section><!-- /NAMES -->

        </div>

        <div class="col-md-6 mt-5">

            <!-- ALL_SHOWS -->
            <section id="exercise_6">
                <h2>All shows with date and time</h2>
                <p class="lead">Show the title of all shows as well as the artist, date and time. Sort the titles in alphabetical order. Show results like this: Show by artist, date at time</p>

                <?php allShows() ?>
            </section><!-- /ALL_SHOWS -->

        </div>

        <div class="col-md-6 mt-5">

            <!-- CUSTOMERS_DATA -->
            <section id="exercise_7">
                <h2>All Customer data</h2>
                <p class="lead">Name: Client's last name     First name: Customer's first name     Date of birth: Date of birth of the client     Loyalty card: Yes (if the customer has one) or No (if he does not have one)     Card number: Number of the customer's loyalty card if it has one.</p>
                <?php allCustomers() ?>
            </section><!-- /CUSTOMER_DATA -->
        </div>
    </div><!-- /ROW -->
</div><!-- /CONTAINER -->


<?php require "inc/footer.php"; ?>
