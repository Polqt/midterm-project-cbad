<div id="preloader">
    <img src="public/images/nyan-cat.gif" alt="nyan-cat">
</div>

<style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;

    }

    #preloader>img {
        max-width: 400px;
        max-height: 200px;
        width: auto;
        height: auto;
    }
</style>

<script>
    window.addEventListener('load', function() {
        setTimeout(function() {
            document.getElementById('preloader').style.display = 'none';

            const homeContent = document.getElementById('home-content');
            homeContent.style.display = 'block'; // Show the content
            setTimeout(() => {
                homeContent.style.opacity = '1'; // Fade in
            }, 50); 
        }, 3000);
    });
</script>