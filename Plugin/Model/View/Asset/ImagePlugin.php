<?php

namespace Rugento\ImagesS3\Plugin\Model\View\Asset;

class ImagePlugin
{
    /**
     * @param \Magento\Catalog\Model\View\Asset\Image $subject
     * @param $result
     * @return mixed
     */
    public function afterGetImageTransformationParameters(\Magento\Catalog\Model\View\Asset\Image $subject, $result)
    {
        if (is_array($result) && isset($result['image-type'])) {
            $result['imagetype'] = $result['image-type'];
        }
        return $result;
    }
}