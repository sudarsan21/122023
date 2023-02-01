<?php


require 'scripts/eye_spot/php/header_authenticated.php';
?>
<!-- Title -->
<div class="page-header">
    <h1>Update Gravity (list of blocked domains)</h1>
</div>

<!-- Alerts -->
<div id="alInfo" class="alert alert-info alert-dismissible fade in" role="alert" hidden>
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Updating... this may take a while. <strong>Please do not navigate away from or close this page.</strong>
</div>
<div id="alSuccess" class="alert alert-success alert-dismissible fade in" role="alert" hidden>
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Success!
</div>

<button type="button" id="gravityBtn" class="btn btn-lg btn-primary btn-block">Update</button>
<pre id="output" style="width: 100%; height: 100%;" hidden></pre>

<script src="scripts/eye_spot/js/gravity.js?v=<?php echo $cacheVer; ?>"></script>

<?php
require 'scripts/eye_spot/php/footer.php';
?>
