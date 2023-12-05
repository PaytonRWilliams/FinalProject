<h1 class="mt-4">Parks</h1>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>State</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($park = $parks->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $park['park_id']; ?></td>
              <td><?php echo $park['park_name']; ?></td>
              <td><?php echo $park['park_state']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
