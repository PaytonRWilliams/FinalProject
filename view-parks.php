<h1>Parks</h1>
<div class="table-responsive">
  <link rel="stylesheet" href="bootstrap.css">
  <table class="table">
  <thead>
    <link rel="stylesheet" href="bootstrap.css">
    <tr>
<th>ID</th>
<th>Name</th>
<th>State</th>
  </thead>
    <tbody>
      
    </tr>
 

<?php
while ($park = $parks->fetch_assoc())
{
?>
  <tr>
    <td><?php echo $park['park_id']; ?></td>
   <td><?php echo $park['park_name']; ?></td>
    <td><?php echo $park['park_state']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
