<template>
    <div class="audio-container">
        <app-simple-toolbar :title="audio.name" backgroundColor="primary" dense dark @closeModal="$emit('closeDialog')" ></app-simple-toolbar>
        <v-alert color="primary" class="rounded-xl mb-1" :value="true" prominent :icon="audioIcon" dark>
            
            <audio controls autoplay class="mt-2 mx-auto">
                <source :src="audio.src" type="audio/mp3">
                Tu navegador no soporta este formato de audio
            </audio>
        </v-alert>
    </div>
</template>

<script>
import AppVisor   from '@mixins/AppVisor';

export default 
{
    mixins: [AppVisor],  
      
    props:
    {
        audio: {
            type: Object,
            default: () => { }
        },
    
        audioIcon: {
            type: String,
            default: 'mdi-volume-high'
        },

    },
}

</script>
<style scoped>
.audio-container{
    overflow: visible;
    }
</style>