
<br>
<br>

    <h2>All of the users</h2>

    <table class="table table-striped table-hover table-responsive d-md-table align-middle">

    <thead>
    <tr>

        <th scope="col">Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php


        foreach ( $users as $user )
        {
        $pass = true;
        foreach ($contacts as $contact) {
            if ($user->username == $userUsername or $contact->idUser1 == $user->username or $contact->idUser2 == $user->username) {
                $pass = false;
            }
        }
        if ($pass){
        ?>

        <th scope="row">
            <?php echo "$user->username" ?> </th>

        <td>
            <form action="<?php echo site_url("contacts/addContact") ?>" method="post">
                <p>
                    <input class="btn btn-primary btn-success btn-block" type="hidden" name="username1"
                           value="<?php echo "$user->username" ?>"/><input type="submit" value="Add User as a Contact"/>
                </p>
            </form>
        </td>
    </tr>
    <?php }
    }
    
    ?>

</table>



