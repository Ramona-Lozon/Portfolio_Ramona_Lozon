<template>
  <section id="my-work">
    <div class="title-con">
      <h3 class="text title-text">My Work</h3>
    </div>

    <div v-if="loading" class="loading text body-text">
      <p>Loading case files...</p>
    </div>

    <div v-else-if="error" class="error text body-text">
      <p>Error: {{ error }}</p>
    </div>

    <div v-else class="case-files-container">
      <a :href="`/case-file/${caseFile.id}`" 
        v-for="caseFile in caseFiles" 
        :key="caseFile.id"
        class="case-file-slug breakpoint-con fade-item"
      >
        <div class="breakpoint-group">
          <h3 class="text subtitle-text">
            {{ caseFile.project }}
          </h3>
          <p class="text body-text">
            {{ caseFile.proposition }}
          </p>
        </div>

        <div class="breakpoint-item">
          <!-- NEW: srcset/sizes let the browser pick mobile/tablet/desktop itself -->
          <img 
            v-if="caseFile.media && caseFile.media.Hero"
            class="work-image" 
            :src="imgVariant(caseFile.media.Hero, 'desktop')"
            :srcset="imgSrcset(caseFile.media.Hero)"
            sizes="(min-width: 768px) 40vw, 80vw"
            loading="lazy"
            decoding="async"
            :alt="`${caseFile.project} hero image`"
            @load="refreshTriggers"
            @error="useOriginal($event, caseFile.media.Hero)"
          >
          <img 
            v-else
            class="work-image" 
            src="../../../public/images/placeholder-images-01.jpg"
            alt="placeholder image"
            loading="lazy"
          >
        </div>
      </a>
    </div>
  </section>
</template>


<script>
import { defineComponent } from 'vue';
import { fadeIn } from '../modules/fadeIn'; // adjust the path

// NEW: widths must match the actual pixel widths you export each version at
const IMAGE_SIZES = {
  mobile: 300,
  tablet: 1000,
  desktop: 1300,
};

export default defineComponent({
  name: 'CaseFileList',
  data() {
    return {
      caseFiles: [],
      loading: true,
      error: null,
      gsapCtx: null,
      refreshTimer: null, // NEW
    };
  },
async mounted() {
  await this.fetchCaseFiles();
  await this.$nextTick();
  this.gsapCtx = fadeIn(this.$el, '.fade-item');
  ScrollTrigger.refresh(); // recalculates every trigger, including the static ones below #app
},
  beforeUnmount() {
    this.gsapCtx?.revert(); // kills the triggers when the component goes away
    clearTimeout(this.refreshTimer); // NEW
  },
  methods: {
    // NEW: "earbuds-hero.jpg" + "mobile" -> "/images/earbuds-hero-mobile.jpg"
    imgVariant(file, size) {
      const dot = file.lastIndexOf('.');
      return `/images/${file.slice(0, dot)}-${size}${file.slice(dot)}`;
    },

    // NEW: builds "…-mobile.jpg 640w, …-tablet.jpg 1024w, …-desktop.jpg 1600w"
    imgSrcset(file) {
      return Object.entries(IMAGE_SIZES)
        .map(([size, width]) => `${this.imgVariant(file, size)} ${width}w`)
        .join(', ');
    },

    // NEW: if a resized version doesn't exist yet, fall back to the original file
    useOriginal(event, file) {
      const img = event.target;
      if (img.dataset.fallback) return; // only try once, avoids an error loop
      img.dataset.fallback = 'true';
      img.removeAttribute('srcset');
      img.src = `/images/${file}`;
    },

    // NEW: lazy images change the page height as they load, which throws off
    // ScrollTrigger's positions for everything below. Recalculate once they settle.
    refreshTriggers() {
      clearTimeout(this.refreshTimer);
      this.refreshTimer = setTimeout(() => ScrollTrigger.refresh(), 150);
    },

async fetchCaseFiles() {
  console.log('fetch starting');
  try {
    this.loading = true;
    const response = await fetch('/case-files');
    console.log('response', response.status);
    const data = await response.json();
    console.log('data', data);
    this.caseFiles = data.data;
    this.error = null;
  } catch (error) {
    console.error('fetch failed', error);
    this.error = error.message;
  } finally {
    this.loading = false;
    console.log('loading is now', this.loading);
  }
},
  },
});
</script>