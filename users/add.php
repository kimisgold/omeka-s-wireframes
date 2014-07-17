<?php $bodyClass = "add users"; ?>
<?php include('../header.php'); ?>

<h1>Add User</h1>

<nav class="section-nav">
    <ul>
        <li><a href="#" class="user-meta section active">Metadata</a></li>
        <li><a href="#" class="user-permissions section">Permissions</a></li>
    </ul>
</nav>


<form id="add-user">
    <fieldset id="user-meta" class="active section">
        <div class="field">
            <div class="field-meta">
                <label for="user-handle">Username</label>
            </div>
            <div class="inputs">
                <input type="text" id="user-handle" name="user-handle">
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="user-name">Display Name</label>
            </div>
            <div class="inputs">
                <input type="text" id="user-name" name="user-name">
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="user-email">Email</label>
            </div>
            <div class="inputs">
                <input type="text" id="user-email" name="user-email">
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="user-password">Password</label>
            </div>
            <div class="inputs">
                <input type="password" id="user-password" name="user-password">
            </div>
        </div>
        <div class="field">
            <div class="field-meta">
                <label for="user-confirm-password">Confirm Password</label>
            </div>
            <div class="inputs">
                <input type="password" id="user-confirm-password" name="user-confirm-password">
            </div>
        </div>    </fieldset>
    <fieldset id="user-permissions" class="section">
        <div class="field">
            <div class="field-meta">
                <label for="user-role">Role</label>
            </div>
            <div class="inputs">
                <select id="user-role" name="user-role">
                    <option>Guest</option>
                    <option>Item creator</option>
                    <option>Site administrator</option>
                    <option>Global administrator</option>
                </select>
            </div>
        </div>
        <div class="field">
            <input type="checkbox" name="all-items" id="all-items">
            <label for="all-items">Can edit/delete all items</label>
        </div>
        <div class="field">
            <input type="checkbox" name="all-sites" id="all-sites">
            <label for="all-sites">Can edit/delete all sites</label>
        </div>
        <div class="field">
            <input type="checkbox" name="all-users" id="all-users">
            <label for="all-users">Can edit/delete all users</label>
        </div>
        <div class="field">
            <input type="checkbox" name="all-settings" id="all-settings">
            <label for="all-settings">Can configure multi-site settings</label>
        </div>
    </fieldset>
    <div id="save-sidebar">
        <a href="show" class="button">Add user</a>
        <a href="../users" class="button">Cancel</a>
    </div>
</form>

<?php include('../footer.php'); ?>