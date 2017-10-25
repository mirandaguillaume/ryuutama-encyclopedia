<?php

namespace EncyclopeadiaBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class.
 *
 * @Vich\Uploadable
 */
class CharacterClass
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $exampleJobs;

    /**
     * @var string
     */
    private $exampleActions;

    /**
     * @var string
     */
    private $description;

    /**
     * @Vich\UploadableField(mapping="character_class_images", fileNameProperty="image")
     *
     * @var File
     */
    private $imageFile;

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Class
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set photo.
     *
     * @param string $photo
     *
     * @return Class
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set exampleJobs.
     *
     * @param string $exampleJobs
     *
     * @return Class
     */
    public function setExampleJobs($exampleJobs)
    {
        $this->exampleJobs = $exampleJobs;

        return $this;
    }

    /**
     * Get exampleJobs.
     *
     * @return string
     */
    public function getExampleJobs()
    {
        return $this->exampleJobs;
    }

    /**
     * Set exampleActions.
     *
     * @param string $exampleActions
     *
     * @return Class
     */
    public function setExampleActions($exampleActions)
    {
        $this->exampleActions = $exampleActions;

        return $this;
    }

    /**
     * Get exampleActions.
     *
     * @return string
     */
    public function getExampleActions()
    {
        return $this->exampleActions;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Class
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
