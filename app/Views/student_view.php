<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn-delete { color: red; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Student List</h2>

    <form action="<?= base_url('student') ?>" method="get">
        <input type="text" name="search" placeholder="Search by name or email..." value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
        <button type="submit">Search</button>
        <a href="<?= base_url('student') ?>">Reset</a>
    </form>

    <br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($students)): ?>
                <?php foreach($students as $student): ?>
                <tr>
                    <td><?= $student['id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['course'] ?></td>
                    <td>
                        <a href="<?= base_url('student/delete/'.$student['id']) ?>" 
                           class="btn-delete" 
                           onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">No students found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>

    <h3>Add New Student</h3>
    <form action="<?= base_url('student/store') ?>" method="post">
        <input type="text" name="name" placeholder="Full Name" required><br><br>
        <input type="email" name="email" placeholder="Email Address" required><br><br>
        <input type="text" name="course" placeholder="Course" required><br><br>
        <button type="submit">Save Student</button>
    </form>

</body>
</html>