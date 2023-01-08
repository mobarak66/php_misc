<?php include'header.php';?>
<section class="bg-info py-5"
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">Word Character Count Form</div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="row-mb-3">
                            <label class="col-md-3">Test Sentence</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"name="test_sentence"/>
                            </div>
                        </div>

                        <div class="row-mb-3">
                            <label class="col-md-3">Result Output</label>
                            <div class="col-md-9">
                                <textarea class="form-control"><?php echo $result; ?></textarea>
                            </div>
                        </div>
                        <div class="row-mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success" name="count_btn" value="Result"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</section>

</body>
</html>
<?php include'footer.php';?>
