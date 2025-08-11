<?php

namespace App\Application\UseCase\Plantas;

use App\Application\Dtos\Contracts\ArraySerializableDto;
use App\Application\UseCase\Contracts\ActionUseCase;
use App\Domain\Repository\PlantasRepository;

class FindPlantaUseCase implements ActionUseCase
{
    public function __construct(private readonly PlantasRepository $repository) {}


    public function __invoke(?ArraySerializableDto $dto = null)
    {
        return $this->repository->findPlantaOfId($dto->toArray()['id']);
    }
}
