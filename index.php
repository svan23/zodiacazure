<?php include '_header.php'; ?>
<?php $title = 'Home'; ?>

<div class="container">
    <h1 class="mt-4">Vanessa Lab 1</h1>
    <div class="mt-4 p-2 bg-secondary text-white rounded" style="width: 60%;">
        <h3>Check your zodiac.</h3>
        <p>
            Enter your birth year to know your Zodiac sign!
        </p>
    </div>
    <br />
    <form action="/" method="post">
        <label for="year" class="form-label">Year of Birth </label>
        <input type="number" class="col-3 mb-2" id="year" name="year" placeholder="Enter year">
        <button type="submit" class="btn btn-sm btn-primary" value="submit">Get Zodiac</button>
        <button type="reset" class="btn btn-sm btn-danger">Clear</button>
    </form>
    <?php include 'form.php'; ?>
</div>
<?php include '_footer.php'; ?>