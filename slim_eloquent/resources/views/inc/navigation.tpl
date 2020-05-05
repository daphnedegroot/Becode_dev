<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Authentication</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto d-flex align-items-center">
            {if isset($row)}
                <li>
                    <a href=""><img src="{base_url}/images/avatar.png" class="nav-avatar" alt=""></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {$row->firstname} {$row->lastname}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{path_for name="logout"}">Logout</a>
                    </div>
                </li>
            {else}
                <li class="nav-item">
                    <a class="nav-link" href="{path_for name="auth.login"}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{path_for name="auth.register"}">Register</a>
                </li>
            {/if}
        </ul>
    </div>
</nav>