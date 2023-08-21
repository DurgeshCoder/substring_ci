# Migrations

All about migration command

### Create Migration

```php
php spark migrate:create <name>
```

It will create new file under \Database\Migrations.

### Run the migration

```php
php spark migrate 
```

Above command create new table in database by using all the instruction given in migration class.

### Modify table using refresh

Modify the structure of the table in up() method of migration class then run cammand

```php
php spark migrate:refresh
```

This command recreate the table and delete all the data.

### Update the table without losing the data

To do this creates new migration

```php
php spark  migrate:create <updatename>
```

Create you change in up method
then run the migration

### Deploy Build  command

```composer update --no-dev```

### Start build of  tailwind css command

``` 
npx tailwind -i input.css -o ouput.css  --watch

```

---

## Building rest api  using CodeIgniter 4

### Steps to create rest apis

1. Create Entity and Model so that db operations can be done.
2. For rest apis create controller class that extends ```ResourceController```

```php
//TrainingCourses is controller classname 
class  TrainingCourses extends ResourceController
{
}
```
3.  Put the entry in ```Routes.php``` file to configure the routes.
There  are  two ways of doing mappping
* Map single single methods get,post and other
    ```php 
     $routes->get("/training/create", "TrainingCourses::create");
  ```
  ```create()``` is method inside controller which will be execute when we fire ```/training/create``` route.


* Use ```resource``` method to get the method automatically

    ```php
    $routes->resource('training-courses');
    ```
  When we use above way of routing then methods got automatically mapped and name of the methods are predefined
  We have to use below methods in controller class


* index() – Get’s all the records from the database.
* create() – It propels an employee record into the database table.
* show() – It gets a single employee record from the database.
* update() – It updates the user record into the database.
* delete() – It deletes an employee record the database.

### Complete Example

```php

<?php

namespace App\Controllers;

use App\Models\TrainingCourseModel;
use CodeIgniter\RESTful\ResourceController;

class  TrainingCourses extends ResourceController
{


    //get the training courses
    public function index()
    {
        $trainingCourseModel = new TrainingCourseModel();
        $trainingCourses = $trainingCourseModel->findAll();
        return $this->respond($trainingCourses);
    }

    public function create(): \CodeIgniter\HTTP\ResponseInterface
    {
        $trainingCourseModel = new \App\Models\TrainingCourseModel();
        $data = [
            "title" => $this->request->getVar('title'),
            "short_description" => $this->request->getVar("short_description"),
            "long_description" => $this->request->getVar("long_description"),
            "fee" => $this->request->getVar("fee"),
            "discounted_fee" => $this->request->getVar("discounted_fee"),
            "mode" => $this->request->getVar("mode"),
            "coverImage" => $this->request->getVar("coverImage"),
            "certificate_url" => $this->request->getVar("certificate_url"),
            "duration" => $this->request->getVar("duration"),
            "admission_open" => $this->request->getVar("admission_open"),
            "start_date" => $this->request->getVar("start_date"),
        ];
        $trainingCourseModel = new TrainingCourseModel();
        try {
            $data = $trainingCourseModel->insert($data);
            //var_dump($data);
            return $this->respondCreated([
                "message" => "Course is added successfully !!"
            ]);
        } catch (\ReflectionException $e) {
            return $this->respond(["message" => $e->getMessage()], 401);

        }


    }


    public function show($id = null)
    {
        $trainingCourseModel = new TrainingCourseModel();
        $course = $trainingCourseModel->find($id);
        return $this->respond($course);
    }


    //delete the  course
    public function delete($id = null)
    {
        $trainingCourseModel = new TrainingCourseModel();
        $data = $trainingCourseModel->find("$id");
        if ($data) {
            $trainingCourseModel->delete($id);
            return $this->respond(["message" => "Course deleted"]);
        } else {
            return $this->failNotFound("No Course found !!");
        }
    }

//    update training courses




}
```
        