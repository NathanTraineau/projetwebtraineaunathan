
<br>
<br>
<h2>My contacts</h2>

<table class="table table-striped table-hover table-responsive d-md-table align-middle">

    <thead>
    <tr>

        <th scope="col">Username</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php


        foreach ( $contacts as $contact )
        {
        if ($contact->idUser1 == $userUsername){
        ?>

        <th scope="row">
            <?php echo "$contact->idUser2" ?> </th>
        <td>
            <form action="<?php echo site_url("contacts/showContactProfil") ?>" method="post">
                <p>
                    <input class="btn btn-primary btn-success btn-block" type="hidden" name="contactUsername"
                           value="<?php echo "$contact->idUser2" ?>"/><input type="submit" value="See the info Contact"/>
                </p>
            </form>
        </td>
        <td>
            <form action="<?php echo site_url("contacts/deleteContact") ?>" method="post">
                <p>
                    <input class="btn btn-primary btn-success btn-block" type="hidden" name="username1"
                           value="<?php echo "$contact->idUser2" ?>"/><input type="submit" value="Delete User as a Contact"/>
                </p>
            </form>
        </td>
    </tr>
    <?php }

    else if ( $contact->idUser2 == $userUsername){
        ?>

        <th scope="row">
            <?php echo "$contact->idUser1" ?> </th>
        <td>
            <form action="<?php echo site_url("contacts/showContactProfil") ?>" method="post">
                <p>
                    <input class="btn btn-primary btn-success btn-block" type="hidden" name="contactUsername"
                           value="<?php echo "$contact->idUser1" ?>"/><input type="submit" value="See the info Contact"/>
                </p>
            </form>
        </td>
        <td>
            <form action="<?php echo site_url("contacts/deleteContact") ?>" method="post">
                <p>
                    <input class="btn btn-primary btn-success btn-block" type="hidden" name="username1"
                           value="<?php echo "$contact->idUser1" ?>"/><input type="submit" value="Delete User as a Contact"/>
                </p>
            </form>
        </td>
        </tr>
    <?php }
    }
    ?>

</table>

