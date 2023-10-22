# inmuebles

## <u>Parte publica</u>

Este proyecto busca la creacion de un sitio web donde una inmobiliaria pueda publicar sus inmuebles para poder alquilarlas por habitaciones.

Desde la pagina de inicio puedes ver algunos inmuebles destacados o filtrar para buscar el que mas se adecue a tus necesidades, estos filtros son:

    - tipo [ inmueble | habitacion ]

    - Zona [ Elegir entre todas las zonas incluidas por el administrador dentro del sitio web ]

    - Habitacion doble [ Any | Si | No ]

    - Terraza [ Any | Si | No ]

    - Baño privado [ Any | Si | No ]

    - Piscina [ Any | Si | No ]

    - Calefaccion [ Any | Si | No ]

    - Precio maximo [ Un intervalo entre 100€ y 3000€ mensuales ]

A continuacion en la barra de navegacion tienes los enlaces correspontientes para ver todas las habitaciones o todos los inmuebles.

Si filtramos por inmuebles nos saldran todos los inmuebles disponibles y dentro de este nos apareceran todas las habitaciones de este, si alguna ya esta ocupada cambiara el sombreado de la imagen y lo indicara sobre la misma.

La pagina de Contacto es un formulario con los siguientes campos:

    1. Informacion de contacto

    - Nombre
    - Apellidos
    - Correo electronico
    - Numero de telefono

    1. ¿En que te podemos ayudar?
    - Asunto
    - Mensaje

Toda esta informacion se guardara en la base de datos y se podra revisar posteriormente por un administrador

existe una pagina "oculta" llamada login, en esta los usuarios se pueden identificar como administrador y seran redirigidos al panel de administracion.

## <u>Parte Privada</u>

El panel esta basado en Adminlte 3.2.0.
En el menu lateral tiene los enlaces para poder modificar todos los apartados relevantes como son:

- Usuarios
- Localizaciones
- Inmuebles
- Habitaciones
- Comentarios

### Usuarios

Los administradores pueden registrar nuevos usuarios administradores. Estos se pueden logear y contaran con los mismos privilegios que los administradores creados inicialmente.
Solo son necesarios los campos:

- Nombre
- Contraseña

### Localizaciones

Los administradores pueden registrar nuvas ubicaciones para los inmubles.
La relacion entre estas dos entidades es 1:N siendo N los inmuebles.

El unico dato necesario para crear una localización es el nombre de esta

Todas las localizaciones se pueeden borrar salvo la localización 0, esta se usa por defecto para aquellos inmuebles en los que no se espeficique su localización

### Inmuebles

Dentro de la pagina de inmuebles pueden crear nuevos inmuebles rellenando:

- Nombre
- Localizacion [ Entre todas las localizaciones ]
- Imagen [ opcional ]

Todos estos datos se pueden modificar, dentro de este formulario de edicion se pueden ver las habtiaciones relacionados a este inmueble

Si se elimina el inmueble, y tiene una imagen relacionada, esta se borra de disco.

### Habitacioens

Dentro de la pagina de habitacioen se pueden crear nuevas habitaciones con los datos:

- Nombre
- Introduccion
- Texto
- Precio
- Inmueble
- imagen

Todas las habitaciones se pueden editar y borrar

### Comentarios

En esta seccion aparecen los comentariosde los usuarios que han rellenado el formulario de contacto.
Cuando hay un mensaje nuevo aparecera marcado y una vez se habra se quitara esa marca.
