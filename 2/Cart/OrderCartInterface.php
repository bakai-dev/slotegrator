<?php

interface OrderCartInterface
{
    public function calculateTotalSum(): float;

    public function getItems(): array;

    public function getItemsCount(): int;

    public function addItem(ItemInterface $item): void;

    public function deleteItem(ItemInterface $item): void;

    public function printOrder(): void;

    public function showOrder(): string;

    public function load(string $data): void;

    public function save(): string;

    public function update(): void;

    public function delete(): void;
}
