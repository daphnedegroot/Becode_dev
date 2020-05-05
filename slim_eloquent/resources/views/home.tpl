{extends 'layouts/app.tpl'}

{block name="title"}Home{/block}



{* All content *}
{block name="content"}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <h3>Home view</h3>
    {*   <ul>
           {foreach $users as $user}
               <li>{$user->firstname}</li>
           {/foreach}
       </ul>*}

{/block}