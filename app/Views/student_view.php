<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>

    <!-- ✅ Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4 text-center">Student List</h2>

    <!-- 🔍 Search -->
    <form action="<?= base_url('student') ?>" method="get" class="row g-2 mb-3">
        <div class="col-md-6">
            <input 
                type="text" 
                name="search" 
                class="form-control"
                placeholder="Search by name or email..." 
                value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="<?= base_url('student') ?>" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    <!-- 📋 Table -->
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
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
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this record?')">
                           Delete
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No students found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- ➕ Add Student -->
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            Add New Student
        </div>
        <div class="card-body">
            <form action="<?= base_url('student/store') ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <input type="text" name="course" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Save Student</button>

            </form>
        </div>
    </div>

</div>

<!-- ✅ Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>