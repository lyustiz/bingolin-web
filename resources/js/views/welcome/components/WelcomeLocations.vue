<template>

<v-card height="" color="white" class="rounded-xl elevation-5">
  <v-card-text class="text-center white--text section-container">
    <v-row no-gutters>
        <v-col cols="12">
            <v-card  flat> 
                <v-img src="/images/secciones/sorteos.png" contain height="30vh"></v-img>
            </v-card>
        </v-col>
        <v-col>
            <v-row no-gutters class="my-3"  v-for="(loc, key) in localidades" :key="key">

              <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                  <div class="rounded-r-lg sorteo-color test--white vertical-text pa-1 mr-n2 text-uppercase">{{loc.nb_sede}}</div>
              </v-col>

              <v-col cols="11"> 
                <v-img
                  class="rounded-lg elevation-2"
                  height="40vh" width="100%"
                  :src="loc.foto.full_url"
                >
                  <v-row
                    class="fill-height"
                    align="center"
                    justify="center"
                  >
                  <v-col class="text-center shadow-white-text-small">

                    <v-tooltip bottom color="red">
                    <template v-slot:activator="{ on, attrs }">
                      <v-icon
                        color="red"
                        size="45"
                        class="mx-2 shadow-white-text-small"
                        dark
                        v-bind="attrs"
                        v-on="on"
                        @click="transmision(loc.tx_transmision)"
                      >
                        mdi-television-play
                      </v-icon>
                    </template>
                    <span>Transmision en Vivo</span>
                  </v-tooltip>

                  <v-tooltip bottom color="amber darken-1">
                    <template v-slot:activator="{ on, attrs }">
                      <v-icon
                        color="amber darken-1"
                        size="45"
                        class="mx-2 shadow-white-text-small"
                        dark
                        v-bind="attrs"
                        v-on="on"
                        @click="showLocation(loc.tx_mapa)"
                      >
                        mdi-map-marker-radius
                      </v-icon>
                    </template>
                    <span>{{loc.tx_ubicacion}}</span>
                  </v-tooltip>

                  <v-tooltip bottom color="blue">
                    <template v-slot:activator="{ on, attrs }">
                      <v-btn icon class="mx-2" :href="`tel:${loc.tx_telefono}`">
                        <v-icon
                          color="blue"
                          size="45"
                          dark
                          v-bind="attrs"
                          v-on="on"
                        >
                          mdi-phone
                        </v-icon>
                      </v-btn>
                    </template>
                    <span>{{loc.tx_telefono}}</span>
                  </v-tooltip>

                  <v-tooltip bottom color="green" >
                    <template v-slot:activator="{ on, attrs }">
                      <v-btn icon class="mx-2" target="_blank" rel="noreferrer noopener" :href="`https://wa.me/${loc.tx_whatsapp}`">
                        <v-icon
                          color="green"
                          size="45"
                          dark
                          v-bind="attrs"
                          v-on="on"
                        >
                          mdi-whatsapp
                        </v-icon>
                      </v-btn>
                    </template>
                    <span>{{loc.tx_whatsapp}}</span>
                  </v-tooltip>

                  </v-col>
                  </v-row>
                </v-img>
              </v-col>
            </v-row>
        </v-col>
    </v-row>
  </v-card-text>

    <v-dialog 
      v-model="dialog" 
      content-class="rounded-xl"  
      v-if="dialog"
      scrollable
      width="80vw"
    >
      <v-card dark color="black" height="100%" >
          <v-btn color="red" fab x-small @click="dialog = false" class="mt-6" absolute top left>
                <v-icon color="white" size="18">mdi-close</v-icon>
          </v-btn>
          <div class="video-container rounded-xl">
              <iframe class="rounded-xl" src="https://cloud2.streaminglivehd.com:2000/VideoPlayer/8056" scrolling="no" frameborder="0" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
          </div>
      </v-card>
    </v-dialog>

    <v-dialog
      v-model="ubicacion"
      :width="($vuetify.breakpoint.mobile) ? '100vw': '60vw'"
      content-class="rounded-xl"
      v-if="ubicacion"
    >
    <v-card height="50vh">
      <iframe width="100%" height="100%" :src="`https://www.google.com/maps/embed?${map}`">
      </iframe> 
      <v-btn fab x-small absolute right class="mt-2" color="deep-orange" @click="ubicacion=false"><v-icon color="white">mdi-close</v-icon></v-btn>
    </v-card>
  </v-dialog>

</v-card>
 
</template>

<script>
export default {

    created()
    {
      this.localidades = JSON.parse(window.locations)
    },
    data: () => ({
        model:     null,
        map:       '',
        localidad: '',
        dialog:    false,
        ubicacion: false,
        localidades: [],
    }),
    methods:
    {
      transmision(localidad)
      {
        this.localidad = localidad
        this.dialog    = true
      },

      showLocation(mapUrl)
      {
        this.map = mapUrl
        this.ubicacion = true
      },
    }

}
</script>

<style>
.video-container {
    overflow: hidden;
    position: relative;
    width:100%;
}

.video-container::after {
    padding-top: 56.25%;
    display: block;
    content: '';
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>