  <ul class="breadcrumb">
    <li><a href="<?php echo base_url("/");?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Import/Export System</li>
  </ul>
  <div class="page-header">
    <h1>Import/Export System</h1>
  </div>
  <p>The Import/Export System allows you to easily manage your store items and backup your data incase of an emergency. <strong>As always you should perform a full MySQL database backup regularly to ensure data safety</strong>.</p>
  <div>
    <h2>Import Store Data</h2>
    <form class="form-horizontal" action="<?php echo base_url('index.php/tools/import'); ?>" enctype="multipart/form-data" method="post">
      <div class="control-group">
        <label class="control-label" for="importFile">File</label>
        <div class="controls">
          <input id="importFile" type="file">
          <br />
          <button type="submit" class="btn btn-danger">Import</button>
        </div>
      </div>
    </form>
  </div>
  <div>
    <h2>Export Store Data</h2>
    <h4>Export XML Files</h4>
    <div class="btn-group"> <a class="btn dropdown-toggle btn-large btn-primary" data-toggle="dropdown" href="#">Export <span class="caret"></span> </a>
      <ul class="dropdown-menu">
        <li><a href="#">Export Store Items</a></li>
        <li><a href="#">Export Store Users</a></li>
      </ul>
    </div>
    <h4>Download Full SQL Backup</h4>
    <p>
      <button class="btn btn-large btn-success" type="button"><i class="icon-download icon-white"></i> Download Backup</button>
    </p>
  </div>

