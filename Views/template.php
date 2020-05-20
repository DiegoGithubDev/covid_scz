<?php namespace Views;
$mytemplate = new template();
class template {
    public  function __construct() {
?>     
        <!DOCTYPE html>    
        <html lang="es">
            <head>
                 <meta charset="UTF-8">
                 <title>Template</title>
                 <link href="<?php echo URL ?>Views/template/css/bootstrap.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
<?php           
    }
    
    public function __destruct() {
?> 
            </body>
        </html>
<?php         
    }
}

