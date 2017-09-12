<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <?php 
            include 'inc/functions.php';
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        
        
        <div id="main">
            <?php
                play();
            ?>
            <form>
                <input type="submit" value="Spin!"/>
            </form>
        </div>
    </body>
</html>