<?php

namespace MadeITBelgium\TeamLeader\Invoicing;

class Invoice
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
    public function list($data = [])
    {
        return $this->teamleader->getCall('deals.list', [
            'body' => json_encode($data),
        ]);
    }

    /**
     * Get details for a single deal.
     */
    public function info($id)
    {
        return $this->teamleader->getCall('deals.info', [
            'body' => json_encode(['id' => $id]),
        ]);
    }
}