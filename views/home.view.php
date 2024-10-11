<?php require 'partials/header.php'; ?>
<!-- <?php require 'partials/preloader.php'; ?> -->

<div class="container-fluid h-100">
    <?php require 'partials/sidebar.php' ?>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 col-sm-3 m-auto">
            <!-- Main Content -->
            <div class="d-flex justify-content-center align-items-center flex-column min-vh-100">
                <div class="text-white">
                    <h1>
                        <span id="wave">👋</span> Hey, I'm
                        <img src="https://scontent-mnl1-2.xx.fbcdn.net/v/t39.30808-6/292349327_5199814946740123_6507753555298883714_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHB2FPXkDloZpJJPt5noO3ASsNOwN0OI-1Kw07A3Q4j7Sr8HbjySuAzl5aYJNFcCZcWqEvcv6z2HEZVvWTpsOto&_nc_ohc=piNI7NucgVQQ7kNvgHDHwj5&_nc_zt=23&_nc_ht=scontent-mnl1-2.xx&_nc_gid=AGwDkZwwNrJUZj1_LLqZflf&oh=00_AYCLSxUXSX-cseXUfNTkgvDw_pwr-0AAq-oVYPjrLGMHtw&oe=670E5ED3" alt="jepoyqt" class="img-fluid rounded-circle border border-dark border-2" width="65" height="65" />
                        <span id="name">Jepoy</span>.
                    </h1>
                    <h1>
                        How can I help you
                        <span class="text-info"><?= $_SESSION['name'] ?>?</span>
                    </h1>
                </div>
                <div id="socials" class="">
                    <div id="bento" class="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require 'partials/footer.php'; ?>