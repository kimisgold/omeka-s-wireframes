<?php $bodyClass = "vocabs import"; ?>
<?php include('../header.php'); ?>

<h1>Import Vocabularies</h1>

<p class="directions">Omeka accepts the following file formats for vocabularies: RDF, XML.</p>

<form id="import-vocabs">
    <fieldset class="vocab-inputs">
        <div class="field">
            <div class="inputs">
                <div class="link input-option active">
                    <input type="text" title="Vocabulary URL" placeholder="Enter a URL">
                </div>
                <div class="upload input-option">
                      <span class="default">No file selected</span>
                      <div class="upload-input button">Upload a file <input type="file"></div>
                </div>
                <div class="input-options">
                    <a link="#" class="tab icon-link active"><span class="screen-reader-text">External Resource</span></a>
                    <a link="#" class="tab icon-upload"><span class="screen-reader-text">File upload</span></a>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset id="save-sidebar">
        <a href="done" class="button">Import Vocabularies</a>
        <a href="index" class="cancel button">Cancel</a>
    </fieldset>
</form>
<?php include('../footer.php'); ?>