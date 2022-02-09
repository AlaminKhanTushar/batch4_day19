<?php include "pages/inculudes/header.php";

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="action.php" method="post">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Input Word</label>
                            <div class="col-md-8">
                                <input type="text" name="input_value" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Select Type</label>
                            <div class="col-md-8">
                                <label for=""> <input type="radio" name="type" value="word">Word Count</label>
                                <label for=""> <input type="radio" name="type" value="Character">Character Count</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
<!--                                <input type="text" readonly value="--><?php //echo isset($result)? $result: '' ;?><!--" class="form-control">-->
                                <textarea class="form-control" readonly name="" id="" cols="30" rows="10" >
                                    <?php echo isset"$givenWord\n$wordCount\n$characterCount";?>
<!--                                    --><?php //echo isset($result) ? $result['givenWord']: ''?>
<!--                                    --><?php //echo isset($result) ? $result['wordCount']: ''?>
<!--                                    --><?php //echo isset($result) ? $result['characterCount']: ''?><!-- -->
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 "></label>
                            <div class="col-md-8">
                                <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Get Result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



