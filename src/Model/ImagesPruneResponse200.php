<?php

namespace DockerPhpClient\Model;

class ImagesPruneResponse200
{
    /**
     * @var ImageDeleteResponseItem[]
     */
    protected $imagesDeleted;
    /**
     * @var int
     */
    protected $spaceReclaimed;
    /**
     * @return ImageDeleteResponseItem[]
     */
    public function getImagesDeleted()
    {
        return $this->imagesDeleted;
    }
    /**
     * @param ImageDeleteResponseItem[] $imagesDeleted
     *
     * @return self
     */
    public function setImagesDeleted(array $imagesDeleted = null)
    {
        $this->imagesDeleted = $imagesDeleted;
        return $this;
    }
    /**
     * @return int
     */
    public function getSpaceReclaimed()
    {
        return $this->spaceReclaimed;
    }
    /**
     * @param int $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed($spaceReclaimed = null)
    {
        $this->spaceReclaimed = $spaceReclaimed;
        return $this;
    }
}