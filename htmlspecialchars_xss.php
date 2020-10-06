<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $keyword = $_GET['kw'];
    $result = htmlspecialchars($keyword);
?>
<a href="<?php echo $result; ?>">111</a>
</body>
</html>