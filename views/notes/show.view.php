    <?php require "views/partials/head.php" ?>

    <?php require "views/partials/nav.php" ?>

    <?php require "views/partials/banner.php" ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="bg-white pt-10 rounded-md overflow-hidden shadow font-semibold leading-6 text-gray-900">
                <p class="px-10"><?= $note['body'] ?></p>
                <div class="px-10 py-3 border-t m-auto bg-gray-50 mt-6 flex items-center justify-end gap-x-7 text-sm">
                    <button type="button" class="rounded-md bg-red-600 p-3 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                    <a href="/notes" class="rounded-md bg-indigo-600 p-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go Back</a>
                </div>

            </div>


        </div>
    </main>
    <?php require "views/partials/footer.php" ?>