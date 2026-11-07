# Guía de Despliegue — Proyecto GRACAMU IKAM 2030
### IESTP de Excelencia Perú Japón — Subdominio Institucional
**Subdominio objetivo:** `https://gracamu.idexperujapon.edu.pe/`

---

## 🚀 Resumen Técnico
- **Framework:** Laravel 12 (PHP 8.2+ o 8.3+)
- **Frontend:** Tailwind CSS v4 (Ya compilado en `public/build/`, no requiere Node ni npm en el servidor).
- **Base de Datos:** SQLite preconfigurada y migrada en `database/database.sqlite` (puede migrarse a MySQL/MariaDB si se prefiere editando `.env`).
- **Web Server:** Apache / Nginx / cPanel / LiteSpeed.

---

## 📋 Pasos Rápidos para Despliegue en Servidor / cPanel

### 1. DocumentRoot / Apuntamiento del Subdominio
El subdominio `gracamu.idexperujapon.edu.pe` debe apuntar directamente a la carpeta:
```
/ruta/al/proyecto/public
```
*(Importante: Apuntar a la subcarpeta `public`, no a la raíz, para garantizar la seguridad del framework).*

### 2. Dependencias de PHP
En la terminal del servidor (o mediante SSH):
```bash
composer install --no-dev --optimize-autoloader
```

### 3. Configuración de Entorno (.env)
Copiar `.env.example` a `.env` (o usar el que ya viene preparado):
```bash
cp .env.example .env
php artisan key:generate
```
Verificar las siguientes líneas en `.env`:
```ini
APP_NAME="GRACAMU IKAM"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://gracamu.idexperujapon.edu.pe

DB_CONNECTION=sqlite
DB_DATABASE=/ruta/absoluta/al/proyecto/database/database.sqlite
```

### 4. Permisos de Carpetas
Asegurar permisos de escritura para el servidor web (`www-data`, `nobody` o el usuario cPanel):
```bash
chmod -R 775 storage bootstrap/cache database
```

### 5. Optimización de Caché en Producción
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## ☕ Contacto y Soporte del Proyecto
- **Institución:** IESTP de Excelencia Perú Japón (Chachapoyas, Amazonas)
- **Desarrollo Web & Arquitectura:** Jharel Andre Arana Vargas
- **Incubadora:** Perú Japón StartUp — Mg. Jose Magno Alejos Salazar
- **Dirección General:** Dr. Mario Y. Torrejón Arellanos

