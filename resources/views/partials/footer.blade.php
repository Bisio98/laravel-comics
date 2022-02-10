<?php

    $dc_comics = [
        'Characters',
        'Comics',
        'Movies',
        'TV',
        'Games',
        'Videos',
        'News'
    ];

    $shop = [
        'Shop DC',
        'Shop DC Collectibles'
    ];

    $dc = [
        'Terms Of Use',
        'Provacy Policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact us'
    ];

    $sites = [
        'DC',
        'MAD Magazine',
        'DC Kids',
        'DC Universe',
        'DC Power Visa'
];

?>


<div class="main-footer">

    <div class="top">
        <div class="container">
            <div class="links">
                <div>
                    <ul>
                        <li class="name_col">DC COMICS</li>
                        <?php foreach ($dc_comics as $singleComic) { ?>
                            <li>  <?php  echo $singleComic; ?> </li>
                        <?php } ?></li>
                    </ul>
                    <ul>
                        <li class="name_col">SHOP</li>
                        <?php foreach ($shop as $singleElement) { ?>
                            <li>  <?php  echo $singleElement; ?> </li>
                        <?php } ?></li>
                    </ul>
                    
                
                </div>
                <ul>
                    <li class="name_col">DC</li>
                        <?php foreach ($dc as $singleDC) { ?>
                            <li>  <?php  echo $singleDC; ?> </li>
                        <?php } ?></li>
                </ul>
                <ul>
                    <li class="name_col">SITES</li>
                        <?php foreach ($sites as $singleSite) { ?>
                            <li>  <?php  echo $singleSite; ?> </li>
                        <?php } ?></li>
                </ul>
            </div>
            <div class="logo_bot"> 
                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="">
            </div>
            
        </div>
        
    </div>

    <div class="bottom">
        <div class="container">
            <div>
                <button>SIGN-UP NOW!</button>
            </div>
            <ul class="socials">
                <li>FOLLOW US</li>
                <li><img src="{{ asset('images/footer-facebook.png') }}" alt="Facebook logo"></li>
                <li><img src="{{ asset('images/footer-twitter.png') }}" alt="Twitter logo"></li>
                <li><img src="{{ asset('images/footer-youtube.png') }}" alt="Youtube logo"></li>
                <li><img src="{{ asset('images/footer-pinterest.png') }}" alt="Pinterest logo"></li>
                <li><img src="{{ asset('images/footer-periscope.png') }}" alt="Periscope logo"></li>
            </ul>
        </div>
    </div>
</div>