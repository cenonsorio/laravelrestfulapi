# Laravel RESTful API

A simple example of how to create a RESTful API in Laravel 8.

composer install
php artisan key:generate
php artisan serve
php artisan migrate

## Endpoints

GET http://restfulapi.localhost/api/questions

POST http://restfulapi.localhost/api/questions
{ "question":"Question 1 - answer A", "question_types": "multiple", "child_questions": "0", "order":"1", "points":"10", "answers": "A" , "choices" : "A,B,C,D"}

PUT http://restfulapi.localhost/api/questions/1
{ "question":"Question 1 - answer A updated", "question_types": "multiple", "child_questions": "0", "order":"1", "points":"10", "answers": "A" , "choices" : "A,B,C,D"}

DELETE  http://restfulapi.localhost/api/questions/1
