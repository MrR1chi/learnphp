<?php


$title = 'World';
$posts = [
  [
    'title' => 'Some World title 1',
    'date' => 'January 1, 2021',
    'author' => 'Pets',
    'body' => 'Some world body 1'
  ],
  [
    'title' => 'Some World title 2',
    'date' => 'January 4, 2021',
    'author' => 'Jaanus',
    'body' => 'Some world body 2'
  ],
  [
    'title' => 'Some World title 3',
    'date' => 'January 6, 2021',
    'author' => 'Some cat',
    'body' => 'Some world body 3'
  ],
  [
    'title' => 'Some World title 4',
    'date' => 'January 8, 2021',
    'author' => 'What?',
    'body' => 'Some world body 4'
  ],
];
?>




<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php include __DIR__ . '/partials/hero.php'; ?>
  <?php include __DIR__ . '/partials/featured.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>