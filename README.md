# LMS

## Setup
```bash
composer install
#config .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
npm run install
```

## API

```php
GET|HEAD        api ................................................................................................................................................................................................................  
GET|HEAD        api/categories ....................................................................................................................................................... categories.index › CategoriesController@index  
POST            api/categories ....................................................................................................................................................... categories.store › CategoriesController@store  
GET|HEAD        api/categories/create .............................................................................................................................................. categories.create › CategoriesController@create  
GET|HEAD        api/categories/{category} .............................................................................................................................................. categories.show › CategoriesController@show  
PUT|PATCH       api/categories/{category} .......................................................................................................................................... categories.update › CategoriesController@update  
DELETE          api/categories/{category} ........................................................................................................................................ categories.destroy › CategoriesController@destroy  
GET|HEAD        api/categories/{category}/edit ......................................................................................................................................... categories.edit › CategoriesController@edit
GET|HEAD        api/confirm-password .................................................................................................................................... password.confirm › Auth\ConfirmablePasswordController@show  
POST            api/confirm-password ...................................................................................................................................................... Auth\ConfirmablePasswordController@store  
GET|HEAD        api/contents ............................................................................................................................................................. contents.index › ContentsController@index  
POST            api/contents ............................................................................................................................................................. contents.store › ContentsController@store  
GET|HEAD        api/contents/create .................................................................................................................................................... contents.create › ContentsController@create  
GET|HEAD        api/contents/{content} ..................................................................................................................................................... contents.show › ContentsController@show  
PUT|PATCH       api/contents/{content} ................................................................................................................................................. contents.update › ContentsController@update  
DELETE          api/contents/{content} ............................................................................................................................................... contents.destroy › ContentsController@destroy  
GET|HEAD        api/contents/{content}/edit ................................................................................................................................................ contents.edit › ContentsController@edit  
GET|HEAD        api/courses ................................................................................................................................................................ courses.index › CoursesController@index  
POST            api/courses ................................................................................................................................................................ courses.store › CoursesController@store
GET|HEAD        api/courses/create ....................................................................................................................................................... courses.create › CoursesController@create  
GET|HEAD        api/courses/{course} ......................................................................................................................................................... courses.show › CoursesController@show  
PUT|PATCH       api/courses/{course} ..................................................................................................................................................... courses.update › CoursesController@update  
DELETE          api/courses/{course} ................................................................................................................................................... courses.destroy › CoursesController@destroy  
GET|HEAD        api/courses/{course}/edit .................................................................................................................................................... courses.edit › CoursesController@edit  
GET|HEAD        api/csrf ...........................................................................................................................................................................................................  
POST            api/email/verification-notification ......................................................................................................... verification.send › Auth\EmailVerificationNotificationController@store  
GET|HEAD        api/forgot-password ..................................................................................................................................... password.request › Auth\PasswordResetLinkController@create  
POST            api/forgot-password ........................................................................................................................................ password.email › Auth\PasswordResetLinkController@store
GET|HEAD        api/lang ...........................................................................................................................................................................................................  
GET|HEAD        api/lang/{locale} ..................................................................................................................................................................................................  
GET|HEAD        api/lang/{locale}/{ns}.json ........................................................................................................................................................................................  
GET|HEAD        api/lessons ................................................................................................................................................................ lessons.index › LessonsController@index  
POST            api/lessons ................................................................................................................................................................ lessons.store › LessonsController@store  
GET|HEAD        api/lessons/create ....................................................................................................................................................... lessons.create › LessonsController@create  
GET|HEAD        api/lessons/{lesson} ......................................................................................................................................................... lessons.show › LessonsController@show  
PUT|PATCH       api/lessons/{lesson} ..................................................................................................................................................... lessons.update › LessonsController@update  
DELETE          api/lessons/{lesson} ................................................................................................................................................... lessons.destroy › LessonsController@destroy
GET|HEAD        api/lessons/{lesson}/edit .................................................................................................................................................... lessons.edit › LessonsController@edit  
GET|HEAD        api/locale/{locale} ................................................................................................................................................................................................  
GET|HEAD        api/login ....................................................................................................................................................... login › Auth\AuthenticatedSessionController@create  
POST            api/login ................................................................................................................................................................ Auth\AuthenticatedSessionController@store  
POST            api/logout .................................................................................................................................................... logout › Auth\AuthenticatedSessionController@destroy  
PUT             api/password ...................................................................................................................................................... password.update › Auth\PasswordController@update
GET|HEAD        api/quizzes ................................................................................................................................................................ quizzes.index › QuizzesController@index  
POST            api/quizzes ................................................................................................................................................................ quizzes.store › QuizzesController@store  
GET|HEAD        api/quizzes/create ....................................................................................................................................................... quizzes.create › QuizzesController@create  
GET|HEAD        api/quizzes/{quiz} ........................................................................................................................................................... quizzes.show › QuizzesController@show  
PUT|PATCH       api/quizzes/{quiz} ....................................................................................................................................................... quizzes.update › QuizzesController@update  
DELETE          api/quizzes/{quiz} ..................................................................................................................................................... quizzes.destroy › QuizzesController@destroy  
GET|HEAD        api/quizzes/{quiz}/edit ...................................................................................................................................................... quizzes.edit › QuizzesController@edit  
GET|HEAD        api/register ....................................................................................................................................................... register › Auth\RegisteredUserController@create  
POST            api/register ................................................................................................................................................................... Auth\RegisteredUserController@store  
POST            api/reset-password ............................................................................................................................................... password.store › Auth\NewPasswordController@store
GET|HEAD        api/reset-password/{token} ...................................................................................................................................... password.reset › Auth\NewPasswordController@create  
GET|HEAD        api/user ...........................................................................................................................................................................................................  
GET|HEAD        api/users ...................................................................................................................................................................... users.index › UsersController@index  
POST            api/users ...................................................................................................................................................................... users.store › UsersController@store  
GET|HEAD        api/users.profile .......................................................................................................................................................... users.profile › UsersController@profile
GET|HEAD        api/users/create ............................................................................................................................................................. users.create › UsersController@create
GET|HEAD        api/users/{user} ................................................................................................................................................................. users.show › UsersController@show  
PUT|PATCH       api/users/{user} ............................................................................................................................................................. users.update › UsersController@update  
DELETE          api/users/{user} ........................................................................................................................................................... users.destroy › UsersController@destroy  
GET|HEAD        api/users/{user}/edit ............................................................................................................................................................ users.edit › UsersController@edit  
GET|HEAD        api/verify-email ............................................................................................................................. verification.notice › Auth\EmailVerificationPromptController@__invoke  
GET|HEAD        api/verify-email/{id}/{hash} ............................................................................................................................. verification.verify › Auth\VerifyEmailController@__invoke
```

## Preview
![image](https://github.com/Ticlext-Altihaf/lms-laravel/assets/77704356/d2132d8a-4b75-49ca-bb83-4b15968f00f7)
![image](https://github.com/Ticlext-Altihaf/lms-laravel/assets/77704356/1f8b90cc-c113-4f37-b464-ec73f1c23aae)
![image](https://github.com/Ticlext-Altihaf/lms-laravel/assets/77704356/48245aa9-ffe3-4638-b27d-2bd4a87028b2)
![image](https://github.com/Ticlext-Altihaf/lms-laravel/assets/77704356/6a73a5e4-767d-42d2-bc6c-d1d92abd8f04)
![image](https://github.com/Ticlext-Altihaf/lms-laravel/assets/77704356/dcb1bedc-3360-48be-b0d2-f6464e3bf405)
