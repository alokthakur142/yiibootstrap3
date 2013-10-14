<!-- Navbar
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="navbar">Navbar</h1>
</div>

<h2 id="navbar-default">Default navbar</h2>
<p>Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>

<div class="bs-callout bs-callout-info">
    <h4>Customize the collapsing point</h4>
    <p>Depending on the content in your navbar, you might need to change the point at which your navbar switches between collapsed and horizontal mode. Customize the <code>@grid-float-breakpoint</code> variable or add your own media query.</p>
</div>

<div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- Brand and toggle get grouped for better mobile display --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-header"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"navbar-toggle"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">".navbar-ex1-collapse"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle navigation<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Brand<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Collect the nav links, forms, and other content for toggling --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse navbar-ex1-collapse"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Dropdown <span class="nt">&lt;b</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/b&gt;&lt;/a&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>One more separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"navbar-form navbar-left"</span> <span class="na">role=</span><span class="s">"search"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/form&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav navbar-right"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Dropdown <span class="nt">&lt;b</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/b&gt;&lt;/a&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.navbar-collapse --&gt;</span>
            <span class="nt">&lt;/nav&gt;</span>
        </code></pre></div>

<div class="bs-callout bs-callout-danger">
    <h4>Plugin dependency</h4>
    <p>The responsive navbar requires the <a href="../javascript/#collapse">collapse plugin</a> to be included in your version of Bootstrap.</p>
</div>

<div class="bs-callout bs-callout-warning">
    <h4>Make navbars accessible</h4>
    <p>Be sure to add a <code>role="navigation"</code> to every navbar to help with accessibility.</p>
</div>


<h2 id="navbar-buttons">Buttons</h2>
<p>For buttons not residing in a <code>&lt;form&gt;</code>, add this class to vertically center buttons within a navbar.</p>
<div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex2-collapse">
            <button type="button" class="btn btn-default navbar-btn">Sign in</button>
        </div>
    </nav>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default navbar-btn"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
        </code></pre></div>


<h2 id="navbar-text">Text</h2>
<p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper leading and color.</p>
<div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex3-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex3-collapse">
            <p class="navbar-text">Signed in as Mark Otto</p>
        </div>
    </nav>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>Signed in as Mark Otto<span class="nt">&lt;/p&gt;</span>
        </code></pre></div>


<h2 id="navbar-links">Non-nav links</h2>
<p>For folks using standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</p>
<div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex4-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex4-collapse">
            <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
        </div>
    </nav>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"navbar-text pull-right"</span><span class="nt">&gt;</span>Signed in as <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"navbar-link"</span><span class="nt">&gt;</span>Mark Otto<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
        </code></pre></div>


<h2 id="navbar-component-alignment">Component alignment</h2>
<p>Align nav links, forms, buttons, or text, using the <code>.navbar-left</code> or <code>.navbar-right</code> utility classes. Both classes will add a CSS float in the specified direction. For example, to align nav links, put them in a separate <code>&lt;ul&gt;</code> with the respective utility class applied.</p>
<p>These classes are mixin-ed versions of <code>.pull-left</code> and <code>.pull-right</code>, but they're scoped to media queries for easier handling of navbar components across device sizes.</p>


<h2 id="navbar-fixed-top">Fixed to top</h2>
<p>Add <code>.navbar-fixed-top</code>.</p>
<div class="bs-example bs-navbar-top-example">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex5-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex5-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-fixed-top"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/nav&gt;</span>
        </code></pre></div>

<div class="bs-callout bs-callout-danger">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the top of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
    <div class="highlight"><pre><code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-top</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
            </code></pre></div>
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
</div>


<h2 id="navbar-fixed-bottom">Fixed to bottom</h2>
<p>Add <code>.navbar-fixed-bottom</code> instead.</p>
<div class="bs-example bs-navbar-bottom-example">
    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex6-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex6-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-fixed-bottom"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/nav&gt;</span>
        </code></pre></div>

<div class="bs-callout bs-callout-danger">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the bottom of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
    <div class="highlight"><pre><code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-bottom</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
            </code></pre></div>
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
</div>


<h2 id="navbar-static-top">Static top</h2>
<p>Create a full-width navbar that scrolls away with the page by adding <code>.navbar-static-top</code>. Unlike the <code>.navbar-fixed-*</code> classes, you do not need to change any padding on the <code>body</code>.</p>
<div class="bs-example bs-navbar-top-example">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex7-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex7-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-static-top"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/nav&gt;</span>
        </code></pre></div>


<h2 id="navbar-inverted">Inverted navbar</h2>
<p>Modify the look of the navbar by adding <code>.navbar-inverse</code>.</p>
<div class="bs-example">
    <nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex8-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-inverse"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/nav&gt;</span>
        </code></pre></div>

</div>
