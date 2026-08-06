// Sticky header on scroll
const header = document.getElementById("site-header");
if (header) {
    window.addEventListener("scroll", () => {
        header.classList.toggle("scrolled", window.scrollY > 60);
    });
}

// Scroll reveal
const revealObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    },
    { threshold: 0.12 },
);

document
    .querySelectorAll(".reveal")
    .forEach((el) => revealObserver.observe(el));

// Mobile menu toggle

const menuBtn = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");
if (menuBtn && mobileMenu) {
    menuBtn.addEventListener("click", () => {
        if (mobileMenu.style.display === "flex") {
            mobileMenu.style.display = "none";
        } else {
            mobileMenu.style.display = "flex";
        }
        menuBtn.classList.toggle("open");
    });
}

// Animated counters
const counters = document.querySelectorAll("[data-counter]");
const counterObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.counter);
                let current = 0;
                const step = Math.ceil(target / 60);
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    el.textContent = current + (el.dataset.suffix || "");
                }, 25);
                counterObserver.unobserve(el);
            }
        });
    },
    { threshold: 0.5 },
);
counters.forEach((el) => counterObserver.observe(el));

// ============ BEFORE/AFTER SLIDER ============
document.querySelectorAll('[id^="ba-card-"]').forEach((card) => {
    const afterLayer = card.querySelector(".after-layer");
    const divider = card.querySelector(".ba-divider");
    let isDragging = false;

    function updateSlider(x) {
        const rect = card.getBoundingClientRect();
        let pct = ((x - rect.left) / rect.width) * 100;
        pct = Math.min(Math.max(pct, 5), 95);
        afterLayer.style.width = pct + "%";
        divider.style.left = pct + "%";
    }

    card.addEventListener("mousedown", (e) => {
        isDragging = true;
        updateSlider(e.clientX);
    });
    card.addEventListener("mousemove", (e) => {
        if (isDragging) updateSlider(e.clientX);
    });
    card.addEventListener("mouseup", () => (isDragging = false));
    card.addEventListener("mouseleave", () => (isDragging = false));
    card.addEventListener("touchstart", (e) => {
        isDragging = true;
        updateSlider(e.touches[0].clientX);
    });
    card.addEventListener("touchmove", (e) => {
        if (isDragging) updateSlider(e.touches[0].clientX);
    });
    card.addEventListener("touchend", () => (isDragging = false));
});

// ============ PORTFOLIO FILTER ============
window.filterPortfolio = function (category, btn) {
    document
        .querySelectorAll(".filter-btn")
        .forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    const grid = document.getElementById("portfolio-grid");
    const items = document.querySelectorAll(".portfolio-item");

    if (category === "all") {
        // Restore original masonry layout
        grid.style.gridTemplateColumns = "repeat(3, 1fr)";
        const configs = [
            { col: "1", row: "1", ratio: "4/3" },
            { col: "2", row: "1 / span 2", ratio: "unset" },
            { col: "3", row: "1", ratio: "4/3" },
            { col: "1", row: "2", ratio: "4/3" },
            { col: "3", row: "2", ratio: "4/3" },
            { col: "1 / span 3", row: "3", ratio: "21/9" },
        ];
        items.forEach((item, i) => {
            item.style.display = "block";
            item.style.gridColumn = configs[i].col;
            item.style.gridRow = configs[i].row;
            item.style.aspectRatio = configs[i].ratio;
        });
    } else {
        // Switch to simple auto grid for filtered view
        grid.style.gridTemplateColumns = "repeat(3, 1fr)";
        items.forEach((item) => {
            if (item.dataset.category === category) {
                item.style.display = "block";
                item.style.gridColumn = "auto";
                item.style.gridRow = "auto";
                item.style.aspectRatio = "4/3";
            } else {
                item.style.display = "none";
                item.style.gridColumn = "auto";
                item.style.gridRow = "auto";
            }
        });
    }
};

// ============ SHOP FILTER ============
window.filterShop = function (category, btn) {
    document
        .querySelectorAll(".filter-btn")
        .forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
    document.querySelectorAll(".shop-item").forEach((item) => {
        if (category === "all" || item.dataset.category === category) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
};
