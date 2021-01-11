<template>
<div class="home-holder pt-8">
   
   
<v-container>
    <v-row dense>
        <v-col cols="12" md="7">
            <VisorVideo></VisorVideo>
        </v-col>
        <v-col cols="12" md="5">
            <WelcomeBanner></WelcomeBanner>
        </v-col>
    </v-row>

    <v-row class="mt-4">
        <v-col cols="12" md="4">
            <v-card height="" color="white" class="rounded-lg elevation-8">
                <v-card-text class="text-center white--text">
                     <v-row no-gutters>
                         <v-col cols="12">
                             <v-card  flat> 
                                 <v-img src="/images/secciones/promociones.png" contain height="25vh"></v-img>
                             </v-card>
                         </v-col>
                         <v-col class="mt-3">
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg promocion-color test--white vertical-text pa-1 mr-n2">CARTAGO</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat>
                                         <v-img height="40vh" width="100%" src="/images/icons/banner2.jpeg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg promocion-color test--white vertical-text pa-1 mr-n2">BUGA</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat>
                                         <v-img height="40vh" width="100%" src="/images/icons/banner2.jpeg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg promocion-color test--white vertical-text pa-1 mr-n2">CANDELARIA</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat>
                                         <v-img height="40vh" width="100%" src="/images/icons/banner2.jpeg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                         </v-col>
                     </v-row>
                </v-card-text>
            </v-card>
            
        </v-col>
        <v-col cols="12" md="4">
            <v-card height="" color="white" class="rounded-lg elevation-8">
                <v-card-text class="text-center white--text">
                     <v-row no-gutters>
                         <v-col cols="12">
                             <v-card  flat> 
                                 <v-img src="/images/secciones/resultados.png" contain height="25vh"></v-img>
                             </v-card>
                         </v-col>
                         <v-col class="mt-3">
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg resultados-color test--white vertical-text pa-1 mr-n2">CARTAGO</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat height="40vh">
                                         <img height="100%" width="100%" src="/images/icons/win1.jpg" class="rounded-lg"></img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg resultados-color test--white vertical-text pa-1 mr-n2">BUGA</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat height="40vh">
                                         <v-img height="100%" width="100%" src="/images/icons/win2.jpg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg resultados-color test--white vertical-text pa-1 mr-n2">CANDELARIA</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat height="40vh">
                                         <v-img height="100%" width="100%" src="/images/icons/win3.jpg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                         </v-col>
                     </v-row>
                </v-card-text>
            </v-card>
        </v-col>
        <v-col cols="12" md="4">
            <v-card height="" color="white" class="rounded-lg elevation-8">
                <v-card-text class="text-center white--text">
                     <v-row no-gutters>
                         <v-col cols="12">
                             <v-card  flat> 
                                 <v-img src="/images/secciones/sorteos.png" contain height="25vh"></v-img>
                             </v-card>
                         </v-col>
                         <v-col class="mt-3">
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg sorteo-color test--white vertical-text pa-1 mr-n2">CARTAGO</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat>
                                         <v-img height="40vh" width="100%" src="/images/localidades/cartago.jpg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg sorteo-color test--white vertical-text pa-1 mr-n2">BUGA</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat>
                                         <v-img height="40vh" width="100%" src="/images/localidades/buga.jpg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                             <v-row no-gutters class="my-3">
                                 <v-col cols="1" class="d-flex justify-center align-center font-weight-bold">
                                     <div class="rounded-r-lg sorteo-color test--white vertical-text pa-1 mr-n2">CANDELARIA</div>
                                 </v-col>
                                 <v-col cols="11"> 
                                     <v-card flat>
                                         <v-img height="40vh" width="100%" src="/images/localidades/candelaria.jpg" class="rounded-lg"></v-img>
                                     </v-card>
                                 </v-col>
                             </v-row>
                         </v-col>
                     </v-row>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
    
</v-container>



</div>
</template>

<script>
import VisorVideo from './VisorVideo'
import WelcomeBanner from './WelcomeBanner'
import AppData from '@mixins/AppData';
export default 
{
    components:
    {
        VisorVideo,
        WelcomeBanner
    },
    
    
    mixins:     [ AppData],

    created()
    {
        this.list()
    },

    data () 
	{
        return {
            Showfilter: true,

        }
    },

    methods:
    {
       
    }
}
</script>

<style>
.home-holder{
    min-height: 96vh;
}
.vertical-text{
    writing-mode: vertical-rl;
    transform: rotate(-180deg);
    height: 25vh;
}
.promocion-color{
    background-color: #8D70FF !important;
}
.resultados-color{
    background-color: #FCC02E !important;
}
.sorteo-color{
    background-color:#33CC33 !important;
}

</style>
