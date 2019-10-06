<div class="container text-center">
    <hr/>
    <div class="">
        <?php if (isset($_SESSION['logged_in'])) { ?>
            <h1>Hello <?= $_SESSION['user'] ?>, logged in.</h1>
        <?php } ?>
        <hr/>
        <div class="row">
            <div class="card col-md">
                <div class="card-body">
                    <h4><a href="/user/register/">Register</a></h4>
                </div>
            </div>
            <div class="card col-md">
                <div class="card-body">
                    <h4><a href="/user/login/">Login</a></h4>
                </div>
            </div>
            <div class="card col-md">
                <div class="card-body">
                    <h4><a href="/user/">Address Report</a></h4>
                </div>
            </div>
        </div>
    </div>
    <hr/>
</div>