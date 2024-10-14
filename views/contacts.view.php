<?php require 'partials/header.php'; ?>
<!-- <?php require 'partials/preloader.php'; ?> -->

<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-sm-9 col-md-2">
            <?php require 'partials/sidebar.php' ?>
        </div>
        <div class="col-sm-3 col-md-10">
            <!-- Main Content -->
            <div class="d-flex justify-content-center align-items-center flex-column min-vh-100">
                <div class="text-center text-white">
                    <h1>Connect and Collaborate</h1>
                    <h5 class="opacity-75">I'm always looking to collaborate on interesting projects with great people. <br />
                        Need a supportive hand? I have two!
                    </h5>
                </div>
                <div class="w-75 d-flex justify-content-center align-items-center flex-column border border-dark border-1 rounded-4 bg-black bg-opacity-25 shadow m-5">
                    <img src="https://scontent-mnl1-2.xx.fbcdn.net/v/t39.30808-6/292349327_5199814946740123_6507753555298883714_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHB2FPXkDloZpJJPt5noO3ASsNOwN0OI-1Kw07A3Q4j7Sr8HbjySuAzl5aYJNFcCZcWqEvcv6z2HEZVvWTpsOto&_nc_ohc=piNI7NucgVQQ7kNvgHDHwj5&_nc_zt=23&_nc_ht=scontent-mnl1-2.xx&_nc_gid=AGwDkZwwNrJUZj1_LLqZflf&oh=00_AYCLSxUXSX-cseXUfNTkgvDw_pwr-0AAq-oVYPjrLGMHtw&oe=670E5ED3" alt="jepoyqt" class="img-fluid rounded-circle border border-dark border-2 my-4" width="125" height="125" />
                    <h2 class="text-white">Janpol Hidalgo</h2>
                    <p>
                        <span id="typed"></span>
                    </p>
                    <div class="w-100 d-flex flex-row justify-content-center align-items-center my-4 gap-5">
                        <div class="contact border border-dark border-1 border-opacity-75 rounded-pill px-4 py-3">
                            <a href="..." id="call" class="text-white opacity-75 text-decoration-none">
                                Schedule a Call
                            </a>
                        </div>

                        <div class="contact border border-dark border-1 border-opacity-75 rounded-pill px-4 py-3">
                            <a href="..." id="email" class="text-white opacity-75 text-decoration-none" target="_blank">
                                Drop an Email
                            </a>
                        </div>

                        <div class="contact border border-dark border-1 border-opacity-75 rounded-pill px-4 py-3">
                            <a href="..." id="chat" class="text-white opacity-75 text-decoration-none" target="_blank">
                                Start a Chat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>