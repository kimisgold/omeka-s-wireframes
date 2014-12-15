<?php $bodyClass = "add site"; ?>
<?php include('../header.php'); ?>

<h1>Add Site</h1>

<form action="post">
    
    <div class="field">
        <div class="field-meta">
            <label for="site-name">Name</label>
        </div>
        <div class="inputs">
            <input type="text" id="site-name" name="site-name" />
        </div>
    </div>
    <div class="field">
        <div class="field-meta">
            <label for="site-slug">Slug</label>
        </div>
        <div class="inputs">
            <input type="text" id="site-slug" name="site-slug" />
        </div>
    </div>

    <div id="save-sidebar">
        <input type="submit" name="add-item-submit" value="Add Site" />
        <a href="#" class="cancel button">Cancel</a>
    </div>

</form>

<?php include('../footer.php'); ?>