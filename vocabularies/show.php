<?php $bodyClass = "vocabs show"; ?>
<?php include('../header.php'); ?>

<h1>FOAF</h1>
    
<nav class="section-nav">
    <ul>
        <li><a href="#" class="vocab-properties section active">Properties</a></li>
        <li><a href="#" class="vocab-classes section">Classes</a></li>
    </ul>
</nav>

<div id="vocab-classes" class="section">
    <h2>Classes</h2>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title">Agent</h3>
        <div class="description">
            <p>The Agent class is the class of agents; things that do stuff. A well known property-set is Person, representing people. Other kinds of agents include Organization and Group.</p>
            <p>The Agent class is useful in a few places in FOAF where Person would have been overly specific. For example, the IM chat ID properties such as jabberID are typically associated with people, but sometimes belong to software bots.</p>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">Document</h3>
        <div class="description">
            <p>The Document class represents those things which are, broadly conceived, 'documents'.</p>
            <p>The Image class is a property-set of Document, since all images are documents.</p>
        </div>
        <div class="properties">
            <a href="#" class="expand"><span class="screen-reader-text">Expand/Collapse</span></a>
            <div class="property field">topic</div>
            <div class="property field">primaryTopic</div>
            <div class="property field">sha1</div>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">Group</h3>
        <div class="description">
            <p>The Group class represents a collection of individual agents (and may itself play the role of a Agent, ie. something that can perform actions).</p>
        </div>
        <div class="properties">
            <a href="#" class="expand"><span class="screen-reader-text">Expand/Collapse</span></a>
            <div class="property field">depicts</div>
            <div class="property field">thumbnail</div>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">Image</h3>
        <div class="description">
            <p>The class Image is a property-set of Document corresponding to those documents which are images.</p>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">LabelProperty</h3>
        <div class="description">
            <p>A LabelProperty is any RDF property with texual values that serve as labels.</p>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">OnlineAccount</h3>
        <div class="description">
            <p>The OnlineAccount class represents the provision of some form of online service, by some party (indicated indirectly via a accountServiceHomepage) to some Agent.</p>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">OnlineChatAccount</h3>
        <div class="description">
            <p>A OnlineChatAccount is a OnlineAccount devoted to chat / instant messaging. The account may offer other services too; FOAF's property-setes of OnlineAccount are not mutually disjoint.</p>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
          <h3 class="title expand">OnlineEcommerceAccount</h3>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">OnlineGamingAccount</h3>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">Organization</h3>
        <div class="description">
            <p>The Organization class represents a kind of Agent corresponding to social instititutions such as companies, societies etc.</p>
        </div>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">Person</h3>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">PersonalProfile</h3>
    </div>
    <div class="class field">
        <div class="actions expand-collapse-parent expand">
            <a href="#" class="icon-add"><span class="screen-reader-text">Add new class</span>
            <a href="#" class="icon-ellipsis expand"><span class="screen-reader-text">More details</span></a>
        </div>
        <h3 class="title expand">Project</h3>
    </div>
</div>

<div id="vocab-properties" class="section active">
    <h2>Properties</h2>
    <div class="property field">
        <h3>Account</h3>
        <div class="description"><p>Indicates an account held by this agent.</p></div>
    </div>
    <div class="property field">
        <h3>Account Name</h3>
        <div class="description"><p>Indicates the name (identifier) associated with this online account.</p></div>
    </div>
    <div class="property field">
        <h3>accountServicesHomepage</h3>
        <div class="description"><p>Indicates a homepage of the service provide for this online account. </p></div>
    </div>
    <div class="property field">
        <h3>age</h3>
        <div class="description"><p>An AIM chat ID</p></div>
    </div>
    <div class="property field">
        <h3>aimChatID</h3>
    </div>
    <div class="property field"><h3>based_near</h3></div>
    <div class="property field"><h3>birthday</h3></div>
    <div class="property field"><h3>currentProject</h3></div>
    <div class="property field"><h3>depiction</h3></div>
    <div class="property field"><h3>depicts</h3></div>
    <div class="property field"><h3>dnaChecksum</h3></div>
    <div class="property field"><h3>familyName</h3></div>
    <div class="property field"><h3>family_name</h3></div>
    <div class="property field"><h3>firstName</h3></div>
    <div class="property field"><h3>focus</h3></div>
    <div class="property field"><h3>fundedBy</h3></div>
    <div class="property field"><h3>geekcode</h3></div>
    <div class="property field"><h3>gender</h3></div>
    <div class="property field"><h3>givenName</h3></div>
    <div class="property field"><h3>givenname</h3></div>
    <div class="property field"><h3>holdsAccount</h3></div>
    <div class="property field"><h3>homepage</h3></div>
    <div class="property field"><h3>icqChatID</h3></div>
    <div class="property field"><h3>img</h3></div>
    <div class="property field"><h3>interest</h3></div>
    <div class="property field"><h3>isPrimaryTopicOf</h3></div>
    <div class="property field"><h3>jabberID</h3></div>
    <div class="property field"><h3>knows</h3></div>
    <div class="property field"><h3>lastName</h3></div>
    <div class="property field"><h3>logo</h3></div>
    <div class="property field"><h3>made</h3></div>
    <div class="property field"><h3>maker</h3></div>
    <div class="property field"><h3>mbox</h3></div>
    <div class="property field"><h3>mbox_sha1sum</h3></div>
    <div class="property field"><h3>member</h3></div>
    <div class="property field"><h3>membershipClass</h3></div>
    <div class="property field"><h3>msnChatID</h3></div>
    <div class="property field"><h3>myersBriggs</h3></div>
    <div class="property field"><h3>name</h3></div>
    <div class="property field"><h3>nick</h3></div>
    <div class="property field"><h3>openid</h3></div>
    <div class="property field"><h3>page</h3></div>
    <div class="property field"><h3>pastProject</h3></div>
    <div class="property field"><h3>phone</h3></div>
    <div class="property field"><h3>plan</h3></div>
    <div class="property field"><h3>primaryTopic</h3></div>
    <div class="property field"><h3>publications</h3></div>
    <div class="property field"><h3>schoolHomepage</h3></div>
    <div class="property field"><h3>sha1</h3></div>
    <div class="property field"><h3>skypeID</h3></div>
    <div class="property field"><h3>status</h3></div>
    <div class="property field"><h3>surname</h3></div>
    <div class="property field"><h3>theme</h3></div>
    <div class="property field"><h3>thumbnail</h3></div>
    <div class="property field"><h3>tipjar</h3></div>
    <div class="property field"><h3>title</h3></div>
    <div class="property field"><h3>topic</h3></div>
    <div class="property field"><h3>topic_interest</h3></div>
    <div class="property field"><h3>weblog</h3></div>
    <div class="property field"><h3>workInfoHomepage</h3></div>
    <div class="property field"><h3>workplaceHomepage</h3></div>
    <div class="property field"><h3>yahooChatID</h3></div>
</div>

<?php include('../footer.php'); ?>