<?php
namespace Html;
include "html.php";

$table = new Table();
$table->title = "My table";
$table->numRows = 6;

$row = new Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>