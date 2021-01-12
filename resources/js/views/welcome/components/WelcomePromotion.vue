<template>
  <v-card height="" color="white" class="rounded-lg elevation-5">
    <v-card-text class="text-center white--text">
      <v-row no-gutters>
        <v-col cols="12">
          <v-card  flat> 
            <v-img src="/images/secciones/promociones.png" contain height="25vh"></v-img>
          </v-card>
        </v-col>
        <v-col class="mt-3">
          <v-row no-gutters class="my-3" v-for="sorteo in sorteos" :key="sorteo.id">
            <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
              <div class="rounded-r-lg promocion-color test--white vertical-text pa-1 mr-n2">CARTAGO</div>
            </v-col>
            <v-col cols="11"> 
              <v-card flat height="40vh">
                <img height="100%" width="100%" :src="sorteo.full_url" class="rounded-lg pointer" @click="showImage(sorteo.full_url)">
              </v-card>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-card-text>

    <v-dialog
      v-model="detalle"
      v-if="detalle"
      width="50rem"
      content-class="rounded-lg"
    >
      <v-card height="30rem" class="rounded-lg">
        <img height="100%" width="100%" :src="image">
      </v-card>
    </v-dialog>
  </v-card>
</template>

<script>
export default {

  created()
  {
    this.sorteos = JSON.parse(window.images).filter( image => image.id_tipo_foto == 4 )
  },

  data: () => ({
      detalle: false,
      sorteos: [],
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