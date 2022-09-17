# ***Flexbox***
 *Lo primero que debemos hacer es conocer algunos de los elementos básicos de este nuevo esquema, que son los siguientes:*      
<br>

 ![Flexbox](https://lenguajecss.com/css/maquetacion-y-colocacion/flexbox/flexbox-como-funciona.png)

 - **Contenedor:** Es el elemento padre que tendrá en su interior cada uno de los ítems flexibles. Observa que al contrario que muchas otras estructuras CSS, por norma general, en Flex establecemos las propiedades al elemento padre.

 - **Eje principal:** Los contenedores flexibles tendrán una orientación principal específica. Por defecto, el eje principal del contenedor flexbox es en horizontal (en fila).
  
 - **Eje secundario:** De la misma forma, los contenedores flexibles tendrán una orientación secundaria, perpendicular a la principal. Si la principal es en horizontal, la secundaria será en vertical (y viceversa).
  
 - **Ítem:** Cada uno de los hijos que tendrá el contenedor en su interior.  
<br>

***Cómo se ve en HTML:***  

![HTML](https://8thlight.com/blog/assets/posts/2016-04-15-alleviate-frontend-dev-pains-with-flexbox/parent-collapses-clearfix-0f3263575d11cbb0c23593613ad8a95a59aef99f4952875c37d939471cc5e75e.gif)    

***  

*Para activar el **modo flexbox**, se utiliza sobre el elemento contenedor la propiedad display, y especificar el valor flex o inline-flex (dependiendo de como queramos que se comporte el contenedor):*  
<br>
>***inline-flex:**	Establece un contenedor en línea, similar a inline-block (ocupa solo el contenido).  
**flex:**	Establece un contenedor en bloque, similar a block (ocupa todo el ancho del padre).*    

<br>

# ***Dirección de los ejes***
Existen dos propiedades principales para manipular la dirección y comportamiento de los ítems a lo largo del eje principal del contenedor. Son las siguientes:

Propiedad |                    Valor                         | Significado |
-------------- | --------------------------------------------| ------------|
**flex-direction** | row  row-reverse  column  column-reverse|Cambia la orientación del eje principal.|  

*Mediante la propiedad **flex-direction** podemos modificar la dirección del eje principal del contenedor para que se oriente en horizontal (por defecto) o en vertical. Además, también podemos incluir el sufijo -reverse para indicar que coloque los ítems en orden inverso.*  

Valor |                    Descripción                       |
-------------- | --------------------------------------------| 
**row** | Establece la dirección del eje principal en horizontal.|
**row-reverse** | Establece la dirección del eje principal en horizontal (invertido).|
**column** | 	Establece la dirección del eje principal en vertical.|
**column-reverse** | Establece la dirección del eje principal en vertical (invertido).|  

<br>

# ***Contenedor flexbox multilínea***
*Por otro lado, existe otra propiedad llamada **flex-wrap** con la que podemos especificar el comportamiento del contenedor respecto a evitar que se desborde (nowrap, valor por defecto) o permitir que lo haga, en cuyo caso, estaríamos hablando de un contenedor flexbox multilinea.*  

Propiedad |                    Valor                         | Significado |
-------------- | --------------------------------------------| ------------|
**flex-wrap** | nowrap  wrap wrap-reverse|Evita o permite el desbordamiento (multilinea).|  

*Los valores que puede tomar esta propiedad, son las siguientes:*  
Valor |                    Descripción                       |
-------------- | --------------------------------------------| 
**nowrap** | Establece los ítems en una sola línea (no permite que se desborde el contenedor).|
**wrap** | Establece los ítems en modo multilínea (permite que se desborde el contenedor).|
**wrap-reverse** | Establece los ítems en modo multilínea, pero en dirección inversa.|

<br>

# ***Atajo: Dirección de los ejes***
*Recuerda que existe una propiedad de atajo (short-hand) llamada **flex-flow**, con la que podemos resumir los valores de las propiedades **flex-direction y flex-wrap**, especificándolas en una sola propiedad y ahorrándonos utilizar las propiedades concretas:*
>.container {  
 /* flex-flow: <**flex-direction**> <**flex-wrap**>; */  
  flex-flow: row wrap;  
}

<br>

# ***Propiedades de alineación***
*Ahora que tenemos un control básico del contenedor de estos ítems flexibles, necesitamos conocer las propiedades existentes dentro de flexbox para disponer los ítems dependiendo de nuestro objetivo. Vamos a echar un vistazo a 4 propiedades interesantes para ello, **la primera de ellas actua en el eje principal**, mientras que **el resto en el eje secundario**:*  

Propiedad |                    Valor                         | Eje |
-------------- | --------------------------------------------| ------------|
**justify-content** | flex-start  flex-end  center  space-between  space-around  space-evenly|1|  
**align-content** |flex-start  flex-end  center  space-between  space-around  space-evenly  stretch|2|  
**align-items** | flex-start  flex-end  center  stretch  baseline|2|  
**align-self** | auto  flex-start  flex-end  center  stretch  baseline|2|  

*De esta pequeña lista, hay que centrarse en primer lugar en la primera y la tercera propiedad, que son las más importantes (las otras dos son casos particulares que explicaremos más adelante):*

* **justify-content:** Se utiliza para alinear los ítems del eje principal (por defecto, el horizontal).
* **align-items:** Usada para alinear los ítems del eje secundario (por defecto, el vertical).

<br>

# ***Sobre el eje principal***
*La primera propiedad, **justify-content**, sirve para colocar los ítems de un contenedor mediante una disposición concreta a lo largo del eje principal:*

Valor |                    Descripción                       |
-------------- | --------------------------------------------| 
**flex-start** | Agrupa los ítems al principio del eje principal.|
**flex-end** | Agrupa los ítems al final del eje principal.|
**center** | Agrupa los ítems al centro del eje principal.|
**space-between** | Distribuye los ítems dejando el máximo espacio para separarlos.|
**space-around** | Distribuye los ítems dejando el mismo espacio alrededor de ellos (izq/dcha).|
**space-evenly** | Distribuye los ítems dejando el mismo espacio (solapado) a izquierda y derecha.|

<br>

*Debemos atender a la propiedad **align-content**, que es un caso particular del anterior. Nos servirá cuando estemos tratando con un contenedor flex multilinea, que es un contenedor en el que los ítems no caben en el ancho disponible, y por lo tanto, el eje principal se divide en múltiples líneas (por ejemplo, usando flex-wrap: wrap).*
 
  
*De esta forma, align-content servirá para alinear cada una de las líneas del contenedor multilinea. Los valores que puede tomar son los siguientes:*

Valor |                    Descripción                       |
-------------- | --------------------------------------------| 
**flex-start** | Agrupa los ítems al principio del eje principal.|
**flex-end** | Agrupa los ítems al final del eje principal.|
**center** | Agrupa los ítems al centro del eje principal.|
**space-between** | Distribuye los ítems desde el inicio hasta el final.|
**space-around** | 	Distribuye los ítems dejando el mismo espacio a los lados de cada uno.|
**stretch** | Estira los ítems para ocupar de forma equitativa todo el espacio.|

<br>

# ***Sobre el eje secundario***
*La otra propiedad importante de este apartado es **align-items**, que se encarga de alinear los ítems en el eje secundario del contenedor. Hay que tener cuidado de no confundir align-content con align-items, puesto que el primero actúa sobre cada una de las líneas de un contenedor multilinea (no tiene efecto sobre contenedores de una sola línea), mientras que align-items lo hace sobre la línea actual. Los valores que puede tomar son los siguientes:*

Valor |                    Descripción                       |
-------------- | --------------------------------------------| 
**flex-start** | Alinea los ítems al principio del eje secundario.|
**flex-end** | Alinea los ítems al final del eje secundario.|
**center** | Alinea los ítems al centro del eje secundario.|
**stretch** | 	Alinea los ítems estirándolos de modo que cubran desde el inicio hasta el final del contenedor.|
**baseline** | Alinea los ítems en el contenedor según la base del contenido de los ítems del contenedor.|

*Por otro lado, la propiedad **align-self** actúa exactamente igual que **align-items**, sin embargo es la primera propiedad de flexbox que vemos que se utiliza **sobre un ítem hijo específico** y **no sobre el elemento contenedor**. Salvo por este detalle, funciona exactamente igual que align-items.*

*Gracias a ese detalle, **align-self** **nos permite cambiar el comportamiento de align-items y sobreescribirlo con comportamientos específicos para ítems concretos que no queremos que se comporten igual que el resto.** La propiedad puede tomar los siguientes valores:*

Valor |                    Descripción                       |
-------------- | --------------------------------------------| 
**flex-start** | Alinea los ítems al principio del contenedor.|
**flex-end** |Alinea los ítems al final del contenedor.|
**center** | Alinea los ítems al centro del contenedor.|
**stretch** | Alinea los ítems estirándolos al tamaño del contenedor.|
**baseline** | Alinea los ítems en el contenedor según la base de los ítems.|
**auto** | Hereda el valor de align-items del padre (si no se ha definido, es stretch).|

*Si se especifica el valor auto a la propiedad align-self, el navegador le asigna el valor de la propiedad align-items del contenedor padre, y en caso de no existir, el valor por defecto: stretch.*

<br>

# ***Atajo: Alineaciones***
*Existe una propiedad de atajo con la que se pueden establecer los valores de align-content y de justify-content de una sola vez, denominada place-content:*

>.container {  
  display: flex;  
  place-content: flex-start flex-end;  
>
>/* Equivalente a... */  
  align-content: flex-start;  
  justify-content: flex-end;  
}

<br>

# ***Propiedades de hijos***
*A excepción de la propiedad **align-self**, todas las propiedades que hemos visto hasta ahora se aplican sobre el elemento **contenedor**. Las siguientes propiedades, sin embargo, se aplican sobre los ítems hijos. Echemos un vistazo:*

Propiedad |                    Valor                         | Descripción |
-------------- | --------------------------------------------| ------------|
**flex-grow** | 0 NUMBER|Número que indica el factor de crecimiento del ítem respecto al resto.|  
**flex-shrink** |1 NUMBER|Número que indica el factor de decrecimiento del ítem respecto al resto.|  
**flex-basis** | SIZE content|Tamaño base de los ítems antes de aplicar variación.|  
**align-self** | 0 NUMBER|Número (peso) que indica el orden de aparición de los ítems.|  

<br>

# ***Atajo: Propiedades de hijos***
Existe una propiedad llamada **flex** que sirve de atajo para estas tres propiedades de los ítems hijos. Funciona de la siguiente forma:

>.item {  
  /* flex: <**flex-grow**> <**flex-shrink**> <**flex-basis**> */  
  flex: 1 3 35%;  
}

<br>

# ***Huecos (gaps)***
*Existen dos propiedades de flexbox que han surgido recientemente: **row-gap y column-gap**. Dichas propiedades, permiten establecer el tamaño de un «hueco» entre ítems desde el elemento padre contenedor, y sin necesidad de estar utilizando padding o margin en los elementos hijos.*

Propiedad |                    Valor                         | Descripción |
-------------- | --------------------------------------------| ------------|
**row-gap** | normal SIZE|	Espacio entre filas (sólo si flex-direction: column)|  
**column-gap** |normal SIZE|Espacio entre columnas (sólo si flex-direction: row)|  

*Ten en cuenta que sólo una de las dos propiedades tendrá efecto, dependiendo de si la propiedad flex-direction está establecida en column o en row. Eso sí, es posible usar ambas si tenemos la propiedad flex-wrap definida a wrap y, por lo tanto, disponemos de multicolumnas flexbox.*

<br>

# ***Atajo: Huecos***
*En el caso de que queramos utilizar una propiedad de atajo para los huecos, podemos utilizar la propiedad **gap**:*

Propiedad |                    Valor                         | Descripción |
-------------- | --------------------------------------------| ------------|
**gap** | 0 SIZE|Aplica el tamaño indicado para el hueco en ambos ejes.|  
**gap** |0 0 SIZE SIZE|Aplica los tamaños indicados para el hueco del eje X y el eje Y.|  

*Y veamosla en práctica:*
>.container {  
  /* gap: <**row**> <**column**> */  
  gap: 4px 8px;  
>
>/* 1 parámetro: usa el mismo para ambos */  
  gap: 4px;  
}

<br>

# ***Orden de los ítems***
*Por último, y quizás una de las propiedades más interesantes, es order, que modificar y establece el orden de los ítems según una secuencia numérica.*

*Por defecto, todos los ítems flex tienen un order: 0 implícito, aunque no se especifique. Si indicamos un order con un valor numérico, **irá recolocando los ítems según su número, colocando antes los ítems con número más pequeño (incluso valores negativos) y después los ítems con números más altos**.*

***
###  **REFERENCIAS**
https://lenguajecss.com/css/maquetacion-y-colocacion/flexbox/  
https://es.acervolima.com/css-flexbox-y-sus-propiedades/  
https://www.mclibre.org/consultar/htmlcss/css/css-flexbox.html