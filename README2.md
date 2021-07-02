<h2>Notes on Laravel PHP Framework Tutorial</h2>

* SQL Lite used to create databases 
* For example, `vim database/database.sqlite` allows use to create a new file within a database
* To escape database esc `:wq`
* d-flex (flex shortcut) 
* pr-3 (padding right shortcut)
* `php artisan tinker` used to interact with application
* `npm run dev` used to re-run applicaiton on server again 
* `php artisan migrate:fresh` used to update database
* Looking at controllers (i.e /photo /photo/create) (allows us, for example, to grab a single user's profile if we were to choose GET, photo{photo}
* dd stands for "Dump and Die." Laravel's dd() function can be defined as a helper function, which is used to dump a variable's contents to the browser and prevent the further script execution.
* A model: e.g. php artisan make:model : a model represents a table in our database. And one object of a moden represents an actual row in our database
* `php artisan help make:model` allows a definition of the make feature
* Eloquent: database layer of the framework (to fetch queries etc.) Elqouent allows us to run on mySQL and any other database 
* `php artisan make:model Profile  -m` allows us to make a profile model and a migration (-m) in our database i.e establishes feature in database
`unsignedBigInteger('user_id')` allows us to create a link in our database to our user
`::` is a token that allows access to static, constant, and overridden properties or methods of a class. 
`??` means or; so if value not found return ?? x
`$user->push()` should push changes to the database from terminal of new user changes
`findOrFail()` cool feature allowing a simple 404 message to return when value not found
`belongsTo()` allow us to link to other datasets as does `thisHasMany()`
The double arrow operator, `=>`, is used as an access mechanism for arrays. This means that what is on the left side of it will have a corresponding value of what is on the right side of it in array context. This can be used to set values of any acceptable type into a corresponding index of an array. The index can be associative (string based) or numeric.
The object operator, `->`, is used in object scope to access methods and properties of an object. It’s meaning is to say that what is on the right of the operator is a member of the object instantiated into the variable on the left side of the operator. Instantiated is the key term here.
`Route:: get('/p', 'PostsController@create')` with `p` being uri and `PostsController@create` being action 
`  <main class="py-4">
            @yield('content')
        </main>` : allows us to use @yield to present 'content' on `<main>`
`enctype="multipart/form-data"` enctype tells us what our resource is (and it had a file in it)
Useful link for looking at controller: https://laravel.com/docs/8.x/controllers. Tells us when to use `post` `get` etc.
  

##MVC Architecture
* reminder on MVC here https://selftaughtcoders.com/from-idea-to-launch/lesson-17/laravel-5-mvc-application-in-10-minutes/

##Viewing data

use `{{dd($variable)}}` within the view to see what data is available 
