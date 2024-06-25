<p align="center"><img src="" width="400" alt="LovingCare Logo"></p>

## Objetivo (temporal)

#### La aplicacion tiene como objetivo gestionar los ingresos y egresos mensuales del usuario, se prioriza la eficiencia, la interactividad y facilidad para el usuario.


## Funcionamiento (temporal)

#### La aplicacion debe permitir:

- Registro de usuario (en evaluacion)
- Inicio de sesion
- Gestion los ingresos y gastos del usuario en diferentes fechas. Se busca que este proceso pueda realizarse de manera manual o automatica, programando asi las fechas en las que se realizará un ingreso y egreso, estos ingresos pueden reprogramarse tanto asi como permitir el atraso o adelanto espontaneo para cada fecha.
- Consultar distintos apartados estadisticos (evaluacion en proceso) 
- Automatizacion en pagos (si es posible, consumo de apis para realizar transacciones en distintos servicios)
- Registro de cartera (Poder registrar tarjetas debito o credito para el control del ususario con la informacion pertinente incluyendo informacion sensible)

## Requisitos de negocio (temporal)

### Funcionales

- Registro de usuario:

    - Los usuarios deben poder crear cuentas en la aplicación proporcionando información básica como nombre, correo electrónico y contraseña.

- Inicio de sesión:

  - Los usuarios registrados deben poder iniciar sesión en la aplicación utilizando sus credenciales.
  
- Gestión de ingresos y gastos:

  - Los usuarios deben poder registrar sus ingresos y gastos mensuales.
  - La aplicación debe permitir la entrada manual de transacciones o la automatización mediante programación de fechas específicas.
  - Los usuarios pueden reprogramar ingresos y gastos, así como ajustar las fechas de pago.
  - Los usuarios deben poder modificar o eliminar manualmente las transacciones de ingresos y gastos que han registrado. (Esta funcionalidad se aplica solo a las transacciones manuales, no a las automáticas)
- Consultas estadísticas (en proceso):

  - La aplicación debe proporcionar informes y gráficos sobre los ingresos y gastos del usuario.
  - Estadísticas como el total de ingresos, gastos por categoría, tendencias a lo largo del tiempo, etc., deben estar disponibles. (evaluacion en proceso)
  
- Automatización de pagos:

  - Si es posible, la aplicación puede integrarse con APIs de servicios financieros para automatizar pagos (por ejemplo, pagar facturas automáticamente).

- Registro de cartera:
  - Los usuarios deben poder registrar tarjetas de débito o crédito en la aplicación.
  - La información sensible, como los números de tarjeta, debe manejarse de manera segura.

### No funcionales

- Base de datos:
    - La aplicación debe utilizar una base de datos para almacenar la información de los usuarios, transacciones y configuraciones. Se recomienda una base de datos relacional. (por ejemplo, MySQL, PostgreSQL)

- Optimización de consultas:
    - Las consultas a la base de datos deben estar optimizadas para minimizar el tiempo de respuesta. (Índices adecuados, consultas eficientes y caché)

- Interfaz de usuario intuitiva:
    - La interfaz de usuario debe ser fácil de usar y comprender.
    - Debe incluir elementos como calendarios, organizadores de tareas y gráficos para visualizar los datos.
- Seguridad media-alta:
    - La aplicación debe proteger la información sensible del usuario (como contraseñas y números de tarjeta).
    - Se deben implementar prácticas de seguridad, como almacenamiento seguro de contraseñas, autenticación de dos factores y cifrado de datos sensibles.
- Validación y autenticación correcta:
    - La validación de formularios debe ser rigurosa para evitar entradas incorrectas o maliciosas.
    - La autenticación debe ser sólida y segura, utilizando el protocolo estandar Outh (Breeze).
- Otros aspectos:
    - La aplicación debe ser escalable para manejar un crecimiento futuro de usuarios.
    - Se debe considerar la localización (formatos de fecha y hora) para una audiencia global.

## 🚀 Tech Stack

- [Laravel 11.x](https://laravel.com/docs/11.x) with [Livewire 3.x and Volt](https://livewire.laravel.com/)
- [Alpine Js](https://alpinejs.dev/)
- [Tailwind CSS](https://tailwindcss.com/docs/installation)
- [Remix Icon](https://remixicon.com/)

## 🛠️ Setup

1. Clone this repository
2. Copy `.env` file and update with your local values
```bash
cp .env.example .env
```
3. Install Composer dependencies
```bash
composer install
```
4. Install Node dependencies
```bash
npm install
```
5. Run migrations
```bash
php artisan migrate
```
6. Get your local app key
```bash
php artisan key:generate --show
```
7. Paste on .env your app key generated (without [])
```bash
APP_KEY=[app-key-generated]
```
8. Create symbolic link to access files
```bash
php artisan storage:link
```
## 🏃‍♀️ Run the app

1. Open your terminal and run Vite
```bash
npm run dev
```
2. In a different terminal window/tab run Laravel
```bash
php artisan serve
```
3. Open your browser and go to your [localhost](http://127.0.0.1:8000)

## 🌱 Seeders
### 1.  Database Seeder:

```bash
php artisan db:seed --class=DatabaseSeeder
```
