<?php include "header.php"; ?>
<div class="content">

<form action="register_process.php" method="POST">
    <div>
        <label for="">FullName</label>
        <input type="text" name="full_name" id="full_name">
        <?php 
        if(isset($_GET['name_error']) && !empty($_GET['name_error'])){ ?>
         <span id="error"> Please enter your name</span>
        <?php   
        }
        ?>
    </div>
    <div>
        <label for="">Phone</label>
        <input type="number" name="phone" id="phone">
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <input type="submit" value="Register me" id="register_btn">
    </div>
</form>
</div>
<?php include "footer.php"; ?>