<style>
    .scroll-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background-color: #122f1a;
        color: #fff;
        font-size: 24px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        border-radius: 50%;
        display: none;
        transition: opacity 0.3s ease;
    }

    .scroll-to-top.show {
        display: block;

    }

    .scroll-to-top:hover {
        opacity: 0.8;
        /* Change opacity on hover for visual feedback */
    }
</style>

<div id="scrollToTop" class="scroll-to-top">&uarr;</div>


<script>
    window.addEventListener('scroll', function () {
        var scrollToTopButton = document.getElementById('scrollToTop');
        if (window.scrollY > 100) {
            scrollToTopButton.classList.add('show');
        } else {
            scrollToTopButton.classList.remove('show');
        }
    });

    document.getElementById('scrollToTop').addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>