<template>

    <list-container :title="title" :head-color="$App.theme.headList" @onMenu="onMenu($event)">

        <template slot="HeadTools">
            <add-button @insItem="insertForm()"></add-button>
        </template>

            <v-col cols="12" md="6">
                <v-text-field
                    v-model="search"
                    append-icon="search"
                    label="Buscar"
                    hide-details
                    clearable
                    dense
                ></v-text-field>
            </v-col>

            <v-data-table
                :headers="headers"
                :items  ="items"
                :search ="search"
                item-key="id"
                :loading="loading"
                sort-by=""
            >

                <template v-slot:item="{ item }">
                    <tr>
                        <td class="text-xs-left">{{ item.id_suscriptor }}</td>
						<td class="text-xs-left">{{ item.id_vendedor }}</td>
						<td class="text-xs-left">{{ item.id_tipo_suscripcion }}</td>
						<td class="text-xs-left">{{ item.fe_subcripcion }}</td>
						<td class="text-xs-left">{{ item.nu_dias }}</td>
						<td class="text-xs-left">{{ item.nu_monto }}</td>
						<td class="text-xs-left">{{ item.fe_vencimiento }}</td>
						<td class="text-xs-left">{{ item.tx_observaciones }}</td>
						<td class="text-xs-left">
                            <status-switch 
                                :loading="loading" 
                                :resource="resource" 
                                :item="item" 
                                @onChangeStatus="changeStatus($event)">
                            </status-switch>
                        </td>
                        
                        <td class="text-xs-left">
                            <list-buttons 
                                @update="updateForm(item)" 
                                @delete="deleteForm(item)" >
                            </list-buttons>
                        </td>
                    </tr>
                </template>

            </v-data-table>

            <app-modal
                :modal="modal"
                @closeModal="closeModal()"
                :head-color="$App.theme.headModal"
                :title="title"
            >
                <suscripcion-form
                    :action="action"
                    :item="item"
                    @closeModal="closeModal()"
                ></suscripcion-form>

            </app-modal>

            <form-delete
                :dialog="dialog"
                :loading="loading"
                message="Desea eliminar el Registro Seleccionado?"
                @deleteItem="deleteItem()"
                @deleteCancel="deleteCancel()"
            ></form-delete>
            
            <pre v-if="$App.debug">{{ $data }}</pre>

    </list-container>

</template>

<script>
import listHelper from '@mixins/Applist';
import suscripcionForm  from './suscripcionForm';
export default {
    mixins:     [ listHelper],
    components: { 'suscripcion-form': suscripcionForm },
    data () {
    return {
        title:    'Suscripcion',
        resource: 'suscripcion',
        headers: [
            { text: 'Suscriptor',   value: 'id_suscriptor' },
			{ text: 'Vendedor',   value: 'id_vendedor' },
			{ text: 'Tipo Suscripcion',   value: 'id_tipo_suscripcion' },
			{ text: 'Subcripcion',   value: 'fe_subcripcion' },
			{ text: 'Dias',   value: 'nu_dias' },
			{ text: 'Monto',   value: 'nu_monto' },
			{ text: 'Vencimiento',   value: 'fe_vencimiento' },
			{ text: 'Observaciones',   value: 'tx_observaciones' },
			{ text: 'Status',   value: 'id_status' },
            { text: 'Acciones', value: 'actions', sortable: false, filterable: false },
        ],
    }
    },
    methods:
    {
   
    }
}
</script>

<style>
</style>