<template>
  <nav class="navbar">
    <ul class="navbar-list">
      <li v-for="tab in tabs" :key="tab" class="navbar-item">
        <button 
          class="navbar-link" 
          :class="{ active: currentTab === tab.toLowerCase() }"
          @click="$emit('change-tab', tab.toLowerCase())"
        >
          {{ tab }}
        </button>
      </li>
    </ul>
  </nav>
</template>

<script setup>
defineProps({
  currentTab: String
});

const tabs = ['About', 'Resume', 'Portfolio','Download CV', 'Contact'];
</script>