{extends 'layouts/app.tpl'}

{block name="title"}Profile{/block}

{block name="content"}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Profile</h5>
                <div class="card-body d-flex">
                    <div class="user_info">
                        <p><strong>Voornaam:</strong> {$row->firstname}</p>
                        <p><strong>Achternaam:</strong> {$row->lastname}</p>
                        <p><strong>Email:</strong> {$row->email}</p>
                    </div>
                    <div class="user_avatar d-flex justify-content-center w-100">
                        <img src="{base_url}/images/avatar.png" class="profile-avatar" alt="avatar">

                    </div>
                </div>
            </div>
        </div>
    </div>

{/block}