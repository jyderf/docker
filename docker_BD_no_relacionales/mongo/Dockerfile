# Usar la imagen oficial de MongoDB
FROM mongo:7.0

# Crear directorio de datos (Mongo lo usa por defecto)
RUN mkdir -p /data/db

# Exponer el puerto interno del contenedor
EXPOSE 27017

# Definir volumen para persistencia
VOLUME ["/data/db"]

# Comando de arranque
CMD ["mongod", "--bind_ip_all"]


# DESCARGA IMAGEN
# EN CMD: docker build -t mi-mongo .

# CREA EL CONTENEDOR
# EN CMD: docker run -d --name mongo-local -p 27017:27017 mi-mongo
# EL PUERTO ANTERIOR DEBE SER DIFERENTE A 27017 EN CASO DE TENER INSTALADO MONGO, YA QUE CREARÁ CONFLICTO

# CON LA EXTENSIÓN DE MONGO DESCARGADA EN VISUAL, CREAR LA CONEXIÓN Y EN LA PARTE SUPERIOR ESCRIBIR: mongodb://localhost:27017 
# SI YA TIENES MONGO INSTALADO EN LOCAL ENTONCES DEBERÍA SER: mongodb://localhost:27018


#############CREANDO Y CONSULTALDO LA PRIMERA DB ###########################
#
#
#         const database = "primera";
#         use(database);

#         db.datos_personales.insertOne({
#           nombre: "carlos",
#           edad: 23
#         });

#         db.datos_personales.find();
#
#
###########################################################################



