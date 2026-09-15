<?php

$title = 'U.S';
$posts = [
  [
    'title' => 'Some U.S title 1',
    'content' => 'Some U.S content 1',
    'date' => 'June 26, 2008',
    'author' => 'Biku'
  ],
  [
    'title' => 'Some U.S title 2',
    'content' => 'Some U.S content 2',
    'date' => 'January 5, 2007',
    'author' => 'Nici'
  ],
  [
    'title' => 'Some U.S title 3',
    'content' => 'Some U.S content 3',
    'date' => 'September 20, 2007',
    'author' => 'Trivurr'
  ],
  [
    'title' => 'Some U.S title 4',
    'content' => 'Some U.S content 4',
    'date' => 'December 28, 2012',
    'author' => 'Ronald'
  ],
];

?>

<?php include __DIR__ . '/partials/header.php'; ?>

    <main class="container">
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