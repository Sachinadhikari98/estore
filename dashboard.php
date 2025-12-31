<?php
include "header.php";
?>
<div class="content">
<?php
$user = isset($_SESSION['user']) ? $_SESSION['user'] : 'Guest';
echo "Welcome to the dashboard, $user!";
?>
</div>
<?php
include "footer.php";
?>