<template>

    <v-form ref="form" v-model="valid" lazy-validation>

    <v-card :loading="loading" flat>

        <v-card-text>

        <v-row>

        <v-col cols="12" md="6">
            <v-text-field
                :rules="[rules.required, rules.max(80)]"
                v-model="form.nb_suscriptor"
                label="Nombre Suscriptor"
                placeholder="Indique Nombre Suscriptor"
                dense
                autofocus
                tabindex="1"
            ></v-text-field>
        </v-col>
                  
        <v-col cols="12" md="6">
            <v-text-field
                :rules="[rules.required]"
                v-model="form.tx_documento"
                type="number"
                label="Documento"
                placeholder="Indique Documento"
                dense
                tabindex="2"
            ></v-text-field>
        </v-col>
                  
        <v-col cols="12" md="6">
            <v-text-field
                :rules="[rules.required, rules.max(50)]"
                v-model="form.tx_telefono"
                label="Telefono"
                placeholder="Indique Telefono"
                dense
                tabindex="3"
            ></v-text-field>
        </v-col>
                  
        <v-col cols="12" md="6">
            <v-text-field
                :rules="[rules.max(50)]"
                v-model="form.tx_telefono2"
                label="Telefono2"
                placeholder="Indique Telefono2"
                dense
            ></v-text-field>
        </v-col>
                  
        <v-col cols="12" md="6">
            <v-text-field
                :rules="[rules.max(50)]"
                v-model="form.tx_direccion"
                label="Direccion"
                placeholder="Indique Direccion"
                dense
            ></v-text-field>
        </v-col>
                  
        <v-col cols="12" md="6">
            <v-text-field
                :rules="[rules.max(100)]"
                v-model="form.tx_observaciones"
                label="Observaciones"
                placeholder="Indique Observaciones"
                dense
            ></v-text-field>
        </v-col>

        </v-row>

        </v-card-text>

        <v-card-actions>
            <v-spacer></v-spacer>
            <form-buttons
                @update="update()"
                @store="store()"
                @clear="clear()"
                @cancel="cancel()"
                :action="action"
                :valid="valid"
                :loading="loading"
            ></form-buttons>
        </v-card-actions>

        <pre v-if="$App.debug">{{ $data }}</pre>

    </v-card>
    
    </v-form>

</template>

<script>

import Appform from '@mixins/Appform';

export default {
    mixins: [Appform],
    data() {
        return {
            resource: 'suscriptor',
            form:
            {
                id: 	          null,
				nb_suscriptor: 	  null,
				tx_documento: 	  null,
				tx_telefono: 	  null,
				tx_telefono2: 	  null,
				tx_direccion: 	  null,
				tx_observaciones: null,
				id_status: 	      null,
				id_usuario: 	  null,
            },
        }
    },

    methods:
    {

        postResponse(action)
        {
            if(action == 'delete')
            {
                this.$emit('updateData')
            }
        },

    }
}
</script>

<style>
</style>