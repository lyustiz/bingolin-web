<template>

    <div>

        <v-tooltip top v-if="!removeCancel" >
            <template v-slot:activator="{ on }">
            <v-btn 
                v-on="on" 
                fab x-small 
                @click="cancel"
                :loading="loading" 
                :class="$App.theme.button.cancel + ' ml-2'">
                <v-icon>reply</v-icon>
            </v-btn>
            </template>
            <span>Cancelar</span>
        </v-tooltip>

        <template v-if="action=='upd'">
            <v-tooltip top>
                <template v-slot:activator="{ on }">
                    <v-btn 
                        v-on="on" 
                        fab small 
                        @click="update" 
                        :disabled="!valid" 
                        :loading="loading" 				
                        :class="$App.theme.button.update">
                        <v-icon>edit</v-icon>
                    </v-btn>
                </template>
                <span>Editar</span>
            </v-tooltip>
        </template>

        <template v-else>
        <v-tooltip top>
            <template v-slot:activator="{ on }">
                <v-btn 
                    v-on="on" 
                    fab small 
                    @click="store" 
                    :disabled="!valid"
                    :loading="loading" 
                    :color="$App.theme.button.insert">
                    <v-icon>save_alt</v-icon>
                </v-btn>
            </template>
            <span>Guardar</span>
        </v-tooltip>
        </template>      

    </div>

</template>

<script>
export default {

    props:
    {
        action: {
            type:       String,
            default:    null
        },

        valid: {
            type:       Boolean,
            default:    true
        },

        loading: {
            type:       Boolean,
            default:    false
        },

        removeCancel: {
            type:       Boolean,
            default:    false
        },
    },

    methods:{

        update(){
           this.$emit('update');
        },

        store(){
            this.$emit('store');
        },

        clear(){
            this.$emit('clear');
        },

        cancel(){
            this.$emit('cancel');
        }
    }
}
</script>

<style>
</style>
