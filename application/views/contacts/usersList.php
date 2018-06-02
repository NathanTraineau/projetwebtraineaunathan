

// View for the user list, when the user wants to see the
<br>
<br>

    <h2>All of the users</h2>

    <table class="table table-striped table-hover table-responsive d-md-table align-middle">

    <thead>
    <tr>

        <th scope="col">Username</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone Number</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php


        foreach ( $users as $user )
        {
        if ($user->username != $username){
        ?>

        <th scope="row">
            <?php echo "$user->username" ?> </th>
        <td><?php echo " $user->firstname" ?></td>
        <td> <?php echo " $user->lastname" ?></td>
        <td> <?php echo " $user->phoneNumber" ?></td>
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



