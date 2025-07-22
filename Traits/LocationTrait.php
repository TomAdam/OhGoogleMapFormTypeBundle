<?php

namespace Oh\GoogleMapFormTypeBundle\Traits;

use Doctrine\ORM\Mapping as ORM;
use Oh\GoogleMapFormTypeBundle\Validator\Constraints as OhAssert;

/**
 * @phpstan-ignore trait.unused
 */
trait LocationTrait
{
    #[ORM\Column(type: "float", nullable: true)]
    protected ?float $latitude;

    #[ORM\Column(type: "float", nullable: true)]
    protected ?float $longitude;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    protected ?string $address;

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param array{ latitude: ?float, longitude: ?float, address: ?string } $latLng
     */
    public function setLatLng(array $latLng): self
    {
        $this->setLatitude($latLng['latitude']);
        $this->setLongitude($latLng['longitude']);
        $this->setAddress($latLng['address']);

        return $this;
    }

    /**
     * @return array{ latitude: ?float, longitude: ?float, address: ?string }
     */
    #[OhAssert\LatLng()]
    public function getLatLng(): array
    {
        return [
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'address' => $this->address
        ];
    }
}
