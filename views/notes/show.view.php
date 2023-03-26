<?php require(__DIR__ . '/../partials/head.php')?>
<?php require(__DIR__ . '/../partials/nav.php')?>
<?php require(__DIR__ . '/../partials/banner.php')?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <P>NOTES PAGE</P>
      <div class="px-4 py-6 sm:px-0">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
          <p class="text-blue-500 hover:underline">
            <a href="/notes">Go back</a>  
          </p>
            <p><?=$note['body']?></p> 
        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>

<?php require(__DIR__ . '/../partials/footer.php')?>