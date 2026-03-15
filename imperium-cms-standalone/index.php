<?php
require_once 'auth.php';
require_once 'config.php';
check_auth();

$data_file = DATA_FILE;
$data = [];
if (file_exists($data_file)) {
    $data = json_decode(file_get_contents($data_file), true);
} else {
    // Attempt to create if not exists
    file_put_contents($data_file, json_encode([]));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperium CMS - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand { font-weight: bold; }
        .page-item-link { text-decoration: none; color: inherit; display: block; }
        .page-item-link:hover .card { background-color: #f8f9fa; transform: translateY(-2px); transition: 0.2s; box-shadow: 0 .5rem 1rem rgba(0,0,0,.05)!important; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Imperium CMS</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Dashboard</h2>
        <span class="text-muted">Select a page to edit</span>
    </div>

    <?php if (empty($data)): ?>
        <div class="alert alert-info">No pages found in the CMS configuration.</div>
    <?php else: ?>
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <a href="blogs.php" class="page-item-link">
                    <div class="card shadow-sm h-100 border-primary">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
                            <h4 class="card-title text-center mb-0 text-primary">
                                📝 Manage Blog Posts
                            </h4>
                            <p class="text-muted small mt-2">Add, Edit or Delete blogs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="verticals.php" class="page-item-link">
                    <div class="card shadow-sm h-100 border-success">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
                            <h4 class="card-title text-center mb-0 text-success">
                                🏢 Manage Verticals
                            </h4>
                            <p class="text-muted small mt-2">Add, Edit or Delete verticals</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="products.php" class="page-item-link">
                    <div class="card shadow-sm h-100 border-info">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
                            <h4 class="card-title text-center mb-0 text-info">
                                📦 Manage Products
                            </h4>
                            <p class="text-muted small mt-2">Add, Edit or Delete products</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <hr class="my-5">
        <h5 class="mb-4">Page Content Configuration</h5>

        <div class="row g-4">
            <?php foreach ($data as $page_id => $page_data): ?>
                <div class="col-md-4">
                    <a href="edit.php?page=<?php echo urlencode($page_id); ?>" class="page-item-link">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
                                <h4 class="card-title text-center mb-0 text-primary">
                                    <?php echo htmlspecialchars($page_data['title'] ?? $page_id); ?>
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
