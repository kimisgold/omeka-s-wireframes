<?php $bodyClass = "property-sets edit"; ?>
<?php include('../header.php'); ?>

<h1>Add New Agent Property Set</h1>

<div class="original-class section active">
    <h2 class="title"><span class="label">Original class:</span> Agent</h2>
    <div class="description">
        <p>The Agent class is the class of agents; things that do stuff. A well known property-set is Person, representing people. Other kinds of agents include Organization and Group.</p>
        <p>The Agent class is useful in a few places in FOAF where Person would have been overly specific. For example, the IM chat ID properties such as jabberID are typically associated with people, but sometimes belong to software bots.</p>
    </div>
</div>
    
<form id="edit-property-set">
    <fieldset class="property-set-meta section active">
        <div class="field">
            <div class="field-meta">
                <label for="property-set-label">Label</label>
            </div>
            <div class="inputs">
                <input type="text" name="property-set-label">
            </div>
        </div>
    </fieldset>
    <fieldset class="property-set-properties section active">
        <div class="new unset field template">
            <div class="field-actions">
                    <a href="#" class="remove button fa-times"><span class="screen-reader-text">Remove</span></a>
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
        <a href="show" class="button">Add New Property Set</a>
    </div>

</form>

<?php include('../footer.php'); ?>