<!DOCTYPE html>
<html>
<head>
    <title>TO-DO List</title>
</head>
<body>
    <h1>TO-DO List</h1>

    <?php
    // Initialize the TO-DO list array
    $todoList = [];

    // Function to add a task to the TO-DO list
    function addTask($task)
    {
        global $todoList;
        $todoList[] = $task;
    }

    // Check if the form is submitted and add the task
    if (isset($_POST['task']) && !empty($_POST['task'])) {
        $task = $_POST['task'];
        addTask($task);
    }
    ?>

    <!-- Display the TO-DO list -->
    <h2>Tasks:</h2>
    <ul>
        <?php
        foreach ($todoList as $task) {
            echo '<li>' . htmlspecialchars($task) . '</li>';
        }
        ?>
    </ul>

    <!-- Form to add a new task -->
    <h2>Add New Task</h2>
    <form method="post" action="index.php">
        <label for="task">Task:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Add Task</button>
    </form>
</body>
</html>
