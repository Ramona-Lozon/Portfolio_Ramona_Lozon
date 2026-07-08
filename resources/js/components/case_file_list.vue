<template>
  <section id="my-work">
    <div class="title-con">
      <h3 class="text title-text fadeIn">My Work</h3>
    </div>

    <div v-if="loading" class="loading">
      <p>Loading case files...</p>
    </div>

    <div v-else-if="error" class="error">
      <p>Error: {{ error }}</p>
    </div>

    <div v-else class="case-files-container">
      <article 
        v-for="caseFile in caseFiles" 
        :key="caseFile.id"
        class="case-file-slug breakpoint-con fadeIn"
      >
        <div class="breakpoint-group">
          <h3 class="text subtitle-text">
            {{ caseFile.project }}
          </h3>
          <p class="text body-text">
            {{ caseFile.proposition }}
          </p>
          <router-link 
            :to="`/case-file/${caseFile.id}`" 
            class="button case-file-link"
          >
            View Details
          </router-link>
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
      </article>
    </div>
  </section>
</template>

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
        const response = await fetch('/api/case-files');

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
</script>

<style scoped>
.case-files-container {
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.loading,
.error {
  text-align: center;
  padding: 40px;
}

.error {
  color: #d32f2f;
}

.case-file-link {
  margin-top: 15px;
  display: inline-block;
}
</style>