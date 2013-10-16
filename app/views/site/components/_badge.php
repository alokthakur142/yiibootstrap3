<!-- Badges
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="badges">Badges</h1>
    </div>
    <p class="lead">Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links,
        Bootstrap navs, and more.</p>

    <div class="bs-example">
        <?= BSHtml::link('Inbox ' . BSHtml::badge(42)) ?>
    </div>
    <div class="highlight">
        <pre></pre>
    </div>

    <h4>Self collapsing</h4>

    <p>When there are no new or unread items, badges will simply collapse (via CSS's <code>:empty</code> selector)
        provided no content exists within.</p>

    <div class="bs-callout bs-callout-danger">
        <h4>Cross-browser compatibility</h4>

        <p>Badges won't self collapse in Internet Explorer 8 because it lacks support for the <code>:empty</code>
            selector.</p>
    </div>

    <h4>Adapts to active nav states</h4>

    <p>Built-in styles are included for placing badges in active states in pill and list navigations.</p>

    <div class="bs-example">
        <p>
            <?php
            echo BSHtml::pills(array(
                array(
                    'label' => 'Home ' . BSHtml::badge('23'),
                    'url' => '#',
                    'active' => true
                ),
                array(
                    'label' => 'Profile',
                    'url' => '#'
                ),
                array(
                    'label' => BSHtml::badge('56', array('pull' => BSHtml::PULL_RIGHT)) . ' Messages',
                    'url' => '#'
                )
            ));
            ?>
        </p>

        <p>
            <?php
            echo BSHtml::stackedPills(array(
                array(
                    'label' => 'Home ' . BSHtml::badge('23'),
                    'url' => '#',
                    'active' => true
                ),
                array(
                    'label' => 'Profile',
                    'url' => '#'
                ),
                array(
                    'label' => BSHtml::badge('56', array('pull' => BSHtml::PULL_RIGHT)) . ' Messages',
                    'url' => '#'
                )
            ), array(
                'style' => 'max-width:300px'
            ));
            ?>
        </p>
    </div>
    <div class="highlight">
        <pre></pre>
    </div>
</div>