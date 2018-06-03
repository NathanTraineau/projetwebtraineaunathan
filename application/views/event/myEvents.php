

    <h2>My contacts</h2>
    <table class="table table-striped table-hover table-responsive d-md-table align-middle">

        <thead>

        <tr>
            <th scope="col">Name of the event</th>
            <th scope="col">Place of the event </th>
            <th scope="col">date of the Event </th>
            <th scope="col">Description of the Event</th>
            <th scope="col">Training scheduled </th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($events as $event) {
            ?>
            <tr>
            <th scope="row"><?php echo "$event->nameEvent " ?> </th>
            <td><?php echo " $event->placeEvent " ?></td>
            <td> <?php  echo " $event->dateEvent " ?></td>
            <td> <?php  echo " $event->descriptionEvent " ?></td>

            <td> <?php echo " $event->nameTraining " ?></td>
            <td>
                <form method="post" accept-charset="utf-8" action="<?php echo site_url("event/deleteSportEvent")?>">
                    <input id="prodId" name="idEvent" type="hidden" value="<?php echo "$event->idEvent " ?>">
                    <button class="btn btn-primary btn-success btn-block" >
                        Delete this event
                    </button>
                </form>
            </td>

            </tr>
        <?php }

        ?>

        </tbody>
    </table>

