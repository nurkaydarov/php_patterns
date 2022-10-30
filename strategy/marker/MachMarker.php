<?php

namespace app\strategy\marker;

class MachMarker extends Marker
{

    public function mark(string $response): bool
    {
        return $this->test === $response;
    }
}