<?php
array_push(
    $this->secondNavPartials,
    \bootstrap\helpers\NavPartial::getView('_affix')
);
?>
<!-- Global Bootstrap settings
================================================== -->
<!--<div class="bs-docs-section">-->
<!--    --><?php //$this->renderPartial('css/_overview') ?>
<!--</div>-->


<!-- Grid system
================================================== -->
<?php //$this->renderPartial('css/_grid') ?>

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
<?php $this->renderPartial('css/_buttons',array('model' => $model)) ?>


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
<!--<div class="bs-docs-section" id="responsive-utilities">-->
<!--<div class="page-header">-->
<!--    <h1>Responsive utilities</h1>-->
<!--</div>-->
<!--<p class="lead">For faster mobile-friendly development, use these utility classes for showing and hiding content by-->
<!--    device via media query. Also included are utility classes for toggling content when printed.</p>-->
<!---->
<!--<p>Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use-->
<!--    them to complement each device's presentation. <strong>Responsive utilities are currently only available for block-->
<!--        and table toggling.</strong> Use with inline and table elements is currently not supported.</p>-->
<!---->
<!---->
<!--<h2 id="responsive-utilities-classes">Available classes</h2>-->
<!---->
<!--<p>Use a single or combination of the available classes for toggling content across viewport breakpoints.</p>-->
<!---->
<!--<div class="table-responsive">-->
<!--    <table class="table table-bordered table-striped responsive-utilities">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th></th>-->
<!--            <th>-->
<!--                Extra small devices-->
<!--                <small>Phones (&lt;768px)</small>-->
<!--            </th>-->
<!--            <th>-->
<!--                Small devices-->
<!--                <small>Tablets (≥768px)</small>-->
<!--            </th>-->
<!--            <th>-->
<!--                Medium devices-->
<!--                <small>Desktops (≥992px)</small>-->
<!--            </th>-->
<!--            <th>-->
<!--                Large devices-->
<!--                <small>Desktops (≥1200px)</small>-->
<!--            </th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        <tr>-->
<!--            <th><code>.visible-xs</code></th>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th><code>.visible-sm</code></th>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th><code>.visible-md</code></th>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th><code>.visible-lg</code></th>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--        </tr>-->
<!--        </tbody>-->
<!--        <tbody>-->
<!--        <tr>-->
<!--            <th><code>.hidden-xs</code></th>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th><code>.hidden-sm</code></th>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th><code>.hidden-md</code></th>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th><code>.hidden-lg</code></th>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--        </tr>-->
<!--        </tbody>-->
<!--    </table>-->
<!--</div>-->
<!---->
<!---->
<!--<h2 id="responsive-utilities-print">Print classes</h2>-->
<!---->
<!--<p>Similar to the regular responsive classes, use these for toggling content for print.</p>-->
<!---->
<!--<div class="table-responsive">-->
<!--    <table class="table table-bordered table-striped responsive-utilities">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Class</th>-->
<!--            <th>Browser</th>-->
<!--            <th>Print</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        <tr>-->
<!--            <th><code>.visible-print</code></th>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--            <td class="is-visible">Visible</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th><code>.hidden-print</code></th>-->
<!--            <td class="is-visible">Visible</td>-->
<!--            <td class="is-hidden">Hidden</td>-->
<!--        </tr>-->
<!--        </tbody>-->
<!--    </table>-->
<!--</div>-->
<!---->
<!---->
<!--<h2 id="responsive-utilities-tests">Test cases</h2>-->
<!---->
<!--<p>Resize your browser or load on different devices to test the responsive utility classes.</p>-->
<!---->
<!--<h3>Visible on...</h3>-->
<!---->
<!--<p>Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.</p>-->
<!---->
<!--<div class="row responsive-utilities-test visible-on">-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="hidden-xs">Extra small</span>-->
<!--        <span class="visible-xs">✔ Visible on x-small</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="hidden-sm">Small</span>-->
<!--        <span class="visible-sm">✔ Visible on small</span>-->
<!--    </div>-->
<!--    <div class="clearfix visible-xs"></div>-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="hidden-md">Medium</span>-->
<!--        <span class="visible-md">✔ Visible on medium</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="hidden-lg">Large</span>-->
<!--        <span class="visible-lg">✔ Visible on large</span>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row responsive-utilities-test visible-on">-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="hidden-xs hidden-sm">Extra small and small</span>-->
<!--        <span class="visible-xs visible-sm">✔ Visible on x-small and small</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="hidden-md hidden-lg">Medium and large</span>-->
<!--        <span class="visible-md visible-lg">✔ Visible on medium and large</span>-->
<!--    </div>-->
<!--    <div class="clearfix visible-xs"></div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="hidden-xs hidden-md">Extra small and medium</span>-->
<!--        <span class="visible-xs visible-md">✔ Visible on x-small and medium</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="hidden-sm hidden-lg">Small and large</span>-->
<!--        <span class="visible-sm visible-lg">✔ Visible on small and large</span>-->
<!--    </div>-->
<!--    <div class="clearfix visible-xs"></div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="hidden-xs hidden-lg">Extra small and large</span>-->
<!--        <span class="visible-xs visible-lg">✔ Visible on x-small and large</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="hidden-sm hidden-md">Small and medium</span>-->
<!--        <span class="visible-sm visible-md">✔ Visible on small and medium</span>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<h3>Hidden on...</h3>-->
<!---->
<!--<p>Here, green checkmarks indicate the element <strong>is hidden</strong> in your current viewport.</p>-->
<!---->
<!--<div class="row responsive-utilities-test hidden-on">-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="visible-xs">Extra small</span>-->
<!--        <span class="hidden-xs">✔ Hidden on x-small</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="visible-sm">Small</span>-->
<!--        <span class="hidden-sm">✔ Hidden on small</span>-->
<!--    </div>-->
<!--    <div class="clearfix visible-xs"></div>-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="visible-md">Medium</span>-->
<!--        <span class="hidden-md">✔ Hidden on medium</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <span class="visible-lg">Large</span>-->
<!--        <span class="hidden-lg">✔ Hidden on large</span>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row responsive-utilities-test hidden-on">-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="visible-xs visible-sm">Extra small and small</span>-->
<!--        <span class="hidden-xs hidden-sm">✔ Hidden on x-small and small</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="visible-md visible-lg">Medium and large</span>-->
<!--        <span class="hidden-md hidden-lg">✔ Hidden on medium and large</span>-->
<!--    </div>-->
<!--    <div class="clearfix visible-xs"></div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="visible-xs visible-md">Extra small and medium</span>-->
<!--        <span class="hidden-xs hidden-md">✔ Hidden on x-small and medium</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="visible-sm visible-lg">Small and large</span>-->
<!--        <span class="hidden-sm hidden-lg">✔ Hidden on small and large</span>-->
<!--    </div>-->
<!--    <div class="clearfix visible-xs"></div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="visible-xs visible-lg">Extra small and large</span>-->
<!--        <span class="hidden-xs hidden-lg">✔ Hidden on x-small and large</span>-->
<!--    </div>-->
<!--    <div class="col-xs-6 col-sm-6">-->
<!--        <span class="visible-sm visible-md">Small and medium</span>-->
<!--        <span class="hidden-sm hidden-md">✔ Hidden on small and medium</span>-->
<!--    </div>-->
<!--</div>-->

<!--</div>-->
