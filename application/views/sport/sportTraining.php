<div class="card card-register mx-auto ">



    <h2>The trainings</h2>
    <table class="table table-striped table-hover table-responsive d-md-table align-middle">

        <thead>

        <tr>
            <th scope="col">Name of the training</th>
            <th scope="col">Description of the Training</th>

        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($trainings as $training) {
            ?>

            <th scope="row"><?php echo "$training->nameTraining " ?> </th>
            <td> <?php  echo " $training->descriptionTraining " ?></td>
            <td>
                <form action="<?php echo site_url("sport/deleteSportTraining") ?>" method="post">
                    <p>
                        <input class="btn btn-primary btn-success btn-block" type="hidden" name="nameTraining"
                               value="<?php echo "$training->nameTraining" ?>"/><input type="submit" value="Delete the training"/>
                    </p>
                </form>
            </td>


            </tr>
        <?php }

        ?>

        </tbody>
    </table>
    <div class="text-center">
        <a class="btn btn-primary btn-success btn-block md-8" href="<?php echo site_url("sport/formSportTraining")?>">Create a Training</a>
    </div>

