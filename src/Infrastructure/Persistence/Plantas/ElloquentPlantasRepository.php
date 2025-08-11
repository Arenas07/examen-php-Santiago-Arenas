<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Plantas;

use App\Domain\Model\Plantas\Plantas;
use App\Domain\DomainException\User\UserNotFoundException;
use App\Domain\Repository\PlantasRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ElloquentPlantasRepository implements PlantasRepository
{
    /**
     * {@inheritdoc}
     */
    public function findAll(?array $filters = null): array
    {
        $query = Plantas::query();

        if ($filters) {
            $query->where($filters);
        }

        return $query->get()->toArray();
    }

    /**
     * {@inheritdoc}
     */
    public function findPlantaOfId(int $id): Plantas
    {
        try {
            return Plantas::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new UserNotFoundException();
        }
    }


    /**
     * {@inheritdoc}
     */
    public function createPlanta(array $data): Plantas
    {
        $planta = Plantas::create($data);
        // if (!$user) {
        //     throw new UserAlreadyExistsException();
        // }
        return $planta;
    }

}
