






<h2>My Profil</h2>

<table class="table table-striped table-hover">

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
    foreach ($infosUser as $info)
    {
        ?>

        <th scope="row">
            <?php echo "$info->username" ?> </th>
        <td><?php echo " $info->firstname" ?></td>
        <td> <?php  echo " $info->lastname" ?></td>
        <td> <?php  echo " $info->phoneNumber" ?></td>
<?php } ; ?>
    </tbody>

</table>
