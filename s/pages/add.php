<?php $bodyClass = "add pages"; ?>
<?php include('../header.php'); ?>

<h1>Add Page</h1>

<form action="post">

<div class="field">
    <div class="field-meta">
        <label for="page-slug">Slug</label>
    </div>
    <div class="inputs">
        <input type="text" id="page-slug" name="page-slug" />
    </div>
</div>

<textarea id="page-name"></textarea>

<div class="sidebar">
    <div class="block-actions">
        <button class="o-icon-edit"></button>
        <button class="o-icon-items"></button>
        <button class="o-icon-image"></button>
        <button class="o-icon-gallery"></button>
        <button class="o-icon-menu"></button>
    </div>
</div>

<div class="page-block">
</div>

<div id="save-sidebar">
    <button type="submit">Save page</button>
</div>
    
</form>