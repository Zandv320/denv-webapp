<template>
  <footer class="footer">
    <div class="footer__container">
      <!-- Company Info Section -->
      <div class="footer__section">
        <h3 class="footer__title">Stucadoorsbedrijf D&V</h3>
        <p class="footer__description">
          Vakmanschap, jarenlange ervaring en moderne technieken voor hoogwaardig stucwerk en gevelafwerking.
        </p>
        <div class="footer__social">
          <a
            href="https://facebook.com"
            target="_blank"
            rel="noopener noreferrer"
            class="footer__social-link"
            aria-label="Facebook"
          >
            <svg class="footer__social-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
          <a
            href="https://instagram.com"
            target="_blank"
            rel="noopener noreferrer"
            class="footer__social-link"
            aria-label="Instagram"
          >
            <svg class="footer__social-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
          <a
            href="https://linkedin.com"
            target="_blank"
            rel="noopener noreferrer"
            class="footer__social-link"
            aria-label="LinkedIn"
          >
            <svg class="footer__social-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>
          <a
            href="mailto:info@stucadoorsbedrijfdv.nl"
            class="footer__social-link"
            aria-label="Email"
          >
            <svg class="footer__social-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-.904.732-1.636 1.636-1.636h1.82L12 11.367l8.544-7.546h1.82c.904 0 1.636.732 1.636 1.636z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Navigation Links -->
      <div class="footer__section">
        <h4 class="footer__subtitle">Navigatie</h4>
        <nav class="footer__nav">
          <router-link to="/" class="footer__nav-link">Home</router-link>
          <router-link to="/werkzaamheden" class="footer__nav-link">Werkzaamheden</router-link>
          <router-link to="/projecten" class="footer__nav-link">Projecten</router-link>
          <router-link to="/over-ons" class="footer__nav-link">Over Ons</router-link>
          <router-link to="/contact" class="footer__nav-link">Contact</router-link>
        </nav>
      </div>

      <!-- Services -->
      <div class="footer__section">
        <h4 class="footer__subtitle">Onze Diensten</h4>
        <ul class="footer__list">
          <li class="footer__list-item">Stukwerk</li>
          <li class="footer__list-item">Gevelafwerking</li>
          <li class="footer__list-item">Sauswerk</li>
          <li class="footer__list-item">Renovatie</li>
          <li class="footer__list-item">Nieuwbouw</li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="footer__section">
        <h4 class="footer__subtitle">Contact</h4>
        <div class="footer__contact">
          <p class="footer__contact-item">
            <strong>Telefoon:</strong><br>
            <a href="tel:+31612345678" class="footer__contact-link">+31 6 12 34 56 78</a>
          </p>
          <p class="footer__contact-item">
            <strong>Email:</strong><br>
            <a href="mailto:info@stucadoorsbedrijfdv.nl" class="footer__contact-link">info@stucadoorsbedrijfdv.nl</a>
          </p>
          <p class="footer__contact-item">
            <strong>Adres:</strong><br>
            Voorbeeldstraat 123<br>
            1234 AB Voorbeeldstad
          </p>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer__bottom">
      <div class="footer__container">
        <div class="footer__bottom-content">
          <p class="footer__copyright">
            © {{ currentYear }} Stucadoorsbedrijf D&V. Alle rechten voorbehouden.
          </p>
          <div class="footer__bottom-links">
            <router-link to="/privacy" class="footer__bottom-link">Privacy</router-link>
            <router-link to="/algemene-voorwaarden" class="footer__bottom-link">Algemene Voorwaarden</router-link>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  computed: {
    currentYear() {
      return new Date().getFullYear()
    }
  }
}
</script>

<style lang="scss">
.footer {
  background: #1f2937;
  color: #f9fafb;
  margin-top: auto;
  font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
}

.footer__container {
  max-width: 1900px;
  margin: 0 auto;
  padding: 3rem 1.5rem 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.footer__section {
  margin-bottom: 2rem;
}

.footer__title {
  font-size: 1.5rem;
  font-weight: 700;
  color: white;
  margin-bottom: 1rem;
  line-height: 1.2;
  text-rendering: optimizeLegibility;
}

.footer__subtitle {
  font-size: 1.125rem;
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 1rem;
  line-height: 1.2;
  text-rendering: optimizeLegibility;
}

.footer__description {
  color: #d1d5db;
  line-height: 1.6;
  margin-bottom: 1.5rem;
  text-rendering: optimizeLegibility;
}

/* Social Icons */
.footer__social {
  display: flex;
  gap: 1rem;
}

.footer__social-link {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 2.5rem;
  height: 2.5rem;
  background: rgba(239, 68, 68, 0.1);
  border: 2px solid rgba(239, 68, 68, 0.3);
  border-radius: 50%;
  color: #ef4444;
  transition: all 0.2s ease;
  text-decoration: none;
}

.footer__social-link:hover {
  background: #ef4444;
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
}

.footer__social-icon {
  width: 1.25rem;
  height: 1.25rem;
  fill: currentColor;
}

/* Navigation */
.footer__nav {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}

.footer__nav-link {
  color: #d1d5db;
  text-decoration: none;
  transition: color 0.2s ease;
  font-weight: 500;
  text-rendering: optimizeLegibility;
}

.footer__nav-link:hover,
.footer__nav-link.router-link-active {
  color: #ef4444;
}

/* Lists */
.footer__list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer__list-item {
  color: #d1d5db;
  padding: 0.375rem 0;
  font-weight: 500;
  text-rendering: optimizeLegibility;
}

/* Contact */
.footer__contact {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.footer__contact-item {
  color: #d1d5db;
  line-height: 1.6;
  margin: 0;
  text-rendering: optimizeLegibility;
}

.footer__contact-link {
  color: white;
  text-decoration: none;
  transition: color 0.2s ease;
  text-rendering: optimizeLegibility;
}

.footer__contact-link:hover {
  color: white;
  text-decoration: underline;
}

/* Bottom Bar */
.footer__bottom {
  margin-top: 2rem;
  padding: 1.5rem 0;
}

.footer__bottom-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 1rem;
}

.footer__copyright {
  color: #9ca3af;
  margin: 0;
  font-size: 0.875rem;
  text-rendering: optimizeLegibility;
}

.footer__bottom-links {
  display: flex;
  gap: 1.5rem;
}

.footer__bottom-link {
  color: #9ca3af;
  text-decoration: none;
  font-size: 0.875rem;
  transition: color 0.2s ease;
  text-rendering: optimizeLegibility;
}

.footer__bottom-link:hover {
  color: #ef4444;
}

/* Responsive Design */
@media (max-width: 768px) {
  .footer__container {
    grid-template-columns: 1fr;
    padding: 2rem 1rem 0;
  }

  .footer__bottom-content {
    flex-direction: column;
    text-align: center;
  }

  .footer__social {
    justify-content: flex-start;
  }
}

@media (max-width: 480px) {
  .footer__container {
    padding: 1.5rem 0.75rem 0;
  }

  .footer__title {
    font-size: 1.25rem;
  }

  .footer__subtitle {
    font-size: 1rem;
  }
}
</style>
