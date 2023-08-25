<?php

use Repository\ApiTicketRepository;
use Repository\DbTicketRepository;

$apiClient = null; // GuzzleHttp\Client(); example

$dbTicketRepository = new DbTicketRepository();
$apiTicketRepository = new ApiTicketRepository($apiClient);

//загружать билеты из БД
$ticketFromDb = $dbTicketRepository->load(1);
// загружать билеты из API
$ticketFromApi = $apiTicketRepository->load(2);

$dbTicketRepository->save($ticketFromApi);
$apiTicketRepository->delete($ticketFromDb);
