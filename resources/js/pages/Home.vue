<template>
  <div class="app-home-page">
    <!-- Visual Header Section -->
    <Hero
      title="Welkom bij Stucadoorsbedrijf D&V"
      subtitle="Kwaliteit en vakmanschap voor uw droomhuis"
      image-src="/images/visual.jpg"
      image-alt="Modern huis met professioneel stukwerk door D&V"
      :buttons="heroButtons"
    />

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

        <!-- Video Section -->
        <div class="app-home-page__video-section">
          <h2 class="app-home-page__video-title">Bekijk ons vakmanschap in actie</h2>
          <div class="app-home-page__video-container">
            <div class="app-home-page__video-wrapper">
              <iframe
                src="https://www.youtube-nocookie.com/embed/XDDTX06ArAc?start=53&autoplay=1&mute=1&controls=0&modestbranding=1&showinfo=0&disablekb=1&fs=0&rel=0&iv_load_policy=3&cc_load_policy=0&playsinline=1&loop=1&playlist=XDDTX06ArAc"
                title="D&V Stucadoorsbedrijf - Vakmanschap in actie"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                class="app-home-page__video-iframe"
              ></iframe>
            </div>
            <p class="app-home-page__video-description">
              Ontdek hoe wij met precisie en vakmanschap uw project tot leven brengen.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Hero from '../components/Hero.vue'

export default {
  name: 'Home',
  components: {
    Hero
  },
  data() {
    return {
      heroButtons: [
        {
          text: 'Offerte Aanvragen',
          to: '/contact',
          type: 'primary'
        },
        {
          text: 'Onze Projecten',
          to: '/projecten',
          type: 'secondary'
        }
      ]
    }
  }
}
</script>

<style scoped>
.app-home-page {
  min-height: calc(100vh - 80px);
  background-color: #f9fafb;
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

.app-home-page__card {
  background: #8b1725;
  border-radius: 0.5rem;
  box-shadow: 0 10px 30px rgba(139, 23, 37, 0.4), 0 4px 15px rgba(0, 0, 0, 0.4);
  padding: 1.5rem;
  margin-bottom: 3rem;
}

.app-home-page__intro {
  font-size: 1.125rem;
  color: #ffffff;
  margin-bottom: 1rem;
  line-height: 1.6;
}

.app-home-page__description {
  color: #f3f4f6;
  line-height: 1.6;
  margin: 0;
}

/* Video Section */
.app-home-page__video-section {
  background: #8b1725;
  border-radius: 0.5rem;
  padding: 2rem;
  box-shadow: 0 10px 30px rgba(139, 23, 37, 0.4), 0 4px 15px rgba(0, 0, 0, 0.4);
}

.app-home-page__video-title {
  font-size: 1.875rem;
  font-weight: bold;
  color: #ffffff;
  margin-bottom: 1.5rem;
  text-align: center;
  line-height: 1.2;
}

.app-home-page__video-container {
  text-align: center;
}

.app-home-page__video-wrapper {
  position: relative;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  aspect-ratio: 16 / 9;
  border-radius: 0.75rem;
  overflow: hidden;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  background-color: #000;
}

.app-home-page__video-iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 101%;
  height: 101%;
  border: none;
  border-radius: 0;
  transform: scale(1.05);
}

.app-home-page__video-description {
  margin-top: 1rem;
  color: #f3f4f6;
  font-size: 1rem;
  line-height: 1.6;
}

/* Responsive Design */
@media (max-width: 768px) {
  .app-home-page__container {
    padding: 1rem;
  }

  .app-home-page__card {
    padding: 1rem;
    margin-bottom: 2rem;
  }

  .app-home-page__intro {
    font-size: 1rem;
  }

  .app-home-page__video-section {
    padding: 1.5rem;
  }

  .app-home-page__video-title {
    font-size: 1.5rem;
  }
}

@media (max-width: 480px) {
  .app-home-page__container {
    padding: 0.75rem;
  }

  .app-home-page__video-section {
    padding: 1rem;
  }

  .app-home-page__video-title {
    font-size: 1.25rem;
  }
}
</style>
