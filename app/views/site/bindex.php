<?php
array_push(
    $this->secondNavPartials,
    \bootstrap\helpers\NavPartial::getView('_affix')
);
?>
<!-- Global Bootstrap settings
================================================== -->
<div class="bs-docs-section">
    <?php $this->renderPartial('css/_overview') ?>

    <h3 id="overview-responsive-images">Responsive images</h3>

    <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class.
        This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely
        to the parent element.</p>

    <div class="highlight"><pre><code class="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span
                    class="s">"..."</span> <span class="na">class=</span><span class="s">"img-responsive"</span> <span
                    class="na">alt=</span><span class="s">"Responsive image"</span><span class="nt">&gt;</span>
            </code></pre>
    </div>

    <h3 id="overview-type-links">Typography and links</h3>

    <p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
    <ul>
        <li>Remove <code>margin</code> on the body</li>
        <li>Set <code>background-color: white;</code> on the <code>body</code></li>
        <li>Use the <code>@font-family-base</code>, <code>@font-size-base</code>, and <code>@line-height-base</code>
            attributes as our typographic base
        </li>
        <li>Set the global link color via <code>@link-color</code> and apply link underlines only on <code>:hover</code>
        </li>
    </ul>
    <p>These styles can be found within <code>scaffolding.less</code>.</p>

    <h3 id="overview-normalize">Normalize</h3>

    <p>For improved cross-browser rendering, we use <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize</a>,
        a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a
            href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>

    <h3 id="overview-container">Containers</h3>

    <p>Easily center a page's contents by wrapping its contents in a <code>.container</code>. Containers set <code>max-width</code>
        at various media query breakpoints to match our grid system.</p>

    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                    class="s">"container"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;/div&gt;</span>
            </code></pre>
    </div>
</div>


<!-- Grid system
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="grid">Grid system</h1>
</div>
<p class="lead">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12
    columns as the device or viewport size increases. It includes <a href="#grid-example-basic">predefined classes</a>
    for easy layout options, as well as powerful <a href="#grid-less">mixins for generating more semantic layouts</a>.
</p>

<h3 id="grid-media-queries">Media queries</h3>

<p>We use the following media queries to create the key breakpoints in our grid system.</p>

<div class="highlight"><pre><code class="css"><span class="c">/* Extra small devices (phones, up to 480px) */</span>
            <span class="c">/* No media query since this is the default in Bootstrap */</span>

            <span class="c">/* Small devices (tablets, 768px and up) */</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-sm</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>

            <span class="c">/* Medium devices (desktops, 992px and up) */</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-md</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>

            <span class="c">/* Large devices (large desktops, 1200px and up) */</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-lg</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>
        </code></pre>
</div>
<p>We occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of
    devices.</p>

<div class="highlight"><pre><code class="css"><span class="k">@media</span> <span class="o">(</span><span class="nt">max-width</span><span
                class="o">:</span> <span class="k">@screen-phone-max</span><span class="o">)</span> <span
                class="p">{</span> <span class="o">...</span> <span class="p">}</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-sm</span><span class="o">)</span> <span class="nt">and</span>
            <span class="o">(</span><span class="nt">max-width</span><span class="o">:</span> <span class="k">@screen-sm-max</span><span
                class="o">)</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-md</span><span class="o">)</span> <span class="nt">and</span>
            <span class="o">(</span><span class="nt">max-width</span><span class="o">:</span> <span class="k">@screen-md-max</span><span
                class="o">)</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-lg</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>
        </code></pre>
</div>

<h3 id="grid-options">Grid options</h3>

<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th></th>
            <th>
                Extra small devices
                <small>Phones (&lt;768px)</small>
            </th>
            <th>
                Small devices
                <small>Tablets (≥768px)</small>
            </th>
            <th>
                Medium devices
                <small>Desktops (≥992px)</small>
            </th>
            <th>
                Large devices
                <small>Desktops (≥1200px)</small>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>Grid behavior</th>
            <td>Horizontal at all times</td>
            <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
        </tr>
        <tr>
            <th>Max container width</th>
            <td>None (auto)</td>
            <td>750px</td>
            <td>970px</td>
            <td>1170px</td>
        </tr>
        <tr>
            <th>Class prefix</th>
            <td><code>.col-xs-</code></td>
            <td><code>.col-sm-</code></td>
            <td><code>.col-md-</code></td>
            <td><code>.col-lg-</code></td>
        </tr>
        <tr>
            <th># of columns</th>
            <td colspan="4">12</td>
        </tr>
        <tr>
            <th>Max column width</th>
            <td class="text-muted">Auto</td>
            <td>60px</td>
            <td>78px</td>
            <td>95px</td>
        </tr>
        <tr>
            <th>Gutter width</th>
            <td colspan="4">30px (15px on each side of a column)</td>
        </tr>
        <tr>
            <th>Nestable</th>
            <td colspan="4">Yes</td>
        </tr>
        <tr>
            <th>Offsets</th>
            <td colspan="1" class="text-muted">N/A</td>
            <td colspan="3">Yes</td>
        </tr>
        <tr>
            <th>Column ordering</th>
            <td class="text-muted">N/A</td>
            <td colspan="3">Yes</td>
        </tr>
        </tbody>
    </table>
</div>

<h3 id="grid-example-basic">Example: Stacked-to-horizontal</h3>

<p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked
    on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium)
    devices.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-6">.col-md-6</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span
                class="nt">&gt;</span>.col-md-8<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-example-mixed">Example: Mobile and desktop</h3>

<p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by
    adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how
    it all works.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-xs-12 col-md-8">.col-xs-12 col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-xs-6">.col-xs-6</div>
        <div class="col-xs-6">.col-xs-6</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-12 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 col-md-8<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span
                class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span
                class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span
                class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-example-mixed-complete">Example: Mobile, tablet, desktops</h3>

<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code>
    classes.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
        <div class="col-xs-6 col-sm-6 col-md-4">.col-xs-6 .col-sm-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
        <div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <div class="clearfix visible-xs"></div>
        <div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-6
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-4 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-4 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="c">&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"clearfix visible-xs"</span><span class="nt">&gt;&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-4 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-responsive-resets">Responsive column resets</h3>

<p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns
    don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code>
    and our <a href="../css#responsive-utilities">responsive utility classes</a>.</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"clearfix visible-xs"</span><span class="nt">&gt;&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>
<p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or
        pulls</strong>. Those resets are available for medium and large grid tiers only, since they start only at the
    (second) small grid tier.</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"</span><span
                class="nt">&gt;</span>.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5
            .col-lg-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0"</span><span
                class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>


<h3 id="grid-offsetting">Offsetting columns</h3>

<p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a
    column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four
    columns.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-4 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-4 .col-md-offset-4<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-6 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-6 .col-md-offset-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>


<h3 id="grid-nesting">Nesting columns</h3>

<p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-md-*</code> columns
    within an existing <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>

<div class="row show-grid">
    <div class="col-md-9">
        Level 1: .col-md-9
        <div class="row show-grid">
            <div class="col-md-6">
                Level 2: .col-md-6
            </div>
            <div class="col-md-6">
                Level 2: .col-md-6
            </div>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-9"</span><span
                class="nt">&gt;</span>
            Level 1: .col-md-9
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>
            Level 2: .col-md-6
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>
            Level 2: .col-md-6
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-column-ordering">Column ordering</h3>

<p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code>
    modifier classes.</p>

<div class="row show-grid">
    <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
    <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
</div>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-9 col-md-push-3"</span><span class="nt">&gt;</span>.col-md-9 .col-md-push-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-3 col-md-pull-9"</span><span class="nt">&gt;</span>.col-md-3 .col-md-pull-9<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-less">LESS mixins and variables</h3>

<p>In addition to <a href="#grid-example-basic">prebuilt grid classes</a> for fast layouts, Bootstrap includes LESS
    variables and mixins for quickly generating your own simple, semantic layouts.</p>

<h4>Variables</h4>

<p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating
    columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins
    listed below.</p>

<div class="highlight"><pre><code class="css"><span class="k">@grid-columns</span><span class="o">:</span> <span
                class="nt">12</span><span class="p">;</span>
            <span class="k">@grid-gutter-width</span><span class="o">:</span> <span class="nt">30px</span><span
                class="p">;</span>
            <span class="k">@grid-float-breakpoint</span><span class="o">:</span> <span class="nt">768px</span><span
                class="p">;</span>
        </code></pre>
</div>

<h4>Mixins</h4>

<p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>

<div class="highlight"><pre><code class="css"><span class="o">//</span> <span class="nt">Creates</span> <span
    class="nt">a</span> <span class="nt">wrapper</span> <span class="nt">for</span> <span
    class="nt">a</span> <span class="nt">series</span> <span class="nt">of</span> <span
    class="nt">columns</span>
<span class="nc">.make-row</span><span class="o">(</span><span class="k">@gutter</span><span
    class="o">:</span> <span class="k">@grid-gutter-width</span><span class="o">)</span> <span
    class="p">{</span>
<span class="o">//</span> <span class="nt">Then</span> <span class="nt">clear</span> <span
    class="nt">the</span> <span class="nt">floated</span> <span class="nt">columns</span>
<span class="nc">.clearfix</span><span class="o">();</span>

<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="nt">margin-right</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="p">}</span>

<span class="o">//</span> <span class="nt">Negative</span> <span class="nt">margin</span> <span class="nt">nested</span>
<span class="nt">rows</span> <span class="nt">out</span> <span class="nt">to</span> <span
    class="nt">align</span> <span class="nt">the</span> <span class="nt">content</span> <span
    class="nt">of</span> <span class="nt">columns</span>
<span class="nc">.row</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="nt">margin-right</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="p">}</span>
<span class="p">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">extra</span>
<span class="nt">small</span> <span class="nt">columns</span>
<span class="nc">.make-xs-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@grid-float-breakpoint</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">small</span>
<span class="nt">columns</span>
<span class="nc">.make-sm-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">small</span>
<span class="nt">column</span> <span class="nt">offsets</span>
<span class="nc">.make-sm-column-offset</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-sm-column-push</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-sm-column-pull</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">right</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">medium</span>
<span class="nt">columns</span>
<span class="nc">.make-md-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">large</span>
<span class="nt">column</span> <span class="nt">offsets</span>
<span class="nc">.make-md-column-offset</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-md-column-push</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-md-column-pull</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">right</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">large</span>
<span class="nt">columns</span>
<span class="nc">.make-lg-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">large</span>
<span class="nt">column</span> <span class="nt">offsets</span>
<span class="nc">.make-lg-column-offset</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-lg-column-push</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-lg-column-pull</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">right</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
</code></pre>
</div>

<h4>Example usage</h4>

<p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an
    example of using the default settings to create a two-column layout with a gap between.</p>

<div class="highlight"><pre><code class="css"><span class="nc">.wrapper</span> <span class="p">{</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">row</span><span
                class="p">();</span>
            <span class="p">}</span>
            <span class="nc">.content-main</span> <span class="p">{</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">lg</span><span
                class="o">-</span><span class="n">column</span><span class="p">(</span><span class="m">8</span><span
                class="p">);</span>
            <span class="p">}</span>
            <span class="nc">.content-secondary</span> <span class="p">{</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">lg</span><span
                class="o">-</span><span class="n">column</span><span class="p">(</span><span class="m">3</span><span
                class="p">);</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">lg</span><span
                class="o">-</span><span class="n">column</span><span class="o">-</span><span
                class="n">offset</span><span class="p">(</span><span class="m">1</span><span class="p">);</span>
            <span class="p">}</span>
        </code></pre>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"wrapper"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-main"</span><span
                class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"content-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

</div>

<!-- Typography
================================================== -->
<?php $this->renderPartial('css/_typography') ?>

<!-- Code
================================================== -->
<?php $this->renderPartial('css/_code') ?>


<!-- Tables
================================================== -->
<?php $this->renderPartial('css/_tables') ?>


<!-- Forms
================================================== -->
<?php $this->renderPartial('css/_form',array('model' => $model)) ?>


<!-- Buttons
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="buttons">Buttons</h1>
</div>

<h2 id="buttons-options">Options</h2>

<p>Use any of the available button classes to quickly create a styled button.</p>

<div class="bs-example">
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>
</div>
<div class="highlight"><pre><code class="html"><span
                class="c">&lt;!-- Standard gray button with gradient --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default"</span><span
                class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>

            <span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-primary"</span><span
                class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

            <span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-success"</span><span
                class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

            <span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span
                class="nt">&lt;/button&gt;</span>

            <span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-warning"</span><span
                class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

            <span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-danger"</span><span
                class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

            <span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span
                class="nt">&lt;/button&gt;</span>
        </code></pre>
</div>

<h2 id="buttons-sizes">Sizes</h2>

<p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for
    additional sizes.</p>

<div class="bs-example">
    <p>
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
        <button type="button" class="btn btn-default btn-lg">Large button</button>
    </p>
    <p>
        <button type="button" class="btn btn-primary">Default button</button>
        <button type="button" class="btn btn-default">Default button</button>
    </p>
    <p>
        <button type="button" class="btn btn-primary btn-sm">Small button</button>
        <button type="button" class="btn btn-default btn-sm">Small button</button>
    </p>
    <p>
        <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
        <button type="button" class="btn btn-default btn-xs">Extra small button</button>
    </p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large
            button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>Large
            button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Default
            button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default
            button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Small
            button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default btn-sm"</span><span class="nt">&gt;</span>Small
            button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-primary btn-xs"</span><span class="nt">&gt;</span>Extra
            small button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default btn-xs"</span><span class="nt">&gt;</span>Extra
            small button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
        </code></pre>
</div>

<p>Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>

<div class="bs-example">
    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
        <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span
                class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span
                class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default btn-lg btn-block"</span><span class="nt">&gt;</span>Block
            level button<span class="nt">&lt;/button&gt;</span>
        </code></pre>
</div>


<h2 id="buttons-disabled">Disabled state</h2>

<p>Make buttons look unclickable by fading them back 50%.</p>

<h3>Button element</h3>

<p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>

<p class="bs-example">
    <button type="button" class="btn btn-primary btn-lg" disabled="disabled">Primary button</button>
    <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span
                class="s">"button"</span> <span class="na">class=</span><span
                class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span
                class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default btn-lg"</span> <span
                class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Button<span
                class="nt">&lt;/button&gt;</span>
        </code></pre>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>

    <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and
        below will render text gray with a nasty text-shadow that we cannot fix.</p>
</div>

<h3>Anchor element</h3>

<p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>

<p class="bs-example">
    <a href="#" class="btn btn-primary btn-lg disabled">Primary link</a>
    <a href="#" class="btn btn-default btn-lg disabled">Link</a>
</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span
                class="s">"#"</span> <span class="na">class=</span><span
                class="s">"btn btn-primary btn-lg disabled"</span><span class="nt">&gt;</span>Primary link<span
                class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span
                class="s">"btn btn-default btn-lg disabled"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
        </code></pre>
</div>
<p>
    We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no
    prefix is required.
</p>

<div class="bs-callout bs-callout-warning">
    <h4>Link functionality not impacted</h4>

    <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom
        JavaScript to disable links here.</p>
</div>


<h2 id="buttons-tags">Button tags</h2>

<p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code>
    element.</p>

<form class="bs-example">
    <a class="btn btn-default" href="#">Link</a>
    <button class="btn btn-default" type="submit">Button</button>
    <input class="btn btn-default" type="button" value="Input">
    <input class="btn btn-default" type="submit" value="Submit">
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span
                class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span><span
                class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span
                class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span><span
                class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span>
            <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span
                class="s">"Input"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span>
            <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span
                class="s">"Submit"</span><span class="nt">&gt;</span>
        </code></pre>
</div>

<div class="bs-callout bs-callout-warning">
    <h4>Cross-browser rendering</h4>

    <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever
            possible</strong> to ensure matching cross-browser rendering.</p>

    <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a Firefox bug</a>
        that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons,
        causing them to not exactly match the height of other buttons on Firefox.</p>
</div>

</div>


<!-- Images
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="images">Images</h1>
    </div>

    <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>

    <div class="bs-callout bs-callout-danger">
        <h4>Cross-browser compatibility</h4>

        <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
    </div>
    <div class="bs-example bs-example-images">
        <img data-src="holder.js/140x140"
             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAAEYCAYAAACHjumMAAAN9klEQVR4Xu3c96vkdBcH4Ky9Y8GG5Ud7wQJ2/dftKOraEBso9oZrxa4rJy8ZsvG2z6vHjXeegMjeOXtm8uTkQ+ab3D1y7Nix44ONAAECDQJHBEyDqpYECIwCAsYgECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAmZlM/DVV18Nn3766XDKKacMZ5999nDttdce6BN+/PHHw2+//bapvfTSS8e/v9y+/fbbsf8PP/wwvnT66acPVVv/HTly5EDvlRQdtv1J9l3tMAiYlU3B0aNHh2PHjo2f6rTTThseeeSRfU/8jz76aHj99ddP2JMbb7xxuOqqqzY/O378+PDiiy9uei93+9RTTx3uu+++4ayzzvpHRQ7b/vyjOFvQTMCs6CB/+OGHwxtvvLH5RGecccbw0EMP7RkwddXy+OOPD3/88ccJe3LzzTcPV1555eZn1bf677Ud5P0SrsO2P8m+q/2fgIA5iZNQofDmm28Ov/zyy/DNN9+M/59vBznhX3311eGzzz77y17MA+bnn38ennzyyaGuYqatvj6deeaZw9dff73nlU/Cc9j2J9l3tTsLCJiTOBm//vrrePUxP/GTgKlweP7558f1mr2uYJZfoS688MLh7rvvHt/qvffeG95+++3N21500UXDHXfcMQbPtCZTvc8///yhAm/aam1l2qbXq36N+3PXXXedxKO83W8tYE7i8f87AVOh9PTTTw8//vjjuAfnnHPOZuG2/jy/gnnhhReGeSDcfvvt46JubcuvWBUS999//9h7Hny1NvPAAw+MofPJJ58Mr7322l+ufC677LL/O2A696fWsWo9y/bvCwiYf9/8hHf87rvvxquPOnErcF566aXNib3XV6QPPvhg/HpVW9XddNNN49+dtnnAPPPMM8P3338/vlTvU0ExX8xdvl4BU1cwyxC5/vrrh6uvvnp49NFHh99//33zXvMrorXuz0531E7yod+KtxcwKzrMy6uJ3QKmguiJJ57YfC2qK5Kqfe655w4UMA8++OC4/jJtuwXQ8sqn7jTVVUpdwUxbBdbDDz883u5ebmvbnxUd6q35KAJmRYf6oCfkyy+/PHzxxRfjJ6+1kXvuuWe8/Vy3hJdXMNWzwmi64ph/1dktYO69997h3HPPHReda3F4ub4zJ1verZq/trb9WdGh3pqPImBWdKgPckLWWkpdWUxfdypczjvvvF0DZnm1s1/AVN9bbrlluOKKK8b32OkZm4ns4osvHu68885dBde4Pys63FvxUQTMig7zfidkLYTWFUXddq6tHqSrB+pqmwdP/fnWW28dLr/88vHqo+7sTE/5HmQNZrlGM39YbuKqr0v1jM5ei6dr3Z8VHfJD/1EEzIoO8X4n5PJqpMKirkgqeOq1+cJr3bqu12t95q233jphkbcWceeLnvstAi9vZRdZ3bWqPntta92fFR3yQ/9RBMyKDvF+J+RuT+3utQu1RvLuu+9ubmFX6MwXeZe3h6fb1FMA1dXSU089teM6zHXXXbfn70qtcX9WdLi34qMImBUd5v1OyFp0rQXb3R7M22lX6ivUl19+OXz++eebl+drLMunfOurTz03UldAtdWdqXrKeKdtp69b87o17s+KDvdWfBQBs6LDvN8JOa21LO/q1Ilez6288847m72p9ZlaqK27THWH6ZVXXtm8VreU6xcb69Z2/XwePnUb+rbbbhtr58/a7MZUC8y10LzTb2KvbX9WdKi35qMImBUd6oOckLt93OnXBqbXp0Xe+nMF0mOPPXbCGk39vEJheTVUvyZwySWXjE8IL5/mveaaa8bX5g/0VZ/dviqtaX9WdJi36qMImBUd7r9zQu72HMy0e3vdbp5qptvOFTrPPvvsZmF4CqPpkfv5ovD0Wl0R1cJv8hVpL/p/cn9WdIi37qMImBUd8uVDcXXC1ol7kH8IanlCzq9gpl18//33x19s3GkNp343qb4a1Xstb3nX37/hhhvGXxOorf7RqlqbmfepfxqiFpSXATN/yO9k7c+KDvHWfRQBs2WHvL4u1aLtTz/9NAZE/crABRdcsOOj/v8FmsO2P/8F8+QzCphESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRwJ/yWw549DbzngAAAABJRU5ErkJggg=="
             class="img-rounded" alt="140x140" style="width: 140px; height: 140px;">
        <img data-src="holder.js/140x140"
             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAAEYCAYAAACHjumMAAAN9klEQVR4Xu3c96vkdBcH4Ky9Y8GG5Ud7wQJ2/dftKOraEBso9oZrxa4rJy8ZsvG2z6vHjXeegMjeOXtm8uTkQ+ab3D1y7Nix44ONAAECDQJHBEyDqpYECIwCAsYgECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAmZlM/DVV18Nn3766XDKKacMZ5999nDttdce6BN+/PHHw2+//bapvfTSS8e/v9y+/fbbsf8PP/wwvnT66acPVVv/HTly5EDvlRQdtv1J9l3tMAiYlU3B0aNHh2PHjo2f6rTTThseeeSRfU/8jz76aHj99ddP2JMbb7xxuOqqqzY/O378+PDiiy9uei93+9RTTx3uu+++4ayzzvpHRQ7b/vyjOFvQTMCs6CB/+OGHwxtvvLH5RGecccbw0EMP7RkwddXy+OOPD3/88ccJe3LzzTcPV1555eZn1bf677Ud5P0SrsO2P8m+q/2fgIA5iZNQofDmm28Ov/zyy/DNN9+M/59vBznhX3311eGzzz77y17MA+bnn38ennzyyaGuYqatvj6deeaZw9dff73nlU/Cc9j2J9l3tTsLCJiTOBm//vrrePUxP/GTgKlweP7558f1mr2uYJZfoS688MLh7rvvHt/qvffeG95+++3N21500UXDHXfcMQbPtCZTvc8///yhAm/aam1l2qbXq36N+3PXXXedxKO83W8tYE7i8f87AVOh9PTTTw8//vjjuAfnnHPOZuG2/jy/gnnhhReGeSDcfvvt46JubcuvWBUS999//9h7Hny1NvPAAw+MofPJJ58Mr7322l+ufC677LL/O2A696fWsWo9y/bvCwiYf9/8hHf87rvvxquPOnErcF566aXNib3XV6QPPvhg/HpVW9XddNNN49+dtnnAPPPMM8P3338/vlTvU0ExX8xdvl4BU1cwyxC5/vrrh6uvvnp49NFHh99//33zXvMrorXuz0531E7yod+KtxcwKzrMy6uJ3QKmguiJJ57YfC2qK5Kqfe655w4UMA8++OC4/jJtuwXQ8sqn7jTVVUpdwUxbBdbDDz883u5ebmvbnxUd6q35KAJmRYf6oCfkyy+/PHzxxRfjJ6+1kXvuuWe8/Vy3hJdXMNWzwmi64ph/1dktYO69997h3HPPHReda3F4ub4zJ1verZq/trb9WdGh3pqPImBWdKgPckLWWkpdWUxfdypczjvvvF0DZnm1s1/AVN9bbrlluOKKK8b32OkZm4ns4osvHu68885dBde4Pys63FvxUQTMig7zfidkLYTWFUXddq6tHqSrB+pqmwdP/fnWW28dLr/88vHqo+7sTE/5HmQNZrlGM39YbuKqr0v1jM5ei6dr3Z8VHfJD/1EEzIoO8X4n5PJqpMKirkgqeOq1+cJr3bqu12t95q233jphkbcWceeLnvstAi9vZRdZ3bWqPntta92fFR3yQ/9RBMyKDvF+J+RuT+3utQu1RvLuu+9ubmFX6MwXeZe3h6fb1FMA1dXSU089teM6zHXXXbfn70qtcX9WdLi34qMImBUd5v1OyFp0rQXb3R7M22lX6ivUl19+OXz++eebl+drLMunfOurTz03UldAtdWdqXrKeKdtp69b87o17s+KDvdWfBQBs6LDvN8JOa21LO/q1Ilez6288847m72p9ZlaqK27THWH6ZVXXtm8VreU6xcb69Z2/XwePnUb+rbbbhtr58/a7MZUC8y10LzTb2KvbX9WdKi35qMImBUd6oOckLt93OnXBqbXp0Xe+nMF0mOPPXbCGk39vEJheTVUvyZwySWXjE8IL5/mveaaa8bX5g/0VZ/dviqtaX9WdJi36qMImBUd7r9zQu72HMy0e3vdbp5qptvOFTrPPvvsZmF4CqPpkfv5ovD0Wl0R1cJv8hVpL/p/cn9WdIi37qMImBUd8uVDcXXC1ol7kH8IanlCzq9gpl18//33x19s3GkNp343qb4a1Xstb3nX37/hhhvGXxOorf7RqlqbmfepfxqiFpSXATN/yO9k7c+KDvHWfRQBs2WHvL4u1aLtTz/9NAZE/crABRdcsOOj/v8FmsO2P/8F8+QzCphESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRwJ/yWw549DbzngAAAABJRU5ErkJggg=="
             class="img-circle" alt="140x140" style="width: 140px; height: 140px;">
        <img data-src="holder.js/140x140"
             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAAEYCAYAAACHjumMAAAN9klEQVR4Xu3c96vkdBcH4Ky9Y8GG5Ud7wQJ2/dftKOraEBso9oZrxa4rJy8ZsvG2z6vHjXeegMjeOXtm8uTkQ+ab3D1y7Nix44ONAAECDQJHBEyDqpYECIwCAsYgECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAsYMECDQJiBg2mg1JkBAwJgBAgTaBARMG63GBAgIGDNAgECbgIBpo9WYAAEBYwYIEGgTEDBttBoTICBgzAABAm0CAqaNVmMCBASMGSBAoE1AwLTRakyAgIAxAwQItAkImDZajQkQEDBmgACBNgEB00arMQECAmZlM/DVV18Nn3766XDKKacMZ5999nDttdce6BN+/PHHw2+//bapvfTSS8e/v9y+/fbbsf8PP/wwvnT66acPVVv/HTly5EDvlRQdtv1J9l3tMAiYlU3B0aNHh2PHjo2f6rTTThseeeSRfU/8jz76aHj99ddP2JMbb7xxuOqqqzY/O378+PDiiy9uei93+9RTTx3uu+++4ayzzvpHRQ7b/vyjOFvQTMCs6CB/+OGHwxtvvLH5RGecccbw0EMP7RkwddXy+OOPD3/88ccJe3LzzTcPV1555eZn1bf677Ud5P0SrsO2P8m+q/2fgIA5iZNQofDmm28Ov/zyy/DNN9+M/59vBznhX3311eGzzz77y17MA+bnn38ennzyyaGuYqatvj6deeaZw9dff73nlU/Cc9j2J9l3tTsLCJiTOBm//vrrePUxP/GTgKlweP7558f1mr2uYJZfoS688MLh7rvvHt/qvffeG95+++3N21500UXDHXfcMQbPtCZTvc8///yhAm/aam1l2qbXq36N+3PXXXedxKO83W8tYE7i8f87AVOh9PTTTw8//vjjuAfnnHPOZuG2/jy/gnnhhReGeSDcfvvt46JubcuvWBUS999//9h7Hny1NvPAAw+MofPJJ58Mr7322l+ufC677LL/O2A696fWsWo9y/bvCwiYf9/8hHf87rvvxquPOnErcF566aXNib3XV6QPPvhg/HpVW9XddNNN49+dtnnAPPPMM8P3338/vlTvU0ExX8xdvl4BU1cwyxC5/vrrh6uvvnp49NFHh99//33zXvMrorXuz0531E7yod+KtxcwKzrMy6uJ3QKmguiJJ57YfC2qK5Kqfe655w4UMA8++OC4/jJtuwXQ8sqn7jTVVUpdwUxbBdbDDz883u5ebmvbnxUd6q35KAJmRYf6oCfkyy+/PHzxxRfjJ6+1kXvuuWe8/Vy3hJdXMNWzwmi64ph/1dktYO69997h3HPPHReda3F4ub4zJ1verZq/trb9WdGh3pqPImBWdKgPckLWWkpdWUxfdypczjvvvF0DZnm1s1/AVN9bbrlluOKKK8b32OkZm4ns4osvHu68885dBde4Pys63FvxUQTMig7zfidkLYTWFUXddq6tHqSrB+pqmwdP/fnWW28dLr/88vHqo+7sTE/5HmQNZrlGM39YbuKqr0v1jM5ei6dr3Z8VHfJD/1EEzIoO8X4n5PJqpMKirkgqeOq1+cJr3bqu12t95q233jphkbcWceeLnvstAi9vZRdZ3bWqPntta92fFR3yQ/9RBMyKDvF+J+RuT+3utQu1RvLuu+9ubmFX6MwXeZe3h6fb1FMA1dXSU089teM6zHXXXbfn70qtcX9WdLi34qMImBUd5v1OyFp0rQXb3R7M22lX6ivUl19+OXz++eebl+drLMunfOurTz03UldAtdWdqXrKeKdtp69b87o17s+KDvdWfBQBs6LDvN8JOa21LO/q1Ilez6288847m72p9ZlaqK27THWH6ZVXXtm8VreU6xcb69Z2/XwePnUb+rbbbhtr58/a7MZUC8y10LzTb2KvbX9WdKi35qMImBUd6oOckLt93OnXBqbXp0Xe+nMF0mOPPXbCGk39vEJheTVUvyZwySWXjE8IL5/mveaaa8bX5g/0VZ/dviqtaX9WdJi36qMImBUd7r9zQu72HMy0e3vdbp5qptvOFTrPPvvsZmF4CqPpkfv5ovD0Wl0R1cJv8hVpL/p/cn9WdIi37qMImBUd8uVDcXXC1ol7kH8IanlCzq9gpl18//33x19s3GkNp343qb4a1Xstb3nX37/hhhvGXxOorf7RqlqbmfepfxqiFpSXATN/yO9k7c+KDvHWfRQBs2WHvL4u1aLtTz/9NAZE/crABRdcsOOj/v8FmsO2P/8F8+QzCphESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRgICJuBQTIJAICJhESy0BApGAgIm4FBMgkAgImERLLQECkYCAibgUEyCQCAiYREstAQKRwJ/yWw549DbzngAAAABJRU5ErkJggg=="
             class="img-thumbnail" alt="140x140" style="width: 140px; height: 140px;">
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span
                    class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span
                    class="s">"img-rounded"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span
                    class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-circle"</span><span
                    class="nt">&gt;</span>
                <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span
                    class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-thumbnail"</span><span
                    class="nt">&gt;</span>
            </code></pre>
    </div>

    <div class="bs-callout bs-callout-warning">
        <h4>Responsive images</h4>

        <p>Looking for how to make images more responsive? <a href="../css#overview-responsive-images">Check out the
                responsive images section</a> up top.</p>
    </div>

</div>


<!-- Helpers
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="helper-classes">Helper classes</h1>
    </div>

    <h3>Close icon</h3>

    <p>Use the generic close icon for dismissing content like modals and alerts.</p>

    <div class="bs-example">
        <p>
            <button type="button" class="close" aria-hidden="true">×</button>
        </p>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span
                    class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span
                    class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span
                    class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
            </code></pre>
    </div>

    <h3>.pull-left</h3>

    <p>Float an element left with a class. Can also be used as a mixin.</p>

    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                    class="s">"pull-left"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre>
    </div>
    <div class="highlight"><pre><code class="css"><span class="nc">.pull-left</span> <span class="p">{</span>
                <span class="k">float</span><span class="o">:</span> <span class="k">left</span> <span class="cp">!important</span><span
                    class="p">;</span>
                <span class="p">}</span>
            </code></pre>
    </div>

    <h3>.pull-right</h3>

    <p>Float an element right with a class. Can also be used as a mixin.</p>

    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                    class="s">"pull-right"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre>
    </div>
    <div class="highlight"><pre><code class="css"><span class="nc">.pull-right</span> <span class="p">{</span>
                <span class="k">float</span><span class="o">:</span> <span class="k">right</span> <span class="cp">!important</span><span
                    class="p">;</span>
                <span class="p">}</span>
            </code></pre>
    </div>

    <h3>.clearfix</h3>

    <p>Clear the <code>float</code> on any element. Utilizes <a href="http://nicolasgallagher.com/micro-clearfix-hack/">the
            micro clearfix</a> as popularized by Nicolas Gallagher. Can also be used as a mixin.</p>

    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                    class="s">"clearfix"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre>
    </div>
    <div class="highlight"><pre><code class="css"><span class="o">//</span> <span class="nt">Mixin</span>
                <span class="nc">.clearfix</span><span class="o">()</span> <span class="p">{</span>
                <span class="o">&amp;:</span><span class="n">before</span><span class="o">,</span>
                <span class="o">&amp;:</span><span class="n">after</span> <span class="err">{</span>
                <span class="k">content</span><span class="o">:</span> <span class="s2">" "</span><span
                    class="p">;</span>
                <span class="k">display</span><span class="o">:</span> <span class="n">table</span><span
                    class="p">;</span>
                <span class="p">}</span>
                <span class="o">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
                <span class="k">clear</span><span class="o">:</span> <span class="k">both</span><span class="p">;</span>
                <span class="p">}</span>
                <span class="err">}</span>

                <span class="o">//</span> <span class="nt">Usage</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="o">.</span><span class="n">clearfix</span><span class="p">();</span>
                <span class="p">}</span>
            </code></pre>
    </div>

    <h3>.sr-only</h3>

    <p>Hide an element to all users <em>except</em> screen readers. Necessary for following <a
            href="../getting-started#accessibility">accessibility best practices</a>.</p>

    <div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span
                    class="s">"sr-only"</span> <span class="na">href=</span><span class="s">"#content"</span><span
                    class="nt">&gt;</span>Skip to content<span class="nt">&lt;/a&gt;</span>
            </code></pre>
    </div>
</div>

<!-- Responsive utilities
================================================== -->
<div class="bs-docs-section" id="responsive-utilities">
<div class="page-header">
    <h1>Responsive utilities</h1>
</div>
<p class="lead">For faster mobile-friendly development, use these utility classes for showing and hiding content by
    device via media query. Also included are utility classes for toggling content when printed.</p>

<p>Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use
    them to complement each device's presentation. <strong>Responsive utilities are currently only available for block
        and table toggling.</strong> Use with inline and table elements is currently not supported.</p>


<h2 id="responsive-utilities-classes">Available classes</h2>

<p>Use a single or combination of the available classes for toggling content across viewport breakpoints.</p>

<div class="table-responsive">
    <table class="table table-bordered table-striped responsive-utilities">
        <thead>
        <tr>
            <th></th>
            <th>
                Extra small devices
                <small>Phones (&lt;768px)</small>
            </th>
            <th>
                Small devices
                <small>Tablets (≥768px)</small>
            </th>
            <th>
                Medium devices
                <small>Desktops (≥992px)</small>
            </th>
            <th>
                Large devices
                <small>Desktops (≥1200px)</small>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th><code>.visible-xs</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
        </tr>
        <tr>
            <th><code>.visible-sm</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
        </tr>
        <tr>
            <th><code>.visible-md</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
        </tr>
        <tr>
            <th><code>.visible-lg</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th><code>.hidden-xs</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
        </tr>
        <tr>
            <th><code>.hidden-sm</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
        </tr>
        <tr>
            <th><code>.hidden-md</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
        </tr>
        <tr>
            <th><code>.hidden-lg</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
        </tr>
        </tbody>
    </table>
</div>


<h2 id="responsive-utilities-print">Print classes</h2>

<p>Similar to the regular responsive classes, use these for toggling content for print.</p>

<div class="table-responsive">
    <table class="table table-bordered table-striped responsive-utilities">
        <thead>
        <tr>
            <th>Class</th>
            <th>Browser</th>
            <th>Print</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th><code>.visible-print</code></th>
            <td class="is-hidden">Hidden</td>
            <td class="is-visible">Visible</td>
        </tr>
        <tr>
            <th><code>.hidden-print</code></th>
            <td class="is-visible">Visible</td>
            <td class="is-hidden">Hidden</td>
        </tr>
        </tbody>
    </table>
</div>


<h2 id="responsive-utilities-tests">Test cases</h2>

<p>Resize your browser or load on different devices to test the responsive utility classes.</p>

<h3>Visible on...</h3>

<p>Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.</p>

<div class="row responsive-utilities-test visible-on">
    <div class="col-xs-6 col-sm-3">
        <span class="hidden-xs">Extra small</span>
        <span class="visible-xs">✔ Visible on x-small</span>
    </div>
    <div class="col-xs-6 col-sm-3">
        <span class="hidden-sm">Small</span>
        <span class="visible-sm">✔ Visible on small</span>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3">
        <span class="hidden-md">Medium</span>
        <span class="visible-md">✔ Visible on medium</span>
    </div>
    <div class="col-xs-6 col-sm-3">
        <span class="hidden-lg">Large</span>
        <span class="visible-lg">✔ Visible on large</span>
    </div>
</div>
<div class="row responsive-utilities-test visible-on">
    <div class="col-xs-6 col-sm-6">
        <span class="hidden-xs hidden-sm">Extra small and small</span>
        <span class="visible-xs visible-sm">✔ Visible on x-small and small</span>
    </div>
    <div class="col-xs-6 col-sm-6">
        <span class="hidden-md hidden-lg">Medium and large</span>
        <span class="visible-md visible-lg">✔ Visible on medium and large</span>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-6">
        <span class="hidden-xs hidden-md">Extra small and medium</span>
        <span class="visible-xs visible-md">✔ Visible on x-small and medium</span>
    </div>
    <div class="col-xs-6 col-sm-6">
        <span class="hidden-sm hidden-lg">Small and large</span>
        <span class="visible-sm visible-lg">✔ Visible on small and large</span>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-6">
        <span class="hidden-xs hidden-lg">Extra small and large</span>
        <span class="visible-xs visible-lg">✔ Visible on x-small and large</span>
    </div>
    <div class="col-xs-6 col-sm-6">
        <span class="hidden-sm hidden-md">Small and medium</span>
        <span class="visible-sm visible-md">✔ Visible on small and medium</span>
    </div>
</div>

<h3>Hidden on...</h3>

<p>Here, green checkmarks indicate the element <strong>is hidden</strong> in your current viewport.</p>

<div class="row responsive-utilities-test hidden-on">
    <div class="col-xs-6 col-sm-3">
        <span class="visible-xs">Extra small</span>
        <span class="hidden-xs">✔ Hidden on x-small</span>
    </div>
    <div class="col-xs-6 col-sm-3">
        <span class="visible-sm">Small</span>
        <span class="hidden-sm">✔ Hidden on small</span>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3">
        <span class="visible-md">Medium</span>
        <span class="hidden-md">✔ Hidden on medium</span>
    </div>
    <div class="col-xs-6 col-sm-3">
        <span class="visible-lg">Large</span>
        <span class="hidden-lg">✔ Hidden on large</span>
    </div>
</div>
<div class="row responsive-utilities-test hidden-on">
    <div class="col-xs-6 col-sm-6">
        <span class="visible-xs visible-sm">Extra small and small</span>
        <span class="hidden-xs hidden-sm">✔ Hidden on x-small and small</span>
    </div>
    <div class="col-xs-6 col-sm-6">
        <span class="visible-md visible-lg">Medium and large</span>
        <span class="hidden-md hidden-lg">✔ Hidden on medium and large</span>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-6">
        <span class="visible-xs visible-md">Extra small and medium</span>
        <span class="hidden-xs hidden-md">✔ Hidden on x-small and medium</span>
    </div>
    <div class="col-xs-6 col-sm-6">
        <span class="visible-sm visible-lg">Small and large</span>
        <span class="hidden-sm hidden-lg">✔ Hidden on small and large</span>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-6">
        <span class="visible-xs visible-lg">Extra small and large</span>
        <span class="hidden-xs hidden-lg">✔ Hidden on x-small and large</span>
    </div>
    <div class="col-xs-6 col-sm-6">
        <span class="visible-sm visible-md">Small and medium</span>
        <span class="hidden-sm hidden-md">✔ Hidden on small and medium</span>
    </div>
</div>

</div>
