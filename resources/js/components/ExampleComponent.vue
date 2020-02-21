<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>lista del personal</h3>
                    </div>
                    <div class="card-body">
                        <ul v-for="usuario in filtrarUsuarios" class="nav">
                            <li class="border border-primary shadow pt-3 mb-4 bg-white rounded">
                                <div class="row">
                                    <div class="col-md-4">
                                      <p><img :src="usuario.foto" :alt="usuario.nombre" class="shadow-sm p-1 bg-white rounded" /></p>
                                    </div>
                                    <div class="col-md-8">
                                      <h3>{{usuario.nombre}}</h3>
                                      <p>{{usuario.correoe}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created(){
            axios.get('https://randomuser.me/api/?results=50').then((respuesta)=>{
                const listado = respuesta.data.results.map((usuario)=>{
                  return {
                    nombre: `${usuario.name.title} ${usuario.name.first} ${usuario.name.last}`,
                    correoe: usuario.email,
                    foto: usuario.picture.medium
                  };
                });
                this.usuarios = listado;
            });
        },
        mounted() {
            console.log('Component mounted v3.')
        },
        data(){
            return {
                usuarios: [],
                buscar: '',
            }
        },
        computed:{
            filtrarUsuarios(){
              return this.usuarios.filter((usuario)=>{
                return usuario.nombre.includes(this.buscar);
              });
            }
        }
    }
</script>
