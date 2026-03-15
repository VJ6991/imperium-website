<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$verticals_file = VERTICALS_FILE;
$verticals = [];
if (file_exists($verticals_file)) {
    $verticals = json_decode(file_get_contents($verticals_file), true);
}

$id = $_GET['id'] ?? '';
$vertical = null;
$is_new = empty($id);

if (!$is_new) {
    foreach ($verticals as $v) {
        if ($v['id'] == $id) {
            $vertical = $v;
            break;
        }
    }
    if (!$vertical) {
        die("Vertical not found.");
    }
} else {
    $vertical = [
        'id' => uniqid(),
        'title' => '',
        'description' => '',
        'image' => '',
        'link' => ''
    ];
}

$message = '';
$message_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vertical['title'] = $_POST['title'] ?? '';
    $vertical['description'] = $_POST['description'] ?? '';
    $vertical['link'] = $_POST['link'] ?? '';

    // Handle Image Upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = IMAGE_UPLOAD_DIR;
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $original_filename = basename($_FILES['image']['name']);
        $clean_filename = time() . '_' . preg_replace("/[^a-zA-Z0-9.-]/", "_", $original_filename);
        $target_path = $upload_dir . $clean_filename;
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            $vertical['image'] = 'assets/image/cms/' . $clean_filename;
        } else {
            $message = "Failed to upload image.";
            $message_type = 'danger';
        }
    }

    if ($message_type === 'success') {
        if ($is_new) {
            $verticals[] = $vertical;
        } else {
            foreach ($verticals as $index => $v) {
                if ($v['id'] == $id) {
                    $verticals[$index] = $vertical;
                    break;
                }
            }
        }
        
        file_put_contents($verticals_file, json_encode($verticals, JSON_PRETTY_PRINT));
        header('Location: verticals.php?msg=saved');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_new ? 'Add' : 'Edit'; ?> Vertical - Imperium CMS</title>
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
        <li class="nav-item"><a class="nav-link" href="verticals.php">Manage Verticals</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="verticals.php">Manage Verticals</a></li>
        <li class="breadcrumb-item active"><?php echo $is_new ? 'Add New' : 'Edit'; ?> Vertical</li>
      </ol>
    </nav>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><?php echo $is_new ? 'Add New Industry Vertical' : 'Edit Industry Vertical'; ?></h4>
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
                        <label class="form-label fw-bold">Vertical Title</label>
                        <input type="text" name="title" class="form-control form-control-lg" value="<?php echo htmlspecialchars($vertical['title']); ?>" required placeholder="e.g., Health Care">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Link / Slug</label>
                        <input type="text" name="link" class="form-control form-control-lg" value="<?php echo htmlspecialchars($vertical['link']); ?>" required placeholder="e.g., healthcare">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Vertical Image</label>
                    <div class="d-flex align-items-start gap-4">
                        <?php if ($vertical['image']): ?>
                            <div>
                                <img src="<?php echo WEBSITE_URL . '/' . htmlspecialchars($vertical['image']); ?>" class="image-preview mb-2 d-block">
                                <span class="text-muted small"><?php echo htmlspecialchars($vertical['image']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex-grow-1">
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <p class="text-muted small mt-2">Recommended: High quality JPG or PNG. Leave empty to keep existing image.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control" rows="8" placeholder="Enter short description here..."><?php echo htmlspecialchars($vertical['description']); ?></textarea>
                </div>

                <div class="pt-3 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Save Vertical</button>
                    <a href="verticals.php" class="btn btn-outline-secondary btn-lg px-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
