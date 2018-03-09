Este proyecto es una apirest con CodeIgniter cuyo fin será mostrar
los datos de una BD mysql, aunque tambien podremos añadir
datos a estas, modificarlos y eliminarlos con los siguientes comandos.

curl -X POST -H 'Content-Type: application/json' -d '{"numero":"1","url":"www.google.es","descripcion":"google"}' localhost/TPMarzo2/Fu$

Para eliminar
curl -X DELETE -H 'Content-Type: application/json' localhost/TPMarzo2/Funcbd/numero

Aunque cuando hacemos un post solo nos guarda el numero, lo demás lo pone como "null", proximamente buscaré
soluciones y lo mejoraré
