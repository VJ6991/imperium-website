<?php
ob_start();
require_once 'auth.php';
require_once 'config.php';
check_auth();

$partnerships_file = PARTNERSHIPS_FILE;
$partnerships = [];
if (file_exists($partnerships_file)) {
    $partnerships = json_decode(file_get_contents($partnerships_file), true);
}

$partnership = [
    'id' => time(),
    'title' => '',
    'logo' => '',
    'description' => '',
    'link' => ''
];

$is_edit = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($partnerships as $p) {
        if ($p['id'] == $id) {
            $partnership = $p;
            $is_edit = true;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $partnership['title'] = $_POST['title'];
    $partnership['description'] = $_POST['description'];
    $partnership['link'] = $_POST['link'];

    // Handle Logo Upload
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = IMAGE_UPLOAD_DIR;
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $file_extension = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
        $filename = 'partner_' . time() . '.' . $file_extension;
        $target_path = $upload_dir . $filename;
        
        if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_path)) {
            $partnership['logo'] = 'image/cms/' . $filename;
        }
    }

    if ($is_edit) {
        foreach ($partnerships as $key => $p) {
            if ($p['id'] == $partnership['id']) {
                $partnerships[$key] = $partnership;
                break;
            }
        }
    } else {
        $partnerships[] = $partnership;
    }

    file_put_contents($partnerships_file, json_encode(array_values($partnerships), JSON_PRETTY_PRINT));
    header('Location: partnerships.php?msg=saved');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_edit ? 'Edit Partner' : 'Add New Partner'; ?> - Imperium CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-preview { max-width: 200px; max-height: 100px; object-fit: contain; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; padding: 5px; }
    </style>
</head>
<body class="bg-light pb-5">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Imperium CMS</a>
  </div>
</nav>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="partnerships.php">Manage Strategic Partnerships</a></li>
        <li class="breadcrumb-item active"><?php echo $is_edit ? 'Edit Partner' : 'Add New Partner'; ?></li>
      </ol>
    </nav>

    <div class="card shadow-sm">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0"><?php echo $is_edit ? 'Edit Partner' : 'Add New Partner'; ?></h4>
        </div>
        <div class="card-body p-4">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="form-label fw-bold">Partner Name</label>
                    <input type="text" name="title" class="form-control form-control-lg" value="<?php echo htmlspecialchars($partnership['title']); ?>" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Partner Logo</label>
                    <div class="d-flex align-items-start gap-4">
                        <?php if ($partnership['logo']): ?>
                            <div>
                                <img src="<?php echo cms_asset($partnership['logo']); ?>" class="image-preview mb-2 d-block">
                                <span class="text-muted small"><?php echo htmlspecialchars($partnership['logo']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex-grow-1">
                            <input type="file" name="logo" class="form-control" accept="image/*">
                            <p class="text-muted small mt-2">Recommended: PNG with transparent background. Leave empty to keep existing logo.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Link (URL or Slug)</label>
                    <input type="text" name="link" class="form-control" value="<?php echo htmlspecialchars($partnership['link']); ?>" placeholder="e.g. partners-avaya or https://example.com">
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Description Clip</label>
                    <textarea name="description" id="partner-desc" class="form-control" rows="5"><?php echo htmlspecialchars($partnership['description']); ?></textarea>
                    <div class="form-text mt-1 d-flex justify-content-between">
                        <span>Provide a short summary of the partnership.</span>
                        <span id="word-count" class="badge bg-secondary">0 / 40 words</span>
                    </div>
                </div>

                <div class="pt-3 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Save Partner</button>
                    <a href="partnerships.php" class="btn btn-outline-secondary btn-lg px-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
const descInput = document.getElementById('partner-desc');
const countDisplay = document.getElementById('word-count');

function updateCount() {
    const text = descInput.value.trim();
    const words = text ? text.split(/\s+/).filter(word => word.length > 0) : [];
    const count = words.length;
    
    countDisplay.textContent = count + ' / 40 words';
    
    if (count > 40) {
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
