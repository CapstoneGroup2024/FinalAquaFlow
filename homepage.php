<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<?php if(isset($_SESSION['message'])) // THE VARIABLE IS SET, THEN DISPLAY THE MESSAGE
    {
        ?>  <!-- SHOW ALERT --> 
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['message']); // UNSET THE VARIABLE TO ENSURE THAT THE MESSAGE IS ONLY DISPLAYED ONCE
    }
    ?>

 <!--------------- FOOTER --------------->
<?php include('includes/footer.php');?>