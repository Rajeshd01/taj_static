<?php
    include 'libs/load.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php
    load_template('__head')
?>

<?php
    load_template('__style')
?>

<body>
    <?php
        load_template('__header')
    ?>

    <?php
        load_template('__content_section')
    ?>

   <?php
        load_template('__footer')
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
