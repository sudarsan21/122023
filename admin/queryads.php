<?php


require 'scripts/eye_spot/php/header_authenticated.php';
?>
<!-- Title -->
<div class="page-header">
    <h1>Find Blocked Domain In Lists</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <!-- domain-search-block - Single search field mobile/desktop -->
                <div id="domain-search-block" class="input-group">
                    <input id="domain" type="url" class="form-control" placeholder="Domain to look for (example.com or sub.example.com)" autocomplete="off" spellcheck="false" autocapitalize="none" autocorrect="off">
                    <input id="quiet" type="hidden" value="no">
                    <span class="input-group-btn">
                        <button type="button" id="btnSearch" class="btn btn-default">Search partial match</button>
                        <button type="button" id="btnSearchExact" class="btn btn-default">Search exact match</button>
                    </span>
                </div>
                <!-- /domain-search-block -->
            </div>
        </div>
    </div>
</div>

<pre id="output" style="width: 100%; height: 100%;" hidden></pre>

<script src="scripts/eye_spot/js/queryads.js?v=<?php echo $cacheVer; ?>"></script>
<?php
require 'scripts/eye_spot/php/footer.php';
?>
