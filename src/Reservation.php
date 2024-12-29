<?php

class Ticket{
    private $id;
    private $projection_id;
    private $client_id;

    public function __construct($projection_id, $client_id) {
        $this->projection_id = $projection_id;
        $this->client_id = $client_id;
    }

    

}