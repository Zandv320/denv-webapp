<template>
    <header class="app-header">
        <div class="app-header__brand">
            <router-link to="/" class="app-header__logo-link">
                <img src="../../../public/images/logo.jpg" alt="Stukadoorsbedrijf D&V Logo" class="app-header__logo">
            </router-link>
        </div>

        <!-- Desktop Navigation -->
        <nav class="app-header__navigation app-header__navigation--desktop">
            <ul class="app-header__navigation-list">
                <li><router-link to="/">Welkom</router-link></li>
                <li><router-link to="/over-ons">Over ons</router-link></li>
                <li><router-link to="/projecten">Projecten</router-link></li>
                <li><router-link to="/contact">Contact</router-link></li>
            </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <button
            class="app-header__mobile-toggle"
            @click="toggleMobileMenu"
            :class="{ 'active': isMobileMenuOpen }"
        >
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <!-- Mobile Navigation -->
        <nav class="app-header__navigation--mobile" :class="{ 'open': isMobileMenuOpen }">
            <ul class="app-header__navigation-list--mobile">
                <li><router-link to="/" @click="closeMobileMenu">Welkom</router-link></li>
                <li><router-link to="/over-ons" @click="closeMobileMenu">Over ons</router-link></li>
                <li><router-link to="/projecten" @click="closeMobileMenu">Projecten</router-link></li>
                <li><router-link to="/contact" @click="closeMobileMenu">Contact</router-link></li>
            </ul>
        </nav>
    </header>
</template>

<script>
import { ref } from 'vue'

export default {
    name: 'Header',
    setup() {
        const isMobileMenuOpen = ref(false)

        const toggleMobileMenu = () => {
            isMobileMenuOpen.value = !isMobileMenuOpen.value
        }

        const closeMobileMenu = () => {
            isMobileMenuOpen.value = false
        }

        return {
            isMobileMenuOpen,
            toggleMobileMenu,
            closeMobileMenu
        }
    }
}
</script>

<style scoped>
.app-header {
    background: #85000f;
    color: #fff;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.70);
    z-index: 1001;
}

.app-header__brand {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.app-header__logo-link {
    display: block;
    transition: opacity 0.3s ease;
}

.app-header__logo-link:hover {
    opacity: 0.8;
}

.app-header__logo {
    height: 60px;
    width: auto;
    display: block;
}

/* Desktop Navigation */
.app-header__navigation--desktop {
    display: block;
}

.app-header__navigation-list {
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    gap: 2rem;
    flex-flow: wrap;
    margin: 0;
    padding: 0;
    list-style: none;
}

.app-header__navigation-list a,
.app-header__navigation-list .router-link-active,
.app-header__navigation-list .router-link-exact-active {
    color: #fff;
    text-decoration: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.app-header__navigation-list a:hover,
.app-header__navigation-list .router-link-active:hover,
.app-header__navigation-list .router-link-exact-active:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.app-header__navigation-list .router-link-active,
.app-header__navigation-list .router-link-exact-active {
    background-color: rgba(255, 255, 255, 0.2);
}

/* Mobile Menu Button */
.app-header__mobile-toggle {
    display: none;
    flex-direction: column;
    justify-content: space-around;
    width: 30px;
    height: 30px;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
    z-index: 1002;
}

.hamburger-line {
    width: 100%;
    height: 3px;
    background-color: #fff;
    border-radius: 2px;
    transition: all 0.3s ease;
    transform-origin: center;
}

.app-header__mobile-toggle.active .hamburger-line:nth-child(1) {
    transform: translateY(9.5px) rotate(45deg);
}

.app-header__mobile-toggle.active .hamburger-line:nth-child(2) {
    opacity: 0;
}

.app-header__mobile-toggle.active .hamburger-line:nth-child(3) {
    transform: translateY(-10.5px) rotate(-45deg);
}

/* Mobile Navigation */
.app-header__navigation--mobile {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: #85000f;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    z-index: 1000;
    transform: translateY(-10px);
    opacity: 0;
    transition: all 0.3s ease;
}

.app-header__navigation--mobile.open {
    transform: translateY(0);
    opacity: 1;
}

.app-header__navigation-list--mobile {
    list-style: none;
    margin: 0;
    padding: 1rem 0;
    display: flex;
    flex-direction: column;
}

.app-header__navigation-list--mobile li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.app-header__navigation-list--mobile li:last-child {
    border-bottom: none;
}

.app-header__navigation-list--mobile a,
.app-header__navigation-list--mobile .router-link-active,
.app-header__navigation-list--mobile .router-link-exact-active {
    color: #fff;
    text-decoration: none;
    padding: 1rem 2rem;
    display: block;
    transition: background-color 0.3s;
    border-left: 4px solid transparent;
}

.app-header__navigation-list--mobile a:hover,
.app-header__navigation-list--mobile .router-link-active:hover,
.app-header__navigation-list--mobile .router-link-exact-active:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.app-header__navigation-list--mobile .router-link-active,
.app-header__navigation-list--mobile .router-link-exact-active {
    background-color: rgba(255, 255, 255, 0.1);
    border-left-color: #fff;
}

/* Responsive Breakpoints */
@media (max-width: 1024px) {
    .app-header__navigation--desktop {
        display: none;
    }

    .app-header__mobile-toggle {
        display: flex;
    }

    .app-header__navigation--mobile {
        display: block;
    }
}

@media (max-width: 768px) {
    .app-header__title {
        font-size: 1.2rem;
    }

    .app-header__logo {
        height: 50px;
    }

    .app-header {
        padding: 0.75rem 1rem;
    }
}

@media (max-width: 480px) {
    .app-header__title {
        font-size: 1rem;
    }

    .app-header__logo {
        height: 40px;
    }
}
</style>
