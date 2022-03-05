<template lang="es">
    <input type="submit" class="btn btn-danger d-block mb-1 w-100" value="X" v-on:click='eliminarPaciente'>
</template>
<script>
export default {
    props: ["odontologiaId"],
    // mounted() {
    //     console.log("Paciente a eliminar", this["odontologia-Id"]);
    // },
    methods: {
        eliminarPaciente() {
            // this.$swal({
            //     title: "Probando alerta",
            //     text: "Hola",
            //     icon: "success",
            // });
            this.$swal
                .fire({
                    title: "Esta seguro que desea elminar el Paciente?",
                    text: "Una ves eliminado el Paciente no se puede recuperar!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si",
                    cancelButtonText: "Cancelar",
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        const params = {
                            id: this.odontologiaId,
                        };
                        axios
                            .post(`/odontologias/${this.odontologiaId}`, {
                                params,
                                _method: "delete",
                            })
                            .then((respuesta) => {
                                console.log(respuesta);
                                this.$swal({
                                    title: "Eliminado!",
                                    text: "El Paciente fue eliminado",
                                    icon: "success",
                                });
                                //eliminar paciente
                                this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                            })
                            .catch((error) => {});
                    }
                });
        },
    },
};
</script>
<style lang=""></style>
