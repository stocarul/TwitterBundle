<?php

namespace Stocarul\TwitterBundle\Service;

use Stocarul\TwitterBundle\Model\Tweet;

/**
 * Interface: UserTimelineInterface
 */
interface UserTimelineInterface
{
    /**
     * Returns a collection of the most recent Tweets posted by the user
     * indicated by the screen_name or user_id parameters.
     *
     * @param  array   $params
     * @return Tweet[]
     */
    public function getStatuses($params = array());
}
