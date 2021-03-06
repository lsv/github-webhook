<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class PingModel
 * @package Smalot\Github\Webhook\Model
 *
 * When you create a new webhook, we'll send you a simple ping event to let you know you've set up
 * the webhook correctly. This event isn't stored so it isn't retrievable via the Events API. You can
 * trigger a ping again by calling the ping endpoint.
 */
class PingModel extends ModelBase
{
    /**
     * @return string
     */
    public function getZen()
    {
        return $this->payload['zen'];
    }

    /**
     * @return string
     */
    public function getHookId()
    {
        return $this->payload['hook_id'];
    }

    /**
     * @return array
     */
    public function getHook()
    {
        return $this->payload['hook'];
    }
}
