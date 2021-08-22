<h1 align="center">BoxBilling and Landing Page from Step 1 on Docker Container</h1>

Here we will document everything required to run **BoxBilling** and **Landing Page from Step 1** on Docker.

## Prerequisites

- Create a new PHP page from a given mockup using Slim Framework.
- Docker Desktop or Docker CLI with Docker Compose installed.
- An account on BoxBilling for acquiring product key and download application. Register one [here](https://www.boxbilling.com/login) if you don't have one already.

## Step by Step BoxBilling on Docker Creation

- Download [BoxBilling latest release](https://github.com/boxbilling/boxbilling/releases/) .
- Make a folder named `boxbilling` and extract downloaded BoxBilling into public folder inside
- Create `.env` file inside public folder and fill with
```
    DB_HOST=db-service
    DB_NAME=niagahoster
    DB_USER=root
    DB_PASS=root
```
- Create `docker-compose.yml`, this is the server configuration file that will define containers and network configuration for our docker stack.
- Make  a folder named `database` for mount a directory database container with directory on hosts disk.`niagahoster.sql` file inside `databasse/init`that will contain initial seeder for the database. This file will be run when we build our `mysql` container.
- Create `Dockerfile` in boxbilling folder for BoxBilling image builder.
- Create `Dockerfile` in niagahoster folder for Niagahoster Landing page image builder.
- Make `docker-config` in boxbilling and niagahoster folder, then add php config files will be copied to docker image and other will be read anytime Docker Compose started up.

- Now run `docker-compose up -d` and let docker build images and containers.
- Once containers up and ready. Go to (http://localhost/) for Landing page step 1 and (http://localhost:8004) for BoxBilling page.
- On preparation BoxBilling tab, ensure if all prerequisites are labeled with green, check agree and press NEXT.
- On database tab enter all fields with all of our credetials above.
- On Administrator tab fill in all fields. For example, our installation values are:
```
    NAME : kamil
    Email : kamilanindita@gmail.com
    Password : 12345
```
- Installation are done and we should remove `/var/www/public/install` folder, change `/var/www/public/bb-config.php` to readonly (CHMOD 644), and setup cron job `*/5 * * * * php /var/www/public/bb-cron.php` on our webserver docker entrypoint.
- To check on installation go to `http://localhost:8004/bb-admin/staff/login` for administrator login or to `http://localhost:8004/` to enter client area.

## Running Prebuild Installation

- Clone this repository,
- Make necessary server config changes `docker-config` in boxbilling and niagahoster folder
- Make necessary config changes on `bb-config.php` and `.env` files in boxbilling folder
- Copy your own boxbilling SQL data to `database/niagahoster.sql` or you can leave it as is
- Go back to `boxbilling` folder and run `docker compose up -d`
- First run will a bit long because we are building docker images and seed our initial database.
- Now browse to (http://localhost:8004/) to check our BoxBilling app, or to (http://localhost:8004/bb-admin) to enter BoxBilling admin console.
- For testing please login using this credentials:
```
    Email : kamilanindita@gmail.com
    Password : 12345
```
- Access  to (http://localhost) to check Landing page Niagahoster (step 1).

## Image Documentation

#### 1. Landing Page Step 1
![Image of index](https://drive.google.com/uc?export=view&id=1Hba2wYNfMVhiorU_PX60VhbKVnelNQVK)

#### 2. BoxBilling Client
![Image of index](https://drive.google.com/uc?export=view&id=1CAbJmchj9u7w6_McMefB4egteUxNI3EG)

#### 3.  BoxBilling Admin
![Image of index](https://drive.google.com/uc?export=view&id=1-rRXXZXApcUEo8Ooos4TrheVTiJYn_O7)
