<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 27/06/2019
 * Time: 20:41
 */


require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

use App\Models\Project;


$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();


if (!empty($_POST)) {
    echo "post ok";
    $proj = new Project();
    $proj->title = $_POST['title'];
    $proj->description = $_POST['description'];
    $proj->tec_1 = $_POST['tec_1'];
    $proj->tec_2 = $_POST['tec_2'];
    $proj->tec_3 = $_POST['tec_3'];
    $proj->save();
}
?>
<html>
    <head>
        <title>Add Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Add Project</h1>
        <form action="addProject.php" method="post" >
            <label for="">Title:</label>
            <input type="text" name="title" ><br>
            <label for="">Description:</label>
            <input type="text" name="description"><br>
            <label for="">Technology 1:</label>
            <input type="text" name="tec_1"><br>
            <label for="">Technology 2:</label>
            <input type="text" name="tec_2"><br>
            <label for="">Technology 3:</label>
            <input type="text" name="tec_3"><br>
            <button type="submit">Save</button>

        </form>
    </body>
</html>