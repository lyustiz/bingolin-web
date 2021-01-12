<template>
<v-app class="transparent">
  <v-main>
    <v-container class="mt-n6">
      <v-row dense>
        <v-col cols="12" md="7">
          <VisorVideo></VisorVideo>
        </v-col>
        <v-col cols="12" md="5">
          <WelcomeBanner></WelcomeBanner>
        </v-col>
      </v-row>
      <v-row class="mt-4">
        <v-col cols="12" md="4">
          <WelcomePromotion></WelcomePromotion>
        </v-col>
        <v-col cols="12" md="4">
          <WelcomeWinner></WelcomeWinner>
        </v-col>
        <v-col cols="12" md="4">
          <WelcomeLocations></WelcomeLocations>
        </v-col>
      </v-row>
    </v-container>
  </v-main>
</v-app>
</template>

<script>
import VisorVideo from './components/VisorVideo'
import WelcomeBanner    from './components/WelcomeBanner'
import WelcomePromotion from './components/WelcomePromotion'
import WelcomeWinner    from './components/WelcomeWinner'
import WelcomeLocations from './components/WelcomeLocations'

export default {
  name: 'Welcome',

  components:{
    VisorVideo,
    WelcomeBanner,
    WelcomePromotion,
    WelcomeWinner,
    WelcomeLocations,     
  },
  
  data: () => ({
    
  }),

  }
</script>

<style>
.city-name{
   color: white;
   text-shadow: 2px 2px #383838;
   background-color: rgba(43, 39, 39, 0.2);
 }

 .text-image{
   text-shadow: 2px 2px #383838;
 }
 .badground-image{
   background-color: rgba(43, 39, 39, 0.2);
 }

 .text-image-white{
   text-shadow: 1px 1px rgb(255, 255, 255);
 }

 .v-slide-group__next, .v-slide-group__prev{
  min-width: 1px !important;
}

.v-slide-group__content{
  justify-content: center !important;
}

.promocion-color{
    background-color: #8D70FF !important;
}
.resultados-color{
    background-color: #FCC02E !important;
}
.sorteo-color{
    background-color:#33CC33 !important;
}
</style>