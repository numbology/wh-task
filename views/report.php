<?php require "../layout/header.php"; ?>
<?php
    $addresses = "SELECT * FROM addresses";
?>
    <div class="container text-center">
        <h2>User addresses</h2>
        <div class="">
            <table class="table">
                <thead>

                <tr>
                    <th>column header, probably everything except ID</th>
                </tr>

                </thead>
                <tbody>
                <?php foreach ($addresses as $address) { ?>
                    <tr>
                    <?php foreach ($address as $addressResult) { ?>
                        <td><?= $addressResult['columns'] ?></td>
                    <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php require "../layout/footer.php" ?>