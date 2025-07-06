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
        <BaseCard
          variant="primary"
          size="medium"
          :hoverable="false"
          class="app-home-page__intro-card"
        >
            <h2 class="base-card__title app-home-page__intro-card-title">
                Vakmanschap dat je ziet, kwaliteit die je voelt.
            </h2>
            <img src="/images/painter.jpg" alt="Professional painter at work" class="app-home-page__painter-image"/>
            <p class="app-home-page__intro-card-text">
                Welkom bij Stucadoorsbedrijf D&V, waar vakmanschap, jarenlange ervaring en moderne technieken samenkomen. Wij zijn de specialist als het gaat om hoogwaardig stucwerk, duurzame gevelafwerking en strak sauswerk. Of het nu gaat om een renovatieproject, nieuwbouw of het herstellen van bestaande muren, wij leveren kwaliteit die zichtbaar en voelbaar is.
                Neem vandaag nog contact met ons op voor een vrijblijvende offerte of persoonlijk advies.
            </p>
        </BaseCard>

        <!-- Video Section -->
        <BaseCard
          variant="primary"
          size="medium"
          :hoverable="false"
          class="app-home-page__video-card"
        >
          <template #header>
            <h2 class="base-card__title app-home-page__video-title">
              Bekijk ons vakmanschap in actie
            </h2>
          </template>

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
            <p class="base-card__text app-home-page__video-description">
              Ontdek hoe wij met precisie en vakmanschap uw project tot leven brengen.
            </p>
          </div>
        </BaseCard>
      </div>
    </div>
  </div>
</template>

<script>
import BaseCard from '../components/abstracts/BaseCard.vue';
import Hero from '../components/Hero.vue'

export default {
  name: 'Home',
  components: {
    Hero,
    BaseCard
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

<style lang='scss'>

/* Main Content */
.app-home-page__container {
  max-width: 1600px;
  margin: 0 auto;
  padding: 1.5rem;
}

.app-home-page__content {
  padding: 3rem 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
}

.app-home-page__intro-card {
  margin-bottom: 0;
}

.app-home-page__intro-card-title {
  line-height: 1.2;
  margin-bottom: 1rem;
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.app-home-page__intro-card-text {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
}

.app-home-page__painter-image {
  height: 300px;
  width: 100%;
  object-fit: cover;
  border-radius: 0.5rem;
  margin: 1rem 0 2rem 0;
}

.app-home-page__video-title {
  line-height: 1.2;
  margin-bottom: 1rem;
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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
  border-radius: 0.5rem;
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
  font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .app-home-page__content {
    grid-template-columns: 1fr;
    gap: 1rem;
  }

  .app-home-page__intro-card {
    margin-bottom: 1rem;
  }
}

@media (max-width: 768px) {
  .app-home-page__container {
    padding: 1rem;
  }

  .app-home-page__content {
    padding: 2rem 0;
  }

  .app-home-page__video-title {
    font-size: 1.5rem;
  }
}

@media (max-width: 480px) {
  .app-home-page__container {
    padding: 0.75rem;
  }

  .app-home-page__content {
    padding: 1rem 0;
  }

  .app-home-page__video-title {
    font-size: 1.25rem;
  }
}
</style>
