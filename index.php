<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- bootstrap -->
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div class="d-flex justify-content-center" id="app">
        <div>
            <div class="add_task">
                <h3 class="my-4 text-primary">ToDoList</h3>
                <input type="text">
                <button class="mx-2">Add</button>
            </div>
            <div class="task_list py-3">
                <ul>
                    <li></li>
                </ul>
            </div>
         </div>
    </div>



    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- VueJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- My JS  -->
    <script src="main.js"></script>

</body>
</html>