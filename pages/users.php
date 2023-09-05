<?php
// Include the header for your admin panel
include("includes/header.php");
?>

<!-- Content for managing users -->
<div class="container mt-4">
    <h2>Manage Users</h2>

    <!-- User Listing Table -->
    <div class="mt-4">
        <h3>User List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <!-- Populate the table rows with user data from your database -->
                <tr>
                    <td>1</td>
                    <td>johndoe</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                </tr>
                <!-- Repeat rows for more users -->
            </tbody>
        </table>
    </div>
</div>

<?php
// Include the footer for your admin panel
include("includes/footer.php");
?>