# sitensoBack

How to use this app? Please see the link bellow
[Installation vuexy Laravel](https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-laravel-installation.html)



## Developers Routes
## Request Post Developers

### Route /api/developers

En esta ruta enviendo los campos correspondientes, se crean nuevos desarrolladores:

| Campo | Requiredo | Tipo | default |
| ------ | ------- | ---- | -------- |
| developerName| **SI** | String | null |
| occupation | **SI** | String | null |
| position | **SI** | String | null |
| skill | **SI** | String | null |

***Request Exitosa***

Si la request fue exitosa la respuesta contendrá los siguientes campos 

| Campo | Tipo |
| ------ | ---- |
| message| String |
| lastID | Int |

***Request Erronea***

La respuesta tendrá los siguientes campos:

| Campo | Tipo |
| ------ | ---- |
| message| String |
| errors | Object |

- En el campo message habrá una pequeña descripción del error
- En el campo errors habrá información más detallada del/los error/res



## Request Get Developers by ID

### Route /api/developers/{id?}

En esta ruta enviando el ID de un desarrollador, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos del desarrollador buscado en un objeto:

| Campo | Tipo |
| ----- |----- |
| developerName | String
| occupation | String
| position | String
| skill | String

El campo **message** indica: 
> Get Developer Successfully

***Request Erronea***
Compo result = array vacio
El campo **message** indica: 
> Record/s not found.




## Request Get Developers by query param ID

### Route /api/developers?developerID=1

En esta ruta enviendo el ID de un desarrollador como parametro de la url, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos del desarrollador buscado en un objeto:

| Campo | Tipo |
| ----- |----- |
| developerName | String
| occupation | String
| position | String
| skill | String

El campo **message** indica: 
> Get Developer Successfully

***Request Erronea***
Compo result = array vacio
El campo **message** indica: 
> Record/s not found.



## Request Delete Developer

### Route /api/developer/{id?}

Se debe enviar el ID de un desarrollador

### Request Exitosa

Status code 201 No Content

### Request Erronea

Si la request es erronea, obtenemos el siguiente campo

| Campo | Tipo | Valor |
| ------ | ----- | ---- |
| message | String | An error has ocurred when try to delete Developer|



## Request Get Devs All

### Route /api/developers

Realizando una request a esta ruta sin ningún parametro ni identificador, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos del desarrollador buscado en un objeto:

| Campo | Tipo |
| ----- |----- |
| developerName | String
| occupation | String
| position | String
| skill | String

El campo **message** indica: 
> Get Developer Successfully

***Request Erronea***

Compo result = array vacio
El campo **message** indica: 
> Record/s not found.




##Position Routes

## Request Post Position

### Route /api/position

En esta ruta enviendo los campos correspondientes, se crean nuevas posiciones:

| Campo | Requerido | Tipo | Observación | Default |
| ------ | ------- | ---- | ---- | ------ |
| positionName| **SI** | String | | null |
| positionState | **No** | String | 0=inactivo, 1=activo| 1|

***Request Exitosa***

Si la request fue exitosa la respuesta contendrá los siguientes campos 

| Campo | Tipo |
| ------ | ---- |
| message| String |
| lastID | Int |

***Request Erronea***

La respuesta tendrá los siguientes campos:

| Campo | Tipo |
| ------ | ---- |
| message| String |
| errors | Object |

- En el campo message habrá una pequeña descripción del error
- En el campo errors habrá información más detallada del/los error/res



## Request Delete Position

### Route /api/position/{id?}

Se debe enviar el ID de una posición

### Request Exitosa

Status code 201 No Content

### Request Erronea

Si la request es erronea, obtenemos el siguiente campo

| Campo | Tipo | Valor |
| ------ | ----- | ---- |
| message | String | An error has ocurred when try to delete Position|




## Request Get Position by query param ID

### Route /api/position?positionID=1

En esta ruta enviendo el ID de una posiciön como parametro, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos de la posición buscada en un objeto:

| Campo | Tipo |
| ----- |----- |
| positionID | Int
| positionName | String
| positionState | String

El campo **message** indica: 
> Get Position Successfully

***Request Erronea***
Compo result = array vacio
El campo **message** indica: 
> Record/s not found.



## Request Get Position by ID

### Route /api/position/{id?}

En esta ruta enviendo el ID de una posición, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos de la posición buscada en un objeto:

| Campo | Tipo |
| ----- |----- |
| positionID | Int
| positionName | String
| positionState | String

El campo **message** indica: 
> Get Position Successfully

***Request Erronea***

Compo result = array vacio
El campo **message** indica: 
> Record/s not found.





## Request Get Positions All

### Route /api/position

Realizando una request a esta ruta sin ningún parametro ni identificador, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos de la posición buscada en un objeto:

| Campo | Tipo |
| ----- |----- |
| positionID | Int
| positionName | String
| positionState | String

El campo **message** indica: 
> Get Position Successfully

***Request Erronea***

Compo result = array vacio
El campo **message** indica: 
> Record/s not found.





## Skill Routes
## Request Post Skill

### Route /api/skill

En esta ruta enviando los campos correspondientes, se crean nuevos lenguajes:

| Campo | Requerido | Tipo | Observación | Default |
| ------ | ------- | ---- | ---- | ------ |
| skillName| **SI** | String | | null |
| skillState | **No** | String | 0=inactivo, 1=activo| 1 |

***Request Exitosa***

Si la request fue exitosa la respuesta contendrá los siguientes campos 

| Campo | Tipo |
| ------ | ---- |
| message| String |
| lastID | Int |

***Request Erronea***

La respuesta tendrá los siguientes campos:

| Campo | Tipo |
| ------ | ---- |
| message| String |
| errors | Object |

- En el campo message habrá una pequeña descripción del error
- En el campo errors habrá información más detallada del/los error/res




## Request Delete Skill

### Route /api/skill{id?}

Se debe enviar el ID de un lenguaje

### Request Exitosa

Status code 201 No Content

### Request Erronea

Si la request es erronea, obtenemos el siguiente campo

| Campo | Tipo | Valor |
| ------ | ----- | ---- |
| message | String | An error has ocurred when try to delete Skill|




## Request Get Skill by query param ID

### Route /api/skill?skillID=1

En esta ruta enviendo el parametro SkillID, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos del lenguaje buscado en un objeto:

| Campo | Tipo |
| ----- |----- |
| skillID | Int
| skillName | String
| skillState | String

El campo **message** indica: 
> Get Skill Successfully

***Request Erronea***

Compo result = array vacio
El campo **message** indica: 
> Record/s not found.





## Request Get Skill by ID

### Route /api/skill/{id?}

En esta ruta enviendo el ID, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos del lenguaje buscado en un objeto:

| Campo | Tipo |
| ----- |----- |
| skillID | Int
| skillName | String
| skillState | String

El campo **message** indica: 
> Get Skill Successfully

***Request Erronea***

Compo result = array vacio
El campo **message** indica: 
> Record/s not found.




## Request Get Skill All

### Route /api/skill

En esta ruta sin enviar ningún parametro, se obtiene un json con los siguientes datos:

| Campo | Tipo |
| ----- |----- |
| result | Array| 
| message | Strig|

***Request Exitosa***

Dentro del campo **result** se encuentran los datos del lenguaje buscado en un objeto:

| Campo | Tipo |
| ----- |----- |
| skillID | Int
| skillName | String
| skillState | String

El campo **message** indica: 
> Get Skill Successfully

***Request Erronea***

Compo result = array vacio
El campo **message** indica: 
> Record/s not found.
