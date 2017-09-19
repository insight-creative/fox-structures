# Fox Structures Wordpress Theme

A custom Wordpress theme for foxstructures.com.

## Getting started

To run Wordpress locally and get started with this theme, you'll need to:

1. Get a copy of Wordpress
2. Run a local server to serve the Wordpress installation
3. Create a local database to use for development
4. Copy this theme into the Wordpress themes directory

Let's walk through those steps:

### Download Wordpress

1. Create a directory for your project wherever you want to keep it on your computer.
2. Download a copy of Wordpress core and place it in the project folder. You can do this from the [Wordpress website](https://wordpress.org/download/), otherwise [WP-CLI](http://wp-cli.org) is a useful command line tool for managing Wordpress installations.

### Set up a local MySQL database

You'll also need a database to store Wordpress data. Again there are many ways to do this:

1. [MAMP](https://www.mamp.info) – If you're using MAMP, you can use phpMyAdmin to set up the database and database user and then edit `wp-config.php` in your Wordpress directory to connect to it.
2. [MySQL](https://dev.mysql.com/downloads/mysql/) - If you're not using MAMP, you can download MySQL directly and use the command line to create a database and a user and give the user permissions for the database.

### Set up a local server

You'll need a local server that can run PHP. There are many ways to do this – here are a few options:

1. [MAMP](https://www.mamp.info) – MAMP is a tool for running an Apache server and MySQL locally. Download and install it, then configure it to point to your Wordpress directory and start the server using the MAMP app.
2. [WP-CLI](http://wp-cli.org) – If you're using WP-CLI to manage Wordpress, you can use `wp server` to start a PHP server.
3. The PHP development server – You can start a server directly with `php -S localhost:8080` if you're already able to run PHP on your computer.

### Set up this theme

1. Download this theme into the `wp-content/themes` directory of your Wordpress directory. You can download the zip and unzip it there, or navigate there in the command line and use Git to clone it.
2. Start the server with MAMP, WP-CLI, or your method of choice.

## Deploying

1. Coming soon...
