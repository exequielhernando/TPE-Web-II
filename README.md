# TPE-Web-II

Proyecto Web II (Utilizacion de MVC en php)

Consigna

Desarrollar un sitio web dinámico que permita visualizar items con sus categorías, los cuales pueden ser administrados 
por un usuario administrador. 
 
Requerimientos Funcionales

Usuario visitante/anónimo

Debe tener 2 paginas donde se muestre el contenido dinámicamente generado de la base de datos. 
Se debe poder visualizar todos los items (Listado de Items)
Se debe poder navegar y visualizar cada item particularmente (detalle de item)
Se debe poder visualizar todas las categorías (listado de categorías)
Se debe poder visualizar los items ordenados por categorías.
Importante: En cada item siempre se debe mostrar la categoría a la que pertenece (el nombre de la misma).

Administrador de Datos

Debe haber una página de administración, la cual se accede mediante “nombre de usuario” y “contraseña”. El usuario puede salir del modo “administrador” (logout).
Solo los usuarios logueados pueden modificar las categorías y los items. Los usuarios visitantes pueden ver el sitio sin loguearse .
Se debe crear servicios de ABM (alta/baja/modificación) para administrar los datos:
Administrar Items (entidad del lado N de la relación).
Lista de Items (Noticias/Productos/…)
Agregar Items (Noticias/Productos/…)
Eliminar Items (Noticias/Productos/…)
Editar Items (Noticias/Productos/…)

Importante: 

Al agregar Items (Noticias/Productos/…) se debe poder elegir la categoría a la que pertenecen utilizando un dropdown que muestre el nombre de la misma. 
Administrar Categorías (entidad del lado 1 de la relación)
Lista de Categorias
Agregar Categorias
Eliminar Categorias
Editar Categorias.
Como dueño del sitio, quiero poder loguearme para administrar el sitio. 

Requerimientos Técnicos (no funcionales)

Todos los HTML deben mostrarse utilizando una plantilla (Smarty).
Todas las acciones realizadas en la página deben estar manejadas utilizando el patrón MVC.
Las URL deben ser amigables.
El sitio debe generar su base de datos con datos iniciales al momento de cargarlo por primera vez. **opcional**
