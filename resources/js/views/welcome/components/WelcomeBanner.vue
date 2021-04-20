<template>
  <v-row>
      <v-col >
        <v-carousel 
          class="rounded-xl" 
          height="60vh"
          hide-delimiters
          hide-delimiter-background
          show-arrows-on-hover
          cycle>
          <v-carousel-item
            v-for="(banner,i) in banners"
            :key="i"
            :src="banner.full_url" 
            reverse-transition="fade-transition"
            transition="fade-transition"
          > 
          <v-row class="fill-height" justify="center" align="center">
            <v-col cols="12" class="text-center">
               <!-- <div class="logo-banner"><span class="titulo-logo-orange titulo-logo">BINGO</span><span class="titulo-logo-green titulo-logo ml-1">LIN</span></div> 
               <div class="subtitulo-logo shadow-white-text">Telebingo en Linea</div>   --> 
               <div class="social-media">
                  <v-btn icon link target="_blank" rel="noreferrer noopener"  href="https://www.youtube.com/channel/UCKGpy6rDSClwrTv54vxn6YQ" class="mx-4">
                    <v-icon color="#ff0000" size="44" class="shadow-white-text-small">mdi-youtube</v-icon>
                  </v-btn>
                  <v-btn icon link target="_blank" rel="noreferrer noopener" href="https://www.instagram.com/p/CJtP6zZpvLh/" class="mx-4">
                    <v-icon color="#517fa4" size="38" class="shadow-white-text-small">mdi-instagram</v-icon>
                  </v-btn>
                  <v-btn icon link target="_blank" rel="noreferrer noopener" href="https://www.facebook.com/bugabingolin" class="mx-4">
                    <v-icon color="#3A5795" size="38" class="shadow-white-text-small" >mdi-facebook</v-icon>
                  </v-btn>
                  <v-btn icon link target="_blank" rel="noreferrer noopener" href="https://twitter.com/BingolinL" class="mx-4">
                    <v-icon color="#5EA9DD" size="38" class="shadow-white-text-small">mdi-twitter</v-icon>
                  </v-btn>
              </div> 
            </v-col>
          </v-row>
          </v-carousel-item>
        </v-carousel>
      </v-col>
    </v-row>
</template>

<script>
export default {

  created()
  {
    this.banners = JSON.parse(window.images).filter( image => image.id_tipo_foto == 1 )
  },

  data: () => ({
      banners: [],
  })
 
}
</script>

<style>

.social-media{
  margin-top: 10rem
}
.titulo-logo{
  -webkit-text-stroke: 2.5px #2764A0;
  filter:drop-shadow(-3px -3px 1px rgb(255, 255, 255));
 /*   1px 1px 1px rgb(255, 255, 255), -1px 1px 1px rgb(255, 255, 255), 1px -1px 1px rgb(255, 255, 255); */
 font-family: 'Komika Axis', sans-serif;  
}

.logo-banner{
   font-size: 4rem;
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

.subtitulo-logo{
  color: #2764A0;
  font-weight: 900;
  font-size: 2rem;
}

.shadow-white-text
{
  text-shadow: -2px -2px 1px rgb(255, 255, 255), 2px 2px 1px rgb(255, 255, 255), -2px 2px 1px rgb(255, 255, 255), 2px -2px 1px rgb(255, 255, 255);
}

.shadow-white-text-small
{
  text-shadow: -1px -1px 1px rgb(255, 255, 255), 1px 1px 1px rgb(255, 255, 255), -1px 1px 1px rgb(255, 255, 255), 1px -1px 1px rgb(255, 255, 255);
}
</style>