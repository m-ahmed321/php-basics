<?php require ('views/partials/head.php') ?>
<?php require ('views/partials/nav.php') ?>
<?php require ('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <?php foreach ($notes as $note): ?>
      <ul>
        <a href="/dynamic_webpages/note?id=<?php echo $note['id'] ?>" class="text-blue-500 hover:underline">
          <li><?php echo htmlspecialchars($note['body']) ?></li>
        </a>
      <?php endforeach; ?>
    </ul>

    <p class="mt-6">
      <a href="/dynamic_webpages/create" class="text-blue-500 hover:underline">Create note</a>
    </p>
  </div>
</main>

<?php require ('views/partials/footer.php') ?>