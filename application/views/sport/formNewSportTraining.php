
<div class="alert alert-warning">
    <?php echo validation_errors(); ?>
</div>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5 embed-responsive-item ">
        <div class="card-body">
            <form method="post" accept-charset="utf-8" action="<?php echo site_url("sport/addSportTraining")?>">
                <div class="form-group">


                    <div class="form-group">
                        <label class="col-md-6 "> <h2>Create your Event </h2>  </label>
                        <div class="col-md-6">
                            <label >Name Training</label>
                            <input class="form-control" name="nameTraining" type="text" aria-describedby="nameHelp" value="<?php echo set_value('nameTraining'); ?>" required>
                        </div>

                        <div class="col-md-6">
                            <label >Description Training</label>
                            <textarea type="Text1"  class="embed-responsive-item "name="descriptionTraining" rows="5" required ></textarea><?php echo set_value('descriptionTraining'); ?> </textarea>

                        </div>
                        <br>
                        <div class="text-center col-md-4"><input class="btn btn-primary btn-success btn-block" type="submit" value="Create the Training" /></div>


                    </div>


                </div>

            </form>

        </div>
    </div>
</div>