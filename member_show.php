<link rel="stylesheet" href="style.css"/>
<?php
include "connect.php";

$sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  <table class="table" border="1">
    <th> name </th>
    <th> price </th>
    <th> stock </th>
    <th> description </th>
    <th> รูป </th>
    <th> edit </th>
    <th> delete </th>
    <?php 
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo"$row[name]"; ?> </td>
        <td><?php echo"$row[price]"; ?> </td>
        <td><?php echo"$row[stock]"; ?> </td>
        <td><?php echo"$row[description]"; ?> </td>
        <td><img src="./images/<?php echo $row[photo] ?>" width="200px" />  </td>
        <td> <?php echo"<a href ='product_edit.php?id=$row[id]'> edit </a>";?> </td>
        <td> <?php echo"<a href ='product_del.php?id=$row[id]'> delete </a>";?> </td>
    </tr>
    <?php
    }
    ?>
     
  </table>

  <?php
} else {
  echo "0 results";
}
mysqli_close($conn);
?>