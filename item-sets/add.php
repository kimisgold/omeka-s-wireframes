<?php $bodyClass = "add item-set"; ?>
<?php $js = '<script src="../javascript/jquery.modal.min.js"></script>' ?>

<?php include('../header.php'); ?>

<h1>Add Item Set</h1>

<form id="add-item-set">

    <?php include('../common/values.php'); ?>
    
    <div id="save-sidebar">
        <button type="submit">Save Item Set</button>
    </div>
    
</form>

<?php include ('../footer.php'); ?>