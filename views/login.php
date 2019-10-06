
        <div class="container text-center">
            <h2>Login</h2>
            
            <form method="post" action="/user/login/">
                <div class="form-group justify-content-md-center row">
                    <div class="card col-md-6">
                    <?php if ($data['data']) { ?>
                        <?php foreach($data['data'] as $error) { ?>
                            <div class="alert alert-danger">
                                <?= $error; ?>   
                            </div>
                        <?php } } ?>  
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="johndoe@email.co.uk" required />

                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="********" required />

                        <br />
                        <button class="btn btn-primary" type="submit" value="Login">Login</button>
                        <br />
                    </div>
                </div>
            </form>
        </div>
