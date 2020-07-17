<template>
        <table class="table table-hover table-striped" id="myTable">
            <div v-if="loader_datatables" class="container loader_datatables mx-auto">
                <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
            </div>
            <thead>
                <tr class="tr-background">
                    <th>Id</th>
                    <th>Recibido</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Ver</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
            </thead>
        <tbody>
            <tr v-for="(mensaje, index) in mensajes" :key="index">
                <td>{{mensaje.id}}</td>
                <td>{{mensaje.created_at}}</td>
                <td>{{mensaje.nombre}}</td>
                <td>{{mensaje.email}}</td>

                <th>
                    <form @submit.prevent="">
                        <button class="btn btn-primary btn-sm" v-bind:id="'msg' + mensaje.id" @click="leer(mensaje)"><i class="fas fa-eye"></i></button>
                    </form>
                </th>
                <th>
<form @submit.prevent>

    <button v-if="mensaje.status" class="btn btn-info btn-sm" @click="responder(mensaje)">Respondido</button>

    <!-- <button class="btn btn-sm btn-info">Cargando <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i></button> -->


    <button v-else class="btn btn-warning btn-sm" @click="responder(mensaje)">No Respondido</button>

    <!-- <button class="btn btn-sm btn-warning">Cargando <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i></button> -->

                    </form>
                </th>
                <th>
                    <form @submit.prevent>
                        <button class="btn btn-danger btn-sm" @click="eliminar(mensaje.id)"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </th>
            </tr>
        </tbody>
        </table>
</template>
<script>
    import axios from 'axios';
    import datatables from 'datatables';

    export default {
        data() {
            return {
                mensajes: null,
                loader_datatables: true,
                cargando: false
            }
        },
        mounted() {
            this.getMensajes();
        },
        methods: {
            dTable() {
                $(document).ready( function () {
                $('#myTable').DataTable();
                });
            },
            getMensajes: function() {
                axios.get('/api/mensajes').then(response => {
                    this.mensajes = response.data;
                    this.loader_datatables = false
                    this.dTable();
                });
            },
            eliminar(mensaje) {
                Swal.fire({
                    title: 'Desea eliminar este mensaje',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#13b7da',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, borrar!'
                    }).then((result) => {
                    if (result.value) {
                        axios.delete(`/api/mensajes/${mensaje}`)
                        .then(() => {
                            this.getMensajes();
                            toastr.success('Mensaje eliminado');
                        })
                    }
                    })
            },
            responder(mensaje) {
                const status = mensaje.status;
                const params = {};
                this.cargando = true;
                if (status) {
                    const params = {status: false};
                    axios.put(`/api/mensajes/${mensaje.id}`, params)
                    .then(resp => {
                        console.log(mensaje.id);
                        this.cargando = false;
                        this.getMensajes();
                        toastr.info('Mensaje marcado como <b>no respondido</b>!');
                    })
                    .catch(error => toastr.error('Sucedio algun error</b>!'))
                } else {
                    const params = {status: true};
                    axios.put(`/api/mensajes/${mensaje.id}`, params)
                    .then(resp => {
                        console.log(mensaje.id);
                        this.cargando = false;
                        this.getMensajes();
                        toastr.info('Mensaje marcado como <b>respondido</b>!');
                    })
                    .catch(error => toastr.error('Sucedio algun error</b>!'))
                }
            },
            leer(mensaje) {
                Swal.fire({
                width: 800,
                title: '<h4>Mensaje Recibido el '+mensaje.created_at+' | '+mensaje.recibido+'</h4>',
                html: '<hr/><div class="mensaje-sweet"><p> <b>De: </b>'+mensaje.nombre+'<b> - Email: </b>'+mensaje.email+'<p> <b>Localidad: </b>'+mensaje.localidad+' - '+mensaje.provincia+' - '+mensaje.pais+'</p>'+'<p> <b>Teléfono: </b>'+mensaje.telefono+'<b> - Empresa: </b>'+mensaje.empresa+'</p>'+'<hr/>'+'<p> <b>Mensaje: </b>'+mensaje.mensaje+'</p>'+'<hr/></div>',
                focusConfirm: false,
                })
            }
        }
    }
</script>
