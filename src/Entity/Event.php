<?php

/*
 *
 * (c) Akshay Joshi <akshay@crenspire.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 * @ORM\Table(name="event")
 *
 * Defines the properties of the Post entity to represent the blog posts.
 *
 * See https://symfony.com/doc/current/doctrine.html#creating-an-entity-class
 *
 * Tip: if you have an existing database, you can generate these entity class automatically.
 * See https://symfony.com/doc/current/doctrine/reverse_engineering.html
 *
 * @author Akshay Joshi <akshay@crenspire.com>
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // TODO Event attributes here.
}
