<h1>Visitors</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
<th>ID</th>
<th> First Name</th>
<th>Last Name</th>
<th>Age</th>
  </thead>
    <tbody>
      
    </tr>
 

<?php
while ($visitor = $visitors->fetch_assoc())
{
?>
  <tr>
    <td><?php echo $visitor['visitor_id']; ?></td>
   <td><?php echo $visitor['visitor_fname']; ?></td>
  <td><?php echo $visitor['visitor_lname']; ?></td>
    <td><?php echo $visitor['visitor_age']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
