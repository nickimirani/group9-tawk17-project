<?php
require_once __DIR__ . "/../Template.php";

Template::header("Home");
?>

<h3>You are logged in as: <?= $this->home ?></h3>

<h1>Track your workouts</h1>


<p>
    Here you can track your workouts
</p>

<?php Template::footer(); ?>