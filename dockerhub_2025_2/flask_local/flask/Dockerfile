# Usa la imagen base oficial de Python con Alpine para un tamaño de imagen reducido
FROM python:3.10-alpine3.18

# Instalar las dependencias de compilación y las bibliotecas de desarrollo
# necesarias para instalar mysqlclient (como mariadb-connector-c-dev y gcc)
RUN apk update && \
    apk add --no-cache \
    mariadb-connector-c-dev \
    mariadb-dev \
    gcc \
    musl-dev \
    build-base \
    pkgconfig

# Configurar el directorio de trabajo
WORKDIR /app

# Copiar el archivo de requisitos primero para aprovechar la caché de Docker
COPY app/requirements.txt .

# Instalar las dependencias de Python (sin caché de pip)
RUN pip install --no-cache-dir -r requirements.txt

# Copiar el resto del código de la aplicación
COPY app .

# Variables de entorno para Flask
ENV FLASK_APP=src.app
ENV FLASK_ENV=development

# Puerto que expone la aplicación Flask
EXPOSE 5000

# Comando para ejecutar la aplicación
CMD ["flask", "run", "--host=0.0.0.0"]
