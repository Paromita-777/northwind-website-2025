<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <title><?= $title ?? "NO TITLE" ?> - Northwind</title>
</head>
<body>
  <div class="site-wrapper">
    <header class="site-header">
      <h1 class="sub-title">Northwind Website</h1>
      <div class="main-nav-container">
        <nav class="main-nav">
          <!-- links go here -->
        </nav>
      </div>
    </header>
    <main class="main-content">

    <?= $content ?? 'NO CONTENT - $content not defined' ?>

    </main>
  <footer class="footer site-footer">
    <p class="copyright">Copyright &copy; <?= date('Y')?>Northwind</p>
  </footer>
  </div>
  

  

</body>
</html>