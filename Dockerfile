FROM php:8.2-apache

# تفعيل mod_rewrite
RUN a2enmod rewrite

# السماح بـ .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# مجلد العمل
WORKDIR /var/www/html

# نسخ جميع الملفات
COPY . .

# إنشاء الملفات والمجلدات المطلوبة مسبقاً
RUN touch AMR.txt AMR0.txt AMR1.txt AMR2.txt AMR3.txt AMR4.txt && \
    mkdir -p UploadEr && \
    echo "{}" > UploadEr/UploadEr.json && \
    chmod -R 777 /var/www/html

EXPOSE 80

