<footer id="footer-app">
    <article class="footer-nav-links">
            <div class="width-container-footer">
                <div class="links-nav-container">
                    <nav class="links">
                        <h2>DC COMICS</h2>
                        <ul>
                            @foreach ($dcComicsLinks as $link)
                            <li>
                                <a href="">{{ $link['name'] }}</a>
                            </li>
                            @endforeach
                            <h2>SHOP</h2>
                            <ul>
                                @foreach ($shopLinks as $link)
                                <li>
                                    <a href="">{{ $link['name'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </ul>
                    </nav>
                    <nav class="links">
                        <h2>DC</h2>
                        <ul>
                            @foreach ($DcLinks as $link)
                            <li>
                                <a href="">{{ $link['name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                    <nav class="links">
                        <h2>SITES</h2>
                        <ul>
                            @foreach ($sitesLink as $link)
                            <li>
                                <a href="">{{ $link['name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="DC-image">
                </div>
            </div>
    </article>
    <article class="bg-footer-sign-links">
        <div class="footer">
            <section class="sign-up special-effect ">
                <button>SIGN-UP NOW!</button>
            </section>
            <section class="follow-socials">
                <h2>
                    FOLLOW US
                </h2>
                @foreach ($socialsLinks as $social)
                    <div class="social-links ">
                        <img :src="social.img" :alt="social.id">
                    </div>
                @endforeach
            </section>
        </div>

    </article>
</footer>
