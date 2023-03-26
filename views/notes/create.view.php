<?php require(__DIR__ . '/../partials/head.php')?>
<?php require(__DIR__ . '/../partials/nav.php')?>
<?php require(__DIR__ . '/../partials/banner.php')?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


<div>
  <form method="POST">
    <label for="about" class="block text-sm font-medium text-gray-700">Add your note</label>
      <div class="mt-1">
        <textarea id="body" name="body" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        ><?= isset($_POST['body']) ? $_POST['body'] : ""?> </textarea>
          <?php if (isset($errors['body'])) : ?>
            <p class="text-red-500 text-xs mt-6"><?= $errors['body']?></p>
          <?php endif; ?>
      </div>
      <p class="mt-2 text-sm text-gray-500">
        <button type="submit">Submit</button>
      </p>
  </form>
</div>


<?php require(__DIR__ . '/../partials/footer.php')?>