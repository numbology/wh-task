
    <div class="container text-center">
        <h2>Users</h2>
        <div class="">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Postcode</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['data'] as $row) { ?>
                    <tr>
                        <td><?= $row['first_name'] ?></td>
                        <td><?= $row['last_name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['country'] ?></td>
                        <td><?= $row['postcode'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
