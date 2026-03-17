<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$partnerships_file = PARTNERSHIPS_FILE;
$partnerships = [];
if (file_exists($partnerships_file)) {
    $partnerships = json_decode(file_get_contents($partnerships_file), true);
}

// Handle deletion
if (isset($_GET['delete'])) {
    $id_to_delete = $_GET['delete'];
    $new_partnerships = array_filter($partnerships, function($p) use ($id_to_delete) {
        return $p['id'] != $id_to_delete;
    });
    file_put_contents($partnerships_file, json_encode(array_values($new_partnerships), JSON_PRETTY_PRINT));
    header('Location: partnerships.php?msg=deleted');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Strategic Partnerships - Imperium CMS</title>
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
        <li class="breadcrumb-item active">Manage Strategic Partnerships</li>
      </ol>
    </nav>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Strategic Partnerships</h2>
        <a href="edit_partnership.php" class="btn btn-primary">+ Add New Partner</a>
    </div>

    <?php if (isset($_GET['msg']) && $_GET['msg'] === 'deleted'): ?>
        <div class="alert alert-success alert-dismissible fade show">
            Partner deleted successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'saved'): ?>
        <div class="alert alert-success alert-dismissible fade show">
            Partner saved successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width: 120px;">Logo</th>
                        <th>Title</th>
                        <th>Description Clip</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($partnerships)): ?>
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No partners found. Click "Add New Partner" to create one.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($partnerships as $p): ?>
                            <tr>
                                <td>
                                    <?php if (!empty($p['logo'])): ?>
                                        <img src="<?php echo cms_asset($p['logo']); ?>" style="width: 80px; height: 30px; object-fit: contain; background: #f8f9fa; padding: 2px; border-radius: 4px;">
                                    <?php else: ?>
                                        <div class="bg-secondary opacity-25 rounded" style="width: 80px; height: 30px;"></div>
                                    <?php endif; ?>
                                </td>
                                <td class="align-middle fw-bold"><?php echo htmlspecialchars($p['title']); ?></td>
                                <td class="align-middle text-muted small"><?php 
                                    $desc = strip_tags($p['description']);
                                    echo htmlspecialchars(strlen($desc) > 80 ? substr($desc, 0, 77) . '...' : $desc);
                                ?></td>
                                <td class="align-middle text-end">
                                    <a href="edit_partnership.php?id=<?php echo urlencode($p['id']); ?>" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                    <a href="partnerships.php?delete=<?php echo urlencode($p['id']); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this partner?')">Delete</a>
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
