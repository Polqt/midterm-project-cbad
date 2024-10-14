<?php require 'partials/header.php' ?>
<!-- <?php require 'partials/preloader.php' ?> -->

<div class="container-fluid">
    <div class="row h-100">
        <div class="col-sm-9 col-md-2">
            <?php require 'partials/sidebar.php' ?>
        </div>
        <div class="col-sm-3 col-md-10">
            <!-- Main Content -->
            <div class="d-flex justify-content-center align-items-center flex-column min-vh-100">
                <div class="text-center text-white">
                    <h1>
                        <span id="wave">👋</span> I'm
                        <img src="https://scontent-mnl1-2.xx.fbcdn.net/v/t39.30808-6/292349327_5199814946740123_6507753555298883714_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHB2FPXkDloZpJJPt5noO3ASsNOwN0OI-1Kw07A3Q4j7Sr8HbjySuAzl5aYJNFcCZcWqEvcv6z2HEZVvWTpsOto&_nc_ohc=piNI7NucgVQQ7kNvgHDHwj5&_nc_zt=23&_nc_ht=scontent-mnl1-2.xx&_nc_gid=AGwDkZwwNrJUZj1_LLqZflf&oh=00_AYCLSxUXSX-cseXUfNTkgvDw_pwr-0AAq-oVYPjrLGMHtw&oe=670E5ED3" alt="jepoyqt" class="img-fluid rounded-circle border border-dark border-2" width="80" height="80" />
                        <span id="name">Jepoy.</span>
                    </h1>
                    <h1>
                        How can I help you
                        <span class="text-info"><?= $_SESSION['name'] ?>?</span>
                    </h1>
                </div>

                <div class="w-75 container bg-black bg-opacity-75 rounded-4 p-3 mt-4">
                    <div class="bento">
                        <!-- Quotes -->
                        <div class="box wide bg-dark rounded-2">
                            <div id="cover" class="rounded-2 w-auto h-100"></div>
                        </div>

                        <!-- Scrolling Text -->
                        <div class="box wide bg-info rounded-2 p-2 text-center overflow-hidden">
                            <div class="scroll-wrapper d-inline-flex">
                                <div class="scroll-text fs-2 fw-bolder text-white text-capitalize"></div>
                                <div class="scroll-text fs-2 fw-bolder text-white text-capitalize">
                                    <!-- Same ra gihapon sa giubra ko sa may about yawa -->
                                </div>
                            </div>
                        </div>

                        <!-- Spotify Account -->
                        <div class="box tall bg-success rounded-2 p-3 text-center">
                            <a href="https://open.spotify.com/user/jepoyqt" alt="spotify" class="w-100 h-100 d-flex align-items-center justify-content-center flex-column bg-center rounded-2 text-decoration-none" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="150" fill="black" class="bi bi-spotify" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288" />
                                </svg>
                                <div class="d-flex flex-start text-black px-2">
                                    <span>@jepoyqt</span>
                                </div>
                            </a>
                        </div>

                        <!-- Github Account -->
                        <div class="box semi bg-dark rounded-2">
                            <a href="https://github.com/Polqt" target="_blank" class="w-100 h-100 d-flex align-items-end bg-center rounded-2 text-decoration-none">
                                <div class="d-flex flex-column position-relative text-white px-2">
                                    <span>@Polqt</span>
                                </div>
                            </a>
                        </div>

                        <!-- Country -->
                        <div class="box small bg-dark rounded-2">
                            <img src="https://images.unsplash.com/photo-1678371270802-24596a4de23f?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Philippine Flag" class="img-fluid w-100 h-100 rounded-2">
                        </div>

                        <!-- Motivation -->
                        <div class="box large bg-dark rounded-3 p-3 text-center">
                            <div class="rounded-2 w-100 h-100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php' ?>