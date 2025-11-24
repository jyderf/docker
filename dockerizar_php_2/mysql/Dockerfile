FROM mysql:5.7

# Configuración del root
ENV MYSQL_ROOT_PASSWORD=123
ENV MYSQL_DATABASE=municipios

# Copia tu script SQL para inicialización
COPY db/creacion_municipios.sql /docker-entrypoint-initdb.d/

# Persistencia
VOLUME /var/lib/mysql

EXPOSE 3306
