# API Rest - Contactos

API de gestión de contactos en PHP. Permite realizar las siguientes operaciones:

* Obtener una lista de todos los contactos
* Obtener un contacto específico por ID
* Eliminar un contacto por ID
* Actualizar un contacto por ID
---

## Obtener todos los contactos
```
GET /contactos
```
Devuelve una lista de todos los contactos en formato JSON.
Ejemplo de respuesta:
```
[
    {
        "id": 1,
        "nombre": "Alejandro",
        "telefono": "625671752",
        "email": "gomezblancoalejandro@gmail.com"
    },
    {
        "id": 3,
        "nombre": "Sergio",
        "telefono": "678678678",
        "email": "prueba@gmail.com"
    }
]
```

## Obtener un contacto por ID
```
GET /contactos/{id}
```
Devuelve un contacto específico en formato JSON. Reemplace `{id}` con el ID del contacto que desea obtener.
Ejemplo de respuesta:
```
[
    {
        "id": 1,
        "nombre": "Alejandro",
        "telefono": "625671752",
        "email": "gomezblancoalejandro@gmail.com"
    }
]
```

## Añadir un contacto
```
PUT /contactos
```
Añade el contacto especificado por código JSON y devuelve una respuesta en blanco. El ID no es necesario ponerlo ya que se autoincrementa.
Ejemplo de solicitud:
```
{
    "nombre": "Pepito",
    "telefono": "678987789",
    "email": "prueba@gmail.com"
}
```

## Eliminar un contacto por ID
```
DELETE /contactos/{id}
```
Elimina el contacto especificado por ID y devuelve una respuesta en blanco. Reemplace `{id}` con el ID del contacto que desea eliminar.

## Actualizar un contacto por ID
```
PUT /contactos/{id}
```
Actualiza el contacto especificado por ID y devuelve el contacto actualizado en formato JSON. Reemplace `{id}` con el ID del contacto que desea actualizar.
Ejemplo de solicitud:
```
{
    "nombre": "Pepito",
    "telefono": "625671752",
    "email": "gomezblancoalejandro@gmail.com"
}
```

Ejemplo de respuesta:
```
{
    "id": 1,
    "nombre": "Pepito",
    "telefono": "625671752",
    "email": "gomezblancoalejandro@gmail.com"
}
```

!['Alejandro Gómez Blanco'](./src/img/alejandroGomezBlanco.png)