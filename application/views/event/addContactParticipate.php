

<h2>My contacts</h2>
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
    <?php

    foreach ($contacts as $contact) {
        //contacts is a data sent from the controller method "contacts"


        $user = $contact->$idUser1;

        if ($contact->$idUser2 = $data["username"]){
            $user = $contact->$idUser2;
        }
        ?>

        <td>
        <th scope="row"><?php echo "$user->username " ?> </th>
        <td><?php echo " $user->firstname " ?></td>
        <td> <?php  echo " $user->lastname " ?></td>
        <td> <?php  echo " $user->phoneNumber " ?></td>
        <td>
            <form action="<?php echo site_url("user/addContactParticipate")?>" >
                <input class="btn btn-primary btn-success btn-block" type="hidden" name="contact" value="<?php echo "$user->username" ?>" />
                <input class="btn btn-primary btn-success btn-block" type="hidden" name="contact" value="<?php echo "$idEvent" ?>" />
                <button   class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" add contact to the event">

                </button>

            </form>

        </td>

        </tr>
    <?php }

    ?>
