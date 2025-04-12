<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; {{ date('Y') }} Ala Eddine. All rights reserved.</p>
        <p class="tech-stack">Built with 💻 Laravel, PHP & MySQL</p>

        <div class="footer-links">
            <a href="#contact">Contact</a>
            <a href="https://www.linkedin.com/in/alaeddine-lusakula/" target="_blank">LinkedIn</a>
            <a href="https://github.com/alaeddine-cmd" target="_blank">GitHub</a>
        </div>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#projectCarousel', {
            type: 'loop',
            perPage: 2,
            gap: '1rem',
            breakpoints: {
                768: {
                    perPage: 1,
                }
            }
        }).mount();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
</body>

</html>
