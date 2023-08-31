    <?php require "views/partials/head.php" ?>

    <?php require "views/partials/nav.php" ?>

    <?php require "views/partials/banner.php" ?>
    <main>

        <div class=" py-24 sm:py-10 ">

            <div class="flex flex-col mx-auto max-w-7xl overflow-hidden justify-between w rounded-md bg-white  shadow-lg ring-1 ring-gray-900/5 ">

                <?php foreach ($notes as $note) : ?>
                    <a href="/note?id=<?= $note['id'] ?>" class="transition-all p-5 flex border-t  font-semibold  text-gray-900 hover:bg-indigo-600 hover:text-white">
                            <?= $note['body'] ?>
                    </a>
                <?php endforeach ?>

            </div>
            <div class="mt-6 flex items-center justify-center gap-x-6"">
                    <a href=" /notes/create" type="button" class="rounded-full bg-indigo-600 p-3 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"">
                    <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>

                </a>
            </div>
        </div>

        </div>
    </main>
    <?php require "views/partials/footer.php" ?>