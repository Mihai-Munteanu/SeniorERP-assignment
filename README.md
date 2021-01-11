# PROJHECT_NAME

This project's name is: SeniorERP - assignment

## Install

```
git clone https://github.com/Mihai-Munteanu/SeniorERP-assignment
composer install
npm install
```

Create a DB named `seniorerp_assignment`.

You must run seeder with `php artisan db:seed`. This will create a user with Manager role having the following credentials: user:Test, email: test@example.com password:1234567890

Then by accessing the following links you may use the app as follows:
 - http://seniorerp-assignment.test/ - home page;
 - /register - register page;
 - /login - login page;
 - /dashboard - see all tasks allocated to you and delete only the ones creaed by you;
 - /tasks_created_by_me - to see and delete all tasks created by you;
 - /employees - see all employees;
 - /employee/{user}/edit - to edit employee's role;
