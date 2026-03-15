<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$data_file = DATA_FILE;
$page_id = $_GET['page'] ?? '';

if (!file_exists($data_file)) {
    die("Content data not found.");
}

$data = json_decode(file_get_contents($data_file), true);

if (!isset($data[$page_id])) {
    die("Page not found.");
}

$page_data = $data[$page_id];
$message = '';
$message_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $has_changes = false;
    
    foreach ($page_data['fields'] as $key => $field) {
        if ($field['type'] === 'text' || $field['type'] === 'textarea') {
            if (isset($_POST[$key])) {
                $data[$page_id]['fields'][$key]['value'] = $_POST[$key];
                $has_changes = true;
            }
        } elseif ($field['type'] === 'image') {
            // Handle file upload
            if (isset($_FILES[$key]) && $_FILES[$key]['error'] === UPLOAD_ERR_OK) {
                $upload_dir = IMAGE_UPLOAD_DIR;
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                
                $original_filename = basename($_FILES[$key]['name']);
                $clean_filename = time() . '_' . preg_replace("/[^a-zA-Z0-9.-]/", "_", $original_filename);
                $target_path = $upload_dir . $clean_filename;
                
                if (move_uploaded_file($_FILES[$key]['tmp_name'], $target_path)) {
                    // Update JSON value with relative path from website root
                    $data[$page_id]['fields'][$key]['value'] = 'assets/image/cms/' . $clean_filename;
                    $has_changes = true;
                } else {
                    $message = "Failed to upload image $original_filename.";
                    $message_type = 'danger';
                }
            }
        }
    }
    
    if ($has_changes && $message_type === 'success') {
        file_put_contents($data_file, json_encode($data, JSON_PRETTY_PRINT));
        $message = "Content updated successfully!";
        // Reload data to reflect changes immediately
        $page_data = $data[$page_id];
    } elseif ($has_changes) {
        // Still save partial changes even if one image failed
        file_put_contents($data_file, json_encode($data, JSON_PRETTY_PRINT));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?php echo htmlspecialchars($page_data['title']); ?> - Imperium CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-preview { max-width: 250px; max-height: 150px; object-fit: contain; background: #e9ecef; border-radius: 5px; padding: 5px; outline: 1px solid #dee2e6; }
    </style>
</head>
<body class="bg-light pb-5">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Imperium CMS</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit '<?php echo htmlspecialchars($page_data['title']); ?>'</li>
      </ol>
    </nav>
    
    <div class="card shadow-sm mt-3">
        <div class="card-header bg-white">
            <h4 class="mb-0">Editing Page: <span class="text-primary"><?php echo htmlspecialchars($page_data['title']); ?></span></h4>
        </div>
        <div class="card-body">
            <?php if ($message): ?>
                <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                    <?php echo htmlspecialchars($message); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="edit.php?page=<?php echo urlencode($page_id); ?>" enctype="multipart/form-data">
                
                <?php foreach ($page_data['fields'] as $key => $field): ?>
                    <div class="mb-4">
                        <label class="form-label fw-bold"><?php echo htmlspecialchars($field['label']); ?></label>
                        
                        <?php if ($field['type'] === 'text'): ?>
                            <input type="text" name="<?php echo htmlspecialchars($key); ?>" class="form-control" value="<?php echo htmlspecialchars($field['value']); ?>">
                            
                        <?php elseif ($field['type'] === 'textarea'): ?>
                            <textarea name="<?php echo htmlspecialchars($key); ?>" class="form-control" rows="5"><?php echo htmlspecialchars($field['value']); ?></textarea>
                            
                        <?php elseif ($field['type'] === 'image'): ?>
                            <div class="d-flex align-items-start gap-4">
                                <?php if ($field['value']): ?>
                                    <div>
                                        <p class="mb-1 text-muted small">Current Image:</p>
                                        <!-- Preview from the main website -->
                                        <img src="<?php echo WEBSITE_URL . '/' . htmlspecialchars($field['value']); ?>" class="image-preview" alt="Preview">
                                        <div class="small text-muted mt-1"><?php echo htmlspecialchars($field['value']); ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="text-muted fst-italic">No image set</div>
                                <?php endif; ?>
                                
                                <div class="flex-grow-1">
                                    <p class="mb-1 text-muted small">Upload New Image (Leave empty to keep current):</p>
                                    <input type="file" name="<?php echo htmlspecialchars($key); ?>" class="form-control" accept="image/*">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if (end($page_data['fields']) !== $field): ?>
                        <hr class="text-muted opacity-25">
                    <?php endif; ?>
                <?php endforeach; ?>
                
                <div class="mt-5 d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4 py-2">Save Changes</button>
                    <a href="index.php" class="btn btn-outline-secondary px-4 py-2">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
