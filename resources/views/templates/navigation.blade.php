 <div class="cookies_header_container"><div class="cookies_link_container"><a href="/cookies" class="cookies_link">Cookies</a></div></div>
 <header class="header" role="banner">
     <div class="header-inner">
         <div class="logo">
             <div class="logo-icon">
                 <a href="/" class="nav-item"><img src="/images/logos/ma_logo.png" alt="Ma logo"></a>
             </div>
         </div>
         <nav class="main-nav" role="navigation" aria-label="Hoofdnavigatie">
             <a href="/" class="nav-item {{ request()->segment(1) === null ? 'active' : '' }}">Home</a>
             <a href="/curriculum" class="nav-item {{ request()->segment(1) === 'curriculum' ? 'active' : '' }}" >Curriculum</a>
             <a href="/news" class="nav-item {{ request()->segment(1) === 'news' ? 'active' : '' }}" >Nieuws</a>
             <a href="/contact" class="nav-item {{ request()->segment(1) === 'contact' ? 'active' : '' }}" >Contact</a>
         </nav>
     </div>
 </header>
