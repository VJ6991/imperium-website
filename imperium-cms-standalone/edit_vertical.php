<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$verticals_file = VERTICALS_FILE;
$content_file = DATA_FILE;
$verticals = [];
$content_data = [];

if (file_exists($verticals_file)) {
    $verticals = json_decode(file_get_contents($verticals_file), true);
}
if (file_exists($content_file)) {
    $content_data = json_decode(file_get_contents($content_file), true);
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

// Detailed content from content.json
$slug = $vertical['link'];
$detailed = $content_data[$slug]['fields'] ?? [];

$message = '';
$message_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vertical['title'] = $_POST['title'] ?? '';
    $vertical['description'] = $_POST['description'] ?? '';
    
    // Auto-generate slug for new verticals or keep existing
    if ($is_new || empty($_POST['link'])) {
        $slug_base = strtolower(trim($vertical['title']));
        $vertical['link'] = preg_replace('/[^a-z0-9]+/', '-', $slug_base);
        $vertical['link'] = trim($vertical['link'], '-');
    } else {
        $vertical['link'] = trim($_POST['link']);
    }
    
    $new_slug = $vertical['link'];

    // Detailed fields
    $banner_title = $_POST['banner_title'] ?? '';
    $section_title = $_POST['section_title'] ?? '';
    $detailed_desc = $_POST['detailed_description'] ?? '';
    $features = $_POST['features'] ?? '';

    // Handle Image Uploads
    $upload_dir = IMAGE_UPLOAD_DIR;
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $files_to_upload = ['image' => 'image', 'detailed_image' => 'image', 'extra_image' => 'extra_image'];
    foreach ($files_to_upload as $post_key => $json_key) {
        if (isset($_FILES[$post_key]) && $_FILES[$post_key]['error'] === UPLOAD_ERR_OK) {
            $original_filename = basename($_FILES[$post_key]['name']);
            $clean_filename = time() . '_' . $post_key . '_' . preg_replace("/[^a-zA-Z0-9.-]/", "_", $original_filename);
            $target_path = $upload_dir . $clean_filename;
            
            if (move_uploaded_file($_FILES[$post_key]['tmp_name'], $target_path)) {
                $file_val = 'image/cms/' . $clean_filename;
                if ($post_key === 'image') {
                    $vertical['image'] = $file_val;
                } else {
                    $detailed[$json_key]['value'] = $file_val;
                }
            }
        }
    }

    if ($message_type === 'success') {
        // Update main vertical
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
        
        // Update detailed content
        if (!isset($content_data[$new_slug])) {
            $content_data[$new_slug] = [
                'title' => "Vertical: " . $vertical['title'],
                'fields' => []
            ];
        }
        $content_data[$new_slug]['fields']['banner_title'] = ['type' => 'text', 'label' => 'Banner Title', 'value' => $banner_title];
        $content_data[$new_slug]['fields']['section_title'] = ['type' => 'text', 'label' => 'Section Title', 'value' => $section_title];
        $content_data[$new_slug]['fields']['description'] = ['type' => 'textarea', 'label' => 'Description', 'value' => $detailed_desc];
        $content_data[$new_slug]['fields']['image'] = ['type' => 'image', 'label' => 'Side Image', 'value' => $detailed['image']['value'] ?? ''];
        
        if (isset($detailed['extra_image']) || !empty($_FILES['extra_image']['name'])) {
            $content_data[$new_slug]['fields']['extra_image'] = ['type' => 'image', 'label' => 'Bottom Products Image', 'value' => $detailed['extra_image']['value'] ?? ''];
        }
        if (isset($detailed['features']) || !empty($features)) {
            $content_data[$new_slug]['fields']['features'] = ['type' => 'textarea', 'label' => 'Features List', 'value' => $features];
        }

        // Rename key if slug changed
        if ($slug && $slug !== $new_slug && isset($content_data[$slug])) {
            unset($content_data[$slug]);
        }

        file_put_contents($verticals_file, json_encode($verticals, JSON_PRETTY_PRINT));
        file_put_contents($content_file, json_encode($content_data, JSON_PRETTY_PRINT));
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
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Vertical Title</label>
                        <input type="text" name="title" class="form-control form-control-lg" value="<?php echo htmlspecialchars($vertical['title']); ?>" required placeholder="e.g., Health Care">
                        <?php if (!$is_new): ?>
                            <div class="form-text text-muted">Page URL: <span class="fw-bold"><?php echo WEBSITE_URL . '/' . htmlspecialchars($vertical['link']); ?></span></div>
                        <?php endif; ?>
                        <input type="hidden" name="link" value="<?php echo htmlspecialchars($vertical['link']); ?>">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Vertical Image (Card Image)</label>
                    <div class="d-flex align-items-start gap-4">
                        <?php if ($vertical['image']): ?>
                            <div>
                                <img src="<?php echo cms_asset($vertical['image']); ?>" class="image-preview mb-2 d-block">
                                <span class="text-muted small"><?php echo htmlspecialchars($vertical['image']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex-grow-1">
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <p class="text-muted small mt-2">Recommended: Card thumbnail. Leave empty to keep existing.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="form-label fw-bold">Short Description (Card Summary - Max 30 Words)</label>
                    <textarea name="description" id="vert-desc" class="form-control" rows="3" placeholder="Enter short description here..."><?php echo htmlspecialchars($vertical['description']); ?></textarea>
                    <div class="form-text mt-1 d-flex justify-content-between">
                        <span>Limit: 30 words</span>
                        <span id="word-count" class="badge bg-secondary">0 / 30 words</span>
                    </div>
                </div>

                <hr class="my-5">
                <h5 class="mb-4 text-success">Detailed Page Content</h5>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Banner Title</label>
                        <input type="text" name="banner_title" class="form-control" value="<?php echo htmlspecialchars($detailed['banner_title']['value'] ?? ''); ?>" placeholder="e.g., Debt Collection System">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Section Title</label>
                        <input type="text" name="section_title" class="form-control" value="<?php echo htmlspecialchars($detailed['section_title']['value'] ?? ''); ?>" placeholder="e.g., Imperium Debt Management Services">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Side Image (Featured)</label>
                    <div class="d-flex align-items-start gap-4">
                        <?php if (!empty($detailed['image']['value'])): ?>
                            <div>
                                <img src="<?php echo cms_asset($detailed['image']['value']); ?>" class="image-preview mb-2 d-block">
                                <span class="text-muted small"><?php echo htmlspecialchars($detailed['image']['value']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex-grow-1">
                            <input type="file" name="detailed_image" class="form-control" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Detailed Description</label>
                    <textarea name="detailed_description" class="form-control" rows="10"><?php echo htmlspecialchars($detailed['description']['value'] ?? ''); ?></textarea>
                </div>

                <?php if (isset($detailed['extra_image'])): ?>
                <div class="mb-4">
                    <label class="form-label fw-bold">Bottom Products Image</label>
                    <div class="d-flex align-items-start gap-4">
                        <?php if (!empty($detailed['extra_image']['value'])): ?>
                            <div>
                                <img src="<?php echo cms_asset($detailed['extra_image']['value']); ?>" class="image-preview mb-2 d-block">
                                <span class="text-muted small"><?php echo htmlspecialchars($detailed['extra_image']['value']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex-grow-1">
                            <input type="file" name="extra_image" class="form-control" accept="image/*">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (isset($detailed['features'])): ?>
                <div class="mb-4">
                    <label class="form-label fw-bold">Features List (Bullet points, one per line)</label>
                    <textarea name="features" class="form-control" rows="6"><?php echo htmlspecialchars($detailed['features']['value'] ?? ''); ?></textarea>
                    <div class="form-text">Start each line with a dash (-) for consistency.</div>
                </div>
                <?php endif; ?>

                <div class="pt-3 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Save Vertical & Page</button>
                    <a href="verticals.php" class="btn btn-outline-secondary btn-lg px-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const descInput = document.getElementById('vert-desc');
    const words = descInput.value.trim().split(/\s+/).filter(word => word.length > 0);
    if (words.length > 30) {
        e.preventDefault();
        alert('Validation error: Description exceeds 30 word limit.');
    }
});

const descInput = document.getElementById('vert-desc');
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
