<?php

require 'includes/database.php';
require 'includes/article.php';

$conn = getDB();

if (isset($_GET['id'])) {

  $article = getArticle($conn, $_GET['id']);
} else {
  $article = null;
}
?>

<?php require 'includes/header.php'; ?>

<?php if ($article === null) : ?>
  <p>No articles found!</p>

<?php else : ?>
  <a href="index.php">Home</a>
  <article>
    <h2><?= htmlspecialchars($article['title']); ?></h2>
    <p><?= htmlspecialchars($article['content']); ?></p>
  </article>
  <a href="edit-article.php?id=<?= $article['id']; ?>">Edit</a>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>