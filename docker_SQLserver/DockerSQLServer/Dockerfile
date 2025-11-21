# Usa la imagen oficial de SQL Server 2022 como base
FROM mcr.microsoft.com/mssql/server:2022-latest

# Variables de entorno requeridas por SQL Server
ENV ACCEPT_EULA=Y
ENV MSSQL_SA_PASSWORD=SuperPWD123!
ENV MSSQL_PID=Developer

# Expone el puerto por el cual se accederá al servidor
EXPOSE 1433

# Copiar scripts de inicialización (opcional)
# COPY ./init-db.sql /docker-entrypoint-initdb.d/

# Comando por defecto que se ejecuta al iniciar el contenedor
CMD ["/opt/mssql/bin/sqlservr"]
