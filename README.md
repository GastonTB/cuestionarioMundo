
# Calles de Chile

Sistema para Revisar las Calles existentes en Chile.


## Funcionalidades

- Ingresar Nuevas Calles.
- Listar Calles Existentes.
- Eliminar Calles.
- Modificar Calles Existentes.
- Aplicacion de filtros:
    - Filtrar por Región.
    - Filtrar por Província.
    - Filtrar por Ciudad.
- Desactivar los filtros.

## Partes del Proyecto

- FrontEnd:
    - El FrontEnd fue realizado con ReactJs y se encuentra en el directorio "front".
    - Para hacer funcionar el FrontEnd hay que seguir los siguientes pasos:
        1. Estando en la carpeta raiz del proyecto, escribir en consola lo siguiente:
        `cd front`

        2. Escribir en la consola lo siguiente:
        `npm install`

        3. Escribir en la consola lo siguiente:
        `npm start`
- BackEnd:
    - El BackEnd fue relizado con Laravel y se encuentra en el directorio "api".
    - Se recomienda probar esta aplicación en localhost.

        - Si se prueba el proyecto en localhost:
            - Crear una base de datos llamada "api".
            - Credenciales: username = "root" y password = "" (sin contraseña).
    
    - Si se va a probar con otra base de datos u otro usuario por favor configurar el archivo .env con su información.

    - Si se desea probar el proyecto en un servidor externo, habra que modificar los endpoints  de toda la aplicacion.
    - Para hacer funcionar el BackEnd:
        1. Estando en la carpera raiz del proyecto, escribir en la consola lo siguiente:
        `cd api`

        2.  Escribir en la consola lo siguiente:
        `composer install`

        3. Crea un archivo .env en la raíz del proyecto. Puedes copiar el contenido de .env.example y adaptarlo a tus necesidades.
        `mv .env.example .env`

        4. Escribir en la consola lo siguiente:
        `php artisan key:generate`
        
        5. Escribir en la consola lo siguiente:
        `php artisan migrate --seed`
        
        5. Escribir en la consola lo siguiente:
        `php artisan serve`

- Si todo se realizo correctamente el proyecto deberia correr sin problemas.

    



## Autor

- Gastón Toledo Becerra. [@GastonTB	](https://www.github.com/GastonTB	)

