<select class="form-select" id="pid" name="pid">
<?php
while ($parkItem = $parkList->fetch_assoc()) {
  $selText = "";
  if ($selectedPark == $parkItem['park_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $parkItem['park_id']; ?>"<?=$selText?>><?php echo $parkItem['park_name']; ?></option>
<?php
}
?>
</select>
