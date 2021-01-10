<template>
  <v-col cols="12" md="4">
        <v-card dark class="white rounded-lg elevation-10" height="30.8rem"> 
          <v-card-title class="pa-6">

            <v-row class="deep-orange white--text rounded-t-lg">
              <v-col class="display-1 py-4 text-center">
                Sorteos <v-icon size="40" class="mx-2">mdi-ticket</v-icon>
              </v-col>
            </v-row>
          </v-card-title> 
          <v-card-text class="px-3">
            
            <v-img
              v-for="sorteo in sorteos" :key="sorteo.id"
              height="100%"
              width="100%"
              :src="sorteo.full_url"
              class="rounded-lg"
            > </v-img>
            
          </v-card-text>
        </v-card>
      </v-col>
</template>

<script>
export default {

  created()
  {
    this.sorteos = JSON.parse(window.images).filter( image => image.id_tipo_foto == 4 )
  },

  data: () => ({
      sorteos: [],
  })

}
</script>

<style>

</style>