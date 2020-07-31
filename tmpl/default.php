<?php
/**
 * @package    joomlalabs_btcdonation_module
 *
 * @author     Joomla!LABS <info@joomlalabs.com>
 * @copyright  Copyright (C) 2015 - 2020 Joomla!LABS. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://joomlalabs.com
 */

defined('_JEXEC') or die;

// Access to module parameters
$address = $params->get('address', '3JTpyj8neZVQuspTvdhUxsc1byC48PWf1E');
?>

<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcoin:<?php echo $address; ?>&choe=UTF-8" title="BTC Donation" class="img-fluid img-thumbnail" />
<div class="input-group">
    <input
            type="text"
            class="form-control"
            name="jform[JoomlaLABS_BTCdonation][address]"
            id="jform_JoomlaLABS_BTCdonation_address"
            readonly
            value="<?php echo $address; ?>">
    <div class="input-group-append">
        <button
                class="btn btn-primary"
                type="button"
                id="token-copy"
                title="Copy the token to your clipboard"
                onclick="tokenCopy()">Copy</button>
    </div>
</div>

<script type="application/javascript">
    function tokenCopy() {
        /* Get the text field */
        var copyText = document.getElementById("jform_JoomlaLABS_BTCdonation_address");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the token: " + copyText.value);
    }
</script>