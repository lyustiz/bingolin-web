<template>
   <v-col cols="12" md="4">
        <v-card class="white rounded-lg elevation-10" height="30.8rem"> 
          <v-card-title class="pa-6">

            <v-row class="deep-orange white--text rounded-t-lg">
              <v-col class="display-1 py-4 text-center">
                Ganadores <v-icon size="40" class="mx-2" color="white">mdi-human-handsup</v-icon>
              </v-col>
            </v-row>
          </v-card-title> 
          <v-card-text  class="px-3">
            
          <v-carousel class="rounded-lg" height="250" cycle hide-delimiter-background show-arrows-on-hover>
          <v-carousel-item
            v-for="(winner,i) in winners"
            :key="i"
          >
            <v-img :src="winner.full_url" height="100%" @click="showImage(winner.full_url)" ></v-img>
          </v-carousel-item>
          </v-carousel>

            <v-row class="my-5">
              <v-col class="text-center subtitle-1">
               Ver lista de Ganadores 
               <v-icon color="deep-orange">mdi-text-box-search-outline</v-icon>
              </v-col>
            </v-row>
          </v-card-text>
        </v-card>

        
<v-dialog
  v-model="detalle"
  v-if="detalle"
  hide-overlay
  width="50rem"
>
    <v-img
      max-height="45rem"
      :src="image"
      contain
      class="rounded-lg"
    > </v-img>
</v-dialog>
    
      </v-col>
</template>

<script>
export default {

  created()
  {
    this.winners = JSON.parse(window.images).filter( image => image.id_tipo_foto == 5 )
  },

  data: () => ({
    detalle: false,
    image:     '',
      winners:[],
  }),

  methods:
  {
    showImage(src)
    {
      this.image   = src
      this.detalle = true;
    }
  }
}

</script>

<style>

</style>