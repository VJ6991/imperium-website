<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$products_file = PRODUCTS_FILE;
$products = [];
if (file_exists($products_file)) {
    $products = json_decode(file_get_contents($products_file), true);
}

// Handle deletion
if (isset($_GET['delete'])) {
    $id_to_delete = $_GET['delete'];
    $new_products = array_filter($products, function($p) use ($id_to_delete) {
        return $p['id'] != $id_to_delete;
    });
    file_put_contents($products_file, json_encode(array_values($new_products), JSON_PRETTY_PRINT));
    header('Location: products.php?msg=deleted');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Imperium CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light pb-5">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Imperium CMS</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Manage Products</li>
      </ol>
    </nav>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Products</h2>
        <a href="edit_product.php" class="btn btn-primary">+ Add New Product</a>
    </div>

    <?php if (isset($_GET['msg']) && $_GET['msg'] === 'deleted'): ?>
        <div class="alert alert-success alert-dismissible fade show">
            Product deleted successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'saved'): ?>
        <div class="alert alert-success alert-dismissible fade show">
            Product saved successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width: 100px;">Image</th>
                        <th>Title</th>
                        <th>Link / Slug</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($products)): ?>
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No products found. Click "Add New Product" to create one.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td>
                                    <?php if (!empty($product['image'])): ?>
                                        <?php 
                                            // Extract the correct image path
                                            $imgSrc = (strpos($product['image'], 'http') === 0) ? $product['image'] : WEBSITE_URL . '/' . ltrim($product['image'], '/');
                                        ?>
                                        <img src="<?php echo $imgSrc; ?>" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                                    <?php else: ?>
                                        <div class="bg-secondary opacity-25 rounded" style="width: 60px; height: 40px;"></div>
                                    <?php endif; ?>
                                </td>
                                <td class="align-middle fw-bold"><?php echo htmlspecialchars($product['title']); ?></td>
                                <td class="align-middle text-muted"><?php echo htmlspecialchars($product['link'] ?? ''); ?></td>
                                <td class="align-middle text-end">
                                    <a href="edit_product.php?id=<?php echo urlencode($product['id']); ?>" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                    <a href="products.php?delete=<?php echo urlencode($product['id']); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
