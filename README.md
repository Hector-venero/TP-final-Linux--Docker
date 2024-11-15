TP Final - Docker con MySQL
Este proyecto es un entorno de desarrollo configurado con Docker que incluye un servidor web PHP y una base de datos MySQL. Su objetivo es facilitar el despliegue y la administración de aplicaciones web que utilizan bases de datos relacionales, permitiendo ejecutar y administrar servicios de manera sencilla y aislada en contenedores.

Estructura del Proyecto
El proyecto incluye los siguientes servicios en contenedores Docker:

MySQL: Utiliza una instancia de MySQL para la persistencia de datos. Se configura con un volumen para almacenar los datos de manera persistente y mantener la información, incluso cuando se detiene o elimina el contenedor.
PHP-FPM: Configura PHP en modo FastCGI para procesar scripts PHP de manera eficiente.
Nginx: Actúa como servidor web, manejando las solicitudes HTTP y sirviendo los archivos estáticos, además de conectarse a PHP-FPM para la ejecución de scripts.
