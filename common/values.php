<fieldset id="resource-values" class="section active">
    <legend>Values</legend>
    <div class="resource-values field">
        <div class="field-meta">
            <label for="item-class">Class</label>
            <div class="field-description">
                <p class="o-icon-info-circle"><span class="screen-reader-text">More Info</span></p>
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
    <div class="resource-values field">
        <div class="actions">
            <a href="#" class="add-value button o-icon-add"><span class="screen-reader-text">Add Value</span></a>
        </div>
        <div class="field-meta">
            <label>Title</label>
        </div>
        <div class="inputs">
            <div class="value">
                <div class="input-options">
                    <a link="#" class="tab active o-icon-text"><span class="screen-reader-text">Text</span></a>
                    <a link="#" class="tab o-icon-items"><span class="screen-reader-text">Omeka Resource</span></a>
                    <a link="#" class="tab o-icon-link"><span class="screen-reader-text">External Resource</span></a>
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
                    <a href="#resource-select" class="button">Select Omeka Resource</a>
                </div>
                <div class="link input-option">
                    <input type="text" name="dc-title" placeholder="Enter URL">
                </div>
                <button class="remove-value">Remove value</button>
            </div>
        </div>
    </div>
    <div class="resource-values field">
        <div class="actions">
            <a href="#" class="add-value button o-icon-plus"><span class="screen-reader-text">Add Value</span></a>
        </div>
        <div class="field-meta">
            <label>Description</label>
        </div>
        <div class="inputs">
            <div class="value">
                <div class="input-options">
                    <a link="#" class="tab active o-icon-text"><span class="screen-reader-text">Text</span></a>
                    <a link="#" class="tab o-icon-items"><span class="screen-reader-text">Omeka Resource</span></a>
                    <a link="#" class="tab o-icon-link"><span class="screen-reader-text">External Resource</span></a>
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
                    <a href="#resource-select" class="modal-link button">Select Omeka Resource</a>
                </div>
                <div class="link input-option">
                    <input type="text" name="dc-title" placeholder="Enter URL">
                </div>
                <button class="remove-value">Remove value</button>
            </div>
        </div>
    </div>
    <div class="property-selector">
        <input type="text" placeholder="Property name">
        <ul>
            <li>Vocabularies (2)
                <ul>
                </ul>
            </li>
        </ul>
    </div>

    <a href="#" class="add-property button">Add property</a>

</fieldset>