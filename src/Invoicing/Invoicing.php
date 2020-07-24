<?php

namespace MadeITBelgium\TeamLeader\Invoicing;

use MadeITBelgium\TeamLeader\Crm\Contact;

class Invoicing
{
    private $teamleader;

    public function __construct($teamleader)
    {
        $this->setTeamleader($teamleader);
    }

    /**
     * set Teamleader.
     *
     * @param $teamleader
     */
    public function setTeamleader($teamleader)
    {
        $this->teamleader = $teamleader;
    }

    /**
     * get Teamleader.
     *
     * @param $teamleader
     */
    public function getTeamleader()
    {
        return $this->teamleader;
    }

    /**
     * Get a list of deals.
     */
    public function invoices()
    {
        return new Invoice($this->teamleader);
    }
}