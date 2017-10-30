<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>

<body>
    <form method = "get">
        <div>
           Enter Text:
            <input type="text" name="input_text"/>
        </div>
        <?php if (isset($result)): ?>
            <div>
                Result:
                <input type="text" disabled="disabled" readonly="readonly" value="<?= $result; ?>"/>
            </div>
        <?php endif; ?>
        <div>
            <input type="submit" name="count_letters" value=" Count Letters! "/>
        </div>
    </form>
</body>

</html>