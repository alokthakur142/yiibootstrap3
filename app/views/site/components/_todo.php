<!-- Split button dropdowns
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="btn-dropdowns">Button dropdowns</h1>
</div>
<p class="lead">Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Plugin dependency</h4>
    <p>Button dropdowns require the <a href="../javascript/#dropdowns">dropdown plugin</a> to be included in your version of Bootstrap.</p>
</div>

<h3 id="btn-dropdowns-single">Single button dropdowns</h3>
<p>Turn a button into a dropdown toggle with some basic markup changes.</p>
<div class="bs-example">
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
</div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Single button --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<h3 id="btn-dropdowns-split">Split button dropdowns</h3>
<p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
<div class="bs-example">
    <div class="btn-group">
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div><!-- /btn-group -->
</div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Split button --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<h3 id="btn-dropdowns-sizing">Sizing</h3>
<p>Button dropdowns work with buttons of all sizes.</p>
<div class="bs-example">
    <div class="btn-toolbar">
        <div class="btn-group">
            <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                Large button <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
    <div class="btn-toolbar">
        <div class="btn-group">
            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                Small button <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
    <div class="btn-toolbar">
        <div class="btn-group">
            <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                Extra small button <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Large button group --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            Large button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Small button group --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            Small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Extra small button group --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            Extra small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<h3 id="btn-dropdowns-dropup">Dropup variation</h3>
<p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</p>
<div class="bs-example">
    <div class="btn-toolbar">
        <div class="btn-group dropup">
            <button type="button" class="btn btn-default">Dropup</button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class="btn-group dropup">
            <button type="button" class="btn btn-primary">Right dropup</button>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
    </div>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Dropup<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

</div>




<!-- Input groups
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="input-groups">Input groups</h1>
</div>
<p class="lead">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input. Use <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a <code>.form-control</code>.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>Avoid using <code>&lt;select&gt;</code> elements here as they cannot be fully styled in WebKit browsers.</p>
</div>
<div class="bs-callout bs-callout-info">
    <h4>Tooltips &amp; popovers in input groups require special setting</h4>
    <p>When using tooltips or popovers on elements within an <code>.input-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
</div>

<h2 id="input-groups-basic">Basic example</h2>
<form class="bs-example bs-example-form" role="form">
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" placeholder="Username">
    </div>
    <br>
    <div class="input-group">
        <input type="text" class="form-control">
        <span class="input-group-addon">.00</span>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control">
        <span class="input-group-addon">.00</span>
    </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>


<h2 id="input-groups-sizing">Sizing</h2>
<p>Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>
<form class="bs-example bs-example-form" role="form">
    <div class="input-group input-group-lg">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" placeholder="Username">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" placeholder="Username">
    </div>
    <br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" placeholder="Username">
    </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-lg"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-sm"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>


<h2 id="input-groups-checkboxes-radios">Checkboxes and radio addons</h2>
<p>Place any checkbox or radio option within an input group's addon instead of text.</p>
<form class="bs-example bs-example-form">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox">
            </span>
                <input type="text" class="form-control">
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="input-group">
            <span class="input-group-addon">
              <input type="radio">
            </span>
                <input type="text" class="form-control">
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
        </code></pre></div>


<h2 id="input-groups-buttons">Button addons</h2>
<p>Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-btn</code> to wrap the buttons. This is required due to default browser styles that cannot be overridden.</p>
<form class="bs-example bs-example-form">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
                <input type="text" class="form-control">
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
        </code></pre></div>

<h2 id="input-groups-buttons-dropdowns">Buttons with dropdowns</h2>
<p></p>
<form class="bs-example bs-example-form" role="form">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <input type="text" class="form-control">
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu pull-right"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
        </code></pre></div>

<h2 id="input-groups-buttons-segmented">Segmented buttons</h2>
<form class="bs-example bs-example-form" role="form">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <input type="text" class="form-control">
            </div><!-- /.input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div><!-- /.input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn btn-group"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

</div>


<!-- Jumbotron
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="jumbotron">Jumbotron</h1>
    </div>
    <p>A lightweight, flexible component that can optional extend the entire viewport to showcase key content on your site. To make the jumbotron full width, don't include it within a <code>.container</code>. Placing it within a container will keep it at the width of the rest of your content and provide rounded corners.</p>
    <div class="bs-example">
        <div class="jumbotron">
            <div class="container">
                <h1>Hello, world!</h1>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <p><a class="btn btn-primary btn-lg">Learn more</a></p>
            </div>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
                <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>



<!-- Page header
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="page-header">Page header</h1>
    </div>
    <p>A simple shell for an <code>h1</code> to appropriately space out and segment sections of content on a page. It can utilize the <code>h1</code>'s default <code>small</code> element, as well as most other components (with additional styles).</p>
    <div class="bs-example">
        <div class="page-header">
            <h1>Example page header <small>Subtext for header</small></h1>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"page-header"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h1&gt;</span>Example page header <span class="nt">&lt;small&gt;</span>Subtext for header<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>



<!-- Thumbnails
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="thumbnails">Thumbnails</h1>
    </div>
    <p class="lead">Extend Bootstrap's <a href="../css/#grid">grid system</a> with the thumbnail component to easily display grids of images, videos, text, and more.</p>

    <h3 id="thumbnails-default">Default example</h3>
    <p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>
    <div class="bs-example">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/png;base64,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1/TRRx8Nr7/++vo3TzvttOHBBx9cB2sE0GOPPTbEmejS7aabbhouv/zyY3bfdpyltbftt+Q4EZDPPPPM8MMPP+xbLs7S449MBGZs4RT199vmftv69fODJSBYD9Y8F7+aCMg33nhj9db322+/Xb8FHgtsCtZHH310pzPWCNZLL710p+MsfgGzHXd9PfHrcakgzlan23nnnTecfvrpw5dffnnMv1977bVD/Pfrr78OTzzxxDEOcdkkficuJ0y3vc7Y/+lr9Ht9BARrn1mldvr777+vzkD3emu/6Yzr559/3njGGmdy77333jFncWedddZwzz33DH/++edOx4mAjIAar1HG/z733HOH6GfcIhDHbfx57L/r63nnnXeGd999d11rDM/4h88//3x4+eWX1z+LPxC33HLL8PHHHw+vvfba+t/jOnJcKojt/fffH9566631zy644ILhzjvvTJ2bYj0EBGuPOaV3+U+Cda8mInCfeuqpdUhHyD3wwAOrs7hdj7Np/7hWef/996/C9tNPPx1eeeWV484M40bTrsEaIRhhOG633Xbb+mbV/NLHGKxxhjsN9v1+J/qNSwhxvdp2uAQE6+Ga9zGvNm7YxBlfBEAE2osvvrgOx6XXCOOMN0I1wnXcbr311tUd9XHb9TibwvP6668frrzyyuGRRx5ZnQWP2/SMcdfjxFMOcRNq3OJGW7x9j+2DDz4Y3nzzzfXPrrrqqiF6ePrpp9fXZMMtAn96k2r+8/vuu2/1hIXtcAkI1sM17z1f7fwMbWmwzt/+xqNGcRa317b0OPMzw/HxpwjdcYtge+ihhzY+0rXkOPFHJc5yY99xi7PsOMP88ccfjznOGKDz4BzPzMedtwWv5XY4BATr4Zjz1le5JIjmReLGV9zIGZ8UmF4CONFgndfeVG/TUwfjfktfz/ysddNx4nne6667bhXA8cjZeMY8vUSxV7DGdebpo1pbB2GHAyEgWA/EGE/8RSwNoumR4qmCDz/88Li3y/t1s8tx5jeKpnUvvPDC4Y477jihM+PoJS5jjB8K2KtY/MG4++67V9eMI1jHPyTbgjXq3XzzzcNll1124gNSoZWAYG01rn+v2V0CL7qY77/kbHXT72275DB9yH989XFZIJ6x3e+m0JLXE9dX44x13OI1XHPNNatLC2+//fYxT0BEiMZD/xGs46WDJddY59dg/70J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" style="height: 180px; width: 100%; display: block;">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/png;base64,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1/TRRx8Nr7/++vo3TzvttOHBBx9cB2sE0GOPPTbEmejS7aabbhouv/zyY3bfdpyltbftt+Q4EZDPPPPM8MMPP+xbLs7S449MBGZs4RT199vmftv69fODJSBYD9Y8F7+aCMg33nhj9db322+/Xb8FHgtsCtZHH310pzPWCNZLL710p+MsfgGzHXd9PfHrcakgzlan23nnnTecfvrpw5dffnnMv1977bVD/Pfrr78OTzzxxDEOcdkkficuJ0y3vc7Y/+lr9Ht9BARrn1mldvr777+vzkD3emu/6Yzr559/3njGGmdy77333jFncWedddZwzz33DH/++edOx4mAjIAar1HG/z733HOH6GfcIhDHbfx57L/r63nnnXeGd999d11rDM/4h88//3x4+eWX1z+LPxC33HLL8PHHHw+vvfba+t/jOnJcKojt/fffH9566631zy644ILhzjvvTJ2bYj0EBGuPOaV3+U+Cda8mInCfeuqpdUhHyD3wwAOrs7hdj7Np/7hWef/996/C9tNPPx1eeeWV484M40bTrsEaIRhhOG633Xbb+mbV/NLHGKxxhjsN9v1+J/qNSwhxvdp2uAQE6+Ga9zGvNm7YxBlfBEAE2osvvrgOx6XXCOOMN0I1wnXcbr311tUd9XHb9TibwvP6668frrzyyuGRRx5ZnQWP2/SMcdfjxFMOcRNq3OJGW7x9j+2DDz4Y3nzzzfXPrrrqqiF6ePrpp9fXZMMtAn96k2r+8/vuu2/1hIXtcAkI1sM17z1f7fwMbWmwzt/+xqNGcRa317b0OPMzw/HxpwjdcYtge+ihhzY+0rXkOPFHJc5yY99xi7PsOMP88ccfjznOGKDz4BzPzMedtwWv5XY4BATr4Zjz1le5JIjmReLGV9zIGZ8UmF4CONFgndfeVG/TUwfjfktfz/ysddNx4nne6667bhXA8cjZeMY8vUSxV7DGdebpo1pbB2GHAyEgWA/EGE/8RSwNoumR4qmCDz/88Li3y/t1s8tx5jeKpnUvvPDC4Y477jihM+PoJS5jjB8K2KtY/MG4++67V9eMI1jHPyTbgjXq3XzzzcNll1124gNSoZWAYG01rn+v2V0CL7qY77/kbHXT72275DB9yH989XFZIJ6x3e+m0JLXE9dX44x13OI1XHPNNatLC2+//fYxT0BEiMZD/xGs46WDJddY59dg/70J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" style="height: 180px; width: 100%; display: block;">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVYAAAFoCAYAAAAM39NeAAATh0lEQVR4Xu3d54ss5RIH4D7mjAETBsQPBkwYwKz/uhlFDChmxZzxmHO61EAPffrM7vR4ymvV7tPgh3u2t7rmqZff9nT3zD1y9OjRvwcbAQIECKQJHBGsaZYKESBAYCUgWC0EAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK0BAgQIJAsI1mRQ5QgQICBYrQECBAgkCwjWZFDlCBAgIFitAQIECCQLCNZkUOUIECAgWK2BtcDXX389fPbZZ8NJJ500nHnmmcPVV1+9/tlff/01fPXVV6ufLdli//PPP3849dRTj9t9v+Msqb10n12O880336xe+2+//bYqf/LJJw+XXHLJcPHFF+95uO+++271Oz/99NNqn3itsX/8d+TIkaVt2u8ACgjWAzjUf/qSnn/++eHo0aOrXz/llFOGhx9+eB0QETiPP/748Pfffy8uf+ONNw5XXHHFcfvvd5zFxRfsuOQ4f/zxx/Dcc88N33///caKEZZ33XXXcPbZZ69/HgYvvPDC2mr+ixHK995773DGGWcs6NIuB1FAsB7Eqf6D1/TRRx8Nr7/++vo3TzvttOHBBx9cB2sE0GOPPTbEmejS7aabbhouv/zyY3bfdpyltbftt+Q4EZDPPPPM8MMPP+xbLs7S449MBGZs4RT199vmftv69fODJSBYD9Y8F7+aCMg33nhj9db322+/Xb8FHgtsCtZHH310pzPWCNZLL710p+MsfgGzHXd9PfHrcakgzlan23nnnTecfvrpw5dffnnMv1977bVD/Pfrr78OTzzxxDEOcdkkficuJ0y3vc7Y/+lr9Ht9BARrn1mldvr777+vzkD3emu/6Yzr559/3njGGmdy77333jFncWedddZwzz33DH/++edOx4mAjIAar1HG/z733HOH6GfcIhDHbfx57L/r63nnnXeGd999d11rDM/4h88//3x4+eWX1z+LPxC33HLL8PHHHw+vvfba+t/jOnJcKojt/fffH9566631zy644ILhzjvvTJ2bYj0EBGuPOaV3+U+Cda8mInCfeuqpdUhHyD3wwAOrs7hdj7Np/7hWef/996/C9tNPPx1eeeWV484M40bTrsEaIRhhOG633Xbb+mbV/NLHGKxxhjsN9v1+J/qNSwhxvdp2uAQE6+Ga9zGvNm7YxBlfBEAE2osvvrgOx6XXCOOMN0I1wnXcbr311tUd9XHb9TibwvP6668frrzyyuGRRx5ZnQWP2/SMcdfjxFMOcRNq3OJGW7x9j+2DDz4Y3nzzzfXPrrrqqiF6ePrpp9fXZMMtAn96k2r+8/vuu2/1hIXtcAkI1sM17z1f7fwMbWmwzt/+xqNGcRa317b0OPMzw/HxpwjdcYtge+ihhzY+0rXkOPFHJc5yY99xi7PsOMP88ccfjznOGKDz4BzPzMedtwWv5XY4BATr4Zjz1le5JIjmReLGV9zIGZ8UmF4CONFgndfeVG/TUwfjfktfz/ysddNx4nne6667bhXA8cjZeMY8vUSxV7DGdebpo1pbB2GHAyEgWA/EGE/8RSwNoumR4qmCDz/88Li3y/t1s8tx5jeKpnUvvPDC4Y477jihM+PoJS5jjB8K2KtY/MG4++67V9eMI1jHPyTbgjXq3XzzzcNll1124gNSoZWAYG01rn+v2V0CL7qY77/kbHXT72275DB9yH989XFZIJ6x3e+m0JLXE9dX44x13OI1XHPNNatLC2+//fYxT0BEiMZD/xGs46WDJddY59dg/70J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" style="height: 180px; width: 100%; display: block;">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/png;base64,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1/TRRx8Nr7/++vo3TzvttOHBBx9cB2sE0GOPPTbEmejS7aabbhouv/zyY3bfdpyltbftt+Q4EZDPPPPM8MMPP+xbLs7S449MBGZs4RT199vmftv69fODJSBYD9Y8F7+aCMg33nhj9db322+/Xb8FHgtsCtZHH310pzPWCNZLL710p+MsfgGzHXd9PfHrcakgzlan23nnnTecfvrpw5dffnnMv1977bVD/Pfrr78OTzzxxDEOcdkkficuJ0y3vc7Y/+lr9Ht9BARrn1mldvr777+vzkD3emu/6Yzr559/3njGGmdy77333jFncWedddZwzz33DH/++edOx4mAjIAar1HG/z733HOH6GfcIhDHbfx57L/r63nnnXeGd999d11rDM/4h88//3x4+eWX1z+LPxC33HLL8PHHHw+vvfba+t/jOnJcKojt/fffH9566631zy644ILhzjvvTJ2bYj0EBGuPOaV3+U+Cda8mInCfeuqpdUhHyD3wwAOrs7hdj7Np/7hWef/996/C9tNPPx1eeeWV484M40bTrsEaIRhhOG633Xbb+mbV/NLHGKxxhjsN9v1+J/qNSwhxvdp2uAQE6+Ga9zGvNm7YxBlfBEAE2osvvrgOx6XXCOOMN0I1wnXcbr311tUd9XHb9TibwvP6668frrzyyuGRRx5ZnQWP2/SMcdfjxFMOcRNq3OJGW7x9j+2DDz4Y3nzzzfXPrrrqqiF6ePrpp9fXZMMtAn96k2r+8/vuu2/1hIXtcAkI1sM17z1f7fwMbWmwzt/+xqNGcRa317b0OPMzw/HxpwjdcYtge+ihhzY+0rXkOPFHJc5yY99xi7PsOMP88ccfjznOGKDz4BzPzMedtwWv5XY4BATr4Zjz1le5JIjmReLGV9zIGZ8UmF4CONFgndfeVG/TUwfjfktfz/ysddNx4nne6667bhXA8cjZeMY8vUSxV7DGdebpo1pbB2GHAyEgWA/EGE/8RSwNoumR4qmCDz/88Li3y/t1s8tx5jeKpnUvvPDC4Y477jihM+PoJS5jjB8K2KtY/MG4++67V9eMI1jHPyTbgjXq3XzzzcNll1124gNSoZWAYG01rn+v2V0CL7qY77/kbHXT72275DB9yH989XFZIJ6x3e+m0JLXE9dX44x13OI1XHPNNatLC2+//fYxT0BEiMZD/xGs46WDJddY59dg/70J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" style="height: 180px; width: 100%; display: block;">
                </a>
            </div>
        </div>
    </div><!-- /.bs-example -->
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-3"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">"holder.js/100%x180"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
                <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                ...
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h3 id="thumbnails-custom-content">Custom content</h3>
    <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
    <div class="bs-example">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="300x200" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAfMUlEQVR4Xu3dh8/k9PEHYBNCCxDgKDlI6Hf0ooTe8rfTm4AD0buAhBY4OgQI4afZnxYte+st740vM9xjCSHxemfHz3wlPrK99gmHDx/+ebARIECAAAECBAikCZwgYKVZKkSAAAECBAgQmAkIWBYCAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1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" style="width: 300px; height: 200px;">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="300x200" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAfMUlEQVR4Xu3dh8/k9PEHYBNCCxDgKDlI6Hf0ooTe8rfTm4AD0buAhBY4OgQI4afZnxYte+st740vM9xjCSHxemfHz3wlPrK99gmHDx/+ebARIECAAAECBAikCZwgYKVZKkSAAAECBAgQmAkIWBYCAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1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" style="width: 300px; height: 200px;">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="300x200" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAfMUlEQVR4Xu3dh8/k9PEHYBNCCxDgKDlI6Hf0ooTe8rfTm4AD0buAhBY4OgQI4afZnxYte+st740vM9xjCSHxemfHz3wlPrK99gmHDx/+ebARIECAAAECBAikCZwgYKVZKkSAAAECBAgQmAkIWBYCAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1QIAAAQIECBBIFhCwkkGVI0CAAAECBAgIWNYAAQIECBAgQCBZQMBKBlWOAAECBAgQICBgWQMECBAgQIAAgWQBASsZVDkCBAgQIECAgIBlDRAgQIAAAQIEkgUErGRQ5QgQIECAAAECApY1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" style="width: 300px; height: 200px;">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.bs-example -->
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-3"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">"holder.js/300x200"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"caption"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h3&gt;</span>Thumbnail label<span class="nt">&lt;/h3&gt;</span>
                <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>




<!-- Alerts
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="alerts">Alerts</h1>
    </div>
    <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. For inline dismissal, use the <a href="../javascript/#js-alerts">alerts jQuery plugin</a>.</p>

    <h2 id="alerts-examples">Examples</h2>
    <p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>

    <div class="bs-callout bs-callout-info">
        <h4>No default class</h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.</p>
    </div>

    <div class="bs-example">
        <div class="alert alert-success">
            <strong>Well done!</strong> You successfully read this important alert message.
        </div>
        <div class="alert alert-info">
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
        </div>
        <div class="alert alert-warning">
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
        <div class="alert alert-danger">
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h2 id="alerts-dismissable">Dismissable alerts</h2>
    <p>Build on any alert by adding an optional <code>.alert-dismissable</code> and close button.</p>
    <div class="bs-example">
        <div class="alert alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dismissable"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Best check yo self, you're not looking too good.
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <div class="bs-callout bs-callout-warning">
        <h4>Ensure proper behavior across all devices</h4>
        <p>Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data attribute.</p>
    </div>

    <h2 id="alerts-links">Links in alerts</h2>
    <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
    <div class="bs-example">
        <div class="alert alert-success">
            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
        </div>
        <div class="alert alert-info">
            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
        </div>
        <div class="alert alert-warning">
            <strong>Warning!</strong> Best check yo self, you're <a href="#" class="alert-link">not looking too good</a>.
        </div>
        <div class="alert alert-danger">
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>




<!-- Progress bars
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="progress">Progress bars</h1>
    </div>
    <p class="lead">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>

    <div class="bs-callout bs-callout-danger">
        <h4>Cross-browser compatibility</h4>
        <p>Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.</p>
    </div>

    <h3 id="progress-basic">Basic example</h3>
    <p>Default progress bar.</p>
    <div class="bs-example">
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
            </div>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h3 id="progress-alternatives">Contextual alternatives</h3>
    <p>Progress bars use some of the same button and alert classes for consistent styles.</p>
    <div class="bs-example">
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete (danger)</span>
            </div>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h3 id="progress-striped">Striped</h3>
    <p>Uses a gradient to create a striped effect. Not available in IE8.</p>
    <div class="bs-example">
        <div class="progress progress-striped">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
            </div>
        </div>
        <div class="progress progress-striped">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
        <div class="progress progress-striped">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
            </div>
        </div>
        <div class="progress progress-striped">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete (danger)</span>
            </div>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete (danger)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h3 id="progress-animated">Animated</h3>
    <p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in all versions of IE.</p>
    <div class="bs-example">
        <div class="progress progress-striped active">
            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"><span class="sr-only">45% Complete</span></div>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped active"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span>  <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"45"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 45%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>45% Complete<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h3 id="progress-stacked">Stacked</h3>
    <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
    <div class="bs-example">
        <div class="progress">
            <div class="progress-bar progress-bar-success" style="width: 35%">
                <span class="sr-only">35% Complete (success)</span>
            </div>
            <div class="progress-bar progress-bar-warning" style="width: 20%">
                <span class="sr-only">20% Complete (warning)</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: 10%">
                <span class="sr-only">10% Complete (danger)</span>
            </div>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">style=</span><span class="s">"width: 35%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>35% Complete (success)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete (warning)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">style=</span><span class="s">"width: 10%"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>10% Complete (danger)<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>




<!-- Media object
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="media">Media object</h1>
    </div>
    <p class="lead">Abstract object styles for building various types of components (like blog comments, Tweets, etc) that feature a left- or right-aligned image alongside textual content.</p>

    <h3 id="media-default">Default media</h3>
    <p>The default media allow to float a media object (images, video, audio) to the left or right of a content block.</p>
    <div class="bs-example">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.bs-example -->
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"pull-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
                <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
                ...
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h3 id="media-list">Media list</h3>
    <p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
    <div class="bs-example">
        <ul class="media-list">
            <li class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                    <!-- Nested media object -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Nested media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            <!-- Nested media object -->
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Nested media heading</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Nested media object -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Nested media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                    </div>
                </div>
            </li>
            <li class="media">
                <a class="pull-right" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,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" style="width: 64px; height: 64px;">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>
        </ul>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"pull-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
                <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
                ...
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>
</div>



<!-- List group
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="list-group">List group</h1>
    </div>
    <p class="lead">List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>

    <h3 id="list-group-basic">Basic example</h3>
    <p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>
    <div class="bs-example">
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>

    <h3 id="list-group-badges">Badges</h3>
    <p>Add the badges component to any list group item and it will automatically be positioned on the right.</p>
    <div class="bs-example">
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge">14</span>
                Cras justo odio
            </li>
            <li class="list-group-item">
                <span class="badge">2</span>
                Dapibus ac facilisis in
            </li>
            <li class="list-group-item">
                <span class="badge">1</span>
                Morbi leo risus
            </li>
        </ul>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
                Cras justo odio
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>

    <h3 id="list-group-linked">Linked items</h3>
    <p>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>
    <div class="bs-example">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                Cras justo odio
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
                Cras justo odio
                <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <h3 id="list-group-custom-content">Custom content</h3>
    <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
    <div class="bs-example">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"list-group-item-heading"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h4&gt;</span>
                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"list-group-item-text"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>




<!-- Panels
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="panels">Panels</h1>
</div>
<p class="lead">While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.</p>

<h3 id="panels-basic">Basic example</h3>
<p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>
<div class="bs-example">
    <div class="panel panel-default">
        <div class="panel-body">
            Basic panel example
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
            Basic panel example
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<h3 id="panels-heading">Panel with heading</h3>
<p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading.</p>
<div class="bs-example">
    <div class="panel panel-default">
        <div class="panel-heading">Panel heading without title</div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading without title<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
            Panel content
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"panel-title"</span><span class="nt">&gt;</span>Panel title<span class="nt">&lt;/h3&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
            Panel content
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<h3 id="panels-footer">Panel with footer</h3>
<p>Wrap buttons or secondary text in <code>.panel-footer</code>. Note that panel footers <strong>do not</strong> inherit colors and borders when using contextual variations as they are not meant to be in the foreground.</p>
<div class="bs-example">
    <div class="panel panel-default">
        <div class="panel-body">
            Panel content
        </div>
        <div class="panel-footer">Panel footer</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
            Panel content
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-footer"</span><span class="nt">&gt;</span>Panel footer<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<h3 id="panels-alternatives">Contextual alternatives</h3>
<p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>
<div class="bs-example">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<h3 id="panels-tables">With tables</h3>
<p>Add any non-bordered <code>.table</code> within a panel for a seamless design. If there is a <code>.panel-body</code>, we add an extra border to the top of the table for separation.</p>
<div class="bs-example">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel heading</div>
        <div class="panel-body">
            <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>

        <!-- Table -->
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- Default panel contents --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Table --&gt;</span>
            <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/table&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

<p>If there is no panel body, the component moves from panel header to table without interruption.</p>
<div class="bs-example">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel heading</div>

        <!-- Table -->
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- Default panel contents --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Table --&gt;</span>
            <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/table&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>



<h3 id="panels-list-group">With list groups</h3>
<p>Easily include full-width <a href="#list-group">list groups</a> within any panel.</p>
<div class="bs-example">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel heading</div>
        <div class="panel-body">
            <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>

        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- Default panel contents --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- List group --&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre></div>

</div>





<!-- Wells
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="wells">Wells</h1>
    </div>

    <h3>Default well</h3>
    <p>Use the well as a simple effect on an element to give it an inset effect.</p>
    <div class="bs-example">
        <div class="well">
            Look, I'm in a well!
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
    <h3>Optional classes</h3>
    <p>Control padding and rounded corners with two optional modifier classes.</p>
    <div class="bs-example">
        <div class="well well-lg">
            Look, I'm in a large well!
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <div class="bs-example">
        <div class="well well-sm">
            Look, I'm in a small well!
        </div>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>