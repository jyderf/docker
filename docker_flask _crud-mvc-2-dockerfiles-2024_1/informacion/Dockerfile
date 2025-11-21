# Usa la imagen base oficial de MySQL
FROM mysql:8.0.37

# Establece las variables de entorno necesarias
ENV MYSQL_ROOT_PASSWORD=1234
ENV MYSQL_DATABASE=municipios

# Copia el archivo de inicialización SQL al directorio de inicio de MySQL
COPY municipios.sql /docker-entrypoint-initdb.d/

# Exponer el puerto 3306 para MySQL
EXPOSE 3306
