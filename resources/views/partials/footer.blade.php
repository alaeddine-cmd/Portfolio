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
// Add this before your closing </body> tag
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    
    mobileMenuToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        mainNav.classList.toggle('active');
        
        // Toggle body scroll when menu is open
        document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
    });
    
    // Close menu when clicking on a nav link (for single page navigation)
    const navLinks = document.querySelectorAll('.main-nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                mobileMenuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
</body>

</html>
