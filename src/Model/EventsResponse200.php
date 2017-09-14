<?php

namespace DockerPhpClient\Model;

class EventsResponse200
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $action;
    /**
     * @var EventsResponse200Actor
     */
    protected $actor;
    /**
     * @var int
     */
    protected $time;
    /**
     * @var int
     */
    protected $timeNano;
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * @param string $action
     *
     * @return self
     */
    public function setAction($action = null)
    {
        $this->action = $action;
        return $this;
    }
    /**
     * @return EventsResponse200Actor
     */
    public function getActor()
    {
        return $this->actor;
    }
    /**
     * @param EventsResponse200Actor $actor
     *
     * @return self
     */
    public function setActor(EventsResponse200Actor $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }
    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * @param int $time
     *
     * @return self
     */
    public function setTime($time = null)
    {
        $this->time = $time;
        return $this;
    }
    /**
     * @return int
     */
    public function getTimeNano()
    {
        return $this->timeNano;
    }
    /**
     * @param int $timeNano
     *
     * @return self
     */
    public function setTimeNano($timeNano = null)
    {
        $this->timeNano = $timeNano;
        return $this;
    }
}