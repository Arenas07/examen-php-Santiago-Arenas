<?php

namespace App\Application\UseCase\Plantas;

use App\Application\Dtos\Contracts\ArraySerializableDto;
use App\Application\UseCase\Contracts\ActionUseCase;
use App\Domain\Repository\PlantasRepository;

class FindPlantaCategoriaUseCase implements ActionUseCase
{
    public function __construct(private readonly PlantasRepository $repository) {}

    /**
     * @param ?ArraySerializableDto $dto
     * @return mixed
     */
    public function __invoke(?ArraySerializableDto $dto = null)
    {
        return $this->repository->findPlantaCategoria($dto->toArray()['categoria']);
    }
}
