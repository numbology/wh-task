       <?= $data['gosho']?>
        <div class="container text-center">
            <h2>Login</h2>
            <form method="post" action="register.php">
                <div class="form-group justify-content-md-center row">
                    <div class="card col-md-6">

                        <label for="first_name">First Name</label>
                        <input class="form-control" name="first_name" placeholder="First Name" required />

                        <label for="last_name">Last Name</label>
                        <input class="form-control" name="last_name" placeholder="Last Name" required />

                        <label for="email" type="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="johndoe@email.co.uk" required />

                        <label for="address">Address</label>
                        <input class="form-control" name="address" placeholder="Address" required />

                        <label for="country">Country</label>
                        <input class="form-control" name="country" placeholder="Country" required />

                        <label for="postcode">Postcode</label>
                        <input class="form-control" name="postcode" placeholder="Postcode" required />
                        
                        <label for="phone">Phone</label>
                        <input class="form-control" name="phone" placeholder="Phone" required />
                        
                        <br />
                        <button class="btn btn-primary" type="submit" value="Register">Register</button>
                        <br />
                    </div>
                </div>
            </form>
        </div>
