<?php
require_once __DIR__ . "/../../Template.php";

Template::header("New User");
?>

<h1>New user</h1>

<form action="<?= $this->home ?>/users" method="post">
    <input type="text" name="user_name" placeholder="Name"> <br>
    <input type="text" name="birth_year" placeholder="Birth year"> <br>
    <input type="text" name="user_password" placeholder="Password"> <br>
    <input type="submit" value="Save" class="btn">
</form>

<?php Template::footer(); ?>