<?php
/**
 * ACF Module: Image
 *
 * @global $data
 */

use AD\App\Fields\ACF;
use AD\App\Media;
use AD\App\Fields\Util;

$image = ACF::getField('image', $data);

if (! $image) {
    return;
}
?>

<div class="module image">
    <div class="container">
        <div class="module__image">
            <?php
            $attachment = Media::getAttachmentByID($image);
            echo Util::getImageHTML((array)$attachment);
            ?>
        </div>
    </div>
</div>