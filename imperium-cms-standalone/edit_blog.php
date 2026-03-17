<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$blogs_file = BLOGS_FILE;
$blogs = [];
if (file_exists($blogs_file)) {
    $blogs = json_decode(file_get_contents($blogs_file), true);
}

$id = $_GET['id'] ?? '';
$blog = null;
$is_new = empty($id);

if (!$is_new) {
    foreach ($blogs as $b) {
        if ($b['id'] == $id) {
            $blog = $b;
            break;
        }
    }
    if (!$blog) {
        die("Blog not found.");
    }
} else {
    $blog = [
        'id' => uniqid(),
        'title' => '',
        'content' => '',
        'image' => '',
        'date' => date('Y-m-d'),
        'author' => 'Admin'
    ];
}

$message = '';
$message_type = 'success';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog['title'] = $_POST['title'] ?? '';
    $blog['content'] = $_POST['content'] ?? '';
    $blog['date'] = $_POST['date'] ?? date('Y-m-d');
    $blog['author'] = $_POST['author'] ?? 'Admin';

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
            $blog['image'] = 'assets/image/cms/' . $clean_filename;
        } else {
            $message = "Failed to upload image.";
            $message_type = 'danger';
        }
    }

    if ($message_type === 'success') {
        if ($is_new) {
            $blogs[] = $blog;
        } else {
            foreach ($blogs as $index => $b) {
                if ($b['id'] == $id) {
                    $blogs[$index] = $blog;
                    break;
                }
            }
        }
        
        file_put_contents($blogs_file, json_encode($blogs, JSON_PRETTY_PRINT));
        header('Location: blogs.php?msg=saved');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_new ? 'Add' : 'Edit'; ?> Blog - Imperium CMS</title>
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
        <li class="nav-item"><a class="nav-link" href="blogs.php">Manage Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="blogs.php">Manage Blogs</a></li>
        <li class="breadcrumb-item active"><?php echo $is_new ? 'Add New' : 'Edit'; ?> Blog</li>
      </ol>
    </nav>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><?php echo $is_new ? 'Add New Blog Post' : 'Edit Blog Post'; ?></h4>
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
                        <label class="form-label fw-bold">Post Title</label>
                        <input type="text" name="title" class="form-control form-control-lg" value="<?php echo htmlspecialchars($blog['title']); ?>" required placeholder="Enter blog title...">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Publish Date</label>
                        <input type="date" name="date" class="form-control" value="<?php echo htmlspecialchars($blog['date']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Author</label>
                        <input type="text" name="author" class="form-control" value="<?php echo htmlspecialchars($blog['author']); ?>" placeholder="Admin">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Featured Image</label>
                    <div class="d-flex align-items-start gap-4">
                        <?php if ($blog['image']): ?>
                            <div>
                                <img src="<?php echo cms_asset($blog['image']); ?>" class="image-preview mb-2 d-block">
                                <span class="text-muted small"><?php echo htmlspecialchars($blog['image']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex-grow-1">
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <p class="text-muted small mt-2">Recommended size: 1200x800px. Leave empty to keep existing image.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Content (Max 30 Words for Summary)</label>
                    <textarea name="content" id="blog-content" class="form-control" rows="15" placeholder="Write your blog content here..."><?php echo htmlspecialchars($blog['content']); ?></textarea>
                    <div class="form-text mt-1 d-flex justify-content-between">
                        <span>Limit: 30 words</span>
                        <span id="word-count" class="badge bg-secondary">0 / 30 words</span>
                    </div>
                </div>

                <div class="pt-3 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary btn-lg px-5">Save Blog Post</button>
                    <a href="blogs.php" class="btn btn-outline-secondary btn-lg px-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const contentInput = document.getElementById('blog-content');
    // Strip HTML tags for word counting
    const tempDiv = document.createElement("div");
    tempDiv.innerHTML = contentInput.value;
    const plainText = tempDiv.textContent || tempDiv.innerText || "";
    
    const words = plainText.trim().split(/\s+/).filter(word => word.length > 0);
    if (words.length > 30) {
        e.preventDefault();
        alert('Validation error: Content exceeds 30 word limit.');
    }
});

const contentInput = document.getElementById('blog-content');
const countDisplay = document.getElementById('word-count');

function updateCount() {
    // Strip HTML tags for word counting
    const tempDiv = document.createElement("div");
    tempDiv.innerHTML = contentInput.value;
    const plainText = tempDiv.textContent || tempDiv.innerText || "";
    
    const words = plainText.trim().split(/\s+/).filter(word => word.length > 0) : [];
    const count = words.length;
    
    countDisplay.textContent = count + ' / 30 words';
    
    if (count > 30) {
        countDisplay.className = 'badge bg-danger';
        contentInput.classList.add('is-invalid');
    } else {
        countDisplay.className = 'badge bg-secondary';
        contentInput.classList.remove('is-invalid');
    }
}

contentInput.addEventListener('input', updateCount);
window.addEventListener('DOMContentLoaded', updateCount);
</script>
</body>
</html>
