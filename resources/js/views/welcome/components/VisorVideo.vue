<template>

    <div>
        <v-card dark class="rounded-lg" height="60vh">
            <v-row no-gutters justify="center">

                <v-window v-model="dialogVideo" continuous show-arrows class="windows-holder rounded-lg"> 
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
                            :src="`${video.src}?&enablejsapi=1&loop=1&rel=0&showinfo=0`"  
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    </v-window-item>
                    </v-window>
                    
               
            </v-row>
        </v-card>
    </div>

</template>

<script>

export default {
//autoplay=1&mute=1
    data: () => ({
        length:    2,
        dialogVideo: 0,
        videos:[
           { id: 0, src: 'https://www.youtube.com/embed/IH7hpclqfxc' },
           { id: 1, src: 'https://www.youtube.com/embed/wVofL_caczs' }
        ]
    })
}
</script>

<style>
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