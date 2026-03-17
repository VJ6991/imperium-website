<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$casestudies_file = CASESTUDIES_FILE;
$casestudies = [];
if (file_exists($casestudies_file)) {
    $casestudies = json_decode(file_get_contents($casestudies_file), true);
}

$id = $_GET['id'] ?? '';
$casestudy = null;
$is_new = empty($id);

if (!$is_new) {
    foreach ($casestudies as $cs) {
        if ($cs['id'] == $id) {
            $casestudy = $cs;
            break;
        }
    }
    if (!$casestudy) {
        die("Case study not found.");
    }
} else {
    $casestudy = [
        'id' => time(),
        'title' => '',
        'description' => '',
        'image' => '',
        'pdf' => '',
        'home_image' => ''
    ];
}

$message = '';
$message_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $casestudy['title'] = $_POST['title'] ?? '';
    $casestudy['description'] = $_POST['description'] ?? '';

    // Handle Image Upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = IMAGE_UPLOAD_DIR;
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        
        $original_filename = basename($_FILES['image']['name']);
        $clean_filename = 'cs_' . time() . '_' . preg_replace("/[^a-zA-Z0-9.-]/", "_", $original_filename);
        $target_path = $upload_dir . $clean_filename;
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            $casestudy['image'] = 'assets/image/cms/' . $clean_filename;
            // Default home_image to the same image if not provided
            if (empty($casestudy['home_image'])) {
                $casestudy['home_image'] = $casestudy['image'];
            }
        } else {
            $message = "Failed to upload image.";
            $message_type = 'danger';
        }
    }

    // Handle PDF Upload
    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = PDF_UPLOAD_DIR;
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        
        $original_filename = basename($_FILES['pdf']['name']);
        $clean_filename = 'cs_' . time() . '_' . preg_replace("/[^a-zA-Z0-9.-]/", "_", $original_filename);
        $target_path = $upload_dir . $clean_filename;
        
        if (move_uploaded_file($_FILES['pdf']['tmp_name'], $target_path)) {
            $casestudy['pdf'] = 'assets/pdf/cms/' . $clean_filename;
        } else {
            $message = "Failed to upload PDF.";
            $message_type = 'danger';
        }
    }

    if ($message_type === 'success') {
        if ($is_new) {
            $casestudies[] = $casestudy;
        } else {
            foreach ($casestudies as $index => $cs) {
                if ($cs['id'] == $id) {
                    $casestudies[$index] = $casestudy;
                    break;
                }
            }
        }
        
        file_put_contents($casestudies_file, json_encode(array_values($casestudies), JSON_PRETTY_PRINT));
        header('Location: casestudies.php?msg=saved');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_new ? 'Add' : 'Edit'; ?> Case Study - Imperium CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .preview-img { max-width: 200px; max-height: 150px; object-fit: contain; background: #e9ecef; border-radius: 8px; }
    </style>
</head>
<body class="bg-light pb-5">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Imperium CMS</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="casestudies.php">Manage Case Studies</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="casestudies.php">Manage Case Studies</a></li>
        <li class="breadcrumb-item active"><?php echo $is_new ? 'Add New' : 'Edit'; ?> Case Study</li>
      </ol>
    </nav>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><?php echo $is_new ? 'Add New Case Study' : 'Edit Case Study'; ?></h4>
        </div>
        <div class="card-body p-4">
            <?php if ($message): ?>
                <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show">
                    <?php echo htmlspecialchars($message); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <form method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="form-label fw-bold">Case Study Title</label>
                    <input type="text" name="title" class="form-control form-control-lg" value="<?php echo htmlspecialchars($casestudy['title']); ?>" required>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Thumbnail Image</label>
                        <?php if ($casestudy['image']): ?>
                            <div class="mb-2">
                                <img src="<?php echo cms_asset($casestudy['image']); ?>" class="preview-img">
                            </div>
                        <?php endif; ?>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">PDF Document</label>
                        <?php if ($casestudy['pdf']): ?>
                            <div class="mb-2">
                                <span class="badge bg-info text-dark">Current: <?php echo basename($casestudy['pdf']); ?></span>
                            </div>
                        <?php endif; ?>
                        <input type="file" name="pdf" class="form-control" accept="application/pdf">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Description (Max 30 Words)</label>
                    <textarea name="description" id="case-desc" class="form-control" rows="6"><?php echo htmlspecialchars($casestudy['description']); ?></textarea>
                    <div class="form-text mt-1 d-flex justify-content-between">
                        <span>Limit: 30 words</span>
                        <span id="word-count" class="badge bg-secondary">0 / 30 words</span>
                    </div>
                </div>

                <div class="pt-3 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Save Case Study</button>
                    <a href="casestudies.php" class="btn btn-outline-secondary btn-lg px-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const imageInput = document.querySelector('input[name="image"]');
    const pdfInput = document.querySelector('input[name="pdf"]');
    const descInput = document.getElementById('case-desc');
    const maxSize = 64 * 1024 * 1024; // Updated to 64MB to match PHP config

    let errorMessage = '';

    if (imageInput.files.length > 0 && imageInput.files[0].size > maxSize) {
        errorMessage += 'Thumbnail image exceeds 64MB limit.\n';
    }

    if (pdfInput.files.length > 0 && pdfInput.files[0].size > maxSize) {
        errorMessage += 'PDF document exceeds 64MB limit.\n';
    }

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

const descInput = document.getElementById('case-desc');
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
