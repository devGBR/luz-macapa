<template>
  <v-app id="inspire">
    <v-navigation-drawer temporary v-model="drawer" :style="backgroundDrawer">
      <div class="d-flex w-100 no-wrap flex-column mt-8 text-start">
        <v-list rounded="lg">
          <v-list-item v-for="link in links" :href="link.link" :key="link" link>
            <v-list-item-title class="pl-5" 
              style="font-weight: 500; letter-spacing: 0.0892857143em; line-height: normal; text-indent: 0.0892857143em; text-transform: uppercase; user-select: none;">
              {{ link.page}}
            </v-list-item-title>
          </v-list-item>
        </v-list>
      </div>
    </v-navigation-drawer>

<v-app-bar class="nav-hr" :style="backgroundBar">
      
      
      <v-container class="fill-height d-flex mx-auto justify-content-start w-100">
        <div class="w-25 h-100">
          <v-avatar style="width: 227px;
    height: 65px;
    position: fixed;
    top: -3%;
    left: 5%;"  rounded="0" >
           <v-img :src="`/img/${imglogo}`">

</v-img>
</v-avatar>
        </div>
         
        <div class="d-flex w-50 mx-auto" style="margin-left: 5% !important;">
        <v-btn v-for="link in links" :key="link" :href="link.link" variant="text" class="text-nav">
          {{ link.page }}
        </v-btn>
      </div>
      </v-container>

    </v-app-bar>
    
    <div class="side horizontal " :style="backgroundBar">
     
  </div>
  <div class="header side" :style="backgroundBar">
      <div class="w-100 d-flex justify-content-center mt-2">
        <v-avatar class="side"  style="width: 15vw;
                height: 15vw;">
              <v-img  src="/img/logo.png" class="w-100"></v-img>  
              </v-avatar>
      </div>
      <div class="w-100 h-50  d-flex">
        <div class="d-flex w-50">
          <button class="ml-1 mr-4 side h-100" style="width: 20vw;">
            <v-img @click="drawer = !drawer" src="/img/sideicon.png" class="w-100"></v-img>
          </button>
          <v-avatar class="mt-2 side" color="grey-darken-1" style="width: 18vw;
    height: 18vw;
"></v-avatar>
        </div>
        <div class="w-50 d-flex justify-content-end align-center pr-3">
          <v-btn icon="mdi-magnify" size="100" style="height: 70px; width: 60px; font-size: 8vw;" variant="plain">
            
          </v-btn>
        </div>
      </div>
    </div>

    <v-main class="tm" :style="backgroundMain">
      <div class="space side"></div>
      <slot />
    </v-main>
    <v-footer
    class=" text-center d-flex flex-column"
    :style="backgroundFooter"  
    >
    <div>
      <v-btn
        v-for="icon in icons"
        :key="icon"
        class="mx-4"
        :icon="icon"
        variant="text"
      ></v-btn>
    </div>

    <div class="pt-0">
     
    </div>

    <v-divider></v-divider>

    <div>
      {{ new Date().getFullYear() }} — <strong>Luz Para os Povos Macapá</strong>
    </div>
  </v-footer>
  </v-app>
</template>
<style>
.side {
  display: none;
}
.tm{
  height: 100%
}
.navicon{
    display: none;
  }

@media only screen and (max-width: 705px) { 
  .text-nav {
    display: none;
  }
  .navicon{
    display: flex;
    width: 87px;
    scale: -1 1;
    position: fixed;
    top: 10px;
    right: -13px;

  }
}

@media only screen and (max-width: 500px) {

  .space{
    z-index: 1;
    height: 90px;
    
  }
  .header {
    width: 100%;
    height: 160px;
    background: rgb(214, 192, 153);
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: 2;
  }

  .horizontal {
    z-index: 0;
    width: 100%;
    transform: translateY(0%);
    position: fixed;
    background: rgb(214, 192, 153);
    height: 280px;
    border-radius: 17%;
    border-bottom-right-radius: 43%;
    border-bottom-left-radius: 44%;
    box-shadow: 0px -1px 5px 0px;

  }

  .side {
    display: block;
  }

  .btn-side {
    width: 12%;
    height: 27vw;
    position: relative;
    top: 5px !important;
    left: 50px;
  }

  .text-nav {
    display: none;
  }

  .nav-hr {
    display: none !important;
  }

  .bar-side {
    z-index: 1003;
    transform: translateY(0%);
    position: relative;
    min-height: 455px;
    height: 50%;
    top: -120px;
    left: -50px;
    width: 150% !important;
    border-radius: 60%;
    border-bottom-right-radius: 50%;
    background: rgb(214, 192, 153);

  }
}
</style>
<script>
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
export default {
  props: {
    backgroundMain: String,
    backgroundBar: String,
    backgroundDrawer: String,
    backgroundFooter: String,
    imglogo: String,
  },
  components: {
    Head,
    Link
  },
  data() {
    return {
      drawer: false,
      links: [
        {page: 'Home', link: '/'},
        {page: 'Eventos'},
        {page: 'Ministerios'},
        {page: 'Rifas', link: '/rifas'},
        {page: 'Agenda'}
      ],
      icons: [
        'mdi-facebook',
        'mdi-youtube',
        'mdi-instagram',
      ],
    }
  }
}
</script>