# Form requests

## Setup

Add `127.0.0.1 form-requests.test` to your hosts file.

`docker-compose up` to bring up docker.

`docker exec -it form-requests_php_1 bash` to ssh into the php container.

`php artisan migrate` to run our migrations.

## Viewing the app

You can view the app at http://form-requests.test:7575/

## Creating form requests

To create a form request class you can run `php artisan make:request StoreBusinessFormRequest`.

This would create a new form request class in `app\Http\Requests` called `StoreBusinessFormRequest.php`.

You then just need to import this into your controller and use DI to inject it into your method as per the commented out example in the code.

## Why use form requests?

### DRY

Using a form request class means we have a reusable piece of code.

In this business example if we created an edit method, and didn't use a form request class, we'd need to copy and paste all of our inline validation code to validate the exact same fields as in our store method.

If we needed to change a rule in the future now we'd need to update this rule in multiple places.

### Readability

Using form request classes also makes your code more readable as you greatly reduce the amount of code in your controller.
