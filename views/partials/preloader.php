<div id="preloader">
    <img src="nyan-cat.gif" alt="Loading..." class="preloader-gif">
</div>

<style>
    /* Preloader styles */
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

    /* Adjust the size of the preloader GIF */
    .preloader-gif {
        max-width: 200px;
        max-height: 200px;
        width: auto;
        height: auto;
    }

    /* Hide the body content initially */
    #home-content {
        display: none;
    }
</style>

<script>
    window.addEventListener('load', function() {
        // Wait for 3 seconds before hiding the preloader and showing the home content
        setTimeout(function() {
            // Hide the preloader
            document.getElementById('preloader').style.display = 'none';

            // Show the home content
            document.getElementById('home-content').style.display = 'block';
        }, 3000); // 3-second delay
    });
</script>