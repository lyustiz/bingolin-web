<template>
  <v-card height="" color="white" class="rounded-xl elevation-5">
    <v-card-text class="text-center white--text section-container">
      <v-row no-gutters>
        <v-col cols="12">
          <v-card  flat> 
            <v-img src="/images/secciones/promociones.png" contain height="30vh"></v-img>
          </v-card>
        </v-col>
        <v-col>
          <v-row no-gutters class="my-3" v-for="sorteo in sorteos" :key="sorteo.id">
            <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
              <div class="rounded-r-lg promocion-color test--white vertical-text pa-1 mr-n2 text-uppercase">{{sorteo.sede.nb_sede}}</div>
            </v-col>
            <v-col cols="11"> 
              <v-card flat height="40vh">
                <img height="100%" width="100%" :src="sorteo.full_url" class="rounded-lg pointer elevation-2" @click="showImage(sorteo.full_url)">
              </v-card>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-card-text>

    <v-dialog
      v-model="detalle"
      v-if="detalle"
      :width="($vuetify.breakpoint.mobile) ? '100vw': '60vw'"
      content-class="rounded-lg elevation-0"
    >
      <v-card class="transparent">
        <img width="100%" :src="image">
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