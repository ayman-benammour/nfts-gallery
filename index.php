<?
    // Config php
    include 'includes/config.php';
    include 'includes/data.php';
?>

<!-- HEADER -->
<? include 'chunks/header.php' ?>

<!-- ARTICLES -->
<section class="bg-white py-8">
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

    <!-- HEAD OF ARTICLES -->
        <nav id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                <!-- TEXT -->
                <p class="uppercase tracking-wide font-bold text-gray-800 text-xl " href="#">See our new gallery 👇</p>

            </div>
        </nav>

        <!-- CONTENT -->
        <? foreach ($nfts as $key => $nft) { ?>
            <? $author = $authors[$nft['author']]?>

            <div class="w-full md:w-1/1 xl:w-1/4 p-6 flex flex-col">

                <!-- LINK -->
                <a href="nft.php?id=<?= $key ?>">

                <!-- IMAGE -->
                <img class="hover:shadow-2xl" src="<?= $nft['image'] ?>">

                    <!-- TEXT AREA -->
                    <div class="pt-3 flex items-center justify-between">

                        <!-- NAME OF THE NFT -->
                        <p><?= $nft['title'] ?></p>

                        <!-- VALUE -->
                        <div class="flex items-center justify-center">
                            <p><?= $nft['value'] ?></p>
                            <img class="h-6 w-6 fill-current text-gray-500 hover:text-black" src="./assets/images/eth-logo.svg">
                        </div>

                    </div>

                    <!-- AUTHOR -->
                    <a class="pt-1 text-gray-900 hover:text-black underline" href="author.php?id=<?= $nft['author'] ?>"><?= $author['title'] ?></a>

                </a>

            </div>

        <? } ?>

    </div>
</section>

<!-- FOOTER -->
<? include 'chunks/footer.php' ?>