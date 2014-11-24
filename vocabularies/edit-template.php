<?php $bodyClass = "vocabs edit resource-template"; ?>
<?php include('../header.php'); ?>

<h1>Add Resource Template</h1>

<form id="resource-template">
    <table>
        <thead>
            <tr>
                <th>Original label <br> <span class="local-name">local name</span></th>
                <th>Label</th>
                <th>Comment</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Title (Dublin Core)<br>
                    <span class="local-name">Title</span>
                </td>
                <td><input type="text" value="Title"></td>
                <td><textarea>A name given to a resource.</textarea></td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    Description (Dublin Core)<br>
                    <span class="local-name">Description</span>
                </td>
                <td><input type="text" value="Description"></td>
                <td><textarea>An account of the resource.</textarea></td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    Example Property (Vocabulary)<br>
                    <span class="local-name">ExampleProperty</span>
                </td>
                <td><input type="text" value="Example Label"></td>
                <td><textarea>An example of a custom comment.</textarea></td>
                <td>
                    <ul class="actions">
                        <li><a href="#" class="o-icon-delete" title="Delete"></a></li>
                    </ul>
                </td>
            </tr>        </tbody>
    </table>

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