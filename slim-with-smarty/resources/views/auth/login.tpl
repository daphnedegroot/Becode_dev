{extends 'layouts/app.tpl'}

{block 'title'}Login{/block}

{block 'content'}

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Login</h5>
                <div class="card-body">
                    <form action="" autocomplete="off">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                        <a href="{path_for name="home"}" class="btn btn-outline-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


{/block}