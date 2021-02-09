<template>
    <v-col cols="12" md="4">
        <v-card dark class="white rounded-xl elevation-10 section-container" height="30.8rem"> 
            <v-card-title class="pa-6">

            <v-row class="deep-orange white--text rounded-t-lg">
                <v-col class="display-1 py-4 text-center">
                Premios <v-icon size="40" class="mx-2">mdi-trophy</v-icon>
                </v-col>
            </v-row>
            </v-card-title> 
            <v-card-text  class="px-3">
            
            <v-img
              v-for="premio in premios" :key="premio.id"
              height="100%"
              width="100%"
              :src="premio.full_url"
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
    this.premios = JSON.parse(window.images).filter( image => image.id_tipo_foto == 3 )
  },

  data: () => ({
    premios: [],
  })

}
</script>

<style>
.section-container{
  border: 8px solid #2764A0 !important
}
</style>