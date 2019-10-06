
        <div class="container text-center">
            <h2>Register</h2>
            <form method="post" action="/user/register/">
                <div class="form-group justify-content-md-center row">
                    <div class="card col-md-6">
                        <?php if ($data['data']) { ?>
                        <?php foreach($data['data'] as $error) { ?>
                            <div class="alert alert-danger">
                                <?= $error; ?>   
                            </div>
                        <?php } } ?>                       
                        <label for="first_name">First Name</label>
                        <input class="form-control" name="first_name" placeholder="First Name" value="<?=@$_POST['first_name']?>"   />

                        <label for="last_name">Last Name</label>
                        <input class="form-control" name="last_name" placeholder="Last Name" value="<?=@$_POST['last_name']?>"   />

                        <label for="email" type="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="johndoe@email.co.uk" value="<?=@$_POST['email']?>"   />

                        <label for="address">Address</label>
                        <input class="form-control" name="address" placeholder="Address" value="<?=@$_POST['address']?>"   />

                        <label for="country">Country</label>
                        <input class="form-control" name="country" placeholder="Country" value="<?=@$_POST['country']?>"   />

                        <label for="postcode">Postcode</label>
                        <input class="form-control" name="postcode" placeholder="Postcode" value="<?=@$_POST['postcode']?>"   />
                        
                        <label for="phone">Phone</label>
                        <input class="form-control" name="phone" type="number" placeholder="Phone" value="<?=@$_POST['phone']?>"   />

                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password"   />

                        <label for="re_password">Re-enter Password</label>
                        <input class="form-control" type="password" name="re_password"   />
                        
                        <br />
                        <button class="btn btn-primary" type="submit" value="Register">Register</button>
                        <br />
                    </div>
                </div>
            </form>
        </div>

    <script>

    </script>
