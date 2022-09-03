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

*Una cosa realmente importante para recordar al escribir CSS, o al trabajar en la web en general, es que todo lo que muestra CSS es una caja. Ya sea que uses border-radius en una caja para que se parezca a un círculo, o incluso solo un texto: la clave a recordar es que todo es una caja.*

>**Término clave**  
*Cuando el contenido es demasiado grande para la caja en la que se encuentra, lo llamamos desbordamiento. Puedes definir cómo un elemento maneja el contenido de desbordamiento, utilizando la propiedad de **overflow.***  

# ***Una analogía útil***

*El modelo de caja es complejo de entender, así que recapitulemos lo que entendemos con una analogía.*  

![Analogía](https://web-dev.imgix.net/image/VbAJIREinuYvovrBzzvEyZOpw5w1/FBaaJXdnuSkvOx1nB0CB.jpg?auto=format&w=845)

*En este diagrama, tienes tres fotos con marcos, montados en una pared, uno al lado del otro. El diagrama tiene etiquetas que asocian elementos del marco con el modelo de caja.*

*Para descomponer esta analogía:*

* La caja de ***contenido*** es la obra de arte.  
* La caja de ***padding*** es el blanco mate, entre el marco y la obra de arte.
* La caja de ***borde*** es el marco, que proporciona un borde literal para la obra de arte.
* La caja de ***margen*** es el espacio entre cada cuadro.
* La sombra ocupa el mismo espacio que la caja de margen.

***
**REFERENCIAS**    

PDF visto en clase: Modelo de Caja  
https://lenguajecss.com/css/modelo-de-cajas/que-es/  
https://web.dev/i18n/es/learn/css/box-model/
