<?php
$announcement = $this->configuration->getValue('announcement');

if (! empty($announcement)) {
?>
  <p class="mdl-typography--subhead mdl-typography--text-center alert margin">
      <?= $announcement ?>
  </p>
<?php
}
?>
