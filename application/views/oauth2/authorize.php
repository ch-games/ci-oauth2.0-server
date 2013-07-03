<div class="modal-header">
    <h3><?= $appName;?></h3>
</div>
<div class="modal-body">
    <form method="POST" class="form-horizontal">
        <div class="control-group">
            <label for="email" class="control-label">Email:</label>
            <div class="controls">
                <input type="email" id="email" name="email" autocomplete="off">
            </div>
        </div>
        <div class="control-group">
            <label for="password" class="control-label">Password:</label>
            <div class="controls">
                <input type="password" id="password" name="password" autocomplete="off">
            </div>
        </div>
        <div class="controls">
            <button class="btn btn-success" type="submit"><i class="icon-lock icon-white"></i> Login</button>
        </div>
    </form>
</div>
<div class="modal-footer">
</div>