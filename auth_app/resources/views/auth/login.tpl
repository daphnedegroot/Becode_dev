{extends 'layouts/app.tpl'}

{block "title"}Login{/block}

{block "content"}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{path_for name="home"}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Login</h5>
                <div class="card-body">
                    <form action="{path_for name="auth.check"}" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Wachtwoord</label>
                            <input type="password" name="password" id="pass" class="form-control">
                        </div>
                        <input type="submit" name="submit" class="btn btn-outline-primary" value="Login">
                        <a href="" class="btn btn-outline-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

{/block}