<template>
<div class="holder">

<v-container>

    <v-btn fab absolute color="warning" left @click="navigateToName('welcome')"><v-icon>mdi-home</v-icon></v-btn>

    <v-row class="fill-height" >

          <v-main class="fill-height">
            <transition name="fade" mode="out-in" >
                <router-view></router-view>
            </transition>
        </v-main>
  
  </v-row>
    
</v-container>

<!--Mensaje Sistema-->
<app-message></app-message>

</div>

</template>

<script>
import AppRules from '@mixins/AppRules'

export default {
    mixins: [ AppRules ],


}
</script>

<style>
#register-container{
    height: 92.8vh;
}
.loginHolder {
    min-height: 100vh;
    background-image: url('/images/login-badground.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover ;
}


</style>