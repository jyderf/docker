FROM redis:7.2

# Copiar un archivo de configuración personalizado (opcional)
# COPY redis.conf /usr/local/etc/redis/redis.conf

# Exponer el puerto oficial de Redis
EXPOSE 6379

# Ejecutar Redis con la configuración por defecto
CMD ["redis-server", "--appendonly", "yes"]

# IMAGEN
# docker build -t mi-redis .

# CONTENEDOR
# docker run -d --name redis-local -p 6379:6379 mi-redis


# PROBAR FUNCIONALIDAD
# DOCKER EN EL CONTENEDOR
# docker exec -it redis-local redis-cli
# DEBERÍA VERSE: 127.0.0.1:6379>

#         COMANDOS REDIS: 
#         ping DEBERÍA RESPONDER PONG
#         SET PRUEBA 123
#         KEYS *

