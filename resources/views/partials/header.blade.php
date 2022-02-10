<?php
    $nav = [
        'CHARACTERS',
        'COMICS',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP'
    ]
?>

<div class="main-header">
    <div class="container">
        <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo">
        <ul>
            <?php foreach ($nav as $element) {?>
                <li><?php echo $element; ?> </li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="jumbotron">
    
</div>