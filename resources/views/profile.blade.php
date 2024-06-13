
@vite(['resources/css/app.css'])



<nav id="navbar">
    <div class="nav-left">
        <div id="button1" class="nav-button">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>
    <div class="nav-right">
        <ul id="navbar-items">
            <li class="navbar-item no-mob"><a class="navbar-item-inner" href=""><span><i class='uil uil-home-alt'></i> Home</span></a></li>
            <li class="navbar-item no-mob"><a class="navbar-item-inner" href=""><span><i class='uil uil-comment-image'></i> Forum</span></a></li>
            <li class="navbar-item no-mob"><a class="navbar-item-inner" href=""><span><i class="uil uil-shopping-bag"></i> Store</span></a></li>
            <li class="navbar-item"><a class="navbar-item-inner" href=""><span><i class='uil uil-user'></i></span></a></li>
        </ul>
    </div>
</nav>
<div id="menu">
    <div class="menu-left-space"></div>
    <div class="menu-left">
        <h3>General</h3>
        <ul class="menu-items">
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class='uil uil-home-alt'></i> Home</span></a></li>
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class='uil uil-comment-image'></i> Forum</span></a></li>
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class="uil uil-shopping-bag"></i> Store</span></a></li>
        </ul>
    </div>
    <div class="menu-center">
        <h3>Useful Links</h3>
        <ul class="menu-items">
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class="uil uil-bookmark"></i> Tutorials</span></a></li>
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class="uil uil-map-marker-info"></i> Dynmap</span></a></li>
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class='uil uil-server-alt'></i> Servers</span></a></li>
        </ul>
    </div>
    <div class="menu-right">
        <h3>Admin Tools</h3>
        <ul class="menu-items">
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class="uil uil-lightbulb"></i> Control Panel</span></a></li>
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class="uil uil-brackets-curly"></i> Code Editor</span></a></li>
            <li class="menu-item"><a class="menu-item-inner" href=""><span><i class="uil uil-window"></i> Info & Status</span></a></li>
        </ul>
    </div>
    <div class="menu-right-space"></div>
</div>
<div class="back-to-top" style="display: block; opacity: 1;">
    <a class="semplice-event" href="#" data-event-type="helper" data-event="scrollToTop" style="opacity: 1;">
        <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="53px" height="20px" viewBox="0 0 53 20" enable-background="new 0 0 53 20" xml:space="preserve">
            <g id="Ebene_3"></g>
            <g><polygon points="43.886,16.221 42.697,17.687 26.5,4.731 10.303,17.688 9.114,16.221 26.5,2.312 	"></polygon></g>
        </svg>
    </a>
</div>
<main>
    <div class="user-header-wrapper flexbox">
        <div class="user-header-inner flexbox">
            <div class="user-header-overlay"></div>
            {{auth()->user()->avatar}}
            <img class="user-header" src="{{auth()->user()->avatar}}" alt="">
        </div>
    </div>
    <div class="user-info-bar">
        <div class="ufo-bar-col1">
        </div>
        <div class="ufo-bar-col2">
            <div class="ufo-bar-col2-inner">
                <div class="user-icon-wrapper">
                    <img class="user-icon" src="https://i.imgur.com/aviQ5vj.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="ufo-bar-col3">
            <div class="ufo-bar-col3-inner">
                <div class="username-wrapper-outer">
                    <div class="username-wrapper">
                        <div class="verified" style="opacity: 0; top: 150%;"><p>Verified Account</p></div>
                        <h3 class="username-dev">Areal Alien</h3>
                        <svg class="uname-verified" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1350.03 1326.16">
                            <defs><style>.cls-11{fill:var(--primary);}.cls-12{fill:#000000;}</style></defs><title>verified</title>
                            <g id="Layer_3" data-name="Layer 3">
                                <polygon class="cls-11" points="0 747.37 120.83 569.85 70.11 355.04 283.43 292.38 307.3 107.41 554.93 107.41 693.66 0 862.23 120.83 1072.57 126.8 1112.84 319.23 1293.35 399.79 1256.05 614.6 1350.03 793.61 1197.87 941.29 1202.35 1147.15 969.64 1178.48 868.2 1326.16 675.02 1235.17 493.77 1315.72 354.99 1133.73 165.58 1123.29 152.16 878.64 0 747.37"/></g>
                            <g id="Layer_2" data-name="Layer 2">
                                <path class="cls-12" d="M755.33,979.23s125.85,78.43,165.06,114c34.93-36,234.37-277.22,308.24-331.94,54.71,21.89,85,73.4,93,80.25-3.64,21.89-321.91,418.58-368.42,445.94-32.74-3.84-259-195.16-275.4-217C689.67,1049.45,725.24,1003.85,755.33,979.23Z" transform="translate(-322.83 -335.95)"/></g>
                        </svg>
                    </div>
                    <div>
                        <a class="ufo-bar-fff" href=""><span>857</span> Followers</a>
                        <a class="ufo-bar-fff" href=""><span>137</span> Following</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ufo-bar-col4">
            <div class="ufo-bar-col4-inner">
                <button class="button2 btn-primary2"><i class="uil uil-plus"></i> Subscribe<div class="btn-secondary2"></div></button>
            </div>
        </div>
        <div class="ufo-bar-col5">
        </div>
    </div>
    <div class="user-info-bar2">
        <div class="ufo-bar2-col1">
        </div>
        <div id="ufo-home" class="ufo-bar2-col2 ufo-bar2-block">
            <div class="ufo-bar2-col2-inner flexbox">
                <span><i class="uil uil-trophy"></i></span>
                <h3>Trophies</h3>
                {{auth()->user()}}
            </div>
        </div>
        <div id="ufo-videos" class="ufo-bar2-col3 ufo-bar2-block">
            <div class="ufo-bar2-col3-inner flexbox">
                <span><i class="uil uil-star"></i></span>
                <h3>Points</h3>
            </div>
        </div>
        <div id="ufo-images" class="ufo-bar2-col4 ufo-bar2-block">
            <div class="ufo-bar2-col4-inner flexbox">
                <span><i class="uil uil-comment-alt"></i></span>
                <h3>Posts</h3>
            </div>
        </div>
        <div id="ufo-about" class="ufo-bar2-col6 ufo-bar2-block">
            <div class="ufo-bar2-col6-inner flexbox">
                <span><i class="uil uil-user"></i></span>
                <h3>About</h3>
            </div>
        </div>
        <div class="ufo-bar2-col7">
        </div>
    </div>
</main>
<footer id="footer" class="flexbox-col">
    <div class="footer-logo-wrapper flexbox">
        <svg class="footer-logo" xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 805.93 1044.03">
            <defs><style>.cls-4{fill:none;stroke:var(--bc-purple);stroke-miterlimit:10;stroke-width:45px;}.cls-5{font-size:92.32px;fill:var(--bc-purple);font-family:DINPro, DIN Pro;letter-spacing:0.26em;}.cls-5{letter-spacing:0.28em;}</style></defs>
            <title>icon-wtext</title>
            <polyline class="cls-4" points="518.08 328.59 783.43 177.13 783.43 39 401.75 258.32 22.5 39 22.5 183.8 588.35 507.92 510.81 553.96 783.43 706.63 783.43 839.92 402.97 621.82 22.5 839.92 22.5 707.85 386 497.02"/>
            <text class="cls-5" transform="translate(187.07 1022.89)">X<tspan class="cls-5" x="74.41" y="0">CRAFT</tspan></text>
        </svg>
    </div>
    <div class="footer-inner flexbox">
        <div class="footer-left">
            <svg class="footer-ico" xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 805.93 878.75">
                <defs><style>.cls-1{fill:none;stroke:var(--primary);stroke-miterlimit:10;stroke-width:45px;}</style></defs><title>icon</title>
                <polyline class="cls-1" points="518.08 328.59 783.43 177.13 783.43 39 401.75 258.32 22.5 39 22.5 183.8 588.35 507.92 510.81 553.96 783.43 706.63 783.43 839.92 402.97 621.82 22.5 839.92 22.5 707.85 386 497.02"/>
            </svg>
            <a class="footer-mail">Find us everywhere.</a>
        </div>
        <div class="footer-right">
            <div class="footer-links">
                <a class="footer-link fl-first" href="https://www.youtube.com/channel/UCfstx-8p0M5K1KTBUB4ORLQ" target="_blank">YouTube.</a>
                <a class="footer-link" href="https://twitter.com/xcraftserver" target="_blank">Twitter.</a>
                <a class="footer-link" href="https://www.instagram.com/xcraftofficial/" target="_blank">Instagram.</a>
                <a class="footer-link fl-last" href="https://discordapp.com/invite/G7yJ2Ww" target="_blank">Discord.</a>
            </div>
            <div class="footer-text">
                <p>xCraft &copy2020. All rights reserved.</p>
                <p>Made with ♥ by Areal Alien</p>
            </div>
            <div class="footer-sites">
                <a>Cookie Policy.</a> | <a href="https://www.unsplash.com" target="_blank">Unsplash.</a>
            </div>
        </div>
    </div>
</footer>