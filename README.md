<div align="center">
  <img src="public/img/logo/filora-little.png" alt="Filora" width="200">
  
  # Filora
  
  **Self-hosted cloud storage for teams and individuals**
  
  *A product by [Akapell Labs](https://akapelllabs.com)*
 
  ![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel)
  ![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=flat-square&logo=bootstrap)
  ![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)
  ![Status](https://img.shields.io/badge/Status-Beta-orange?style=flat-square)
</div>
---
 
## ¿Qué es Filora?
 
Filora es una solución de almacenamiento en la nube **open source y self-hosted** —
una alternativa a Google Drive y Dropbox que puedes instalar en tu propio servidor.
 
Tus archivos, tu servidor, tus reglas.
 
✅ Sin dependencias de terceros  
✅ Control total de tus datos  
✅ Cumplimiento RGPD  
✅ Código abierto y auditable  
 
---
 
## ✨ Características
 
- 📁 **Explorador de archivos** — gestión completa de archivos y carpetas
- 👥 **Gestión de usuarios** — roles, permisos y equipos
- 🔗 **Compartir archivos** — enlaces públicos y privados
- 🔒 **Seguridad** — 2FA, logs de actividad, cifrado
- 🌙 **Modo oscuro** — interfaz adaptable
- 📊 **Panel de admin** — gestión centralizada
- 📱 **Responsive** — funciona en móvil y escritorio
---
 
## 🚀 Instalación
 
### Requisitos
 
```
PHP        >= 8.2
Composer   >= 2.x
Node.js    >= 18.x
MySQL      >= 8.x
```
 
### Pasos
 
**1. Clona el repositorio:**
```bash
git clone https://github.com/Sergioooxv/filora-cloud.git
cd filora-cloud
```
 
**2. Instala las dependencias:**
```bash
composer install
npm install
```
 
**3. Configura el entorno:**
```bash
cp .env.example .env
php artisan key:generate
```
 
**4. Configura la base de datos en `.env`:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filora
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```
 
**5. Ejecuta las migraciones:**
```bash
php artisan migrate
```
 
**6. Crea el administrador:**
```bash
php artisan filora:install
```
 
**7. Compila los assets:**
```bash
npm run build
```
 
**8. Inicia el servidor:**
```bash
php artisan serve
```
 
Accede a `http://localhost:8000` con las credenciales que creaste en el paso 6.
 
---
 
## 🗂️ Estructura del proyecto
 
```
filora/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Console/Commands/     ← comandos Artisan
├── resources/
│   ├── css/
│   │   ├── components/       ← estilos de componentes
│   │   ├── pages/            ← estilos por página
│   │   └── variables/        ← variables globales
│   ├── js/
│   │   ├── components/       ← lógica JS por componente
│   │   └── utils/            ← utilidades
│   └── views/
│       ├── layouts/          ← layouts base
│       ├── auth/             ← login, forgot-password, reset
│       ├── dashboard/        ← panel principal
│       ├── explorer/         ← explorador de archivos
│       ├── admin/            ← panel de administración
│       └── components/       ← componentes blade reutilizables
└── public/
    └── img/
        └── logo/
```
 
---
 
## 🤝 Contribuir
 
Las contribuciones son bienvenidas. Sigue estos pasos:
 
**1. Haz fork del repositorio**
 
**2. Crea una rama para tu feature:**
```bash
git checkout -b feat/nombre-de-tu-feature
```
 
**3. Convención de commits** — usamos [Conventional Commits](https://www.conventionalcommits.org):
 
| Prefijo | Uso |
|---------|-----|
| `feat:` | Nueva funcionalidad |
| `fix:` | Corrección de bug |
| `docs:` | Cambios en documentación |
| `style:` | Cambios de formato, sin lógica |
| `refactor:` | Refactorización de código |
| `test:` | Añadir o modificar tests |
| `chore:` | Tareas de mantenimiento |
 
**Ejemplos:**
```bash
git commit -m "feat: añadir drag & drop en explorador"
git commit -m "fix: corregir error en subida de archivos > 100MB"
git commit -m "docs: actualizar instrucciones de instalación"
```
 
**4. Push a tu rama:**
```bash
git push origin feat/nombre-de-tu-feature
```
 
**5. Abre un Pull Request** describiendo los cambios realizados.
 
---
 
## 🐛 Reportar bugs
 
Abre un [issue](https://github.com/Sergioooxv/filora-cloud/issues) incluyendo:
 
- Descripción del problema
- Pasos para reproducirlo
- Comportamiento esperado vs actual
- Versión de Filora, PHP y sistema operativo
---
 
## 📋 Roadmap
 
- [x] Sistema de autenticación
- [ ] Explorador de archivos
- [ ] Subida de archivos con drag & drop
- [ ] Compartir archivos por enlace
- [ ] Panel de administración
- [ ] Gestión de usuarios y roles
- [ ] Modo oscuro
- [ ] API REST
- [ ] Cliente de escritorio
- [ ] Aplicación móvil
---
 
## 📄 Licencia
 
Filora es software open source bajo la licencia [MIT](LICENSE).
 
---
 
<div align="center">
  <p>Hecho con ❤️ por <a href="https://akapelllabs.com">Akapell Labs</a></p>
  <p>
    <a href="https://akapelllabs.com">Web</a> ·
    <a href="https://github.com/Sergioooxv/filora-cloud/issues">Issues</a> ·
    <a href="https://github.com/Sergioooxv/filora-cloud/discussions">Discussions</a>
  </p>
</div>