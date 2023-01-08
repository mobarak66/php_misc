<?php include'header.php';?>
<section class="bg-info py-5"
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Odd Even Series</div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-md-3">First Number</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" required name="first_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Last Number</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" required name="last_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Your Choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="choice" checked value="Odd"/>Odd</label>
                                <label><input type="radio" name="choice" value="Even"/>Even</label>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <textarea class="form-control"><?php echo $result;?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success" name="odd_even_series_btn" value="Check">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</body>
</html>
<?php include'footer.php';?>