// Clase para gestionar los datos de las mediciones
class datosMediciones {

    // URL
    url = "/src/api/mediciones";

    async getMediciones(){
        const respuesta = await fetch(this.url, {
            method: 'GET',
        });
        if(!respuesta.ok){
            return false;
        }
        this.datos = await respuesta.json();
        return this.datos;
    }
}
