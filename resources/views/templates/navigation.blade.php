<header class="header" role="banner">
    <div class="header-inner">
        <div class="logo">
            <div class="logo-icon">
                <a href="/" class="nav-item"><img src="/images/logos/ma_logo.png" alt="Ma logo"></a>
            </div>
        </div>

        <!-- Hamburger knop -->
        <button class="hamburger" aria-label="Menu openen">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-nav" role="navigation" aria-label="Hoofdnavigatie">
            <a href="/" class="nav-item {{ request()->segment(1) === null ? 'active' : '' }}">Home</a>
            <a href="/curriculum" class="nav-item {{ request()->segment(1) === 'curriculum' ? 'active' : '' }}" >Curriculum</a>
            <a href="/news" class="nav-item {{ request()->segment(1) === 'news' ? 'active' : '' }}" >Nieuws</a>
            <a href="/contact" class="nav-item {{ request()->segment(1) === 'contact' ? 'active' : '' }}" >Contact</a>
        </nav>
    </div>
</header>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('.main-nav');

    hamburger.addEventListener('click', () => {
        nav.classList.toggle('active');
        hamburger.classList.toggle('open'); 
    });
});
</script>