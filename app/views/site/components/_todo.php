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