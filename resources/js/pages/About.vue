<template>
  <div class="app-about-page">
    <!-- Hero Section -->
    <Hero
      title="Over Stucadoorsbedrijf D&V"
      subtitle="Meer dan 25 jaar ervaring in vakmanschap en kwaliteit"
      :buttons="heroButtons"
    />

    <!-- Main Content Section -->
    <div class="app-about-page__container">
      <div class="app-about-page__content">

        <!-- Company Story Card -->
        <BaseCard
          variant="primary"
          size="large"
          :hoverable="false"
          class="app-about-page__story-card"
        >
          <template #header>
            <h2 class="base-card__title">Ons Verhaal</h2>
          </template>

          <div class="app-about-page__story-content">
            <img src="/images/team.jpg" alt="Het team van D&V" class="app-about-page__story-image"/>
            <div class="app-about-page__story-text">
              <p class="base-card__text">
                Stucadoorsbedrijf D&V werd opgericht in 1999 met een eenvoudige missie: het leveren van
                hoogwaardig stucwerk met oog voor detail en klanttevredenheid. Wat begon als een kleine
                onderneming, is uitgegroeid tot een gerespecteerd bedrijf in de regio.
              </p>
              <p class="base-card__text">
                Onze oprichters, Dennis en Vincent, brachten hun jarenlange ervaring en passie voor
                vakmanschap samen om een bedrijf te creëren dat staat voor kwaliteit, betrouwbaarheid
                en innovatie in de stucadoorsbranche.
              </p>
            </div>
          </div>
        </BaseCard>

         <!-- Team Section -->
        <BaseCard
          variant="secondary"
          size="large"
          :hoverable="false"
          class="app-about-page__team-card"
        >
          <template #header>
            <h2 class="base-card__title">Ons Ervaren Team</h2>
          </template>

          <div class="app-about-page__team-grid">
            <div class="app-about-page__team-member">
              <img src="/images/person.svg" alt="Dennis - Oprichter" class="app-about-page__team-photo"/>
              <h4 class="app-about-page__team-name">Dennis Dubbelaar</h4>
              <p class="app-about-page__team-role">Oprichter & Projectleider</p>
              <p class="app-about-page__team-description">
                Met meer dan 20 jaar ervaring in de bouw en specialisatie in stucwerk,
                leidt Dennis elk project met precisie en vakmanschap.
              </p>
            </div>

            <div class="app-about-page__team-member">
              <img src="/images/persons.svg" alt="Ons vakkundige team" class="app-about-page__team-photo"/>
              <h4 class="app-about-page__team-name">Ons Vakteam</h4>
              <p class="app-about-page__team-role">Gecertificeerde Stucadoors</p>
              <p class="app-about-page__team-description">
                Ons team bestaat uit ervaren vakspecialisten die samen zorgen voor
                de uitvoering van elk project volgens de hoogste kwaliteitseisen.
              </p>
            </div>
          </div>
        </BaseCard>

        <!-- Mission & Vision Cards -->
        <div class="app-about-page__mission-vision">
          <BaseCard
            variant="accent"
            size="medium"
            :hoverable="false"
            class="app-about-page__mission-card"
          >
            <template #header>
              <h3 class="base-card__title">Onze Missie</h3>
            </template>

            <p class="base-card__text">
              Wij streven ernaar om elke klant te voorzien van vakkundig stucwerk dat niet alleen
              mooi is, maar ook duurzaam. Door gebruik te maken van hoogwaardige materialen en
              moderne technieken, zorgen wij ervoor dat elk project aan de hoogste standaarden voldoet.
            </p>
          </BaseCard>

          <BaseCard
            variant="accent"
            size="medium"
            :hoverable="false"
            class="app-about-page__vision-card"
          >
            <template #header>
              <h3 class="base-card__title">Onze Visie</h3>
            </template>

            <p class="base-card__text">
              Wij geloven in langdurige relaties met onze klanten, gebaseerd op vertrouwen en
              kwaliteit. Onze visie is om de voorkeurspartner te zijn voor alle stucwerk in de
              regio, waarbij vakmanschap en klanttevredenheid centraal staan.
            </p>
          </BaseCard>
        </div>

        <!-- Values Section -->
        <BaseCard
          variant="primary"
          size="large"
          :hoverable="false"
          class="app-about-page__values-card"
        >
          <template #header>
            <h2 class="base-card__title">Onze Kernwaarden</h2>
          </template>

          <div class="app-about-page__values-grid">
            <div class="app-about-page__value-item">
              <div class="app-about-page__value-icon">🏆</div>
              <h4 class="app-about-page__value-title">Kwaliteit</h4>
              <p class="base-card__text">
                Wij gebruiken alleen de beste materialen en technieken voor een duurzaam resultaat.
              </p>
            </div>

            <div class="app-about-page__value-item">
              <div class="app-about-page__value-icon">🤝</div>
              <h4 class="app-about-page__value-title">Betrouwbaarheid</h4>
              <p class="base-card__text">
                Op tijd, binnen budget en volgens afspraak - daar kunt u op rekenen.
              </p>
            </div>

            <div class="app-about-page__value-item">
              <div class="app-about-page__value-icon">💡</div>
              <h4 class="app-about-page__value-title">Innovatie</h4>
              <p class="base-card__text">
                Wij blijven investeren in nieuwe technieken en duurzame oplossingen.
              </p>
            </div>

            <div class="app-about-page__value-item">
              <div class="app-about-page__value-icon">👥</div>
              <h4 class="app-about-page__value-title">Samenwerking</h4>
              <p class="base-card__text">
                Uw wensen en ideeën staan centraal in ons werkproces.
              </p>
            </div>
          </div>
        </BaseCard>

      </div>
    </div>
  </div>
</template>

<script>
import BaseCard from '../components/abstracts/BaseCard.vue';
import Hero from '../components/Hero.vue';

export default {
  name: 'About',
  components: {
    Hero,
    BaseCard
  },
  data() {
    return {
      heroButtons: [
        {
          text: 'Bekijk Onze Projecten',
          to: '/projecten',
          type: 'primary'
        },
        {
          text: 'Neem Contact Op',
          to: '/contact',
          type: 'secondary'
        }
      ]
    }
  }
}
</script>

<style lang="scss">
.app-about-page {
  position: relative;
  overflow: hidden;
}

.app-about-page::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background:
    radial-gradient(ellipse at 20% 10%, rgba(139, 23, 37, 0.05) 0%, transparent 40%),
    radial-gradient(ellipse at 80% 20%, rgba(239, 68, 68, 0.03) 0%, transparent 40%),
    radial-gradient(ellipse at 30% 80%, rgba(139, 23, 37, 0.04) 0%, transparent 40%);
  animation: float 25s ease-in-out infinite;
  pointer-events: none;
  z-index: 0;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-1%, -0.5%) rotate(0.5deg); }
  66% { transform: translate(0.5%, -1%) rotate(-0.5deg); }
}

/* Main Content */
.app-about-page__container {
  position: relative;
  z-index: 1;
  max-width: 1600px;
  margin: 0 auto;
  padding: 1.5rem;
}

.app-about-page__content {
  padding: 3rem 0;
  display: flex;
  flex-direction: column;
  gap: 3rem;
}

/* Story Card */
.app-about-page__story-content {
  display: grid;
  grid-template-columns: 300px 1fr;
  gap: 2rem;
  align-items: center;
}

.app-about-page__story-image {
  width: 100%;
  height: 250px;
  object-fit: cover;
  border-radius: 0.75rem;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.app-about-page__story-text {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

/* Mission & Vision */
.app-about-page__mission-vision {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
}

/* Team Section */
.app-about-page__team-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

.app-about-page__team-member {
  text-align: center;
  padding: 1.5rem;
  background: rgba(255, 255, 255, 0.8);
  border-radius: 0.75rem;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.app-about-page__team-member:hover {
  transform: translateY(-5px);
}

.app-about-page__team-photo {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  margin: 0 auto 1rem;
  border: 4px solid #ffffff;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.app-about-page__team-name {
  font-size: 1.25rem;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 0.5rem;
}

.app-about-page__team-role {
  font-size: 1rem;
  font-weight: 600;
  color: #8b1725;
  margin-bottom: 1rem;
}

.app-about-page__team-description {
  font-size: 0.875rem;
  color: #6b7280;
  line-height: 1.6;
}

/* Values Section */
.app-about-page__values-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.app-about-page__value-item {
  text-align: center;
  padding: 1.5rem;
}

.app-about-page__value-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.app-about-page__value-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 1rem;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

/* Responsive Design */
@media (max-width: 1024px) {
  .app-about-page__story-content {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .app-about-page__mission-vision {
    grid-template-columns: 1fr;
    gap: 2rem;
  }

  .app-about-page__values-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .app-about-page__container {
    padding: 1rem;
  }

  .app-about-page__content {
    padding: 2rem 0;
    gap: 2rem;
  }

  .app-about-page__story-image {
    height: 200px;
  }

  .app-about-page__values-grid {
    grid-template-columns: 1fr;
  }

  .app-about-page__team-grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 480px) {
  .app-about-page__container {
    padding: 0.75rem;
  }

  .app-about-page__content {
    padding: 1rem 0;
  }
}
</style>
