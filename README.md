# Implementación de PecerasGratis en GCP
---
#### Materia: Desarrollo de Aplicaciones en la Nube

##### Campus: Santa Fe

##### Integrantes:
1. Isaac Halabe Husny
2. Mauricio Rico Zavala

---
## 1. Aspectos generales

### 1.1 Requerimientos técnicos

A continuación se mencionan los requerimientos técnicos mínimos del proyecto, favor de tenerlos presente para que cumpla con todos.

* El equipo tiene la libertad de elegir las tecnologías de desarrollo a utilizar en el proyecto, sin embargo, debe tener presente que la solución final se deberá ejecutar en una de las siguientes plataformas en la nube: [Google Cloud Platform](https://cloud.google.com/?hl=es), [Amazon Web Services](https://aws.amazon.com/) o [Microsoft Azure](https://azure.microsoft.com/es-mx/).
* El proyecto deberá utilizar 
* La solución debe utilizar una arquitectura de microservicios. Si no tiene conocimiento sobre este tema, le recomendamos la lectura [*Microservices*](https://martinfowler.com/articles/microservices.html) de [Martin Fowler](https://martinfowler.com).
* La arquitectura debe ser modular, escalable, con redundancia y alta disponibilidad.
* La arquitectura deberá estar separada claramente por capas (*frontend*, *backend*, *API RESTful*, datos y almacenamiento).
* Deberá utilizarse contenedores [Docker](https://www.docker.com/) y un orquestador como [Kubernetes](https://kubernetes.io/).
* La API deberá utilizar autenticación y estar desplegada detrás de un API Manager como [Cloud Endpoints](https://cloud.google.com/endpoints/).
* El proyecto deberá contar con los archivos de configuración y *scripts* necesarios para crear toda la infraestructura necesaria, utilizando alguna solución de *Infraestructure as a Code* como [Deployment Manager](https://cloud.google.com/deployment-manager/).
* Todo el código, *datasets* y la documentación del proyecto debe alojarse en este repositorio de GitHub. Favor de mantener la estructura de carpetas propuesta.

### 1.2 Estructura del repositorio
El proyecto debe seguir la siguiente estructura de carpetas, la cual generamos por usted:
```
- / 			        # Raíz de todo el proyecto
    - README.md			# Archivo con los datos del proyecto (este archivo)
    - frontend			# Carpeta con la solución del frontend (Web app)
    - backend			  # Carpeta con la solución del backend (CMS)
    - api			      # Carpeta con la solución de la API
    - datasets		  # Carpeta con los datasets y recursos utilizados (csv, json, audio, videos, entre otros)
    - dbs			      # Carpeta con los modelos, catálogos y scripts necesarios para generar las bases de datos
    - models			  # Carpeta donde se almacenarán los modelos de Machine Learning ya entrenados
    - docs			    # Carpeta con la documentación del proyecto
```

### 1.3 Documentación  del proyecto

Como parte de la entrega final del proyecto, se debe incluir la siguiente información:

* Descripción del problema a resolver.
* Diagrama con la arquitectura de la solución.
* Descripción de cada uno de los componentes de la arquitectura.
* Justificación de los componentes seleccionados.
* Explicación del flujo de información en la arquitectura.
* Descripción de las fuentes de información utilizadas (archivos CSV, JSON, TXT, bases de datos, entre otras).
* Guía de configuración, instalación y despliegue de la solución en la plataforma en la nube seleccionada.
* Documentación de la API. Puede ver un ejemplo en [Swagger](https://swagger.io/). 
* El código debe estar documentado siguiendo los estándares definidos para el lenguaje de programación seleccionado.

## 2. Descripción del proyecto

El proyecto que se estará implementando a la plataforma de la nube es un sitio web de control de una empresa orientada a la venta de peceras. Este proyecto presenta una interesante situación que puede ser adaptada a la plataforma de la nube sin ser un proyecto de un tamaño que no se pueda considerar para este tiempo de implementación. Este proyecto utiliza de tres principales aplicaciones, una de front-end, una de back-end y los servicios apis para el correcto funcionamiento. 

Las herramientas que se utilizan para poder implementar estos tres sectores mencionados anteriormente son los siguientes:

* *Front-End* : React JS
* *Back-End* : Laravel
* *Base de Datos* : SQL

En el caso específico de este proyecto la herramienta propuesta lleva a cabo las siguientes funciones de planificación para la empresa que la utiliza:

1. Ventas de peceras.
2. Modificación y configuración de peceras por parte de los clientes.
3. Control de ventas de peceras por parte del backend.
4. Información de peceras.

## 3. Solución

A continuación aparecen descritos los diferentes elementos que forman parte de la solución del proyecto.

### 3.1 Arquitectura de la solución

*[Incluya aquí un diagrama donde se aprecie la arquitectura de la solución propuesta, así como la interacción entre los diferentes componentes de la misma.]*

*[Incluya una explicación del flujo de la información entre los diferentes componentes.]*

### 3.2 Descripción de los componentes

*[Incluya aquí una descripción detallada de cada uno de los componentes de la arquitectura así como una justificación de la selección de cada componente]*

### 3.3 Frontend

![React Logo](./docs/react_logo.png)

Para la solución de frontend, la herramienta esta desarrollada principalmente en Javascript utilizando ReactJS. El Framework de ReactJS es uno de los más utilizados en años recientes debido a la facilidad que ofrece para poder crear interfaces de usuario. Esta solución es adecuada para plataformas con un enfasis en simplicidad y usabilidad con su habilidad de crear aplicaciones de "una página" y cuentan con flexibilidad para la integración de extensas librerías. Como se describió anteriormente, la aplicación de ReactJS reside en un contenedor de Docker que es controlado con el uso de Kubernetes y así conectado con la plataforma de GCP.

#### 3.3.1 Lenguaje de programación
Javascript principalmente
#### 3.3.2 Framework
ReactJS
#### 3.3.3 Librerías de funciones o dependencias

* axios: 0.18.0
* google-map-react: 1.0.9
* rc-progress: 2.2.6
* react: 16.5.2
* react-dnd: 5.0.0
* react-dnd-html5-backend: 5.0.1
* react-dom: 16.5.2
* react-iframe: 1.3.3
* react-scripts: 2.1.3
* react-tabs: 2.3.0

### 3.4 Backend

![Laravel Logo](./docs/laravel_logo.jpg)

Para la solución de Backend se utilizó la herramienta de Laravel. Laravel presenta un elegante framework para web que permite tener un desarrollo basado en PHP pero mantiene un tipo de boilerplate o templates básicos reduciendo la complejidad para acciones comúnes como:

* Autenticación
* Ruteo
* Sesiones
* Cacheo

Esta herramienta permite que el desarrollo por parte del backend sea más sencillo y una vez teniendo los elementos conectados, el control que se tiene como resultado es lo que ayuda a mantener Laravel como herramienta principal de backend. De la misma manera que se utiliza el contenedor de Docker y orquestación de Kubernetes como se hizo con el front-end, se usa para esta solución.

#### 3.4.1 Lenguaje de programación
PHP principalmente
#### 3.4.2 Framework
Laravel
#### 3.4.3 Librerías de funciones o dependencias
* axios: 0.18
* bootstrap: 4.0.0
* cross-env: 5.1
* jquery: 3.2
* laravel-mix: 4.0.7
* lodash: 4.17.5
* popper.js: 1.12
* resolve-url-loader: 2.3.1
* sass: 1.15.2
* sass-loader: 7.1.0
* vue: 2.5.17

### 3.5 API

La implementación de las APIs que utiliza la aplicación se basa en un API Manager por parte de Google Cloud. Debido a la integración que mantiene la plataforma de nube de Google cloud con respecto a los APIs y los contenedores donde se encontrarán las aplicaciones que hagan uso de los mismos APIs. 

#### 3.5.1 Lenguaje de programación
#### 3.5.2 Framework
#### 3.5.3 Librerías de funciones o dependencias


#### Get Tanks: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Get Basic Materials: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Get Decoration: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Get Fish: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Get Packages: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Get Price: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Set Client Info: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Create Session: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Show Session: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Update Session: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Delete Session: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Get Price from Liters: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Send Mail: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

#### Add to Newsletter: 
* **Descripción**:
* **URL**:
* **Verbos HTTP**:
* **Headers**:
* **Formato JSON del cuerpo de la solicitud**: 
* **Formato JSON de la respuesta**:

## 3.6 Pasos a seguir para utilizar el proyecto

*[Incluya aquí una guía paso a paso para poder utilizar el proyecto, desde la clonación de este repositorio hasta el despliegue de la solución en una plataforma en la nube.]*

## 4. Referencias

Algunos sitios de interés para el desarrollo y uso de esta implementación.

* React JS: https://reactjs.org/docs/getting-started.html
* Laravel: https://laravel.com/docs/6.x
