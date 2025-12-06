FROM python:3.10-alpine3.18

# Instalar dependencias necesarias para compilar mysqlclient
RUN apk update && \
    apk add --no-cache \
        mariadb-connector-c-dev \
        mariadb-dev \
        gcc \
        musl-dev \
        build-base \
        pkgconfig

# Directorio de trabajo
WORKDIR /app

# Copiar requirements primero (mejor caché)
COPY ./app/requirements.txt .

# Instalar dependencias de Python
RUN pip install --no-cache-dir -r requirements.txt

# Copiar el resto del código
COPY ./app .

# Exponer puerto de Flask
EXPOSE 5000

# Comando de ejecución
CMD ["flask", "run", "--host=0.0.0.0"]
