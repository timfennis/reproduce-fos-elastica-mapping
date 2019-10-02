<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity()
 * @ORM\Table(name="item")
 * @ORM\HasLifecycleCallbacks

 * @Serializer\XmlRoot("item")
 */
class NewsItem
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Serializer\Groups({"admin-output", "create-result"})
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Serializer\Groups({"input", "elastica"})
     */
    protected $title;

    /**
     * @ORM\Column(type="datetime")
     * @Serializer\Groups({"input", "elastica"})
     */
    protected $created;
}