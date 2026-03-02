// Carousel Navigation
document.addEventListener('DOMContentLoaded', function () {
    const scroller = document.querySelector('.cards-scroller');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dots = document.querySelectorAll('.pagination .dot');

    if (!scroller || !prevBtn || !nextBtn) return;

    // Calculate scroll amount (one card width + gap)
    const cardWidth = 220 + 15; // card width + gap

    // Previous button
    prevBtn.addEventListener('click', function () {
        scroller.scrollBy({
            left: -cardWidth * 2, // Scroll 2 cards at a time
            behavior: 'smooth'
        });
        updatePagination();
    });

    // Next button
    nextBtn.addEventListener('click', function () {
        scroller.scrollBy({
            left: cardWidth * 2, // Scroll 2 cards at a time
            behavior: 'smooth'
        });
        updatePagination();
    });

    // Pagination dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function () {
            scroller.scrollTo({
                left: cardWidth * 2 * index,
                behavior: 'smooth'
            });
            updateActiveDot(index);
        });
    });

    // Update pagination based on scroll position
    function updatePagination() {
        const scrollPosition = scroller.scrollLeft;
        const maxScroll = scroller.scrollWidth - scroller.clientWidth;
        const section = maxScroll / (dots.length - 1);
        const currentIndex = Math.round(scrollPosition / section);

        updateActiveDot(currentIndex);
    }

    function updateActiveDot(index) {
        dots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('active');
                dot.setAttribute('aria-current', 'true');
            } else {
                dot.classList.remove('active');
                dot.setAttribute('aria-current', 'false');
            }
        });
    }

    // Update pagination on scroll
    scroller.addEventListener('scroll', debounce(updatePagination, 100));

    // Debounce function to improve performance
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Touch swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    scroller.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    scroller.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            // Swipe left
            nextBtn.click();
        }
        if (touchEndX > touchStartX + swipeThreshold) {
            // Swipe right
            prevBtn.click();
        }
    }

    // Keyboard navigation
    scroller.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
            e.preventDefault();
        } else if (e.key === 'ArrowRight') {
            nextBtn.click();
            e.preventDefault();
        }
    });

    // Make scroller focusable for keyboard navigation
    scroller.setAttribute('tabindex', '0');
});

// Filter functionality (placeholder for future implementation)
const filterBox = document.querySelector('.filter-box');
if (filterBox) {
    filterBox.addEventListener('click', function () {
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !expanded);
        // Add filter dropdown functionality here
        console.log('Filter clicked - implement dropdown here');
    });
}

// List item click handlers
const listItems = document.querySelectorAll('.list-item');
listItems.forEach(item => {
    item.addEventListener('click', function (e) {
        // If clicked on a link, let it navigate normally
        if (e.target.tagName === 'A') return;

        // Otherwise find the link and navigate
        const link = this.querySelector('.list-title');
        if (link && link.href) {
            window.location.href = link.href;
        }
    });

    // Make list items keyboard accessible
    item.setAttribute('tabindex', '0');
    item.addEventListener('keypress', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            this.click();
        }
    });
});

// Module card click handlers
const moduleCards = document.querySelectorAll('.module-card');
moduleCards.forEach(card => {
    // Make cards keyboard accessible
    card.setAttribute('tabindex', '0');
    card.addEventListener('keypress', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            console.log('Module card clicked:', this.querySelector('h3').textContent);
            // Add navigation or modal functionality here
        }
    });

    card.addEventListener('click', function () {
        console.log('Module card clicked:', this.querySelector('h3').textContent);
        // Add navigation or modal functionality here
    });
});
