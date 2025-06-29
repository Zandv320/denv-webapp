<template>
  <div class="app-home-page">
    <!-- Visual Header Section -->
    <section class="app-home-page__hero">
      <div class="app-home-page__hero-image">
        <img src="../../../public/images/visual.jpg" alt="Modern huis met professioneel stukwerk door D&V" class="app-home-page__hero-img">
        <div class="app-home-page__hero-overlay">
          <div class="app-home-page__hero-content">
            <h1 class="app-home-page__hero-title">Welkom bij Stucadoorsbedrijf D&V</h1>
            <p class="app-home-page__hero-subtitle">Kwaliteit en vakmanschap voor uw droomhuis</p>
            <div class="app-home-page__hero-buttons">
              <router-link to="/contact" class="app-home-page__hero-button app-home-page__hero-button--primary">
                Offerte Aanvragen
              </router-link>
              <router-link to="/projecten" class="app-home-page__hero-button app-home-page__hero-button--secondary">
                Onze Projecten
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Section -->
    <div class="app-home-page__container">
      <div class="app-home-page__content">
        <div class="app-home-page__card">
          <p class="app-home-page__intro">
            Vakmanschap dat je ziet, kwaliteit die je voelt.
          </p>
          <p class="app-home-page__description">
            Welkom bij Stucadoorsbedrijf D&V, waar vakmanschap, jarenlange ervaring en moderne technieken samenkomen. Wij zijn de specialist als het gaat om hoogwaardig stucwerk, duurzame gevelafwerking en strak sauswerk. Of het nu gaat om een renovatieproject, nieuwbouw of het herstellen van bestaande muren, wij leveren kwaliteit die zichtbaar en voelbaar is.
            Neem vandaag nog contact met ons op voor een vrijblijvende offerte of persoonlijk advies.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home'
}
</script>

<style scoped>
.app-home-page {
  min-height: calc(100vh - 80px);
  background-color: #f9fafb;
}

/* Hero Section */
.app-home-page__hero {
  position: relative;
  height: 50vh;
  min-height: 500px;
  overflow: hidden;
}

.app-home-page__hero-image {
  position: relative;
  width: 100%;
  height: 100%;
}

.app-home-page__hero-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.app-home-page__hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(133, 0, 15, 0.8) 0%,
    rgba(133, 0, 15, 0.4) 50%,
    rgba(0, 0, 0, 0.3) 100%
  );
  display: flex;
  align-items: center;
  justify-content: center;
}

.app-home-page__hero-content {
  text-align: center;
  color: white;
  max-width: 800px;
  padding: 0 2rem;
}

.app-home-page__hero-title {
  font-size: 3.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  line-height: 1.2;
}

.app-home-page__hero-subtitle {
  font-size: 1.5rem;
  margin-bottom: 2rem;
  opacity: 0.95;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.app-home-page__hero-buttons {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
}

.app-home-page__hero-button {
  padding: 1rem 2rem;
  border-radius: 0.5rem;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  display: inline-block;
  min-width: 180px;
  text-align: center;
}

.app-home-page__hero-button--primary {
  background-color: #85000f;
  color: white;
  border: 2px solid #85000f;
}

.app-home-page__hero-button--primary:hover {
  background-color: #a5001f;
  border-color: #a5001f;
  box-shadow: 0 4px 12px rgba(133, 0, 15, 0.3);
}

.app-home-page__hero-button--secondary {
  background-color: transparent;
  color: white;
  border: 2px solid white;
}

.app-home-page__hero-button--secondary:hover {
  background-color: white;
  color: #85000f;
  box-shadow: 0 4px 12px rgba(255, 255, 255, 0.3);
}

/* Main Content */
.app-home-page__container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 1.5rem;
}

.app-home-page__content {
  padding: 3rem 0;
}

.app-home-page__title {
  font-size: 1.875rem;
  font-weight: bold;
  color: #111827;
  margin-bottom: 1.5rem;
  line-height: 1.2;
  text-align: center;
}

.app-home-page__card {
  background: #ffffff;
  border-radius: 0.5rem;
  padding: 1.5rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.06);
}

.app-home-page__intro {
  font-size: 1.125rem;
  color: #374151;
  margin-bottom: 1rem;
  line-height: 1.6;
}

.app-home-page__description {
  color: #6b7280;
  line-height: 1.6;
  margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
  .app-home-page__hero {
    height: 60vh;
    min-height: 400px;
  }

  .app-home-page__hero-title {
    font-size: 2.5rem;
  }

  .app-home-page__hero-subtitle {
    font-size: 1.2rem;
  }

  .app-home-page__hero-content {
    padding: 0 1rem;
  }

  .app-home-page__hero-buttons {
    flex-direction: column;
    align-items: center;
  }

  .app-home-page__container {
    padding: 1rem;
  }

  .app-home-page__title {
    font-size: 1.5rem;
  }

  .app-home-page__card {
    padding: 1rem;
  }

  .app-home-page__intro {
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .app-home-page__hero-title {
    font-size: 2rem;
  }

  .app-home-page__hero-subtitle {
    font-size: 1rem;
  }

  .app-home-page__hero-button {
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    min-width: 150px;
  }

  .app-home-page__title {
    font-size: 1.25rem;
  }

  .app-home-page__container {
    padding: 0.75rem;
  }
}
</style>
