<template>

        <v-switch 
            v-model="status"
            inset 
            hide-details
            :readonly="readOnly"
            :loading="loading" 
            :true-value="trueValue"
            :false-value="falseValue"
            :color="color"
            :input-value="item.id_status"
            @change="changeStatus($event)">
        </v-switch>

</template>

<script>

export default {

    props:{
        
        color:{
            type: String,
            default: 'deep-orange'
        },
        
        loading:{
            type: Boolean,
            default: false
        },
        
        item:{
            type: Object,
            required: true
        },

        resource:{
            type: String,
            required: true
        },

    },

    computed:
    {
        readOnly()
        {
            return this.loading
        }
    },

    data() {
        return{
            apiUrl:  this.$App.apiUrl,
            idUser:  1, //this.$store.getters.getUserid,
            status:  this.item.id_status,
            form: {
                resource:   null,
                id:         null,
                id_status:  null,
                id_usuario: null
            },
            trueValue:  1,
            falseValue: 2,
        }
    },

    methods:
    {
        changeStatus(status)
        {
            if(this.loading) return

            this.updateStatus(status)
        },

        updateStatus(status)
        {
            this.form.resource   = this.resource
            this.form.id         = this.item.id            
            this.form.id_status  = status
            this.form.id_usuario = this.idUser

            this.$emit('onStatusChanging', { id: this.item.id, status: status })

            axios.put( `${this.apiUrl}status/resource`, this.form )
            .then(response => 
            {
                this.showMessage(response.data.msj)
                this.$emit('onStatusChanged', { id: this.item.id, status: status })
            })
            .catch(error => 
            {
                this.showError(error)
                this.status = (this.status == 1) ? 2 : 1;
            })

        }

    },
    
}
</script>


<style scoped>
    .v-input--selection-controls
    {
        margin-top: 0px !important;
    }
</style>