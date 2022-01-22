<?php

namespace spaa\TinyField;

use Encore\Admin\Form\Field;
use function Tinify\fromBuffer;
use function Tinify\setKey;

class TinyUploader extends Field\Image
{
    /**
     * @param array|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     * @return string
     */
    public function prepareForeach($image): string
    {
        setKey(env('TINY_PNG_KEY'));
        $data = fromBuffer(file_get_contents($image->getPathname()))->toBuffer();
        file_put_contents($image->getPathname(), $data);

        return parent::prepare($image);
    }

}
