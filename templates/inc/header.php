<!DOCTYPE html>
<html>
<head>
	<title>JobLister</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
      <div class="header clearfix">
        <nav>
					<ul class="nav justify-content-center">
					  <li class="nav-item">
					    <a class="nav-link active" href="index.php">Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" href="create.php">New Listing</a>
					  </li>

					</ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>
