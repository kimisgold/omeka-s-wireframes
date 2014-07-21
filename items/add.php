<?php $bodyClass = "add item"; ?>
<?php $js = '<script src="../javascript/jquery.modal.min.js"></script>' ?>

<?php include('../header.php'); ?>


<h1>Add Item</h1>
    
<nav class="section-nav">
    <ul>
        <li><a href="#" class="item-values section active">Values</a></li>
        <li><a href="#" class="item-media section">Media</a></li>
        <li><a href="#" class="item-visibility section">Visibility</a></li>
    </ul>
</nav>

<form id="add-item">

    <div id="item-values" class="item-section active">
        <fieldset>
            <div class="item-class field">
                <div class="field-meta">
                    <label for="item-class">Class</label>
                    <div class="field-description">
                        <p class="icon-info"><span class="screen-reader-text">More Info</span></p>
                        <p>Etiam porta sem malesuada magna mollis euismod.</p>
                    </div>
                </div>
                <div class="inputs">
                    <select name="item-type">
                        <option>Resource</option>
                        <option>Document</option>
                        <option>Still Image</option>
                        <option>Moving Image</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <div class="field-actions">
                    <a href="#" class="add-value button icon-add"><span class="screen-reader-text">Add Value</span></a>
                </div>
                <div class="field-meta">
                    <label>Title</label>
                </div>
                <div class="inputs">
                    <div class="value">
                        <div class="input-options">
                            <a link="#" class="tab active icon-type"><span class="screen-reader-text">Text</span></a>
                            <a link="#" class="tab icon-items"><span class="screen-reader-text">Omeka Item</span></a>
                            <a link="#" class="tab icon-link"><span class="screen-reader-text">External Resource</span></a>
                        </div>
                        <div class="active type input-option">
                            <textarea name="dc-title" rows="1"></textarea>
                            <select class="value-language">
                                <option>English (default)</option>
                                <option>Afrikaans</option>
                                <option>Arabic</option>
                                <option>French</option>
                                <option>German</option>
                                <option>Japanese</option>
                                <option>Korean</option>
                                <option>Spanish</option>                    
                            </select>
                        </div>
                        <div class="items input-option">
                            <span class="default">No item selected</span>
                            <a href="#item-select" class="modal-link button">Select Omeka Item</a>
                        </div>
                        <div class="link input-option">
                            <input type="text" name="dc-title" placeholder="Enter URL">
                        </div>
                        <button class="remove-value">Remove value</button>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="field-actions">
                    <a href="#" class="add-value button icon-add"><span class="screen-reader-text">Add Value</span></a>
                </div>
                <div class="field-meta">
                    <label>Description</label>
                </div>
                <div class="inputs">
                    <div class="value">
                        <div class="input-options">
                            <a link="#" class="tab active icon-type"><span class="screen-reader-text">Text</span></a>
                            <a link="#" class="tab icon-items"><span class="screen-reader-text">Omeka Item</span></a>
                            <a link="#" class="tab icon-link"><span class="screen-reader-text">External Resource</span></a>
                        </div>
                        <div class="active type input-option">
                            <textarea name="dc-title" rows="1"></textarea>
                            <select class="value-language">
                                <option>English (default)</option>
                                <option>Afrikaans</option>
                                <option>Arabic</option>
                                <option>French</option>
                                <option>German</option>
                                <option>Japanese</option>
                                <option>Korean</option>
                                <option>Spanish</option>                    
                            </select>
                        </div>
                        <div class="items input-option">
                            <span class="default">No item selected</span>
                            <a href="#item-select" class="modal-link button">Select Omeka Item</a>
                        </div>
                        <div class="link input-option">
                            <input type="text" name="dc-title" placeholder="Enter URL">
                        </div>
                        <button class="remove-value">Remove value</button>
                    </div>
                </div>
            </div>
            <div class="new field template">
                <div class="field-actions">
                    <a href="#" class="remove button icon-remove"><span class="screen-reader-text">Remove</span></a>
                    <a href="#" class="add-value button icon-add"><span class="screen-reader-text">Add Value</span></a>
                </div>
                <div class="field-meta">
                    <input type="text" title="new-property-name" placeholder="Property name">
                    <div class="properties">
                        <ul>
                            <li class="all-vocabs">Vocabularies (<span class="count">2</span>)
                                <ul>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="inputs">
                    <div class="value">
                        <div class="input-options">
                            <a link="#" class="tab active icon-type"><span class="screen-reader-text">Text</span></a>
                            <a link="#" class="tab icon-items"><span class="screen-reader-text">Omeka Item</span></a>
                            <a link="#" class="tab icon-link"><span class="screen-reader-text">External Resource</span></a>
                        </div>
                        <div class="active type input-option">
                            <textarea name="dc-title" rows="1"></textarea>
                            <select class="value-language">
                                <option>English (default)</option>
                                <option>Afrikaans</option>
                                <option>Arabic</option>
                                <option>French</option>
                                <option>German</option>
                                <option>Japanese</option>
                                <option>Korean</option>
                                <option>Spanish</option>                    
                            </select>
                        </div>
                        <div class="items input-option">
                            <span class="default">No item selected</span>
                            <a href="#item-select" class="modal-link button">Select Omeka Item</a>
                        </div>
                        <div class="link input-option">
                            <input type="text" name="dc-title" placeholder="Enter URL">
                        </div>
                        <button class="remove-value active">Remove value</button>
                    </div>
                </div>
            </div>
        </fieldset>
    
        <a href="#" class="add-property button">Add property</a>
    
        <div class="overlay"></div>
        
        <?php include('select.php'); ?>
    </div>
    
    <?php include('files.php'); ?>

    <div id="item-visibility" class="item-section">
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
                <div class="field-meta">
                    <label for="item-set">Item Set</label>
                </div>
                <div class="inputs">
                    <select id="item-set" name="item-set">
                        <option>War of the Roses</option>
                        <option>Meiji Era</option>
                        <option>The Incan Empire</option>
                    </select>
                </div>
                <div class="field-actions">
                    <a href="#" class="add-value button icon-add"><span class="screen-reader-text">Add Value</span></a>
                </div>
        </fieldset>
    </div>

    <fieldset id="save-sidebar">
        <input type="submit" name="add-item-submit" value="Create Item" />
        <a href="#" class="cancel button">Cancel</a>
    </fieldset>

</form>
    
<?php include('../footer.php'); ?>