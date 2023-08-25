<?php

namespace Repository;

use TicketInterface;

class ApiTicketRepository implements TicketInterface
{
    private $apiClient; // Инстанс клиента для работы с API

    public function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function load($ticketID)
    {
        // Реализация загрузки билета через API
    }

    public function save($ticket)
    {
        // Реализация сохранения билета через API
    }

    public function update($ticket)
    {
        // Реализация обновления билета через API
    }

    public function delete($ticket)
    {
        // Реализация удаления билета через API
    }
}
