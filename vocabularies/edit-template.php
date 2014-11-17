<?php $bodyClass = "vocabs edit resource-template"; ?>
<?php include('../header.php'); ?>

<h1>Add New Resource Template</h1>

<form id="resource-template">
    <div class="field">
        <div class="field-meta">
            <label>Class</label>
        </div>
        <div class="inputs">
            <select>
                <optgroup label="Dublin Core">
                    <option>Agent</option>
                    <option>Agent Class</option>
                    <option>Bibliographic Resource</option>
                    <option>File Format</option>
                    <option>Frequency</option>
                    <option>Jurisdiction</option>
                    <option>License Document</option>
                    <option>Linguistic System</option>
                    <option>Location</option>
                    <option>Location, Period, or Jurisdiction</option>
                    <option>Media Type</option>
                    <option>Media Type or Extent</option>
                    <option>Method of Accrual</option>
                    <option>Method of Instruction</option>
                    <option>Period of Time</option>
                    <option>Physical Medium</option>
                    <option>Physical Resource</option>
                    <option>Policy</option>
                    <option>Provenance Statement</option>
                    <option>Rights Statement</option>
                    <option>Size or Duration</option>
                    <option>Standard</option>
                </optgroup>
                <optgroup label="Dublin Core Type">
                    <option>Collection</option>
                    <option>Dataset</option>
                    <option>Event</option>
                    <option>Image</option>
                    <option>Interactive Resource</option>
                    <option>Moving Image</option>
                    <option>Physical Object</option>
                    <option>Service</option>
                    <option>Software</option>
                    <option>Sound</option>
                    <option>Still Image</option>
                    <option>Text</option>
                </optgroup>
                <optgroup label="Bibliographic Ontology">
                    <option>Academic Article</option>
                    <option>Article</option>
                    <option>audio document</option>
                    <option>audio-visual document</option>
                    <option>Bill</option>
                    <option>Book</option>
                    <option>Book Section</option>
                    <option>Brief</option>
                    <option>Chapter</option>
                    <option>Code</option>
                    <option>Collected Document</option>
                    <option>Collection</option>
                    <option>Conference</option>
                    <option>Court Reporter</option>
                    <option>Document</option>
                    <option>document part</option>
                    <option>Document Status</option>
                    <option>Edited Book</option>
                    <option>EMail</option>
                    <option>Event</option>
                    <option>Excerpt</option>
                    <option>Film</option>
                    <option>Hearing</option>
                    <option>Image</option>
                    <option>Interview</option>
                    <option>Issue</option>
                    <option>Journal</option>
                    <option>Legal Case Document</option>
                    <option>Decision</option>
                    <option>Legal Document</option>
                    <option>Legislation</option>
                    <option>Letter</option>
                    <option>Magazine</option>
                    <option>Manual</option>
                    <option>Manuscript</option>
                    <option>Map</option>
                    <option>Series</option>
                    <option>Newspaper</option>
                    <option>Note</option>
                    <option>Patent</option>
                    <option>Performance</option>
                    <option>Periodical</option>
                    <option>Personal Communication</option>
                    <option>Personal Communication Document</option>
                    <option>Proceedings</option>
                    <option>Quote Reference Source</option>
                    <option>Reporter</option>
                    <option>Series</option>
                    <option>Slide</option>
                    <option>Slideshow</option>
                    <option>Standard</option>
                    <option>Statute</option>
                    <option>Thesis</option>
                    <option>Thesis degree</option>
                    <option>Webpage</option>
                    <option>Website</option>
                    <option>Workshop</option>
                </optgroup>
                <optgroup label="FOAF">
                    <option>Agent</option>
                    <option>Document</option>
                    <option>Group</option>
                    <option>Image</option>
                    <option>Label Property</option>
                    <option>Online Account</option>
                    <option>Online Chat Account</option>
                    <option>Online E-commerce Account</option>
                    <option>Online Gaming Account</option>
                    <option>Organization</option>
                    <option>Person</option>
                    <option>PersonalProfileDocument</option>
                    <option>Project</option>
                </optgroup>
            </select>
        </div>
    </div>
    <div class="field-group">
        <h2>Title (Dublin Core)</h2>
        <div class="field">
            <ul class="actions">
                <li><a href="#" class="o-icon-revert" title="Revert to original"></a></li>
            </ul>
            <div class="field-meta">
                <label>Label</label>
            </div>
            <div class="inputs">
                <textarea name="dc-title-label">Title</textarea>
            </div>
        </div>
        <div class="field">
            <ul class="actions">
                <li><a href="#" class="o-icon-revert" title="Revert to original"></a></li>
            </ul>
            <div class="field-meta">
                <label>Comment</label>
            </div>
            <div class="inputs">
                <textarea name="dc-title-comment">A name given to the resource.</textarea>
            </div>
        </div>
    </div>
    <div class="field-group">
        <h2>Description (Dublin Core)</h2>
        <div class="field">
            <ul class="actions">
                <li><a href="#" class="o-icon-revert" title="Revert to original"></a></li>
            </ul>
            <div class="field-meta">
                <label>Label</label>
            </div>
            <div class="inputs">
                <textarea name="dc-title-label">Description</textarea>
            </div>
        </div>
        <div class="field">
            <ul class="actions">
                <li><a href="#" class="o-icon-revert" title="Revert to original"></a></li>
            </ul>
            <div class="field-meta">
                <label>Comment</label>
            </div>
            <div class="inputs">
                <textarea name="dc-title-label">An account of the resource.</textarea>
            </div>
        </div>
    </div>
    <div class="field-group">
        <ul class="actions">
            <li><a href="#" class="o-icon-up" title="Move up"></a></li>
            <li><a href="#" class="o-icon-down" title="Move down"></a></li>
            <li><a href="#" class="o-icon-revert" title="Revert to original"></a></li>
            <li><a href="#" class="o-icon-delete"></a></li>
        </ul>
        <h2>Example Property (Dublin Core)</h2>
        <div class="field">
            <ul class="actions">
                <li><a href="#" class="o-icon-revert" title="Revert to original"></a></li>
            </ul>
            <div class="field-meta">
                <label>Label</label>
            </div>
            <div class="inputs">
                <textarea name="dc-title-label">New label</textarea>
            </div>
        </div>
        <div class="field">
            <ul class="actions">
                <li><a href="#" class="o-icon-revert" title="Revert to original"></a></li>
            </ul>
            <div class="field-meta">
                <label>Comment</label>
            </div>
            <div class="inputs">
                <textarea name="dc-title-label">New comment overriding original property comment.</textarea>
            </div>
        </div>
    </div>
    <div class="unset field">
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
    </div>
    <a href="#" class="button">Add property to template</a>
    <div id="save-sidebar">
        <a href="#" class="button">Save Resource Template</a>
    </div>
</form>

<?php include('../footer.php'); ?>