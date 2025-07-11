<template>
  <div class="app-projects-page">
    <!-- Hero Section -->
    <Hero
      title="Onze Projecten"
      subtitle="Bekijk de kwaliteit van ons vakmanschap in uitgevoerde projecten"
      :buttons="heroButtons"
    />

    <!-- Main Content Section -->
    <div class="app-projects-page__container">
      <div class="app-projects-page__content">

        <!-- Projects Grid -->
        <div class="app-projects-page__grid">

          <!-- Project 1: Luxe Villa Renovatie -->
          <BaseCard
            variant="primary"
            size="large"
            :hoverable="true"
            class="app-projects-page__project-card"
          >
            <div class="app-projects-page__project-image-container">
              <img src="/images/visual.jpg" alt="Luxe villa renovatie" class="app-projects-page__project-image"/>
              <div class="app-projects-page__project-overlay">
                <span class="app-projects-page__project-status">Voltooid 2024</span>
              </div>
            </div>

            <div class="app-projects-page__project-content">
              <h3 class="base-card__title">Luxe Villa Renovatie</h3>
              <p class="base-card__text">
                Complete renovatie van een luxe villa inclusief hoogwaardig binnen- en buitenstukwerk.
                Speciale aandacht voor detail en afwerking van alle muren en plafonds.
              </p>
              <div class="app-projects-page__project-details">
                <span class="app-projects-page__project-tag">Renovatie</span>
                <span class="app-projects-page__project-tag">Binnenstukwerk</span>
                <span class="app-projects-page__project-tag">Gevelwerk</span>
              </div>
            </div>
          </BaseCard>

          <!-- Project 2: Modern Kantoorgebouw -->
          <BaseCard
            variant="secondary"
            size="large"
            :hoverable="true"
            class="app-projects-page__project-card"
          >
            <div class="app-projects-page__project-image-container">
              <img src="/images/project-office.jpg" alt="Modern kantoorgebouw" class="app-projects-page__project-image"/>
              <div class="app-projects-page__project-overlay">
                <span class="app-projects-page__project-status">Voltooid 2024</span>
              </div>
            </div>

            <div class="app-projects-page__project-content">
              <h3 class="base-card__title">Modern Kantoorgebouw</h3>
              <p class="base-card__text">
                Stukwerk en professionele afwerking van een modern kantoorgebouw.
                Gladde wandafwerkingen en duurzame gevelbehandeling voor optimale uitstraling.
              </p>
              <div class="app-projects-page__project-details">
                <span class="app-projects-page__project-tag">Commercieel</span>
                <span class="app-projects-page__project-tag">Moderne Afwerking</span>
                <span class="app-projects-page__project-tag">Gevelwerk</span>
              </div>
            </div>
          </BaseCard>

          <!-- Project 3: Nieuwbouw Woning -->
          <BaseCard
            variant="primary"
            size="large"
            :hoverable="true"
            class="app-projects-page__project-card"
          >
            <div class="app-projects-page__project-image-container">
              <img src="/images/project-newbuild.jpg" alt="Nieuwbouw woning" class="app-projects-page__project-image"/>
              <div class="app-projects-page__project-overlay">
                <span class="app-projects-page__project-status">Voltooid 2023</span>
              </div>
            </div>

            <div class="app-projects-page__project-content">
              <h3 class="base-card__title">Nieuwbouw Eengezinswoning</h3>
              <p class="base-card__text">
                Complete stukwerkzaamheden voor nieuwbouw eengezinswoning. Van basis stukwerk
                tot speciale decoratieve afwerkingen volgens de wensen van de opdrachtgever.
              </p>
              <div class="app-projects-page__project-details">
                <span class="app-projects-page__project-tag">Nieuwbouw</span>
                <span class="app-projects-page__project-tag">Decoratief</span>
                <span class="app-projects-page__project-tag">Maatwerk</span>
              </div>
            </div>
          </BaseCard>

          <!-- Project 4: Appartementencomplex -->
          <BaseCard
            variant="primary"
            size="large"
            :hoverable="true"
            class="app-projects-page__project-card"
          >
            <div class="app-projects-page__project-image-container">
              <img src="/images/project-apartments.jpg" alt="Appartementencomplex" class="app-projects-page__project-image"/>
              <div class="app-projects-page__project-overlay">
                <span class="app-projects-page__project-status">Voltooid 2023</span>
              </div>
            </div>

            <div class="app-projects-page__project-content">
              <h3 class="base-card__title">Appartementen complex</h3>
              <p class="base-card__text">
                Grootschalig project voor een appartementencomplex met 24 wooneenheden.
                Efficiënte uitvoering zonder concessies aan kwaliteit en afwerking.
              </p>
              <div class="app-projects-page__project-details">
                <span class="app-projects-page__project-tag">Grootschalig</span>
                <span class="app-projects-page__project-tag">Woningbouw</span>
                <span class="app-projects-page__project-tag">Renovatie</span>
              </div>
            </div>
          </BaseCard>

          <!-- Project 5: Historische Restauratie -->
          <BaseCard
            variant="secondary"
            size="large"
            :hoverable="true"
            class="app-projects-page__project-card"
          >
            <div class="app-projects-page__project-image-container">
              <img src="/images/project-historic.jpg" alt="Historische restauratie" class="app-projects-page__project-image"/>
              <div class="app-projects-page__project-overlay">
                <span class="app-projects-page__project-status">Voltooid 2022</span>
              </div>
            </div>

            <div class="app-projects-page__project-content">
              <h3 class="base-card__title">Monumentale Restauratie</h3>
              <p class="base-card__text">
                Zorgvuldige restauratie van een monumentaal pand met behoud van originele details.
                Specialistische technieken toegepast voor authentieke afwerking.
              </p>
              <div class="app-projects-page__project-details">
                <span class="app-projects-page__project-tag">Monumentaal</span>
                <span class="app-projects-page__project-tag">Restauratie</span>
                <span class="app-projects-page__project-tag">Specialistisch</span>
              </div>
            </div>
          </BaseCard>

          <!-- Project 6: Winkelcentrum -->
          <BaseCard
            variant="primary"
            size="large"
            :hoverable="true"
            class="app-projects-page__project-card"
          >
            <div class="app-projects-page__project-image-container">
              <img src="/images/project-retail.jpg" alt="Winkelcentrum renovatie" class="app-projects-page__project-image"/>
              <div class="app-projects-page__project-overlay">
                <span class="app-projects-page__project-status">Voltooid 2022</span>
              </div>
            </div>

            <div class="app-projects-page__project-content">
              <h3 class="base-card__title">Winkelcentrum Renovatie</h3>
              <p class="base-card__text">
                Renovatie van winkelcentrum inclusief gevelwerk en binnenwanden.
                Project uitgevoerd tijdens openingstijden met minimale overlast voor bezoekers.
              </p>
              <div class="app-projects-page__project-details">
                <span class="app-projects-page__project-tag">Retail</span>
                <span class="app-projects-page__project-tag">Complexe Planning</span>
                <span class="app-projects-page__project-tag">Renovatie</span>
              </div>
            </div>
          </BaseCard>

        </div>

        <!-- Call to Action -->
        <BaseCard
          variant="primary"
          size="large"
          :hoverable="false"
          class="app-projects-page__cta-card"
        >
          <div class="app-projects-page__cta-content">
            <h2 class="base-card__title">Heeft u een project in gedachten?</h2>
            <p class="base-card__text">
              Van kleine renovaties tot grootschalige nieuwbouwprojecten - wij hebben de ervaring
              en expertise om uw project tot een succes te maken. Neem contact met ons op voor
              een vrijblijvende offerte.
            </p>
            <div class="app-projects-page__cta-buttons">
              <router-link
                to="/contact"
                class="app-projects-page__cta-button app-projects-page__cta-button--primary"
              >
                Offerte Aanvragen
              </router-link>
              <router-link
                to="/over-ons"
                class="app-projects-page__cta-button app-projects-page__cta-button--secondary"
              >
                Over ons
              </router-link>
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
  name: 'Projects',
  components: {
    Hero,
    BaseCard
  },
  data() {
    return {
      heroButtons: [
        {
          text: 'Over ons',
          to: '/over-ons',
          type: 'primary'
        },
        {
          text: 'Vraag Offerte Aan',
          to: '/contact',
          type: 'secondary'
        }
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.app-projects-page {
  position: relative;
  overflow: hidden;
}

.app-projects-page::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background:
    radial-gradient(ellipse at 15% 15%, rgba(139, 23, 37, 0.04) 0%, transparent 40%),
    radial-gradient(ellipse at 85% 25%, rgba(239, 68, 68, 0.03) 0%, transparent 40%),
    radial-gradient(ellipse at 25% 85%, rgba(139, 23, 37, 0.03) 0%, transparent 40%);
  animation: float 30s ease-in-out infinite;
  pointer-events: none;
  z-index: 0;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(-1%, -0.5%) rotate(0.3deg); }
  66% { transform: translate(0.5%, -1%) rotate(-0.3deg); }
}

/* Main Content */
.app-projects-page__container {
  position: relative;
  z-index: 1;
  max-width: 1600px;
  margin: 0 auto;
  padding: 1.5rem;
}

.app-projects-page__content {
  padding: 3rem 0;
}

/* Projects Grid */
.app-projects-page__grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  gap: 3rem;
  margin-bottom: 4rem;
}

/* Project Cards */
.app-projects-page__project-card {
  height: 100%;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.app-projects-page__project-card:hover {
  transform: translateY(-8px);
}

.app-projects-page__project-image-container {
  position: relative;
  margin-bottom: 1.5rem;
}

.app-projects-page__project-image {
  width: 100%;
  height: 250px;
  object-fit: cover;
  border-radius: 0.75rem;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.app-projects-page__project-overlay {
  position: absolute;
  top: 1rem;
  right: 1rem;
}

.app-projects-page__project-status {
  background: rgba(139, 23, 37, 0.9);
  color: white;
  padding: 0.5rem 1rem;
  border-radius: 2rem;
  font-size: 0.875rem;
  font-weight: 600;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

.app-projects-page__project-content {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.app-projects-page__project-details {
  margin-top: auto;
  padding-top: 1.5rem;
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.app-projects-page__project-tag {
  background: rgba(255, 255, 255, 0.2);
  color: white;
  padding: 0.25rem 0.75rem;
  border-radius: 1rem;
  font-size: 0.75rem;
  font-weight: 500;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

/* Call to Action */
.app-projects-page__cta-card {
  margin-top: 2rem;
}

.app-projects-page__cta-content {
  text-align: center;
}

.app-projects-page__cta-buttons {
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin-top: 2rem;
}

.app-projects-page__cta-button {
  padding: 0.875rem 2rem;
  border-radius: 0.5rem;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-block;
}

.app-projects-page__cta-button--primary {
  background: #ffffff;
  color: #8b1725;
  border: 2px solid #ffffff;
}

.app-projects-page__cta-button--primary:hover {
  background: transparent;
  color: #ffffff;
  transform: translateY(-2px);
}

.app-projects-page__cta-button--secondary {
  background: transparent;
  color: #ffffff;
  border: 2px solid #ffffff;
}

.app-projects-page__cta-button--secondary:hover {
  background: #ffffff;
  color: #8b1725;
  transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 1024px) {
  .app-projects-page__grid {
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
  }
}

@media (max-width: 768px) {
  .app-projects-page__container {
    padding: 1rem;
  }

  .app-projects-page__content {
    padding: 2rem 0;
  }

  .app-projects-page__grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }

  .app-projects-page__project-image {
    height: 200px;
  }

  .app-projects-page__cta-buttons {
    flex-direction: column;
    align-items: center;
  }

  .app-projects-page__cta-button {
    width: 100%;
    max-width: 300px;
    text-align: center;
  }
}

@media (max-width: 480px) {
  .app-projects-page__container {
    padding: 0.75rem;
  }

  .app-projects-page__content {
    padding: 1rem 0;
  }

  .app-projects-page__grid {
    gap: 1rem;
  }
}
</style>
