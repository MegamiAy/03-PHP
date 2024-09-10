<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $arr['titulo']; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css?v=<?php echo time(); ?>">

</head>
<body>
<header>
    <menu>
        <nav class="menu">
            <ul>
            <?php
                foreach($this->menuItems as $key => $value){
                    echo '<li><a href="'.INCLUDE_PATH.strtolower($value).'"> '.$value.' </a></li>';
                }
            ?>
            </ul>
        </nav>
    </menu> <!-- menu -->
</header>
