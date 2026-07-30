<template>
hjyu  <main>
    <Sidebar />

    <div class="main-content">
      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <button class="navbar-link" :class="{ active: activePage === 'about' }" @click="setActivePage('about')">About</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" :class="{ active: activePage === 'resume' }" @click="setActivePage('resume')">Resume</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" :class="{ active: activePage === 'portfolio' }" @click="setActivePage('portfolio')">Portfolio</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" :class="{ active: activePage === 'download cv' }" @click="setActivePage('download cv')">Download CV</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" :class="{ active: activePage === 'contact' }" @click="setActivePage('contact')">Contact</button>
          </li>
        </ul>
      </nav>

      <article class="about" :class="{ active: activePage === 'about' }">
        <header><h2 class="h2 article-title">About me</h2></header>
        <section class="about-text">
          <p>Saya seorang mahasiswa Sistem Informasi di Universitas Pamulang yang fokus mengembangkan karier profesional di bidang teknologi, khususnya pengembangan web, rekayasa perangkat lunak, dan analisis data.</p>
          <p>Mengombinasikan pemahaman logika sistem dan pemecahan masalah secara terstruktur, saya berdedikasi membangun solusi digital yang fungsional, efisien, dan berdampak positif bagi operasional bisnis.</p>
        </section>

        <section class="service">
          <h3 class="h3 service-title">Keahlian</h3>
          <ul class="service-list">
            <li class="service-item">
              <div class="service-icon-box">
                <img src="/storage/images/icon-coding.png" alt="icon" width="60">
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web Development</h4>
                <p class="service-item-text">Pengembangan arsitektur web modern yang andal menggunakan ekosistem PHP framework Laravel.</p>
              </div>
            </li>
            <li class="service-item">
              <div class="service-icon-box">
                <img src="/storage/images/scrapping.png" alt="icon" width="60">
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Data Analysis & Scraping</h4>
                <p class="service-item-text">Ekstraksi informasi otomatis dari web, pembersihan data, serta penyusunan analisis teknis yang terstruktur.</p>
              </div>
            </li>
          </ul>
        </section>
      </article>

      <article class="resume" :class="{ active: activePage === 'resume' }">
        <header><h2 class="h2 article-title">Resume</h2></header>
        <section class="timeline">
          <div class="title-wrapper">
            <div class="icon-box"><ion-icon name="book-outline"></ion-icon></div>
            <h3 class="h3">Education</h3>
          </div>
          <ol class="timeline-list">
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Universitas Pamulang</h4>
              <span>Present</span>
              <p class="timeline-text">Mempelajari manajemen basis data, analisis sistem, algoritma pemrograman, dan tata kelola infrastruktur teknologi informasi bisnis.</p>
            </li>
          </ol>
        </section>

        <section class="timeline">
          <div class="title-wrapper">
            <div class="icon-box"><ion-icon name="briefcase-outline"></ion-icon></div>
            <h3 class="h3">Experience</h3>
          </div>
          <ol class="timeline-list">
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Independent Tech Exploration & Development</h4>
              <span>2024 - Present</span>
              <p class="timeline-text">Membangun bot perdagangan otomatis berbasis API, merancang skrip penarikan data menggunakan Python, serta mengimplementasikan antarmuka UI/UX lewat Figma.</p>
            </li>
          </ol>
        </section>

        <section class="skill">
          <h3 class="h3 skills-title">My Skills</h3>
          <ul class="skills-list content-card">
            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">Web Development</h5>
                <data value="90">90%</data>
              </div>
              <div class="skills-progress-bg"><div class="skills-progress-fill" style="width: 90%;"></div></div>
            </li>
            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">Data Analysis & Scraping</h5>
                <data value="70">70%</data>
              </div>
              <div class="skills-progress-bg"><div class="skills-progress-fill" style="width: 70%;"></div></div>
            </li>
          </ul>
        </section>
      </article>

      <article class="portfolio" :class="{ active: activePage === 'portfolio' }">
        <header><h2 class="h2 article-title">Portfolio</h2></header>
        <section class="projects">
          <ul class="filter-list">
            <li v-for="cat in categories" :key="cat" class="filter-item">
              <button :class="{ active: activeCategory === cat }" @click="activeCategory = cat">
                {{ cat }}
              </button>
            </li>
          </ul>

          <div class="filter-select-box">
            <button class="filter-select" :class="{ active: isSelectDropdownActive }" @click="isSelectDropdownActive = !isSelectDropdownActive">
              <div class="select-value">{{ activeCategory }}</div>
              <div class="select-icon"><ion-icon name="chevron-down"></ion-icon></div>
            </button>
            <ul class="select-list">
              <li v-for="cat in categories" :key="cat" class="select-item">
                <button @click="activeCategory = cat; isSelectDropdownActive = false;">{{ cat }}</button>
              </li>
            </ul>
          </div>

          <ul class="project-list">
            <li v-for="project in filteredProjects" :key="project.title" class="project-item active">
              <a href="#">
                <figure class="project-img">
                  <div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div>
                  <img :src="project.image" :alt="project.title" loading="lazy">
                </figure>
                <h3 class="project-title">{{ project.title }}</h3>
                <p class="project-category">{{ project.category }}</p>
              </a>
            </li>
          </ul>
        </section>
      </article>

      <article class="blog" :class="{ active: activePage === 'download cv' }">
        <header><h2 class="h2 article-title">Download CV</h2></header>
        <section class="about-text">
          <p>Kamu bisa melihat riwayat hidup, kualifikasi teknis, serta detail pencapaian akademis dan profesional milikku secara lengkap melalui berkas digital di bawah ini.</p>
          <div class="cv-action-wrapper">
            <a href="/assets/doc/CV%20TITO%20new.pdf" download class="form-btn text-center">
              <ion-icon name="download-outline"></ion-icon>
              <span>Unduh Berkas PDF</span>
            </a>
          </div>
        </section>
      </article>

      <article class="contact" :class="{ active: activePage === 'contact' }">
        <header><h2 class="h2 article-title">Contact</h2></header>
        
      <section class="mapbox">
          <figure>
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.483983375887!2d106.7645171!3d-6.3134112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eff77364b49b%3A0x6b24505f9d1469e7!2sCirendeu%2C%20Ciputat%20Timur%2C%20Tangerang%20Selatan%2C%20Banten!5e0!3m2!1sid!2sid!4v1716462000000!5m2!1sid!2sid"
              width="100%" 
              height="380" 
              loading="lazy"
              style="border:0;"
              allowfullscreen=""
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </figure>
        </section>

        <section class="contact-form">
          <h3 class="h3 form-title">Contact Form</h3>
          <form @input="validateForm" class="form">
            <div class="input-wrapper">
              <input type="text" v-model="formData.name" class="form-input" placeholder="Full name" required>
              <input type="email" v-model="formData.email" class="form-input" placeholder="Email Address" required>
            </div>
            <textarea v-model="formData.message" class="form-input" placeholder="Your Message" required></textarea>
            <button class="form-btn" type="submit" :disabled="isFormDisabled">
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>
          </form>
        </section>
      </article>
    </div>
  </main>
</template>

<script setup>
import { ref, computed } from 'vue';

const activePage = ref('about');
const setActivePage = (page) => { 
  activePage.value = page; 
  window.scrollTo(0, 0);
};

const activeCategory = ref('all');
const isSelectDropdownActive = ref(false);
const categories = ['all', 'web development', 'data science'];

const projects = ref([
  { title: 'Laravel Web Application', category: 'web development', image: '/storage/images/coding.png' },
  { title: 'Web Scraping Engine', category: 'data science', image: '/storage/images/scrapping.png' },
  { title: 'Business Data Analysis Dashboard', category: 'data science', image: '/storage/images/data_analysis.jpg' }
]);

const filteredProjects = computed(() => {
  if (activeCategory.value === 'all') return projects.value;
  return projects.value.filter(p => p.category === activeCategory.value);
});

const formData = ref({ name: '', email: '', message: '' });
const isFormDisabled = ref(true);
const validateForm = (e) => {
  isFormDisabled.value = !e.currentTarget.checkValidity();
};
</script>