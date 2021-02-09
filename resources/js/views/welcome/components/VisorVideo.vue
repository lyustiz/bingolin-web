<template>

        <v-card dark class="rounded-xl card-holder" height="60vh">
            <v-card-text class="pa-0">
                
            
            <v-row no-gutters justify="center" class="">

                <v-window v-model="dialogVideo" continuous show-arrows class="windows-holder rounded-xl"> 
                    <v-window-item
                        v-for="video in videos"
                        :key="video.id"
                        class="windows-holder"
                        eager
                    >
                    <div class="youtube-holder">
                        <iframe  v-if="video.id == dialogVideo"
                            class="rounded-lg holder-iframe" 
                            @load="loading = false" 
                            :src="`${video.src}`"  
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    </v-window-item>
                    </v-window>
                    
               
            </v-row>
            </v-card-text>
        </v-card>

</template>

<script>

export default {
//autoplay=1&mute=1
    data: () => ({
        length:    2,
        dialogVideo: 0,
        videos:[
           { id: 0, src: 'https://www.youtube.com/embed/videoseries?list=PL2tw3E5SMMElCayTUDPWuLFlZPLWawmiO&rel=0' },
           { id: 1, src: 'https://www.youtube.com/embed/videoseries?list=PLhVF_CPD362lgBZRNNj0qHU6zyLnzcqfX&rel=0' }, 
           { id: 2, src: 'https://www.youtube.com/embed/videoseries?list=PL6CT5vja8_i1-yvL6bqw0IgDFHQDtVbgB&rel=0' }, 
        ]
    })
}
</script>

<style>

.card-holder
{
    border: 3px solid white; 
}
.windows-holder
{
  width: 100%;
  height: 60vh; 
}


.youtube-holder
{
   position: relative;
  overflow: hidden;
  height: 60vh; 
  height: 100%;
}

.holder-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
</style>