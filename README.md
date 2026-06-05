# PHP Laracasts Demo Website
[![Better Stack Badge](https://uptime.betterstack.com/status-badges/v2/monitor/1kdio.svg)](https://php-laracast.meisterlala.dev/) [php-laracast.meisterlala.dev](https://php-laracast.meisterlala.dev/)


This project is part of my journey in mastering PHP, web development, and database management, inspired by my coursework from the [Laracasts PHP Path](https://laracasts.com/series). It showcases a collection of projects that highlight my skills in designing responsive, user-friendly websites, integrating back-end functionality, and managing data with MySQL.

By exploring this demo, you'll gain insight into how I approach full-stack development using modern PHP practices, following best coding standards, and utilizing tools like Docker to streamline workflows.

### Key Features:
- **Dynamic Web Pages:** Developed using PHP, implementing routing and session handling to create dynamic and interactive user experiences.
- **Database Integration:** Projects include examples of CRUD (Create, Read, Update, Delete) operations with Postgress databases.
- **Deployment-Ready:** The project is easily deployable with Docker and can be run seamlessly in any development environment using GitHub Codespaces.

## Check it out: [https://php-laracast.meisterlala.dev/](https://php-laracast.meisterlala.dev/)

This site needs PHP and PostgreSQL at runtime, so it is deployed as a Docker container. Static hosts can only serve the landing page and cannot run the PHP routes or database-backed demos.

## Running the Website Locally

### Using GitHub Codespaces:
1. Login to GitHub.com.
2. Click on the green **"Code"** button in the repository.
3. Choose **"Create codespace on main"**.

<img src="/.devcontainer/code.png" height="300px">

4. Wait for the Codespace (VS Code) to initialize.
5. Open the **Forwarded Ports** tab and click the link for **Port 8080** to access the website.
   
<img src="/.devcontainer/codespace.png" height="300px">

### Using Docker:
1. Clone the repository locally.
2. Run `docker-compose up` in the project directory.
3. Open `localhost:8080` in your browser to view the website.
