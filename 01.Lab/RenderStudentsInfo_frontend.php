<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>

<body>
<form method = "get">
    <div>
        Delimiter:
        <select name="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names"/>
    </div>
    <div>
        Ages:
        <input type="text" name="ages"/>
    </div>
    <?php if (isset($result)): ?>
        <div>
       <table border="1" cellpadding="5px">
           <thead>
           <tr>
               <th> Name </th>
               <th> Age </th>
           </tr>
           </thead>
       <tbody>
       <?php foreach($result as $name=>$age): ?>
        <tr>
            <td><?= $name; ?></td>
            <td><?= $age; ?></td>
        </tr>
       <?php endforeach; ?>
       </tbody>
       </table>
        </div>
    <?php endif; ?>
    <div>
        <input type="submit" name="filter" value=" Filter! "/>
    </div>
</form>
</body>

</html>