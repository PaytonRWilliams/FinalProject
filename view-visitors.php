<div class="row"> 
  <div class="col">
  <h1>Visitors</h1>
  </div>
  <div class="col-auto">
<?php
include "view-visitors-newform.php";
?>
  </div>
</div>


<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
<th>ID</th>
<th> First Name</th>
<th>Last Name</th>
<th>Age</th>
    <th></th>
      <th></th>
      <th></th>
  </tr>
  </thead>
    <tbody>

 

<?php
while ($visitor = $visitors->fetch_assoc())
{
?>
  <tr>
    <td><?php echo $visitor['visitor_id']; ?></td>
   <td><?php echo $visitor['visitor_fname']; ?></td>
  <td><?php echo $visitor['visitor_lname']; ?></td>
    <td><?php echo $visitor['visitor_age']; ?></td>
    <td>
      
    </td>
    <td>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
