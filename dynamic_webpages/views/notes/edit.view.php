<?php require ('views/partials/head.php') ?>
<?php require ('views/partials/nav.php') ?>


<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <form method="POST" action="/dynamic_webpages/note">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
              <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Edit Description</label>
              <div class="mt-2">
                <div
                  class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  <textarea name="body" id="body" rows="3"
                    class="block  bg-white flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400"><?= $note['body'] ?></textarea>

                </div>
                <?php if (isset($errors['body'])): ?>
                  <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                <?php endif; ?>
                <div class="mt-4 flex items-center justify-center">
                  <a href="/dynamic_webpages/notes"
                    class="rounded-md ml-10 bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
                  <button type="submit"
                    class="rounded-md ml-2 ml-10 bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>


  </div>
</main>

<?php require ('views/partials/footer.php') ?>