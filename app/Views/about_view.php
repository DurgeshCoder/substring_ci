<?= $this->extend('default') ?>

<!--start page Title-->

<?= $this->section("pageTitle") ?>

About Substring Technologies

<?= $this->endSection() ?>
<!--end page title section -->

<?= $this->section('content') ?>


<div class="">


    <div class="row  flex my-2  space-x-3 border  justify-end">
        <?php foreach ($friends as $key => $value) {

            ?>

            <div class="card bg-white-400 shadow p-5 ">


                <h1 class="text-3x"><?= $value->getName() ?></h1>
                <h1 class="text-3x"><?= $value->getCity() ?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid aperiam assumenda
                    atque blanditiis dicta distinctio dolor dolore dolores doloribus enim error eum ex facere harum
                    inventore ipsa labore laborum magnam nam neque, nobis officia placeat praesentium, provident quasi
                    qui rem similique sint totam ullam velit vero voluptatibus voluptatum.</p>
                <button class="px-2 text-white rounded py-1 bg-red-600">Click</button>

            </div>

        <?php } ?>

    </div>

</div>


<?= $this->endSection() ?>
