<?php

namespace DockerPhpClient\Model;

class TaskSpecResources
{
    /**
     * @var TaskSpecResourcesLimits
     */
    protected $limits;
    /**
     * @var TaskSpecResourcesReservation
     */
    protected $reservation;
    /**
     * @return TaskSpecResourcesLimits
     */
    public function getLimits()
    {
        return $this->limits;
    }
    /**
     * @param TaskSpecResourcesLimits $limits
     *
     * @return self
     */
    public function setLimits(TaskSpecResourcesLimits $limits = null)
    {
        $this->limits = $limits;
        return $this;
    }
    /**
     * @return TaskSpecResourcesReservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }
    /**
     * @param TaskSpecResourcesReservation $reservation
     *
     * @return self
     */
    public function setReservation(TaskSpecResourcesReservation $reservation = null)
    {
        $this->reservation = $reservation;
        return $this;
    }
}