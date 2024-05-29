<?php require ('views/partials/head.php') ?>
<?php require ('views/partials/nav.php') ?>
<?php require ('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <p class="mb-6">
      <a href="/dynamic_webpages/notes" class="text-blue-400 underline">Go back...</a>
    </p>
    <p>
      <?php echo htmlspecialchars($note['body']) ?>
    </p>
    <footer class="mt-6">
      <a class="text-gray-500 border border-current px-4 py-2 rounded"
        href="/dynamic_webpages/note/edit?id=<?= $note['id'] ?>">Edit</a>
    </footer>
  </div>
</main>

<?php require ('views/partials/footer.php') ?>