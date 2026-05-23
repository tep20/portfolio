<template>
  <aside class="sidebar" :class="{ active: isSidebarActive }">
    <div class="sidebar-info-wrapper">
      <figure class="avatar-box">
        <img src="/storage/images/profile 1.jpeg" alt="Tito Esha Praditya" width="150">
      </figure>

      <div class="info-content">
        <h1 class="name" title="Tito Esha Praditya">Tito Esha Praditya</h1>
        <p class="title">Web Developer</p>
      </div>

      <button class="info-more-btn" @click="toggleSidebar">
        <span>{{ isSidebarActive ? 'Hide Contacts' : 'Show Contacts' }}</span>
        <ion-icon :name="isSidebarActive ? 'chevron-up' : 'chevron-down'"></ion-icon>
      </button>
    </div>

    <div class="sidebar-info-more">
      <div class="separator"></div>
      <ul class="contacts-list">
        <li class="contact-item">
          <div class="icon-box"><ion-icon name="mail-outline"></ion-icon></div>
          <div class="contact-info">
            <p class="contact-title">Email</p>
            <a href="mailto:titoesha2@gmail.com" class="contact-link">titoesha2@gmail.com</a>
          </div>
        </li>
        
        <li class="contact-item">
          <div class="icon-box"><ion-icon name="logo-whatsapp"></ion-icon></div>
          <div class="contact-info">
            <p class="contact-title">Whatsapp</p>
            <a href="https://wa.me/628129577446" target="_blank" class="contact-link">08129577446</a>
          </div>
        </li>

        <li class="contact-item">
          <div class="icon-box"><ion-icon name="location-outline"></ion-icon></div>
          <div class="contact-info">
            <p class="contact-title">Location</p>
            <address>Cirendeu, Tangerang Selatan</address>
          </div>
        </li>
      </ul>
      
      <div class="separator"></div>
      
      <ul class="social-list">
        <li class="social-item">
          <a href="https://facebook.com/tito esha praditya" target="_blank" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>
        <li class="social-item">
          <a href="https://twitter.com/titoesha" target="_blank" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>
        <li class="social-item">
          <a href="https://instagram.com/titoeshaa" target="_blank" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script setup>
import { ref } from 'vue';
const isSidebarActive = ref(false);
const toggleSidebar = () => {
  isSidebarActive.value = !isSidebarActive.value;
};
</script>