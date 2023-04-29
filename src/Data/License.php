<?php

declare(strict_types=1);

namespace BombenProdukt\License\Data;

final readonly class License
{
    public function __construct(
        private File $file,
        private Project $project,
        private Range $range,
        private Holder $holder,
        private Url $url,
    ) {
        //
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function getProject(): Project
    {
        return $this->project;
    }

    public function getRange(): Range
    {
        return $this->range;
    }

    public function getHolder(): Holder
    {
        return $this->holder;
    }

    public function getUrl(): Url
    {
        return $this->url;
    }
}
