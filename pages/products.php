<?php
// Include the header for your admin panel
include("includes/header.php");
?>

<!-- Content for managing products -->
<div class="container mt-4">
    <h2>Manage Products</h2>

    <!-- Product Management Form -->
    <div class="card">
        <div class="card-header">
            Add New Product
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="productDescription">Product Description</label>
                    <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
                </div>
                <div class="form-group">
                    <label for="productPrice">Price</label>
                    <input type="number" class="form-control" id="productPrice" placeholder="Enter product price">
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>

    <!-- Product Listing Table -->
    <div class="mt-4">
        <h3>Product List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Populate the table rows with product data from your database -->
                <tr>
                    <td>Product 1</td>
                    <td>Description of Product 1</td>
                    <td>$19.99</td>
                    <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <!-- Repeat rows for more products -->
            </tbody>
        </table>
    </div>
</div>

<?php
// Include the footer for your admin panel
include("includes/footer.php");
?>