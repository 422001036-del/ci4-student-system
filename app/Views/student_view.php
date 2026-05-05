<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="/student/store" method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="course" placeholder="Course" required>
        <button type="submit">Add Student</button>
    </form>

    <hr>

    <h2>Student List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $s): ?>
            <tr>
                <td><?= $s['name'] ?></td>
                <td><?= $s['email'] ?></td>
                <td><?= $s['course'] ?></td>
                <td>
                    <a href="/student/delete/<?= $s['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>