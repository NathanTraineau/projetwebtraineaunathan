
<div class="alert alert-warning">
    <?php echo validation_errors(); ?>
</div>

<div class="alert alert-danger">
    <?php echo validation_errors(); ?>
</div>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5  align-middle">
        <div class="card-body">
            <form id="formEvent" method="post" accept-charset="utf-8" action="<?php echo site_url("event/newSportEvent")?>">
                <div class="form-group">


                        <div class="form-group">
                            <label class="col-md-6 "> <h2>Create your Event </h2>  </label>
                                <div class="col-md-6">
                                    <label for="exampleInputName">Name Event</label>
                                    <input class="form-control" name="nameEvent" type="text" aria-describedby="nameHelp" value="<?php echo set_value('nameEvent'); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputName">Place Event</label>
                                    <input class="form-control" name="placeEvent" type="text" aria-describedby="nameHelp" value="<?php echo set_value('placeEvent'); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputName">Date Event</label>
                                    <input class="form-control" name="dateEvent" type="datetime-local" aria-describedby="nameHelp" value="<?php echo set_value('dateEvent'); ?>" required>
                                </div>

                            <div class="col-md-6">
                                <label for="exampleInputName">Training</label>
                                <select class="form-control" name="nameTraining" form="formEvent">
                                    <?php
                                    foreach ($trainings as $training) {
                                        echo "<option value = $training->nameTraining>$training->nameTraining  </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputName">Description Event</label>
                                <textarea form="formEvent" type="Text" cols="50" name="descriptionEvent" rows="5" value="<?php echo set_value('descriptionEvent'); ?>"> </textarea>

                            </div>
                            <br>
                                <div class="text-center col-md-4"><input class="btn btn-primary btn-success btn-block" type="submit" value="Create the event" /></div>


                        </div>


                </div>

            </form>

        </div>
    </div>
</div>
