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
          <img 
            v-if="caseFile.media && caseFile.media.Hero"
            class="work-image" 
            :src="`/images/${caseFile.media.Hero}`"
            :alt="`${caseFile.project} hero image`"
          >
          <img 
            v-else
            class="work-image" 
            src="../public/images/placeholder-images-01.jpg"
            alt="placeholder image"
          >
        </div>
      </a>
    </div>
  </section>
</template>


<script>
import { defineComponent } from 'vue';
import { fadeIn } from '../modules/fadeIn'; // adjust the path

export default defineComponent({
  name: 'CaseFileList',
  data() {
    return {
      caseFiles: [],
      loading: true,
      error: null,
      gsapCtx: null,
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
  },
  methods: {
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

<!-- 
<script>
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'CaseFileList',
  data() {
    return {
      caseFiles: [],
      loading: true,
      error: null,
    };
  },
  mounted() {
    this.fetchCaseFiles();
  },
  methods: {
    async fetchCaseFiles() {
      try {
        this.loading = true;
        const response = await fetch('/case-files');

        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();
        this.caseFiles = data.data;
        this.error = null;
      } catch (error) {
        this.error = error.message;
        console.error('Error fetching case files:', error);
      } finally {
        this.loading = false;
      }
    },
  },
});
</script> -->