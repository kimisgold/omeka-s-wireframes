<?php $bodyClass = "vocabs edit"; ?>
<?php include('../header.php'); ?>

<h1>Edit FOAF</h1>
    
<nav class="section-nav">
    <ul>
        <li><a href="#" class="vocab-properties section active">Properties</a></li>
        <li><a href="#" class="vocab-classes section">Classes</a></li>
    </ul>
</nav>

<form id="edit-vocab">
    <div id="vocab-classes" class="section">
        <h2>Classes</h2>
        <div class="class field">
            <ul class="actions">
                <li><a href="class/edit" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
            </ul>
            <div class="field-meta">
                <h3 class="title">Agent</h3>
            </div>
            <div class="field-content">
                <div class="description">
                    <p>The Agent class is the class of agents; things that do stuff. A well known sub-class is Person, representing people. Other kinds of agents include Organization and Group.</p>
                    <p>The Agent class is useful in a few places in FOAF where Person would have been overly specific. For example, the IM chat ID properties such as jabberID are typically associated with people, but sometimes belong to software bots.</p>
                </div>
            </div>
        </div>
        <div class="new class field">
            <ul class="actions">
                <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
            </ul>
            <div class="field-meta">
                <input type="text" name="class-label-1" value="Label" />
            </div>
            <div class="field-content">
                <textarea name="class-comment-1">Comment</textarea>
            </div>
        </div>
        <button>Add new class</button>
    </div>
    
    <div id="vocab-properties" class="section active">
        <h2>Properties</h2>
        <div class="property field">
            <ul class="actions">
                <li><a href="class/edit" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
            </ul>
            <div class="field-meta">
                <h3>account</h3>
            </div>
            <div class="field-content">
                <div class="description"><p>Indicates an account held by this agent.</p></div>
            </div>
        </div>
        <div class="property field">
            <ul class="actions">
                <li><a href="class/edit" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
            </ul>
            <div class="field-meta">
                <h3>accountName</h3>
            </div>
            <div class="field-content">
                <div class="description"><p>Indicates the name (identifier) associated with this online account.</p></div>
            </div>
        </div>
        <div class="property field">
            <ul class="actions">
                <li><a href="class/edit" class="o-icon-edit"><span class="screen-reader-text">Edit</span></a></li>
                <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
            </ul>
            <div class="field-meta">
                <h3>accountServicesHomepage</h3>
            </div>
            <div class="field-content">
                <div class="description"><p>Indicates a homepage of the service provide for this online account. </p></div>
            </div>
        </div>
        <div class="new property field">
            <ul class="actions">
                <li><a href="#" class="o-icon-delete"><span class="screen-reader-text">Delete</span></a></li>
            </ul>
            <div class="field-meta">
                <input type="text" name="property-label-1" value="Label" />
            </div>
            <div class="field-content">
                <textarea name="property-comment-1">Comment</textarea>
            </div>
        </div>
        <button>Add new class</button>
    </div>
    
    <div id="save-sidebar">
        <a href="show" class="button">Save Vocabulary</a>
    </div>

</form>

<?php include('../footer.php'); ?>