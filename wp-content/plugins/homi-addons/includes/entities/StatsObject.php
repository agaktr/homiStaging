<?php


class StatsObject
{

    public $total;
    public $completed;
    public $abandoned;

    /**
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }


    /**
     * @param int $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }


    /**
     * @param int $abandoned
     */
    public function setAbandoned($abandoned)
    {
        $this->abandoned = $abandoned;
    }
}
