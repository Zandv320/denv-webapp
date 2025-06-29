<template>
  <section class="hero">
    <div class="hero__image">
      <img :src="imageSrc" :alt="imageAlt" class="hero__img">
      <div class="hero__overlay">
        <div class="hero__content">
          <h1 class="hero__title">{{ title }}</h1>
          <p class="hero__subtitle">{{ subtitle }}</p>
          <div class="hero__buttons" v-if="buttons && buttons.length">
            <router-link
              v-for="button in buttons"
              :key="button.text"
              :to="button.to"
              :class="['hero__button', `hero__button--${button.type}`]"
            >
              {{ button.text }}
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Hero',
  props: {
    title: {
      type: String,
      required: true
    },
    subtitle: {
      type: String,
      required: true
    },
    imageSrc: {
      type: String,
      required: true
    },
    imageAlt: {
      type: String,
      required: true
    },
    buttons: {
      type: Array,
      default: () => []
    }
  }
}
</script>

<style scoped>
.hero {
  position: relative;
  height: 50vh;
  min-height: 500px;
  overflow: hidden;
}

.hero__image {
  position: relative;
  width: 100%;
  height: 100%;
}

.hero__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.hero__overlay {
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

.hero__content {
  text-align: center;
  color: white;
  max-width: 800px;
  padding: 0 2rem;
}

.hero__title {
  font-size: 3.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  line-height: 1.2;
}

.hero__subtitle {
  font-size: 1.5rem;
  margin-bottom: 2rem;
  opacity: 0.95;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.hero__buttons {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
}

.hero__button {
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

.hero__button--primary {
  background-color: #85000f;
  color: white;
  border: 2px solid #85000f;
}

.hero__button--primary:hover {
  background-color: #a5001f;
  border-color: #a5001f;
  box-shadow: 0 4px 12px rgba(133, 0, 15, 0.3);
}

.hero__button--secondary {
  background-color: transparent;
  color: white;
  border: 2px solid white;
}

.hero__button--secondary:hover {
  background-color: white;
  color: #85000f;
  box-shadow: 0 4px 12px rgba(255, 255, 255, 0.3);
}

/* Responsive Design */
@media (max-width: 768px) {
  .hero {
    height: 60vh;
    min-height: 400px;
  }

  .hero__title {
    font-size: 2.5rem;
  }

  .hero__subtitle {
    font-size: 1.2rem;
  }

  .hero__content {
    padding: 0 1rem;
  }

  .hero__buttons {
    flex-direction: column;
    align-items: center;
  }
}

@media (max-width: 480px) {
  .hero__title {
    font-size: 2rem;
  }

  .hero__subtitle {
    font-size: 1rem;
  }

  .hero__button {
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    min-width: 150px;
  }
}
</style>
