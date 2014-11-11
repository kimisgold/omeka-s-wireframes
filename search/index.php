<?php $bodyClass = 'advanced-search'; ?>
<?php include('../header.php'); ?>

<h1>Advanced Search</h1>

<form id="advanced-search-form" action="get">
    <div class="resource-type field">
        <div class="field-meta">
            <legend>Filter by resource type(s)</legend>
        </div>
        <div class="inputs">
            <label for="item-filter"><input type="checkbox" name="item-filter">Item</label>
            <label for="item-set-filter"><input type="checkbox" name="item-set-filter">Item Set</label>
            <label for="file-filter"><input type="checkbox" name="media-filter">Media</label>
        </div>
    </div>
    <div class="all-properties field">
        <ul class="actions">
            <li><a href="#" class="o-icon-add add-value"><span class="screen-reader-text">Add new value</span></a></li>
        </ul>
        <div class="field-meta">
            <legend>Search all properties</legend>
        </div>
        <div class="inputs">
            <div class="value">
                <select>
                    <option>has exact value</option>
                    <option>does not have exact value</option>
                    <option>contains value</option>
                    <option>does not contain value</option>
                </select>
                <input type="text" name="value-2" />
                <button class="remove-value button">Remove value</button>
            </div>
        </div>
    </div>
    <div class="specific-properties field">
        <ul class="actions">
            <li><a href="#" class="o-icon-add add-value"><span class="screen-reader-text">Add new value</span></a></li>
        </ul>
        <div class="field-meta">
            <legend>Search specific property</legend>
        </div>
        <div class="inputs">
            <div class="value">
                <select>
                    <optgroup label="Dublin Core">
                        <option>Title</option>
                        <option>Subject</option>
                        <option>Description</option>
                        <option>Creator</option>
                        <option>Source</option>
                        <option>Publisher</option>
                        <option>Date</option>
                        <option>Contributor</option>
                        <option>Rights</option>
                        <option>Relation</option>
                        <option>Format</option>
                        <option>Language</option>
                        <option>Type</option>
                        <option>Identifier</option>
                        <option>Coverage</option>
                    </optgroup>
                    <optgroup label="FOAF">
                        <option>name</option>
                        <option>title</option>
                        <option>img</option>
                        <option>depiction</option>
                        <option>familyName</option>
                        <option>givenName</option>
                        <option>knows</option>
                        <option>based near</option>
                        <option>age</option>
                        <option>made</option>
                        <option>primaryTopic</option>
                        <option>member</option>
                    </optgroup>
                </select>
                <select>
                    <option>has exact value</option>
                    <option>does not have exact value</option>
                    <option>contains value</option>
                    <option>does not contain value</option>
                </select>
                <input type="text">
                <button class="remove-value button">Remove value</button>
            </div>
        </div>
    </div>
    <div class="class-names field">
        <ul class="actions">
            <li><a href="#" class="o-icon-add add-value"><span class="screen-reader-text">Add new value</span></a></li>
        </ul>
        <div class="field-meta">
            <legend>Search all class names</legend>
        </div>
        <div class="inputs">
            <div class="value">
                <select>
                    <option>has exact value</option>
                    <option>does not have exact value</option>
                    <option>contains value</option>
                    <option>does not contain value</option>
                </select>
                <input type="text" name="value-2" />
                <button class="remove-value button">Remove value</button>
            </div>
        </div>
    </div>
    <div class="have-have-not field">
        <ul class="actions">
            <li><a href="#" class="o-icon-add add-value"><span class="screen-reader-text">Add new value</span></a></li>
        </ul>
        <div class="field-meta">
            <legend>Search resources</legend>
        </div>
        <div class="inputs">
            <div class="value">
                <select>
                    <option>has property</option>
                    <option>does not have property</option>
                </select>
                <select>
                    <optgroup label="Dublin Core">
                        <option>Title</option>
                        <option>Subject</option>
                        <option>Description</option>
                        <option>Creator</option>
                        <option>Source</option>
                        <option>Publisher</option>
                        <option>Date</option>
                        <option>Contributor</option>
                        <option>Rights</option>
                        <option>Relation</option>
                        <option>Format</option>
                        <option>Language</option>
                        <option>Type</option>
                        <option>Identifier</option>
                        <option>Coverage</option>
                    </optgroup>
                    <optgroup label="FOAF">
                        <option>name</option>
                        <option>title</option>
                        <option>img</option>
                        <option>depiction</option>
                        <option>familyName</option>
                        <option>givenName</option>
                        <option>knows</option>
                        <option>based near</option>
                        <option>age</option>
                        <option>made</option>
                        <option>primaryTopic</option>
                        <option>member</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
    <div id="save-sidebar">
        <input type="submit" name="search" value="Search" />
    </div>
</form>

<?php include('../footer.php'); ?>