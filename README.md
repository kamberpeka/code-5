## Setup
To install the framework, run `composer install` from the CLI.

Copy the `.env.example` file into a new file named `.env`

Set the database credentials in the `.env` and run `php artisan migrate` to create the tables
 > A database connection is also needed (preferrably MySQL)


To get the project running, use the command `php artisan serve`

Visit `localhost:8000` from your browser, and fill the form.

## Unit test

To test the application, run `php artisan test`.
The tests send a request with sample data, valid and invalid for each field, and checks if the data go through the validation or not.

When they go through the validation. It calls the controller and the controller prepares the data for the service.

The service uses the repository to store the record into the database.

If the data is saved, the controller redirects the user to a success page, and when not, to a failure message page.

The test also checks if redirected to the success page, so if the test is successful, every component works correctly.

