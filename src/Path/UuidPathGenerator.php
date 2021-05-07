<?php


namespace Comotic\LaravelMediaLibraryGenerators\Path;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;

class UuidPathGenerator extends DefaultPathGenerator
{
    public function getBasePath(Media $media): string
    {
        return $media->getAttribute('uuid');
    }
}
