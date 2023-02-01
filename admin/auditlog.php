<?php

require 'scripts/eye_spot/php/header_authenticated.php';
?>

<!-- Title -->
<div class="page-header">
    <h1>Audit log (showing live data)</h1>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-6">
        <div class="box" id="domain-frequency">
            <div class="box-header with-border">
                <h3 class="box-title">Allowed queries</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Domain</th>
                                <th>Hits</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="overlay">
                <i class="fa fa-sync fa-spin"></i>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-xs-12 col-lg-6">
        <div class="box" id="ad-frequency">
            <div class="box-header with-border">
                <h3 class="box-title">Blocked queries</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Domain</th>
                                <th>Hits</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="overlay">
                <i class="fa fa-sync fa-spin"></i>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<script src="scripts/eye_spot/js/auditlog.js?v=<?php echo $cacheVer; ?>"></script>

<?php
require 'scripts/eye_spot/php/footer.php';
?>
