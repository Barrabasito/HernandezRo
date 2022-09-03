# ***Modelo de Caja HTML***

*Todos los elementos de los documentos HTML(páginas) se representan mediante cajas rectangulares.*

*Cada vez que se inserta una etiqueta HTML, se crea una nueva caja rectangular que encierra el contenido de la etiqueta.* 

*Todo lo que muestra CSS es una caja.
Por lo tanto, comprender cómo funciona el modelo de caja CSS es una base fundamental de CSS.*

***La representación básica del modelo de cajas se basa en varios conceptos importantes, como veremos a continuación:***

* El **borde** (*border*), en negro, es el límite que separa el interior del exterior del elemento.
* El **márgen** (*margin*), en naranja, es la parte exterior del elemento, por fuera del borde.
* El **relleno** (*padding*), en verde, es la parte interior del elemento, entre el contenido y el borde.
* El **contenido** (*content*), en azul, es la parte interior del elemento, excluyendo el relleno.

![Partes_ModeloDeCaja](https://lenguajecss.com/css/modelo-de-cajas/que-es/modelo-de-cajas.png)

# **EJEMPLO**

*Digamos que tienes este fragmento de HTML:*

>**<_p_>Soy un párrafo de texto y tengo algunas palabras.<_/p_>**  

*Luego escribes este CSS para el párrafo anterior:*


>p {  
  width: 100px;  
  height: 50px;  
  padding: 20px;  
  border: 1px solid;  
}  

***El contenido saldría de su elemento** y tendría 142px de ancho, en lugar de 100px. ¿Porqué sucede eso? El modelo de caja es una base fundamental de CSS y comprender cómo funciona, cómo se ve afectado por otros aspectos de CSS y, lo que es más importante, cómo puedes controlarlo te ayudará a escribir un CSS más predecible.*
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>

![]()

***
REFERENCIAS    

PDF visto en clase: Modelo de Caja  
https://lenguajecss.com/css/modelo-de-cajas/que-es/  
https://web.dev/i18n/es/learn/css/box-model/
