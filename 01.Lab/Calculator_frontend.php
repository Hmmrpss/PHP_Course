<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>

<body>
    <form method = "get">
        <div>
            Operation:
            <select name="operation">
                <option value="sum">Sum</option>
                <option value="subtract">Substract</option>
            </select>
        </div>
        <div>
            First Number:
            <input type="text" name="number_one"/>
        </div>
        <div>
            Second Number:
            <input type="text" name="number_two"/>
        </div>
    <?php if (isset($result)): ?>
        <div>
            Result:
            <input type="text" disabled="disabled" readonly="readonly" value="<?= $result; ?>"/>
        </div>
    <?php endif; ?>
        <div>
            <input type="submit" name="calculate" value=" Calculate! "/>
        </div>
    </form>
</body>

</html>