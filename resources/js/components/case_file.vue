<template>
  <section id="case-file-section">
    <h3 class="hidden">Case file Section</h3>

    <div v-if="loading" class="loading">
      <p>Loading Case File...</p>
    </div>

    <div v-else-if="error" class="error">
      <p>Error: {{ error }}</p>
    </div>

    <div v-else>
      <!-- Title -->
      <div>
        <h3 class="text main-title fadeIn" id="cf-main-title">
          {{ caseFile.project }}
        </h3>
      </div>

      <!-- Proposition -->
      <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-prop">
          {{ caseFile.proposition }}
        </p>
      </div>

      <!-- Proposition Image -->
      <div v-if="media && media.prop_ex" class="case-file-image fadeIn" id="cf-prop-ex">
        <img :src="`/images/${media.prop_ex}`" :alt="`${caseFile.project} proposition`">
      </div>

      <div v-if="media && media.prop_caption" class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-prop-caption">
          {{ media.prop_caption }}
        </p>
      </div>

      <!-- Deliverables -->
      <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-deliverables">
          {{ caseFile.deliverables }}
        </p>
      </div>

      <!-- Work Image -->
      <div v-if="media && media.work_ex" class="case-file-image fadeIn" id="cf-work-ex">
        <img :src="`/images/${media.work_ex}`" :alt="`${caseFile.project} work`">
      </div>

      <div v-if="media && media.work_caption" class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-work-caption">
          {{ media.work_caption }}
        </p>
      </div>

      <!-- Product/Video -->
      <div v-if="media && media.product_ex" class="case-file-image fadeIn" id="cf-media-image">
        <div id="player-container">
          <video 
            v-if="isVideo(media.product_ex)"
            muted 
            class="video-player" 
            controls 
            preload="metadata" 
            poster="../public/images/logo.svg" 
            id="video"
          >
            <source :src="`/video/${media.product_ex}`" type="video/mp4">
            <p>Your browser does not support the video tag.</p>
          </video>
          <img 
            v-else
            :src="`/images/${media.product_ex}`" 
            :alt="`${caseFile.project} product`"
          >
        </div>
      </div>

      <div v-if="media && media.product_caption" class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-prod-caption">
          {{ media.product_caption }}
        </p>
      </div>

      <!-- Outcome -->
      <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-outcome">
          {{ caseFile.outcome }}
        </p>
      </div>

      <!-- Back Button -->
      <div class="case-file-text-con fadeIn">
        <router-link to="/home" class="button">Back to Work</router-link>
      </div>
    </div>
  </section>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'CaseFile',
  props: {
    id: {
      type: [String, Number],
      required: true,
    },
  },
  data() {
    return {
      caseFile: {},
      media: null,
      loading: true,
      error: null,
    };
  },
  mounted() {
    this.fetchCaseFile();
  },
  methods: {
    async fetchCaseFile() {
      try {
        this.loading = true;
        const response = await fetch(`/api/case-files/${this.id}`);

        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();
        this.caseFile = data.data;
        this.media = data.data.media;
        this.error = null;
      } catch (error) {
        this.error = error.message;
        console.error('Error fetching case file:', error);
      } finally {
        this.loading = false;
      }
    },

    isVideo(filename) {
      return /\.(mp4|webm|ogg)$/i.test(filename);
    },
  },
});
</script>

<style scoped>
#case-file-section {
  padding: 40px 20px;
}

.loading,
.error {
  text-align: center;
  padding: 40px;
}

.error {
  color: #d32f2f;
  background-color: #ffebee;
  border-radius: 4px;
  padding: 20px;
}

.case-file-text-con {
  margin: 30px 0;
}

.case-file-image {
  margin: 30px 0;
  border-radius: 8px;
  overflow: hidden;
}

.case-file-image img,
.case-file-image video {
  width: 100%;
  height: auto;
  display: block;
}

#player-container {
  position: relative;
  width: 100%;
  background: #000;
}
</style>