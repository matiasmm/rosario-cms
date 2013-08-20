Rosario-CMS
===========

CMS Basado en Symfony2

## Objetivos ##
* sitio institucional/estatico (objetivo #1)
* Fuerte integración JS(posiblemente angularJS)
* Extensible (poder agregar nuevos tipos de contenidos)
  * Pag, Directorio (Primero)
  * Calendario, 
  * Blog, Blog Post
  * Etc, etc
* Skineable
  * Estructura (Como se muestra cada contenido, ie pagina)
  * Coordinador (Como se listan los contenidos incluidos, ie directorios, la idea es poder cambiarlo solo para el directorio actual)
  * Assets (js/css/imagenes)

## Componentes ##
El CMS se compone de dos componentes principales, contenidos y presentadores.

### Presentadores ###
 Los presentadores se encargan de mostrar el contenido en todo momento, como minimos deben existir los siguiente presentadores 

 * Organizador 
	setea los bloques posibles, por ejemplo 'cabecera', 'menu', 'contenido', cada uno de estos puede ser completado por otro presentador.
	Pueden existir varios
 * Crudo
        para mostrar contenido sin modificaciones (especialmente binario, imagenes, js, css)
 * Especifico 
	Lista un contenido de una forma especifica.
	Debe existir al menos uno por cada contenido.
        
### Contenido ###
 Cada contenido define sus propios datos asi como las relaciones con otros contenido.
 * Binario 
 * P´agina 
 * Directorio 
