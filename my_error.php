<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Error Page</title>
    </head>
    <body>
        <?php
            set_error_handler(function () {
                throw new Exception('Er is een fout opgetreden!');
            });
            
            try {
                echo 10 / 0;
            } catch( Exception $e ){
                echo "De pagina die je probeerde te bereiken is buiten gebruik.".PHP_EOL;
                $result = 0;
            }
            
            restore_error_handler();
        ?>
    </body>
</html>