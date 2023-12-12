<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editVisitModal<?php echo $visitor['visit_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editVisitModal<?php echo $visitor['visit_id']; ?>" tabindex="-1" aria-labelledby="editVisitModalLabel<?php echo $visitor['visit_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editVisitModalLabel<?php echo $visitor['visit_id']; ?>">Edit Visit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="iid<?php echo $visitor['visit_id']; ?>" class="form-label">Visitor</label>
<?php
$parkList = selectParksForInput();
$selectedPark = $visitor['park_id'];
include "park-input-list.php";
?>
          </div>
          <div class="mb-3">
            <label for="pid<?php echo $visitor['visit_id']; ?>" class="form-label">Park</label>
            <input type="text" class="form-control" id="pid<?php echo $visitor['visit_id']; ?>" name="pid" value="<?php echo $park['park_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="date<?php echo $visitor['visit_id']; ?>" class="form-label">Visit Date</label>
            <input type="text" class="form-control" id="date<?php echo $visitor['visit_id']; ?>" name="date" value="<?php echo $visit['visit_date']; ?>">
          </div>
            <input type="hidden" name="tid" value="<?php echo $visitor['visit_id']; ?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
