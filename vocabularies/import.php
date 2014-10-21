<?php $bodyClass = "vocabs import"; ?>
<?php include('../header.php'); ?>

<h1>Import Vocabulary</h1>

<p class="directions">Omeka accepts the following file formats for vocabularies: RDF/XML, N-Triples.</p>

<form id="import-vocabs">
    <fieldset class="vocab-inputs">
        <div class="field">
            <div class="field-meta">
                <label for="vocab-format">File format</label>
            </div>
            <div class="inputs">
                <select id="vocab-format" name="vocab-format" required>
                    <option>RDF/XML</option>
                    <option>N-Triples</option>
                </select>
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="vocab-file">Vocabulary File</label>
            </div>
            <div class="inputs">
                <div class="upload input-option active">
                      <span class="default">No file selected</span>
                      <div class="upload-input button">Import from file <input type="file"></div>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="vocab-prefix">Prefix</label>
                <div class="field-description">
                    <p class="o-icon-info"><span class="screen-reader-text">More Info</span></p>
                    <p>Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
            <div class="inputs">
                <input type="text" id="vocab-prefix" name="vocab-prefix" required>
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="namespace-uri">Namespace URI</label>
                <div class="field-description">
                    <p class="o-icon-info"><span class="screen-reader-text">More Info</span></p>
                    <p>Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
            <div class="inputs">
                <input type="text" id="namespace-uri" name="namespace-uri">
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="vocab-label">Label</label>
                <div class="field-description">
                    <p class="o-icon-info"><span class="screen-reader-text">More Info</span></p>
                    <p>Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
            <div class="inputs">
                <input type="text" name="vocab-label" id="vocab-label">
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="vocab-comment">Comment</label>
                <div class="field-description">
                    <p class="o-icon-info"><span class="screen-reader-text">More Info</span></p>
                    <p>Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
            <div class="inputs">
                <textarea id="vocab-comment" name="vocab-comment" rows="3"></textarea>
            </div>
        </div>
    </fieldset>
    <fieldset id="save-sidebar">
        <a href="done" class="button">Import Vocabulary</a>
        <a href="index" class="cancel button">Cancel</a>
    </fieldset>
</form>
<?php include('../footer.php'); ?>