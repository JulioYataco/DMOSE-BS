<div id="wizardSubservice" class="mt-4">
  <ul class="nav mx-2">
    <li class="nav-item">
      <a class="nav-link" href="#step-1">
        <div class="num">1</div>
        Paso 1
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#step-2">
        <span class="num">2</span>
        Paso 2
      </a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
      <?php include 'forms/subservice.form.php'; ?>
    </div>
    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
      <?php include 'forms/component.form.php'; ?>
    </div>
  </div>

  <!-- Include optional progressbar HTML -->
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
<script>
    $(document).ready(function() {
        $('#wizardSubservice').smartWizard(smartWizardBasic);
    });
</script>