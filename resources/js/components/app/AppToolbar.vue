<template>


     <v-app-bar
      app
      color="rgba(255, 179, 0, 0.2)"
      dark
      flat
      hide-on-scroll
    >
      <v-avatar size="50" color="white" class="mr-2" @click="navigateToName('welcome')">
        <img src="/images/logo.jpg" alt="Bingolin">
      </v-avatar>

      <v-toolbar-title class="display-1 font-weight-bold">
        <div class="logo-titulo mx-3"><span class="titulo-logo-orange titulo-logo">BINGO</span><span class="titulo-logo-green titulo-logo ml-1">LIN</span></div> 
        </v-toolbar-title>

      <v-spacer></v-spacer>

     <!--  <v-btn small text @click="promocion=true">
        Promocion
      </v-btn>

      <v-menu offset-y>
        <template v-slot:activator="{ on, attrs }">
          <v-btn small v-bind="attrs" v-on="on" text>
            Sorteos <v-icon>mdi-chevron-down</v-icon>
          </v-btn>
        </template>
        <v-list>
          <v-list-item
            v-for="(item, index) in items"
            :key="index"
          >
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>

      <v-btn small text>
        Como Jugar <v-icon>mdi-chevron-down</v-icon>
      </v-btn>
        
      <v-btn small text>
        Ayuda
      </v-btn> -->

      <v-spacer></v-spacer>

      <!-- <v-btn depressed small rounded black class=" mr-3">
        <v-icon left>mdi-account-plus</v-icon>
        Registro
      </v-btn>-->

      <v-btn depressed small rounded color="success" @click="navigateToName('admin')">
        <v-icon left>mdi-account</v-icon>
        Login
      </v-btn> 

    
    </v-app-bar>

    

        <!-- Logged
        <template v-if="auth">
        
            --Ayuda 
            <v-tooltip bottom>
                <template v-slot:activator="{ on }">
                    <app-help v-on="on"></app-help>
                </template>
                <span>Ayuda</span>
            </v-tooltip>

            --Mensajes 
            <v-tooltip bottom>
                <template v-slot:activator="{ on }">
                    <app-mensajes v-on="on"></app-mensajes>
                </template>
                <span>Mensaje</span>
            </v-tooltip>

            --Notificaciones 
            <v-tooltip bottom>
                <template v-slot:activator="{ on }">
                    <app-notifications v-on="on"></app-notifications>
                </template>
                <span>Notificaciones</span>
            </v-tooltip>
            
            --User -
            <app-user></app-user>
 

        </template>
        -->


</template>
<script>

    import { mapMutations } from 'vuex';
    export default {

        computed: {
            auth()
            {
                return 1 //return this.$store.getters['getAuth']
            },
        },

        data(){
            return {
                loading : false,
                promocion: false,
                 items: [
        { title: 'Semanal' },
        { title: 'Diario' },
        { title: 'Especial Navideño' },
      ],
            }
        },

    }
</script>
<style scoped>
.titulo-logo{
  -webkit-text-stroke: 1.5px #2764A0;
  filter:drop-shadow(-3px -3px 1px rgb(255, 255, 255));
 /*   1px 1px 1px rgb(255, 255, 255), -1px 1px 1px rgb(255, 255, 255), 1px -1px 1px rgb(255, 255, 255); */
 font-family: 'Komika Axis', sans-serif;  
}

.logo-titulo{
   font-size: 2rem;
}

.titulo-logo-orange
{
  /* standard gradient background */
  background: linear-gradient(180deg, rgba(240,127,25,1) 50%, rgba(239,104,31,1) 50%);
  /* clip informático */
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.titulo-logo-green
{
 /* standard gradient background */
  background: linear-gradient(180deg, rgba(175,203,30,1) 50%, rgba(25,199,12,1) 50%);
  /* clip informático */
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

</style>
