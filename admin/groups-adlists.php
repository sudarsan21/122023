<?php


require 'scripts/eye_spot/php/header_authenticated.php';
?>

<!-- Title -->
<div class="page-header">
    <h1>Adlist group management</h1>
</div>

<!-- Domain Input -->
<div class="row">
    <div class="col-md-12">
        <div class="box" id="add-group">
            <!-- /.box-header -->
            <div class="box-header with-border">
                <h3 class="box-title">
                    Add a new adlist
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="new_address">Address:</label>
                        <input id="new_address" type="text" class="form-control" placeholder="URL or space-separated URLs" autocomplete="off" spellcheck="false" autocapitalize="none" autocorrect="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="new_comment">Comment:</label>
                        <input id="new_comment" type="text" class="form-control" placeholder="Adlist description (optional)">
                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                
                <button type="button" id="btnAdd" class="btn btn-primary pull-right">Add</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box" id="adlists-list">
            <div class="box-header with-border">
                <h3 class="box-title">
                    List of adlists
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="adlistsTable" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th class="no-padding"></th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Comment</th>
                            <th>Group assignment</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                </table>
                <button type="button" id="resetButton" class="btn btn-default btn-sm text-red hidden">Reset sorting</button>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<script src="scripts/vendor/bootstrap-select.min.js?v=<?php echo $cacheVer; ?>"></script>
<script src="scripts/vendor/bootstrap-toggle.min.js?v=<?php echo $cacheVer; ?>"></script>
<script src="scripts/eye_spot/js/groups-adlists.js?v=<?php echo $cacheVer; ?>"></script>

<?php
require 'scripts/eye_spot/php/footer.php';
?>