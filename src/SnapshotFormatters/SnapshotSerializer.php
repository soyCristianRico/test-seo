<?php

namespace CristianRico\TestSEO\SnapshotFormatters;

use CristianRico\TestSEO\SEOData;

interface SnapshotSerializer
{
    public function toArray(SEOData $data): array;
}
