<template>
    <div class="container">
            <table class="table table-hover table-striped">
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
                <tr v-for="(mensaje) in mensajes">
                    <td v-text="mensaje.id"></td>
                    <td v-text="mensaje.created_at"></td>
                    <td v-text="mensaje.nombre"></td>
                    <td v-text="mensaje.email"></td>
                    <th>
                        <form @submit.prevent="">
                            <button class="btn btn-primary btn-sm" @click="leer(mensaje)">Ver</button>
                        </form>
                    </th>
                    <th>
                        <form @submit.prevent="" v-if="mensaje.status === 'RESP'">
                            <button class="btn btn-info btn-sm" @click="responder(mensaje)">Respondido</button>
                        </form>
                        <form @submit.prevent="" v-else>
                            <button class="btn btn-warning btn-sm" @click="responder(mensaje)">No Respondido</button>
                        </form>
                    </th>

                    <th>
                        <form @submit.prevent="">
                            <button class="btn btn-danger btn-sm" @click="eliminar(mensaje.id)">Eliminar</button>
                        </form>
                    </th>
                </tr>
            </tbody>
            </table>
        </div>
</template>
<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                mensajes: null
            }
        },
        mounted() {
            this.getMensajes();
        },
        methods: {
            getMensajes: function() {
                axios.get('/api/mensajes').then(response => {
                    this.mensajes = response.data
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
                        })
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                            })
                    }
                    })
            },
            responder(mensaje) {
                const status = mensaje.status;
                const params = {};
                if (status === 'RESP') {
                    const params = {status: 'NORESP'} ;
                    axios.put(`/api/mensajes/${mensaje.id}`, params)
                    .then(resp => {
                        this.getMensajes();
                    })

                } else {
                    const params = {status: 'RESP'} ;
                    axios.put(`/api/mensajes/${mensaje.id}`, params)
                    .then(resp => {
                        this.getMensajes();
                    })
                }

            }
        }
    }
</script>
