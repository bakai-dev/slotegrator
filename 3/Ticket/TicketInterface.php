<?php

interface TicketInterface
{
    public function load($ticketID);
    public function save($ticket);
    public function update($ticket);
    public function delete($ticket);
}
