# Usa a imagem oficial do WordPress com PHP e Apache
FROM wordpress:latest

# Copia todos os arquivos do seu projeto para dentro da pasta padrão do WordPress
COPY . /var/www/html/

# Expondo a porta 80 para o Apache
EXPOSE 80