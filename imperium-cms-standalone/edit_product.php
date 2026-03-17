<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$products_file = PRODUCTS_FILE;
$products = [];
if (file_exists($products_file)) {
    $products = json_decode(file_get_contents($products_file), true);
}

$id = $_GET['id'] ?? '';
$product = null;
$is_new = empty($id);

if (!$is_new) {
    foreach ($products as $p) {
        if ($p['id'] == $id) {
            $product = $p;
            break;
        }
    }
    if (!$product) {
        die("Product not found.");
    }
} else {
    $product = [
        'id' => time(), // Using timestamp as ID for simplicity
        'title' => '',
        'description' => '',
        'image' => '',
        'link' => ''
    ];
}

$message = '';
$message_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product['title'] = $_POST['title'] ?? '';
    $product['description'] = $_POST['description'] ?? '';
    $product['link'] = $_POST['link'] ?? '';

    // Handle Image Upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = IMAGE_UPLOAD_DIR;
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $original_filename = basename($_FILES['image']['name']);
        $clean_filename = 'product_' . time() . '_' . preg_replace("/[^a-zA-Z0-9.-]/", "_", $original_filename);
        $target_path = $upload_dir . $clean_filename;
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            $product['image'] = 'assets/image/cms/' . $clean_filename;
        } else {
            $message = "Failed to upload image.";
            $message_type = 'danger';
        }
    }

    if ($message_type === 'success') {
        if ($is_new) {
            $products[] = $product;
        } else {
            foreach ($products as $index => $p) {
                if ($p['id'] == $id) {
                    $products[$index] = $product;
                    break;
                }
            }
        }
        
        file_put_contents($products_file, json_encode($products, JSON_PRETTY_PRINT));
        header('Location: products.php?msg=saved');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_new ? 'Add' : 'Edit'; ?> Product - Imperium CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-preview { max-width: 300px; max-height: 200px; object-fit: contain; background: #e9ecef; border-radius: 8px; border: 1px solid #dee2e6; }
    </style>
</head>
<body class="bg-light pb-5">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Imperium CMS</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="products.php">Manage Products</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="products.php">Manage Products</a></li>
        <li class="breadcrumb-item active"><?php echo $is_new ? 'Add New' : 'Edit'; ?> Product</li>
      </ol>
    </nav>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><?php echo $is_new ? 'Add New Product' : 'Edit Product'; ?></h4>
        </div>
        <div class="card-body p-4">
            <?php if ($message): ?>
                <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show">
                    <?php echo htmlspecialchars($message); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <form method="POST" enctype="multipart/form-data">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <label class="form-label fw-bold">Product Title</label>
                        <input type="text" name="title" class="form-control form-control-lg" value="<?php echo htmlspecialchars($product['title']); ?>" required placeholder="e.g., Imperium CRM Connect">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Link / Route</label>
                        <input type="text" name="link" class="form-control form-control-lg" value="<?php echo htmlspecialchars($product['link']); ?>" required placeholder="e.g., products/crmsolution">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Product Image</label>
                    <div class="d-flex align-items-start gap-4">
                        <?php if ($product['image']): ?>
                            <div>
                                <img src="<?php echo cms_asset($product['image']); ?>" class="image-preview mb-2 d-block">
                                <span class="text-muted small"><?php echo htmlspecialchars($product['image']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex-grow-1">
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <p class="text-muted small mt-2">Recommended: High quality JPG or PNG. Leave empty to keep existing image.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Description (Max 30 Words)</label>
                    <textarea name="description" id="prod-desc" class="form-control" rows="8" placeholder="Enter short description here..."><?php echo htmlspecialchars($product['description']); ?></textarea>
                    <div class="form-text mt-1 d-flex justify-content-between">
                        <span>Limit: 30 words</span>
                        <span id="word-count" class="badge bg-secondary">0 / 30 words</span>
                    </div>
                </div>

                <div class="pt-3 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Save Product</button>
                    <a href="products.php" class="btn btn-outline-secondary btn-lg px-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const descInput = document.getElementById('prod-desc');
    let errorMessage = '';

    // Word count check
    const words = descInput.value.trim().split(/\s+/).filter(word => word.length > 0);
    if (words.length > 30) {
        errorMessage += 'Description exceeds 30 word limit.\n';
    }

    if (errorMessage) {
        e.preventDefault();
        alert('Validation error:\n' + errorMessage);
    }
});

const descInput = document.getElementById('prod-desc');
const countDisplay = document.getElementById('word-count');

function updateCount() {
    const text = descInput.value.trim();
    const words = text ? text.split(/\s+/).filter(word => word.length > 0) : [];
    const count = words.length;
    
    countDisplay.textContent = count + ' / 30 words';
    
    if (count > 30) {
        countDisplay.className = 'badge bg-danger';
        descInput.classList.add('is-invalid');
    } else {
        countDisplay.className = 'badge bg-secondary';
        descInput.classList.remove('is-invalid');
    }
}

descInput.addEventListener('input', updateCount);
window.addEventListener('DOMContentLoaded', updateCount);
</script>
</body>
</html>
