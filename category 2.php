<?php
$sql = $mysqli->query("SELECT category.count, book.name
FROM category INNER JOIN book ON category.count = book.category
WHERE ((category.count)=$cat);");
while ($result = mysqli_fetch_array($sql))
    echo "<div content id='block' class='box'>{$result['name']}
<img id='dell' style='float: right;' class='images' src='/css/noun-delete-4602521.png' onclick='openDeleteForm()' alt='Удалить'>
<img id='change' style='float: right;' class='images' src='/css/noun-edit-1644623.png' onclick='changeForm()' alt='Изменить'>
</div> </br>";
?>
