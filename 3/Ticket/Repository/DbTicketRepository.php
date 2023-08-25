<?php

namespace Repository;

use TicketInterface;

class DbTicketRepository implements TicketInterface
{
    public function load($ticketID)
    {
        return Ticket::find()->where(['id' => $ticketID])->one();
    }

    public function save($ticket)
    {
        // Реализация сохранения билета в БД
    }

    public function update($ticket)
    {
        // Реализация обновления билета в БД
    }

    public function delete($ticket)
    {
        // Реализация удаления билета из БД
    }
}
