## Laravel Tutorials by TheNetNinja
This project is based from [Laravel 6 Tutorial for Beginners by **TheNetNinja**](https://www.youtube.com/playlist?list=PL4cUxeGkcC9hL6aCFKyagrT1RCfVN4w2Q),
but I am providing some tips to those who want to go along with that tutorial using [**Laravel 9**](https://laravel.com/docs/9.x).


### Lessons
These are the different lessons in that tutorial, which are linked to a specific commit in this repository. Adjustment tips are provided below a lesson that needs them.


#### 1. Introduction

---

#### 2. [Installing Laravel](https://github.com/kulotsystems/laravel-thenetninja/tree/7fb10590e682091bab62ea2d83d925569f92edb3)
After installing **Laravel**, you need to replace the contents of `resources/views/welcome.blade.php`
by the contents of [**this file**](https://github.com/kulotsystems/laravel-thenetninja/blob/7fb10590e682091bab62ea2d83d925569f92edb3/resources/views/welcome.blade.php).

---

#### 3. [Laravel Basics (Routes, Views)](https://github.com/kulotsystems/laravel-thenetninja/tree/639478fb6a153bcd7fa9853b8d73ac7f7512b730)

---

#### 4. [Passing Data to Views](https://github.com/kulotsystems/laravel-thenetninja/tree/440fdeb413789e1facac1991ead1f587530af03d)

---

#### 5. [Blade Basics](https://github.com/kulotsystems/laravel-thenetninja/tree/ee273c96c6d73a0bedce0fb844ae1d9f600b1344)

---

#### 6. [Blade Loops](https://github.com/kulotsystems/laravel-thenetninja/tree/047e709f082a3507815352a2dafcebe2250ff2e8)

---

#### 7. [Layout Files](https://github.com/kulotsystems/laravel-thenetninja/tree/1555267aa5e0a23d7488e42aeafeb1c53921c3a7)

---

#### 8. [CSS & Images](https://github.com/kulotsystems/laravel-thenetninja/tree/37c2b592b996b10d78ce9d9c7a00dca78bc3aa87)

---

#### 9. [Query Parameters](https://github.com/kulotsystems/laravel-thenetninja/tree/60dc6f2571830cb198023f040c46717fded07362)

---

#### 10. [Route Parameters (wildcards)](https://github.com/kulotsystems/laravel-thenetninja/tree/3d869a364368b31be201916c761c18943d5dea3e)

---

#### 11. [Controllers](https://github.com/kulotsystems/laravel-thenetninja/tree/edcd9706f5f5beb20ae15fa4c4253851cfbe8225)
You will encounter an error saying:

**ERROR: Target class [PizzaController] does not exist.**

To solve this, follow these steps:

1. Import `PizzaController` by adding this line on top of `routes/web.php`.
    ```php
   use App\Http\Controllers\PizzaController;
    ```
2. Then use the new **Laravel 9** syntax in registering actions in routes:

   **REPLACE**
   ```php
   Route::get('/pizzas', 'PizzaController@index');
   Route::get('/pizzas/{id}', 'PizzaController@show');
   ```
   
   **WITH**
    ```php
    Route::get('/pizzas', [PizzaController::class, 'index']);
    Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
    ```
   
---

#### 12. [Connecting to MySQL](https://github.com/kulotsystems/laravel-thenetninja/tree/6be0888322b3b4e890d8e3ee5d5035fd7b6ccec3)

---

#### 13. [Migration Basics](https://github.com/kulotsystems/laravel-thenetninja/tree/60ba93fb341bd0b9cd7dcc513a9d06f703b581d4)
* Do not worry about missing class names in the migration files. They are not required anymore since **Laravel 9**.


---

#### 14. [More on Migrations](https://github.com/kulotsystems/laravel-thenetninja/tree/ec30586486eb89fdf4ebc21fab2759faf0329638)

---

#### 15. [Eloquent Models](https://github.com/kulotsystems/laravel-thenetninja/tree/974cc4f9e72dc4b305f5e27dd07b924b845728d1)
* You can skip adding a value on the price column. Nevermind the error that will appear on **phpMyAdmin**.
* Models will be created inside the app/Models folder instead.


---

#### 16. [MVC Naming Convention](https://github.com/kulotsystems/laravel-thenetninja/tree/9bbe5e0064c40af80f51cc2de29d0e8b48aa7a30)
Again, the new syntax these route actions are:
```php
[PizzaController::class, 'index']
[PizzaController::class, 'show']
[PizzaController::class, 'create']
```

---

#### 17. [Getting a Single Record](https://github.com/kulotsystems/laravel-thenetninja/tree/233cca28c8ad4cfe846772d72f677b9100803283)

---

#### 18. [Creating a Web Form](https://github.com/kulotsystems/laravel-thenetninja/tree/e2689162fe19b69a5bb0d623b29b9bdad9856195)

---

#### 19. [Post Requests](https://github.com/kulotsystems/laravel-thenetninja/tree/65c993bd3ac2be1c3d690436c7002361116929e7)
Again, the new syntax for registering this action in a route is:
```php
Route::post('/pizzas', [PizzaController::class, 'store']);
```

---

#### 20. [Saving Records](https://github.com/kulotsystems/laravel-thenetninja/tree/0fbe52ab8a3823d67ba272ac23f110d8f7d3bfe3)
If you get an error saying

**SQLSTATE[HY000]: General error: 1364 Field 'price' doesn't have a default value**

Just add a value for price during record creation:

```php
...

$pizza->price = 0;
$pizza->save();
```

---

#### 21. [Arrays & JSON](https://github.com/kulotsystems/laravel-thenetninja/tree/043b7cef280132ec4b410953fb76228cd0f1bbe9)

---

#### 22. [Removing Records](https://github.com/kulotsystems/laravel-thenetninja/tree/14b5e6a97b0670e491ee6948c54d21262d04f7fa)
Again, the new syntax for registering this action in a route is:
```php
Route::post('/pizzas/{id}', [PizzaController::class, 'destroy']);
```

---

#### 23. [Using SASS](https://github.com/kulotsystems/laravel-thenetninja/tree/31b5979b50186be33e32d7e7744563a19977b389)
Please follow these steps:
1. Create the `sass` folder inside `resources`.
2. Create the `main.scss` file and copy the content of `public/css/main.css` to it.
3. Run `npm run dev` twice because it's your first time executing this command.
4. Replace the contents of `resources/main.scss` by the contents of [**this file**](https://github.com/kulotsystems/laravel-thenetninja/blob/31b5979b50186be33e32d7e7744563a19977b389/resources/sass/main.scss).
4. Run `npm run watch` command.

---

#### 24. [Laravel Auth Setup](https://github.com/kulotsystems/laravel-thenetninja/tree/46e161a070f6e8ca69d6652881d92cdef6b4c395)
After executing the commands in this lesson,
1. Run `npm update vue-loader` command.
2. Run `npm run dev` again.



---

#### 25. [Authentication Views](https://github.com/kulotsystems/laravel-thenetninja/tree/dfd4ed1749e77f64e2a59e0edd5a36f1088e2118)

---

#### 26. [Protecting Routes](https://github.com/kulotsystems/laravel-thenetninja/tree/cbf007f0d8827b705ffaeae2ce3d42f3235f10ae)

---

#### 27. [Disabling Registration](https://github.com/kulotsystems/laravel-thenetninja/tree/f72723843fc08c0a9be1bdf485a0ee3dc3423320)

---

#### 28. [Named Routes](https://github.com/kulotsystems/laravel-thenetninja/tree/7d92701320eaaa02d867de6d1e94470b2f695fbf)

---

#### 29. File Generation Shortcut

---

#### 30. Wrap Up & Next Steps
