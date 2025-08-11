<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Model\Plantas\Plantas;

interface PlantasRepository
{

    public function findAll(?array $filters = null): array;

    public function findPlantaCategoria($enum): Plantas;

    public function createPlanta(array $data): Plantas;

    public function findPlantaOfId(int $id): Plantas;

}
