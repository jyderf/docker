# Usa una imagen base ligera de Nginx
FROM nginx:alpine

# Copia tu archivo HTML al directorio de documentos de Nginx
COPY ./developer /usr/share/nginx/html/

# Expone el puerto 80 (predeterminado para Nginx)
EXPOSE 80

# Comando para iniciar Nginx en segundo plano
CMD ["nginx", "-g", "daemon off;"]