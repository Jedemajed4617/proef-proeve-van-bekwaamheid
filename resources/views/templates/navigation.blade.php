 <header class="header" role="banner">
     <div class="header-inner">
         <div class="logo">
             <div class="logo-icon">
                 <a href="/index" class="nav-item"><img src="/images/logos/ma_logo.png" alt="Ma logo"></a>
             </div>
         </div>
         <nav class="main-nav" role="navigation" aria-label="Hoofdnavigatie">
             <a href="/"
                 class="nav-item {{ request()->segment(1) === null ? 'active' : '' }}">
                 Home
             </a>
             <a href="#" class="nav-item">Curriculum</a>
             <a href="#" class="nav-item">Nieuws</a>
             <a href="#" class="nav-item">Contact</a>
         </nav>
     </div>
 </header>