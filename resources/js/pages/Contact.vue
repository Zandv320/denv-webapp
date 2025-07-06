<template>
  <div class="app-contact-page">
    <!-- Hero Section -->
    <Hero
      title="Contact"
      subtitle="Neem contact op voor een vrijblijvende offerte of persoonlijk advies"
      :buttons="heroButtons"
    />

    <!-- Main Content Section -->
    <div class="app-contact-page__container">
      <div class="app-contact-page__content">

        <!-- Contact Information and Form -->
        <div class="app-contact-page__main-grid">
                      <!-- Contact Form Card -->
          <BaseCard
            variant="white"
            size="large"
            :hoverable="false"
            class="app-contact-page__form-card"
          >
            <template #header>
              <h2 class="app-contact-page__offerte-title base-card__title">Offerte Aanvragen</h2>
              <p class="app-contact-page__form-subtitle">
                Vul onderstaand formulier in en wij nemen binnen 24 uur contact met u op.
              </p>
            </template>

            <form @submit.prevent="submitForm" class="app-contact-page__form">
              <div class="app-contact-page__form-grid">
                <div class="app-contact-page__form-group">
                  <label class="app-contact-page__form-label">
                    Naam *
                  </label>
                  <input
                    type="text"
                    v-model="form.name"
                    class="app-contact-page__form-input"
                    required
                  >
                </div>

                <div class="app-contact-page__form-group">
                  <label class="app-contact-page__form-label">
                    Email *
                  </label>
                  <input
                    type="email"
                    v-model="form.email"
                    class="app-contact-page__form-input"
                    required
                  >
                </div>

                <div class="app-contact-page__form-group">
                  <label class="app-contact-page__form-label">
                    Telefoon
                  </label>
                  <input
                    type="tel"
                    v-model="form.phone"
                    class="app-contact-page__form-input"
                  >
                </div>

                <div class="app-contact-page__form-group">
                  <label class="app-contact-page__form-label">
                    Type Project
                  </label>
                  <select
                    v-model="form.projectType"
                    class="app-contact-page__form-input"
                  >
                    <option value="">Selecteer een optie</option>
                    <option value="renovatie">Renovatie</option>
                    <option value="nieuwbouw">Nieuwbouw</option>
                    <option value="gevelwerk">Gevelwerk</option>
                    <option value="herstel">Herstel/Onderhoud</option>
                    <option value="overig">Overig</option>
                  </select>
                </div>
              </div>

              <div class="app-contact-page__form-group">
                <label class="app-contact-page__form-label">
                  Projectomschrijving *
                </label>
                <textarea
                  v-model="form.message"
                  rows="5"
                  class="app-contact-page__form-textarea"
                  placeholder="Beschrijf uw project zo gedetailleerd mogelijk..."
                  required
                ></textarea>
              </div>

              <div class="app-contact-page__form-group">
                <label class="app-contact-page__form-checkbox-container">
                  <input
                    type="checkbox"
                    v-model="form.privacy"
                    class="app-contact-page__form-checkbox"
                    required
                  >
                  <span class="app-contact-page__form-checkbox-text">
                    Ik ga akkoord met de
                    <router-link to="/privacy" class="app-contact-page__link">privacyverklaring</router-link>
                  </span>
                </label>
              </div>

              <button
                type="submit"
                class="app-contact-page__form-button"
                :disabled="isSubmitting"
              >
                {{ isSubmitting ? 'Bezig met versturen...' : 'Offerte Aanvragen' }}
              </button>
            </form>
          </BaseCard>


          <!-- Contact Information Card -->
          <BaseCard
            variant="primary"
            size="large"
            :hoverable="false"
            class="app-contact-page__info-card"
          >
            <template #header>
              <h2 class="base-card__title">Contactgegevens</h2>
            </template>

            <div class="app-contact-page__info-content">
              <div class="app-contact-page__info-item">
                <div class="app-contact-page__info-icon">📍</div>
                <div class="app-contact-page__info-details">
                  <h4 class="app-contact-page__info-title">Adres</h4>
                  <p class="base-card__text">
                    Voorbeeldstraat 123<br>
                    1234 AB Voorbeeldstad<br>
                    Nederland
                  </p>
                </div>
              </div>

              <div class="app-contact-page__info-item">
                <div class="app-contact-page__info-icon">📞</div>
                <div class="app-contact-page__info-details">
                  <h4 class="app-contact-page__info-title">Telefoon</h4>
                  <p class="base-card__text">
                    <a href="tel:+31612345678" class="app-contact-page__link">
                      +31 6 12 34 56 78
                    </a>
                  </p>
                  <p class="app-contact-page__info-note">
                    Bereikbaar: Ma-Vr 08:00-18:00
                  </p>
                </div>
              </div>

              <div class="app-contact-page__info-item">
                <div class="app-contact-page__info-icon">✉️</div>
                <div class="app-contact-page__info-details">
                  <h4 class="app-contact-page__info-title">Email</h4>
                  <p class="base-card__text">
                    <a href="mailto:info@stucadoorsbedrijfdv.nl" class="app-contact-page__link">
                      info@stucadoorsbedrijfdv.nl
                    </a>
                  </p>
                  <p class="app-contact-page__info-note">
                    Wij reageren binnen 24 uur
                  </p>
                </div>
              </div>

              <div class="app-contact-page__info-item">
                <div class="app-contact-page__info-icon">🏢</div>
                <div class="app-contact-page__info-details">
                  <h4 class="app-contact-page__info-title">Bedrijfsinformatie</h4>
                  <p class="base-card__text">
                    KvK: 12345678<br>
                    BTW: NL123456789B01<br>
                    Verzekerd bij: Interpolis
                  </p>
                </div>
              </div>
            </div>
          </BaseCard>
        </div>

        <!-- Additional Information Cards -->
        <div class="app-contact-page__additional-grid">

          <!-- Why Choose Us Card -->
          <BaseCard
            variant="secondary"
            size="medium"
            :hoverable="false"
            class="app-contact-page__why-card"
          >
            <template #header>
              <h3 class="base-card__title">Waarom Kiezen voor D&V?</h3>
            </template>

            <ul class="app-contact-page__why-list">
              <li class="app-contact-page__why-item">
                <span class="app-contact-page__why-icon">✓</span>
                Meer dan 15 jaar ervaring
              </li>
              <li class="app-contact-page__why-item">
                <span class="app-contact-page__why-icon">✓</span>
                Gecertificeerde vakmensen
              </li>
              <li class="app-contact-page__why-item">
                <span class="app-contact-page__why-icon">✓</span>
                Gratis offerte binnen 48 uur
              </li>
              <li class="app-contact-page__why-item">
                <span class="app-contact-page__why-icon">✓</span>
                Garantie op alle werkzaamheden
              </li>
              <li class="app-contact-page__why-item">
                <span class="app-contact-page__why-icon">✓</span>
                Transparante prijzen
              </li>
            </ul>
          </BaseCard>

          <!-- Service Areas Card -->
          <BaseCard
            variant="accent"
            size="medium"
            :hoverable="false"
            class="app-contact-page__areas-card"
          >
            <template #header>
              <h3 class="base-card__title">Werkgebied</h3>
            </template>

            <p class="base-card__text">
              Wij zijn actief in de volgende regio's:
            </p>
            <ul class="app-contact-page__areas-list base-card__text">
              <li>Den Haag en omgeving</li>
              <li>Rotterdam en omgeving</li>
              <li>Leiden en omgeving</li>
              <li>Delft en omgeving</li>
              <li>Zoetermeer en omgeving</li>
              <li>En geheel Zuid-Holland</li>
            </ul>
            <p class="base-card__text app-contact-page__areas-note">
              Ligt uw project buiten ons standaard werkgebied?
              Neem gerust contact op om de mogelijkheden te bespreken.
            </p>
          </BaseCard>

        </div>

      </div>
    </div>
  </div>
</template>

<script>
import BaseCard from '../components/abstracts/BaseCard.vue';
import Hero from '../components/Hero.vue';

export default {
  name: 'Contact',
  components: {
    Hero,
    BaseCard
  },
  data() {
    return {
      heroButtons: [
        {
          text: 'Bel Direct',
          to: 'tel:+31612345678',
          type: 'primary'
        },
        {
          text: 'Bekijk Projecten',
          to: '/projecten',
          type: 'secondary'
        }
      ],
      form: {
        name: '',
        email: '',
        phone: '',
        projectType: '',
        message: '',
        privacy: false
      },
      isSubmitting: false
    }
  },
 methods: {
    async submitForm() {
      this.isSubmitting = true;

      try {
        const response = await fetch('/api/contact', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
          },
          body: JSON.stringify(this.form)
        });

        const data = await response.json();

        if (data.success) {
          alert(data.message);
          this.resetForm();
        } else {
          if (data.errors) {
            // Handle validation errors
            const errorMessages = Object.values(data.errors).flat().join('\n');
            alert('Validatiefouten:\n' + errorMessages);
          } else {
            alert(data.message || 'Er is een fout opgetreden.');
          }
        }

      } catch (error) {
        console.error('Error submitting form:', error);
        alert('Er is een fout opgetreden. Probeer het opnieuw of neem telefonisch contact op.');
      } finally {
        this.isSubmitting = false;
      }
    },

    resetForm() {
      this.form = {
        name: '',
        email: '',
        phone: '',
        projectType: '',
        message: '',
        privacy: false
      };
    }
  }
}
</script>

<style lang="scss">
.app-contact-page {
  min-height: calc(100vh - 80px);
  background: transparent;
  position: relative;
  overflow: hidden;
}

.app-contact-page::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background:
    radial-gradient(ellipse at 10% 20%, rgba(139, 23, 37, 0.04) 0%, transparent 40%),
    radial-gradient(ellipse at 90% 30%, rgba(239, 68, 68, 0.03) 0%, transparent 40%),
    radial-gradient(ellipse at 20% 90%, rgba(139, 23, 37, 0.03) 0%, transparent 40%);
  animation: float 35s ease-in-out infinite;
  pointer-events: none;
  z-index: 0;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-0.8%, -0.4%) rotate(0.2deg); }
  66% { transform: translate(0.4%, -0.8%) rotate(-0.2deg); }
}

/* Main Content */
.app-contact-page__container {
  position: relative;
  z-index: 1;
  max-width: 1600px;
  margin: 0 auto;
  padding: 1.5rem;
}

.app-contact-page__content {
  padding: 3rem 0;
  display: flex;
  flex-direction: column;
  gap: 3rem;
}

/* Main Grid */
.app-contact-page__main-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
}

.app-contact-page__offerte-title {
    text-shadow: none;
    font-size: 1.850rem;
    font-weight: 500;
}

/* Contact Information */
.app-contact-page__info-content {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.app-contact-page__info-item {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
}

.app-contact-page__info-icon {
  font-size: 2rem;
  line-height: 1;
}

.app-contact-page__info-title {
  font-size: 1.125rem;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 0.5rem;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

.app-contact-page__info-note {
  font-size: 0.875rem;
  color: #e5e7eb;
  margin-top: 0.25rem;
}

.app-contact-page__link {
  color: #ffffff;
  text-decoration: underline;
  transition: opacity 0.2s ease;
}

.app-contact-page__link:hover {
  opacity: 0.8;
}

/* Form Styling */
.app-contact-page__form-subtitle {
  color: #6b7280;
  margin-top: 0.5rem;
  font-size: 0.875rem;
}

.app-contact-page__form {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.app-contact-page__form-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.5rem;
}

.app-contact-page__form-group {
  display: flex;
  flex-direction: column;
}

.app-contact-page__form-label {
  font-weight: 600;
  color: #374151;
  margin-bottom: 0.5rem;
  font-size: 0.875rem;
}

.app-contact-page__form-input,
.app-contact-page__form-textarea {
  padding: 0.75rem;
  border: 2px solid #e5e7eb;
  border-radius: 0.5rem;
  font-size: 1rem;
  transition: all 0.2s ease;
  background: #ffffff;
}

.app-contact-page__form-input:focus,
.app-contact-page__form-textarea:focus {
  outline: none;
  border-color: #8b1725;
  box-shadow: 0 0 0 3px rgba(139, 23, 37, 0.1);
}

.app-contact-page__form-textarea {
  resize: vertical;
  min-height: 120px;
}

.app-contact-page__form-checkbox-container {
  display: flex;
  align-items: flex-start;
  gap: 0.5rem;
  cursor: pointer;
}

.app-contact-page__form-checkbox {
  margin-top: 0.125rem;
}

.app-contact-page__form-checkbox-text {
  font-size: 0.875rem;
  color: #6b7280;
  line-height: 1.4;
}

.app-contact-page__form-button {
  background: linear-gradient(135deg, #8b1725 0%, #a31c29 100%);
  color: white;
  padding: 1rem 2rem;
  border: none;
  border-radius: 0.5rem;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.3s ease;
  text-align: center;
}

.app-contact-page__form-button:hover:not(:disabled) {
  background: linear-gradient(135deg, #a31c29 0%, #c92a3a 100%);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(139, 23, 37, 0.3);
}

.app-contact-page__form-button:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

/* Additional Cards */
.app-contact-page__additional-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
}

.app-contact-page__why-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.app-contact-page__why-item {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  padding: 0.5rem 0;
  color: #f3f4f6;
}

.app-contact-page__why-icon {
  color: #4ade80;
  font-weight: bold;
  font-size: 1.125rem;
}

.app-contact-page__areas-list {
  list-style: none;
  padding: 0;
  margin: 1rem 0;
}

.app-contact-page__areas-list li {
  padding: 0.25rem 0;
  padding-left: 1rem;
  position: relative;
}

.app-contact-page__areas-list li::before {
  content: '•';
  color: #ffffff;
  position: absolute;
  left: 0;
}

.app-contact-page__areas-note {
  margin-top: 1rem;
  font-size: 0.875rem;
  opacity: 0.9;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .app-contact-page__main-grid,
  .app-contact-page__additional-grid {
    grid-template-columns: 1fr;
    gap: 2rem;
  }

  .app-contact-page__form-grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 768px) {
  .app-contact-page__container {
    padding: 1rem;
  }

  .app-contact-page__content {
    padding: 2rem 0;
    gap: 2rem;
  }

  .app-contact-page__info-item {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
}

@media (max-width: 480px) {
  .app-contact-page__container {
    padding: 0.75rem;
  }

  .app-contact-page__content {
    padding: 1rem 0;
  }
}
</style>
