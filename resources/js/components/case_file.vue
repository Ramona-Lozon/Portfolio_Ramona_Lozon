
<template>

    <section id="case-file-section">
    
    <h3 class="hidden">Case file Section</h3>

    <div v-if="loading" class="loading">
        <p>Loading Case File...</p>
    </div>

    <div v-else-if="error" class="error">
        <p>Error: {{ error }}</p>
    </div>

    <div>
        <h3 class="text main-title fadeIn" id="cf-main-title">
            {{ caseFile.project }}
        </h3>
    </div>
    
    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-prop">
            {{ caseFile.proposition }}
        </p>
    </div>

    <div class="case-file-image fadeIn" id="cf-prop-ex">
        <img src="{{ media.prop_ex }}" alt="proposition image">
    </div>

    <div class="case-file-text-con fadeIn">
        <div class="text info_text case-file-text" id="cf-prop-caption">
            {{ media.prop_caption }}
    </div>
    </div>
    
    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-deliverables">
            {{ caseFile.deliverables }}
        </p>
    </div>

    <div class="case-file-image fadeIn" id="cf-work-ex">
        <img src="{{ media.work_ex }}" alt="work image">
    </div>

    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-work-caption">
            {{ media.work_caption }}
        </p>
    </div>

<div class="case-file-image fadeIn" id="cf-media-image">
        <div id="player-container">
            <video muted class="video-player" controls preload="metadata" poster="images/logo.svg" id="video">
                <source src="video/<?= $product_ex ?>" type="video/mp4">
                <p>Your browser does not support the video tag.</p>
            </video>
        <div class="video-controls hidden" id="video-controls">
            <button id="play-button" class="play-button"><i class="fa fa-play-circle-o video-button"></i></button>
            <button id="pause-button" class="pause-button"><i class="fa fa-pause-circle-o video-button"></i></button>
            <button id="stop-button" class="stop-button"><i class="fa fa-stop-circle-o video-button"></i></button>
            <i class="fa fa-volume-up"></i>
            <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">
            <button id="full-screen"><i class="fa fa-arrows-alt"></i></button>
        </div>
        </div>
</div>

    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-prod-caption">
            {{ media.product_caption}}
        </p>
    </div>

    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-outcome">
            {{ caseFile.outcome }}
        </p>
    </div>
    </section>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'CaseFile',
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
        const response = await fetch('/api/case-file');
        
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        this.caseFiles = data.data; // Adjust based on your API response structure
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
</script>