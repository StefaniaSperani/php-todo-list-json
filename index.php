<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP To Do List</title>

</head>

<body>
    <div id="app">
        <div class="container-md text-center my-3">
            <h1 class="text-capitalize">Todo list</h1>
            <div class="d-flex justify-content-center py-4">
                <ul id="todo-list">
                    <li v-for="(todo, index) in todoList" :class="todo.done ? 'done': ''"
                        class="d-flex flex-column py-2 todo">
                        {{todo.text}}
                    </li>
                </ul>
            </div>
            <div>
                <input type="text">&nbsp;
                <button>Aggiungi</button>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>