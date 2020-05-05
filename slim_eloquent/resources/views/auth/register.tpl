{extends 'layouts/app.tpl'}

{block "title"}Register{/block}

{block "content"}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{path_for name="home"}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Register</h5>
                <div class="card-body">
                    <form action="{path_for name="auth.register"}" method="post">
                        <div class="form-group">
                            <label for="first">Voornaam</label>
                            <input type="text" name="firstname" id="first" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last">Achternaam</label>
                            <input type="text" name="lastname" id="last" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Wachtwoord</label>
                            <input type="password" name="password" id="pass" class="form-control">
                        </div>
                        <input type="submit" name="submit" class="btn btn-outline-primary" value="Register">
                        <a href="" class="btn btn-outline-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

{/block}