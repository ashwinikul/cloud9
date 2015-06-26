<?php 

$items = [
    [   
        'heading'=>'Retreat Guru',
        'content'=>'I recently started working with Retreat Guru one day a week. I am building tests with Codeception, for a large codebase of custom built Wordpress modules.',
        'url'=>'http://www.retreat.guru/booking'
    ],
    [
        'heading'=>'The Kootenay Bakery',
        'content'=>'Another developer built this site in Wordpress years ago, and it needed an upgrade. So I selected and customized a new responsive theme, as well as making some changes to the code base.',
        'url'=>'http://www.kootenaybakerycafe.com'
    ],
    [
        'heading'=>'The Iconoklast',
        'content'=>'This is a simple wordpress site that I spun up in a few hours. I just deployed the site, and have not done much development work other than putting in some images.',
        'url'=>'http://www.theiconoklast.com'
    ],
    [
        'heading'=>'Little Helper Saws',
        'content'=>'This is a little site I made with Laravel 4.2 to sell hand made wooden toy chainsaws. This site uses Paypal\'s Adaptive Payments API, and Canada Posts\'s Shipping calculator API to automatically determine shipping costs.',
        'url'=>'http://www.littlehelpersaws.com'
    ],
    [
        'heading'=>'Orbatak',
        'content'=>'I made this portfolio site for a DJ Duo called Orbatak. This site is made in pure PHP, HTML and CSS and uses the SoundCloud API to fetch and play tracks. The "Refresh Database" link in the footer is a little routine that finds, collects, and filters tracks from multiple music label profiles. This was to work around a problem feature that SoundCloud released to users, but didn\'t support in the API. ',
        'url'=>'http://www.orbatak.com/about'
    ]
];

?>


<h2 class="well portfolio-header">Recent Projects</h2>


@foreach($items as $item)
<div>
    <div class="media-body">
         <a class="portfolio-link" href="{{$item['url']}}" target="_blank"><div class="well portfolio-link"><h3 class="media-heading">{{$item['heading']}}</h3></div></a>
        <div class="bar portfolio">
           <h5 class="portfolio">{{$item['content']}}</h5>
        </div>
            <a href="{{$item['url']}}" ><iframe class="sites-iframe" src="{{$item['url']}}" height="400" width="600"></iframe></a>
    </div>
</div>
@endforeach




