<?php

namespace Modules\Location\Entities;
class Location {

    private string $location;

    public function __construct( string $location ) {

        $this->location = $location;
    }

    public function getLocation(): string {

        return $this->location;
    }

    public function setLocation( string $location ): void {

        $this->location = $location;
    }

}
