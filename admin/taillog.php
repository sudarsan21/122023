<?php

require 'scripts/eye_spot/php/header_authenticated.php';
?>
<!-- Title -->
<div class="page-header">
    <h1>Output the last lines of the pihole.log file (live)</h1>
</div>

<div>
    <input type="checkbox" checked id="chk1">
    <label for="chk1">Automatic scrolling on update</label>
</div>

<pre id="output" style="width: 100%; height: 100%; max-height:650px; overflow-y:scroll;"></pre>

<div>
    <input type="checkbox" checked id="chk2">
    <label for="chk2">Automatic scrolling on update</label>
</div>

<script src="scripts/eye_spot/js/taillog.js?v=<?php echo $cacheVer; ?>"></script>

<?php
require 'scripts/eye_spot/php/footer.php';
?>
