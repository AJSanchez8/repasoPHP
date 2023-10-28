## CREAR MI BASE DE DATOS 

[BASE DE DATOS](./database/db.sql)

El único cambio que tiene es la gestión de id's, yo lo hago AUTO_INCREMENT para que el usuario no pueda gestionar los id's. Si no se hace la base de datos con autoincrement no se insertan los datos.

#### Perdón por el coñazo de tener que crear una base de datos diferente a la del ejercicio, no sabía que luego la ibamos a mandar como tarea.

- Elimina la base de datos
```DROP DATABASE IF EXISTS productos;```

- Luego, crea la base de datos nuevamente
```CREATE DATABASE productos;```

- Usa la base de datos
```USE productos;```

- Crea la tabla "productos"
```sql
     CREATE TABLE productos (
    id_producto INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
    descripcion VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
    precio INT,
    fotografia BLOB
    ); ```