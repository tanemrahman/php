<!DOCTYPE html>
<html>
<head>
  <title>Associative Array</title>
  <style type="text/css">
    table,tr,td,th {
      border-collapse: collapse;
      border: 1px solid black;
      width: 40%;
      margin: 0 auto;
    }
    th, td {
      padding: 5px;
    }
  </style>
</head>
<body>

<?php
$country = array("India"=>"New Delhi", "USA"=>"Washington", "Bangladesh"=>"Dhaka", "Pakistan "=>"Islamabad", "UK "=>"London");
ksort($country);

?>
<h2 style="color: green; text-align: center;">Sort array by Country Name</h1>
<table>
  <tr>
    <th>Country</th>
    <th>City</th>
  </tr>

<?php
foreach($country as $key => $value) { ?>
  <tr>
    <td><?php echo $key; ?></td>
    <td><?php echo $value; ?></td>
  </tr>
<?php } ?>
</table>
</body>
</html>