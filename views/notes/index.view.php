<?php require(__DIR__ . '/../partials/head.php')?>
<?php require(__DIR__ . '/../partials/nav.php')?>
<?php require(__DIR__ . '/../partials/banner.php')?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
    <P>NOTES PAGE</P>
      <div class="px-4 py-6 sm:px-0 p-6">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-6">
            <?php foreach($notes as $note) : ?>
                 <li>
                    <a href="/note?id=<?=$note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) //htmlspecialchars strips formatting to prevent bad stuff like JS insertion?> 
                      <button method="submit">Delete</button>
                    </a>
                 </li>
            <?php endforeach ?>
        </div>
      </div>
    </ul>
    <p>
      <a href="/notes/create" class="text-blue-500 hover:underline">Create note</a>
    </p>
    </div>
  </main>
</div>

<?php require(__DIR__ . '/../partials/footer.php')?>