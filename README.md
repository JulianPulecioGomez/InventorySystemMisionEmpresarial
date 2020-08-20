# InventorySystemMisionEmpresarial

Este es un proyecto de administración de clientes.

A continuación video explicativo: [Video Explicativo](https://www.loom.com/share/6d3be42969ee497ead97e39c91a5d0a2)

### Pre-requisitos 📋

- composer https://getcomposer.org/download/
- npm
- mysql
- xampp
- node.js
- git (Opcional para descarga)

### Instalación 🔧
1. Instalar Composer desde la siguiente dirección url [Link](https://getcomposer.org/download/)
2. Instalar NPM desde la siguiente dirección url [Link](https://docs.npmjs.com/cli/install#:~:text=npm%20install%20(in%20package%20directory,directory)%20as%20a%20global%20package).
3. Instalar Xampp desde la siguiente dirección url [Link](https://www.apachefriends.org/es/download.html)
4. Instalar Node.js desde la siguiente dirección url [Link](https://nodejs.org/es/download/)
5. Dirigirse http://localhost/phpmyadmin/ y crear una base de datos vacía.
6. Descargar el proyecto, se puede realizar mediante git (Requiere la instalación de git en la maquina )
    ```shell
    $ git clone https://github.com/JulianPulecioGomez/InventorySystemMisionEmpresarial.git
    ```
   La segunda opción es dar al botón Download ZIP, en "Code" en el area superior derecha.
7. Dirigirse a la raíz del proyecto usando la terminal, y ejecutar:
    ```shell
    $ composer install
    ```
8. Dirigirse a la raíz del proyecto usando la terminal, y ejecutar:
    ```shell
    $ npm install
    ```
9. Dirigirse a la raíz del proyecto usando la terminal, y ejecutar:
    ```shell
    $ composer dump-autoload
    ```
10. Dirigirse al archivo .env en la raíz del proyecto y configurar la opción DB_DATABASE con la base de datos del usuario.
11. Dirigirse a la raíz del proyecto usando la terminal, y ejecutar:
    ```shell
    $ php artisan migrate
    ```

## Despliegue 📦

Tener en cuenta que el usuario necesita crear y configurar una base de Datos para luego asociarla al proyecto mediante el archivo .env

## Construido con 🛠️

Herramientas usadas.

* [Laravel](https://laravel.com/docs/7.x) - El framework web usado
* [Composer](https://getcomposer.org/) - Manejador de dependencias
* [npm](https://docs.npmjs.com/) - Sistema de gestión de paquetes

## Autores ✒️

* **Julián David Pulecio Gómez** - *julianpuleciogomez@gmail.com*
