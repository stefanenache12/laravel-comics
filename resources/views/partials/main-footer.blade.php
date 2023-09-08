@php
    $footerInfos = [
        'Terms Of Use',
        'Privacy Policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ];
    
    $footerMenu = [
        'Characters',
        'Comics',
        'Movies',
        'TV',
        'Games',
        'Videos',
        'News'
    ];
@endphp

<footer>
   <div class="footer-container">
        <div class="left-section">
            <ul>
                <h6 class="mb-3">
                    DC COMICS
                </h6>
                @foreach ($footerMenu as $itemMenu)
                    <a href="">
                        <li>
                            {{ $itemMenu }}
                        </li>
                    </a>
                @endforeach
            </ul>
            <ul>
                <h6 class="mb-3">
                    DC 
                </h6>
                @foreach ($footerInfos as $itemInfo)
                    <a href="">
                        <li>
                            {{ $itemInfo }}
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
        <div class="right-section">
            <div class="footer-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
   </div>
   <div class="footer-bottom">
        <div>
            <h6>
                Dc-Comics Made By Stefan Enache
            </h6>
        </div>
   </div>
</footer>