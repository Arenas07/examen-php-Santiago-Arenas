<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Model\Plantas\Plantas;

interface PlantasRepository
{
    /**
     * @param ?array $filters
     * @return User[]
     */
    public function findAll(?array $filters = null): array;

    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function findPlantaOfId(int $id): Plantas;

    /**
     * @param array $data
     * @return User
     * @throws UserNotFoundException
     */
    public function createPlanta(array $data): Plantas;

}
