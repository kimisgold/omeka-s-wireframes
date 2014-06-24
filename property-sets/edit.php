<?php $bodyClass = "property-sets edit"; ?>
<?php include('../header.php'); ?>

<h1>Add New Agent Set</h1>
    
<form id="edit-property-set">
    <fieldset class="section active">
        <div class="new unset field template">
            <div class="field-actions">
                    <a href="#" class="remove button icon-remove"><span class="screen-reader-text">Remove</span></a>
            </div>
            <div class="field-meta">
                <input type="text" title="new-property-name" placeholder="name">
                <div class="properties">
                    <ul>
                        <li class="all-vocabs">Vocabularies (<span class="count">2</span>)
                            <ul>
                            </ul>
                        </li>
                    </ul>
                </div>
                <label for="property-label">Label</label>
                <label for="property-comment">Comment</label>
            </div>
            <div class="inputs">
                <input type="text" name="property-label">
                <input type="text" name="property-comment">
            </div>
        </div>
        <button class="add-property">Add property</button>
    </fieldset>
    <div id="save-sidebar" class="section-nav">
        <a href="show" class="button">Add New Set</a>
    </div>

</form>

<?php include('../footer.php'); ?>