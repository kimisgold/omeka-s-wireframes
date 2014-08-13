<?php $bodyClass = "add item"; ?>
<?php $js = '<script src="../javascript/jquery.modal.min.js"></script>' ?>

<?php include('../header.php'); ?>


<h1>Add Item</h1>
    
<nav class="section-nav">
    <ul>
        <li><a href="#" class="resource-values section active">Values</a></li>
        <li><a href="#" class="item-media section">Media</a></li>
        <li><a href="#" class="item-visibility section">Visibility</a></li>
    </ul>
</nav>

<form id="add-item">

    <?php include('../common/values.php'); ?>
    
    <?php include('files.php'); ?>

    <div id="item-visibility" class="section">
        <fieldset>
            <div class="field">
                <input type="checkbox" id="item-public" name="item-public">
                <label for="item-public">Public</label>
            </div>
            <div class="field">
                <input type="checkbox" id="item-sharing" name="item-sharing">
                <label for="item-sharing">Shareable</label>
            </div>
            <div class="field">
                <div class="field-actions">
                    <a href="#" class="add-value button fa-plus"><span class="screen-reader-text">Add Value</span></a>
                </div>
                <div class="field-meta">
                    <label for="item-set">Item Set</label>
                </div>
                <div class="inputs">
                    <div class="value">
                        <select id="item-set" name="item-set">
                            <option>War of the Roses</option>
                            <option>Meiji Era</option>
                            <option>The Incan Empire</option>
                        </select>
                        <button class="remove-value">Remove value</button>
                    </div>
                </div>
            </div>
            <div class="new item-visibility field template">
                <div class="inputs">
                    <div class="value">
                        <select id="item-set" name="item-set">
                            <option>War of the Roses</option>
                            <option>Meiji Era</option>
                            <option>The Incan Empire</option>
                        </select>
                        <button class="remove-value active">Remove value</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

    <fieldset id="save-sidebar">
        <input type="submit" name="add-item-submit" value="Create Item" />
        <a href="#" class="cancel button">Cancel</a>
    </fieldset>

</form>
    
<?php include('../footer.php'); ?>