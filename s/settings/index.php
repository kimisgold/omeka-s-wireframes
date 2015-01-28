<?php $bodyClass = "site settings"; ?>
<?php include('../header.php'); ?>

<h1>Edit Site</h1>

<form action="post">
    
    <fieldset>
        <h3>Metadata</h3>
        <div class="field">
            <div class="field-meta">
                <label for="site-name">Name</label>
            </div>
            <div class="inputs">
                <input type="text" id="site-name" name="site-name" />
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="site-slug">Slug</label>
            </div>
            <div class="inputs">
                <input type="text" id="site-slug" name="site-slug" />
            </div>
        </div>
    </fieldset>
    <fieldset>
        <h3>Theme</h3>
        
        <div class="theme selected">
            <div class="image placeholder"></div>
            <h4>Berlin</h4>
            <p>By Roy Rosenzweig Center for History and New Media.</p>
        </div>

        <div class="theme">
            <div class="image placeholder"></div>
            <h4>Emiglio</h4>
            <p>By Roy Rosenzweig Center for History and New Media.</p>
        </div>

        <div class="theme">
            <div class="image placeholder"></div>
            <h4>Minimalist</h4>
            <p>By Roy Rosenzweig Center for History and New Media.</p>
        </div>

        <div class="theme">
            <div class="image placeholder"></div>
            <h4>Rhythm</h4>
            <p>By Roy Rosenzweig Center for History and New Media.</p>
        </div>

        <div class="theme">
            <div class="image placeholder"></div>
            <h4>Santa Fe</h4>
            <p>By Roy Rosenzweig Center for History and New Media.</p>
        </div>
    </fieldset>

    <div id="save-sidebar">
        <input type="submit" name="add-item-submit" value="Add Site" />
        <a href="#" class="cancel button">Cancel</a>
    </div>

</form>