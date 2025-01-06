<?php include 'assets/head.php' ?>
<?php include 'assets/nav.php' ?>
<?php include 'assets/aside.php' ?>

<main class=" md:ml-16 lg:ml-60 px-3 md:px-7">
    <div class="bg-black whitespace-nowrap overflow-hidden overflow-x-scroll scroll py-3">
        <?php for ($i = 0; $i < 30; $i++): ?>
        <a href="#" class="text-white bg-accent inline-block py-2 px-3 mr-2 rounded-full">Game</a>
        <?php endfor ?>
    </div>
</main>


<?php include 'assets/footer.php' ?>