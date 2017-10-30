<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>

<body>
<form method = "get">
    <div>
        First Number:
        <input type="text" name="number_one"/>
    </div>
    <div>
        Second Number:
        <input type="text" name="number_two"/>
    </div>
    <div>
        Third Number:
        <input type="text" name="number_three"/>
    </div>
    <?php if (isset($result)): ?>
        <div>
            Largest Number:
            <input type="text" disabled="disabled" readonly="readonly" value="<?= $result; ?>"/>
        </div>
    <?php endif; ?>
    <div>
        <input type="submit" name="compare" value=" Compare! "/>
    </div>
</form>
</body>

</html>