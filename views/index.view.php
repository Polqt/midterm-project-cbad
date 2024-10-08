<?php require'partials/header.php' ?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4 border border-2 border-secondary border-opacity-25 rounded p-5">
            <form action="index.php" method="POST">
                <div class="d-flex flex-column gap-4">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="name" autocomplete="off" placeholder="Name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" autocomplete="off" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <button class="btn btn-primary p-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require'partials/footer.php' ?>