<template>

<v-container fluid>
   <v-app class="transparent">
    <v-main>
        <WelcomeBanner></WelcomeBanner>
        <WelcomeLocations></WelcomeLocations>
      <v-row>
        <WelcomeDraw></WelcomeDraw>
        <WelcomePrize></WelcomePrize>
        <WelcomeWinner></WelcomeWinner>
      </v-row>
    </v-main>
  </v-app>
</v-container>

</template>

<script>
import WelcomeBanner    from './components/WelcomeBanner'
import WelcomeLocations from './components/WelcomeLocations'
import WelcomeDraw      from './components/WelcomeDraw'
import WelcomePrize     from './components/WelcomePrize'
import WelcomeWinner    from './components/WelcomeWinner'
export default {
  name: 'HelloWorld',

  components:{
      WelcomeBanner,
      WelcomeLocations,
      WelcomeDraw,
      WelcomePrize,
      WelcomeWinner
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
   text-shadow: 0.5px 0.5px rgb(255, 255, 255);
 }

 .v-slide-group__next, .v-slide-group__prev{
  min-width: 1px !important;
}

.v-slide-group__content{
  justify-content: center !important;
}
</style>