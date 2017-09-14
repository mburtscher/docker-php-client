<?php

namespace DockerPhpClient\Model;

class TaskSpecPlacement
{
    /**
     * @var string[]
     */
    protected $constraints;
    /**
     * @var TaskSpecPlacementPreferencesItem[]
     */
    protected $preferences;
    /**
     * @var TaskSpecPlacementPlatformsItem[]
     */
    protected $platforms;
    /**
     * @return string[]
     */
    public function getConstraints()
    {
        return $this->constraints;
    }
    /**
     * @param string[] $constraints
     *
     * @return self
     */
    public function setConstraints(array $constraints = null)
    {
        $this->constraints = $constraints;
        return $this;
    }
    /**
     * @return TaskSpecPlacementPreferencesItem[]
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
    /**
     * @param TaskSpecPlacementPreferencesItem[] $preferences
     *
     * @return self
     */
    public function setPreferences(array $preferences = null)
    {
        $this->preferences = $preferences;
        return $this;
    }
    /**
     * @return TaskSpecPlacementPlatformsItem[]
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }
    /**
     * @param TaskSpecPlacementPlatformsItem[] $platforms
     *
     * @return self
     */
    public function setPlatforms(array $platforms = null)
    {
        $this->platforms = $platforms;
        return $this;
    }
}