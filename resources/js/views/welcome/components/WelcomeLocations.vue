<template>
  <v-row>
    <v-col>
  <v-sheet
    class="mx-auto rounded-lg main-color"
    elevation="8"
    width="100%"
  >
    <v-slide-group
      v-model="model"
      class="py-4"
      center-active
      show-arrows="always"

    >
      <v-slide-item
        v-for="(loc, key) in localidades"
        :key="key"
      >
        <v-card
          class="ma-3 rounded-lg"
          height="200"
          width="280"
        >
        <v-img
          height="100%"
          width="100%"
          :src="loc.foto.full_url"
        >
          <v-row
            align="center"
            justify="center"
            class="pt-12"
          >
          
          <v-col cols="12" class="badground-image white--text text-image font-weight-bold d-block display-1 text-center text-capitalize">
            {{ loc.nb_sede }}
          </v-col>
          <v-col class="text-center text-image-white badground-image">

            <v-tooltip bottom color="red">
            <template v-slot:activator="{ on, attrs }">
              <v-icon
                color="red"
                size="40"
                class="mx-2 text-image-white"
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

           <v-tooltip bottom color="green">
            <template v-slot:activator="{ on, attrs }">
              <v-icon
                color="yellow"
                size="40"
                class="mx-2 text-image-white"
                dark
                v-bind="attrs"
                v-on="on"
                @click="showLocation(loc.tx_mapa)"
              >
                mdi-map-marker-radius-outline
              </v-icon>
            </template>
            <span>{{loc.tx_ubicacion}}</span>
          </v-tooltip>

          <v-tooltip bottom color="blue">
            <template v-slot:activator="{ on, attrs }">
              <v-btn icon class="mx-2" :href="`tel:${loc.tx_telefono}`">
                <v-icon
                  color="blue"
                  size="40"
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
               <v-btn icon class="mx-2" target="_blank" :href="`https://wa.me/${loc.tx_whatsapp}`">
                <v-icon
                  color="green"
                  size="40"
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
       
        </v-card>
      </v-slide-item>
    </v-slide-group>
  </v-sheet>
  </v-col>

      <v-dialog
      v-model="dialog"
      content-class="rounded-xl"
      v-if="dialog"
    >
      <v-card dark>
        <v-card-title class="subtitle-1">
          <v-row>
            <v-col cols="11" class="text-center">Transmision en Vivo - <span class="text-capitalize">{{ localidad }}</span><v-icon size="30" class="mx-2">mdi-television-play</v-icon></v-col>
            <v-col cols="1" class="text-right">
              <v-btn color="white" icon @click="dialog = false" >
                <v-icon color="white">mdi-close</v-icon>
              </v-btn>
            </v-col>
          </v-row>
         
        </v-card-title>

        <v-card-text class="pt-3"> 
          
          <iframe 
            src="https://player.castr.com/live_4db8d0204ea511eb82c4930b3578d304" 
            class="rounded-lg" 
            width="100%"
            height="431" 
            frameborder="0" 
            scrolling="no"
            allow="autoplay allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen">
          </iframe>
        </v-card-text>

      </v-card>
    </v-dialog>




<v-dialog
  v-model="ubicacion"
  width="30rem"
  content-class="rounded-xl"
  v-if="ubicacion"
>
  <v-card height="50vh">
    <iframe width="100%" height="100%" :src="map">
    </iframe> 
    <v-btn fab x-small absolute right class="mt-2" color="deep-orange" @click="ubicacion=false"><v-icon color="white">mdi-close</v-icon></v-btn>
  </v-card>
</v-dialog>
    </v-row>
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

</style>