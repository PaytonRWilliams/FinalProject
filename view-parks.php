

<h1>Parks</h1>

<div class="card-group">
  <?php while ($park = $parks->fetch_assoc()): ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ID: <?php echo $park['park_id']; ?></h5>
        <p class="card-text">Name: <?php echo $park['park_name']; ?></p>
        <p class="card-text">State: <?php echo $park['park_state']; ?></p>
      </div>
    </div>
  <?php endwhile; ?>
</div>
