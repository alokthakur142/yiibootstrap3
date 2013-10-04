<div class="page-header">
    <h1 id="overview">Overview</h1>
</div>
<p class="lead">Get the lowdown on the key pieces of Bootstrap's infrastructure, including our approach to better,
    faster, stronger web development.</p>

<h3 id="overview-doctype">HTML5 doctype</h3>

<p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype.
    Include it at the beginning of all your projects.</p>

<div class="highlight"><pre><code class="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
            <span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span
                class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/html&gt;</span>
        </code></pre>
</div>

<h3 id="overview-mobile">Mobile first</h3>

<p>With Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3,
    we've rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles,
    they're baked right into the core. In fact, <strong>Bootstrap is mobile first</strong>. Mobile first styles can
    be found throughout the entire library instead of in separate files.</p>

<p>To ensure proper rendering and touch zooming, <strong>add the viewport meta tag</strong> to your <code>&lt;head&gt;</code>.
</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span
                class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1.0"</span><span
                class="nt">&gt;</span>
        </code></pre>
</div>
<p>You can disable zooming capabilities on mobile devices by adding <code>user-scalable=no</code> to the viewport
    meta tag. This disables zooming, meaning users are only able to scroll, and results in your site feeling a bit
    more like a native application. Overall we don't recommend this on every site, so use caution!</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span
                class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"</span><span
                class="nt">&gt;</span>
        </code></pre>
</div>