{extends 'layouts/app.tpl'}

{block 'title'}Register{/block}

{block 'content'}

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Register</h5>
                <div class="card-body">
                    <form action="{path_for name="auth.register"}" method="post" autocomplete="off">
                        <input type="hidden" name="{$nameKey}" value="{$name}">
                        <input type="hidden" name="{$valueKey}" value="{$value}">
                        <div class="form-group">
                            <label for="first_name">Voornaam</label>
                            <input type="text" name="first_name" id="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Achternaam</label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Register</button>
                        <a href="{path_for name="home"}" class="btn btn-outline-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


{/block}