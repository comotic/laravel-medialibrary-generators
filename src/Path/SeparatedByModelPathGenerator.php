<?php


namespace Comotic\LaravelMedialibraryGenerators\Path;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;

class SeparatedByModelPathGenerator extends DefaultPathGenerator
{
    public function getBasePath(Media $media): string
    {
        $modelType = Str::of($media->getMorphClass())
                        ->explode("\\")
                        ->last();

        return "$modelType/$media->model_id/{$media->getKey()}";
    }
}
