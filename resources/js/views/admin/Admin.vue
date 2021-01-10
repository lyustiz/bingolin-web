<template>
  <v-container fluid class="mt-6">
   <v-app class="transparent">
    <v-main >
      <v-tabs color="deep-orange" v-model="tab" class="rounded-t-lg">
        <v-tab>Banner</v-tab>
        <v-tab>Sedes</v-tab>
        <v-tab>Sorteos</v-tab>
        <v-tab>Premios</v-tab>
        <v-tab>Ganadores</v-tab>
      </v-tabs>

      <v-tabs-items v-model="tab">
        <v-tab-item>
          <v-card flat>
            <v-card-text>
                <v-card-text><AdminBanner></AdminBanner></v-card-text>
            </v-card-text>
          </v-card>
        </v-tab-item>
        <v-tab-item>
          <v-card flat>
            <v-card-text>
                <v-card-text><AdminLocations></AdminLocations></v-card-text>
            </v-card-text>
          </v-card>
        </v-tab-item>
        <v-tab-item>
          <v-card flat>
            <v-card-text>
                <v-card-text><AdminDraw></AdminDraw></v-card-text>
            </v-card-text>
          </v-card>
        </v-tab-item>
        <v-tab-item>
          <v-card flat>
            <v-card-text>
                <v-card-text><AdminPrize></AdminPrize></v-card-text>
            </v-card-text>
          </v-card>
        </v-tab-item>
        <v-tab-item>
          <v-card flat>
            <v-card-text>
                <v-card-text><AdminWinners></AdminWinners></v-card-text>
            </v-card-text>
          </v-card>
        </v-tab-item>
      </v-tabs-items>
    </v-main>
  </v-app>
</v-container>
</template>

<script>
import AdminBanner    from './components/AdminBanner'
import AdminLocations from './components/AdminLocations'
import AdminDraw      from './components/AdminDraw'
import AdminPrize     from './components/AdminPrize'
import AdminWinners   from './components/AdminWinners'
import AppData        from '@mixins/AppData';


export default {

  components:{
    AdminBanner,
    AdminLocations,
    AdminDraw,
    AdminPrize,
    AdminWinners,
  },

  mixins: [AppData],

  created()
  {
    
  },

  data: () => ({
      tab: 0
  }),

  methods:{
    list()
        {
          
              this.getResource(`foto/`).then( data => {
                  this.item        = data

              });
      },
    
  }
}
</script>

<style>

</style>