<?php require base_path("views/partials/head.php") ?>

<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>
<main>
    <div class="flex flex-col mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white pt-10 rounded-md overflow-hidden shadow font-semibold leading-6 text-gray-900">
            <p class="px-10"><?= $note['body'] ?></p>
            <div class="px-10 py-3 border-t m-auto bg-gray-50 mt-6 flex items-center justify-end gap-x-7 text-sm">
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="rounded-md bg-red-600 p-3 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                </form>
                <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-indigo-600 p-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>

            </div>

        </div>
        <!-- <a href="/notes" class="rounded-md bg-indigo-600 p-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go Back</a> -->
        <div class="mt-6 flex items-center justify-center gap-x-6"">
            <a href=" /notes" class="rounded-md bg-indigo-600 p-3 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go Back</a>

        </div>

    </div>
</main>
<?php require base_path("views/partials/footer.php") ?>