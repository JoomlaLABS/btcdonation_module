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

use Joomla\CMS\Language\Text;

// Access to module parameters
$address = $params->get('address', '3JTpyj8neZVQuspTvdhUxsc1byC48PWf1E');
?>

<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcoin:<?php echo $address; ?>&choe=UTF-8"
     alt="<?php echo $address; ?>"
     title="<?php echo Text::_('MOD_JOOMLALABS_BTCDONATION_QRCODE_IMAGE_DESCRIPTION'); ?>" class="img-fluid img-thumbnail mb-2""/>
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
                id="jform_JoomlaLABS_BTCdonation_copy"
                title="<?php echo Text::_('MOD_JOOMLALABS_BTCDONATION_MODULE_COPY_DESCRIPTION'); ?>"
                onclick="tokenCopy()"><?php echo Text::_('MOD_JOOMLALABS_BTCDONATION_MODULE_COPY'); ?>
        </button>
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
        alert("<?php echo Text::_('MOD_JOOMLALABS_BTCDONATION_MODULE_ALERT_COPIED'); ?> " + copyText.value);
    }
</script>