<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class TerminalActionQueryFilter implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $deviceId;

    /**
     * @var TimeRange|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $type;

    /**
     * Returns Device Id.
     * `TerminalAction`s associated with a specific device. If no device is specified then all
     * `TerminalAction`s for the merchant will be displayed.
     */
    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * `TerminalAction`s associated with a specific device. If no device is specified then all
     * `TerminalAction`s for the merchant will be displayed.
     *
     * @maps device_id
     */
    public function setDeviceId(?string $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Created At.
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     */
    public function getCreatedAt(): ?TimeRange
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     *
     * @maps created_at
     */
    public function setCreatedAt(?TimeRange $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Status.
     * Filter results with the desired status of the `TerminalAction`
     * Options: PENDING, IN_PROGRESS, CANCELED, COMPLETED
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Filter results with the desired status of the `TerminalAction`
     * Options: PENDING, IN_PROGRESS, CANCELED, COMPLETED
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Type.
     * Describes the type of this unit and indicates which field contains the unit information. This is an
     * ‘open’ enum.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Describes the type of this unit and indicates which field contains the unit information. This is an
     * ‘open’ enum.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->deviceId)) {
            $json['device_id']  = $this->deviceId;
        }
        if (isset($this->createdAt)) {
            $json['created_at'] = $this->createdAt;
        }
        if (isset($this->status)) {
            $json['status']     = $this->status;
        }
        if (isset($this->type)) {
            $json['type']       = $this->type;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
