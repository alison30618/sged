# Sistema de Gestión de Eventos Deportivos (SGED)

- Instrucciones de Uso
El Sistema de Gestión de Eventos Deportivos (SGED) es una aplicación web que nos permite administrar y organizar eventos deportivos de manera eficiente. A continuación, se detallan las instrucciones para utilizar la aplicación.

-Acceso a la Aplicación
1. Abra su navegador web y acceda a la siguiente dirección: `http://localhost:8000`.
2. Si no tiene una cuenta, haga clic en el enlace "Registrarse" y complete el formulario de registro.
3. Si ya tiene una cuenta, haga clic en el enlace "Iniciar sesión" e ingrese sus credenciales.

- Gestión de Eventos
1. Una vez que haya iniciado sesión, verá el menú principal de la aplicación.
2. Haga clic en "Eventos" para ver la lista de eventos deportivos existentes.
3. Para crear un nuevo evento, haga clic en el botón "Crear Evento".
4. Complete el formulario con los detalles del evento, como nombre, descripción, fecha, ubicación y tipo (torneo, partido amistoso, maratón, etc.).
5. Haga clic en "Guardar" para crear el nuevo evento.
6. Para editar o eliminar un evento existente, utilice las acciones correspondientes en la lista de eventos.

-Gestión de Equipos
1. Desde el menú principal, haga clic en "Equipos" para ver la lista de equipos registrados.
2. Para agregar un nuevo equipo, haga clic en el botón "Crear Equipo".
3. Complete el formulario con la información del equipo, como nombre, deporte y entrenador.
4. Haga clic en "Guardar" para crear el nuevo equipo.
5. Para editar o eliminar un equipo existente, utilice las acciones correspondientes en la lista de equipos.


-Gestión de Participaciones
1. Desde el menú principal, haga clic en "Participaciones" para ver la lista de participaciones de equipos en eventos.
2. Para registrar una nueva participación, haga clic en el botón "Crear Participación".
3. Seleccione el evento y el equipo correspondientes.
4. Ingrese los resultados y premios obtenidos por el equipo en ese evento.
5. Haga clic en "Guardar" para crear la nueva participación.
6. Para editar o eliminar una participación existente, utilice las acciones correspondientes en la lista de participaciones.

-Cerrar Sesión
1. Para cerrar su sesión en la aplicación, haga clic en su nombre de usuario en la parte superior derecha de la pantalla.
2. Seleccione "Cerrar sesión" en el menú desplegable.

-Características
- **Eventos**: Administre la información de eventos deportivos, como nombre, descripción, fecha, ubicación y tipo (torneo, partido amistoso, maratón, etc.).
- **Equipos**: Mantenga un registro de los equipos participantes, incluyendo información como nombre, deporte y entrenador.
- **Participaciones**: Gestione la participación de los equipos en los eventos, registrando los resultados y premios obtenidos.
- **Autenticación de usuarios**: Implemente un sistema de autenticación y registro de usuarios utilizando Laravel Breeze.
- **Control de acceso**: Proteja las rutas de la aplicación con el middleware `auth` de Laravel Breeze.






-Instalación
Creamos el proyecto LARAVEL con el siguiente comando
laravel new eventos-deportivos
Instalamos npm para el manejo de accesos y manejar eventos de desarrollo y ambiente real con el siguiente comando
npm install
Para modo desarrollador
--npm run dev
Para Compilar al ambiente real
--npm run build
Instalamos composer
--composer install


1. Clona el repositorio: `git clone https://github.com/tu-usuario/sged.git`
2. Navega al directorio del proyecto: `cd sged`
3. Instala las dependencias: `composer install`
4. Configura el archivo `.env` con tus credenciales de base de datos
5. Genera una nueva clave de aplicación: `php artisan key:generate`
6. Ejecuta las migraciones de la base de datos: `php artisan migrate`
7. Inicia el servidor de desarrollo: `php artisan serve`


Contribución
1. Haz un fork del repositorio
2. Crea una nueva rama para tu funcionalidad: `git checkout -b nueva-funcionalidad`
3. Realiza tus cambios y haz commit: `git commit -m 'Agrega nueva funcionalidad'`
4. Envía tus cambios al repositorio remoto: `git push origin nueva-funcionalidad`
5. Crea un nuevo Pull Request en GitHub

