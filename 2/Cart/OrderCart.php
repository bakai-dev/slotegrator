<?php

final class OrderCart implements OrderCartInterface
{
    private array $items = [];

    public function calculateTotalSum(): float
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getPrice();
        }
        return $totalSum;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getItemsCount(): int
    {
        return count($this->items);
    }

    public function addItem(ItemInterface $item): void
    {
        $this->items[] = $item;
    }

    public function deleteItem(ItemInterface $item): void
    {
        // TODO: Implement deleteItem() method.
    }

    public function printOrder(): void
    {
        // TODO: Implement printOrder() method.
    }

    public function showOrder(): string
    {
        // TODO: Implement showOrder() method.
        return '';
    }

    public function load(string $data): void
    {
        // TODO: Implement load() method.
    }

    public function save(): string
    {
        // TODO: Implement save() method.
        return '';
    }

    public function update(): void
    {
        // TODO: Implement update() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }
}
