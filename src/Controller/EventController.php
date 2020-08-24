<?php

/*
 *
 * (c) Akshay Joshi <akshay@crenspire.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use App\Repository\EventRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage events in the public part of the site.
 *
 * @Route("/event")
 *
 * @author Akshay Joshi <akshay@crenspire.com>
 */
class EventController extends AbstractController
{
    /**
     * @Route("/", methods="GET", name="event_index")
     * @Cache(smaxage="10")
     *
     * NOTE: For standard formats, Symfony will also automatically choose the best
     * Content-Type header for the response.
     * See https://symfony.com/doc/current/routing.html#special-parameters
     *
     * @param Request         $request
     * @param EventRepository $eventRepository
     *
     * @return Response
     */
    public function index(Request $request, EventRepository $eventRepository): Response
    {
        // TODO:: Event Logic goes here.
        $events = [];
        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }
}
