<template>
  <div
    :class="cardClasses"
    class="base-card"
  >
    <div v-if="$slots.header" class="base-card__header">
      <slot name="header"></slot>
    </div>

    <div class="base-card__content">
      <slot></slot>
    </div>

    <div v-if="$slots.footer" class="base-card__footer">
      <slot name="footer"></slot>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BaseCard',
  props: {
    variant: {
      type: String,
      default: 'primary',
      validator: (value) => ['primary', 'secondary', 'accent', 'white', 'transparent'].includes(value)
    },
    size: {
      type: String,
      default: 'medium',
      validator: (value) => ['small', 'medium', 'large'].includes(value)
    },
    hoverable: {
      type: Boolean,
      default: true
    },
    shadow: {
      type: String,
      default: 'medium',
      validator: (value) => ['none', 'small', 'medium', 'large'].includes(value)
    },
    rounded: {
      type: String,
      default: 'medium',
      validator: (value) => ['none', 'small', 'medium', 'large', 'full'].includes(value)
    }
  },
  computed: {
    cardClasses() {
      return [
        `base-card--${this.variant}`,
        `base-card--${this.size}`,
        `base-card--shadow-${this.shadow}`,
        `base-card--rounded-${this.rounded}`,
        {
          'base-card--hoverable': this.hoverable
        }
      ]
    }
  }
}
</script>

<style lang="scss">
/* Base Card Styles */
.base-card {
  display: flex;
  flex-direction: column;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  overflow: hidden;
  position: relative;
}

/* Variants with More Visible Gradients */
.base-card--primary {
  background: linear-gradient(135deg, #8b1725 0%, #a31c29 50%, #5f0611 100%);
  color: #ffffff;
}

.base-card--secondary {
  background: linear-gradient(135deg, #1f2937 0%, #374151 50%, #1f2937 100%);
  color: #f9fafb;
}

.base-card--accent {
  background: linear-gradient(135deg, #ef4444 0%, #f87171 50%, #ef4444 100%);
  color: #ffffff;
}

.base-card--white {
  background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 50%, #ffffff 100%);
  color: #1f2937;
  border: 1px solid #e5e7eb;
}

.base-card--transparent {
  background: transparent;
  color: inherit;
}

/* Sizes */
.base-card--small {
  padding: 1rem;
}

.base-card--medium {
  padding: 1.5rem;
}

.base-card--large {
  padding: 2rem;
}

/* Shadows */
.base-card--shadow-none {
  box-shadow: none;
}

.base-card--shadow-small {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.base-card--shadow-medium {
  box-shadow: 0 10px 30px rgba(139, 23, 37, 0.4), 0 4px 15px rgba(0, 0, 0, 0.4);
}

.base-card--shadow-large {
  box-shadow: 0 20px 40px rgba(139, 23, 37, 0.5), 0 8px 25px rgba(0, 0, 0, 0.5);
}

/* Rounded Corners */
.base-card--rounded-none {
  border-radius: 0;
}

.base-card--rounded-small {
  border-radius: 0.25rem;
}

.base-card--rounded-medium {
  border-radius: 0.5rem;
}

.base-card--rounded-large {
  border-radius: 1rem;
}

.base-card--rounded-full {
  border-radius: 9999px;
}

/* Hover Effects */
.base-card--hoverable:hover {
  transform: scale(1.02);
}

.base-card--primary.base-card--hoverable:hover {
  background: linear-gradient(135deg, #a8202f 0%, #c92a3a 50%, #a8202f 100%);
  box-shadow: 0 15px 40px rgba(139, 23, 37, 0.5), 0 8px 25px rgba(0, 0, 0, 0.5);
}

.base-card--secondary.base-card--hoverable:hover {
  background: linear-gradient(135deg, #374151 0%, #4b5563 50%, #374151 100%);
  box-shadow: 0 15px 40px rgba(31, 41, 55, 0.5), 0 8px 25px rgba(0, 0, 0, 0.5);
}

.base-card--accent.base-card--hoverable:hover {
  background: linear-gradient(135deg, #f87171 0%, #fca5a5 50%, #f87171 100%);
  box-shadow: 0 15px 40px rgba(239, 68, 68, 0.5), 0 8px 25px rgba(0, 0, 0, 0.5);
}

.base-card--white.base-card--hoverable:hover {
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #f8fafc 100%);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15), 0 8px 25px rgba(0, 0, 0, 0.1);
}

/* Card Sections */
.base-card__header {
  margin-bottom: 1rem;
}

.base-card__content {
  flex: 1;
}

.base-card__footer {
  margin-top: 1rem;
  padding-top: 1rem;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.base-card--white .base-card__footer {
  border-top-color: rgba(0, 0, 0, 0.1);
}

/* Text Styles for Different Variants */
.base-card--primary .base-card__title,
.base-card--secondary .base-card__title,
.base-card--accent .base-card__title {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.base-card--primary .base-card__text,
.base-card--secondary .base-card__text,
.base-card--accent .base-card__text {
  color: #f3f4f6;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, );
}

/* Responsive Design */
@media (max-width: 768px) {
  .base-card--large {
    padding: 1.5rem;
  }

  .base-card--medium {
    padding: 1rem;
  }

  .base-card--small {
    padding: 0.75rem;
  }
}
</style>
