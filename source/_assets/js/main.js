// Highlight.js theme switching
function syncHljsTheme(dark) {
    const light = document.getElementById('hljs-light');
    const darkSheet = document.getElementById('hljs-dark');
    if (light && darkSheet) {
        light.disabled = dark;
        darkSheet.disabled = !dark;
    }
}

// Dark mode toggle
const toggle = document.getElementById('dark-toggle');

function applyTheme(dark) {
    document.documentElement.classList.toggle('dark', dark);
    localStorage.setItem('theme', dark ? 'dark' : 'light');
    syncHljsTheme(dark);
}

const stored = localStorage.getItem('theme');
const isDark = stored === 'dark' || (!stored && window.matchMedia('(prefers-color-scheme: dark)').matches);
applyTheme(isDark);

if (toggle) {
    toggle.addEventListener('click', () => {
        const dark = document.documentElement.classList.contains('dark');
        applyTheme(!dark);
    });
}

// Initialize highlight.js — retry until the CDN script is loaded
function initHighlight() {
    if (typeof hljs !== 'undefined') {
        hljs.highlightAll();
        syncHljsTheme(document.documentElement.classList.contains('dark'));
    } else {
        setTimeout(initHighlight, 50);
    }
}
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHighlight);
} else {
    initHighlight();
}

// Reading progress bar (article pages only)
const progressBar = document.getElementById('reading-progress');
if (progressBar) {
    window.addEventListener('scroll', () => {
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrolled = window.scrollY;
        const progress = docHeight > 0 ? (scrolled / docHeight) * 100 : 0;
        progressBar.style.width = Math.min(progress, 100) + '%';
    }, { passive: true });
}
