<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $arr['titulo']; ?></title>
    <link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <div class="center">
        <div class="logo">
            <h1> :) </h1>
        </div> <!-- logo -->
        <nav class="menu">
            <?php
                foreach($this->menuItems as $key => $value){
                    echo '<a href="'.INCLUDE_PATH.strtolower($value).'"> '.$value.' </a>';
                }
            ?>
        </nav>
    </div> <!-- center -->
</header>


