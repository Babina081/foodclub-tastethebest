<?php include('../header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<style>
table, th,td{border:1px solid black;
padding: 5px;}
table{
 border-spacing: 15px;
}
</style>
<section class="py-5">

<div class="container">

<h1><b>Delivery Charge</b></h1>
<hr><br>
<p>The delivery charge is calculated based on the total distance from the restaurant and the order amount(before taxes and service charges).</p>
<table style="width:100%">
<tr>
<th>Food Value</th>
<th>Up to 1 km</th>
<th>Up to 2 km</th>
<th>Up to 3 km</th>
<th>Up to 4 km</th>
</tr>

<tr>
<td>400</td>
<td>50</td>
<td>70</td>
<td>90</td>
<td>110</td>
</tr>

<tr>
<td>700</td>
<td>50</td>
<td>50</td>
<td>60</td>
<td>80</td>
</tr>

<tr>
<td>1000</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
</tr>

<tr>
<td>1500 or more</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
</tr>
</table>
<br>
</div>
</section>
<?php
include "footer.php";
?>