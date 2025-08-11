<?php

declare(strict_types=1);

namespace App\Application\Controllers\Plantas;

use App\Application\Dtos\Plantas\FilterPlantasDto;
use App\Application\Dtos\Plantas\FindPlantaCategoriaDto;
use App\Application\Http\Traits\ApiResponseTrait;
use App\Application\UseCase\Plantas\GetAllPlantasUseCase;
use App\Domain\Repository\PlantasRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Application\Dtos\Plantas\PlantasDto;
use App\Application\UseCase\Plantas\CreatePlantasUseCase;
use App\Application\UseCase\Plantas\FindPlantaCategoriaUseCase;

class PlantasController
{
    use ApiResponseTrait;

    public function __construct(private readonly PlantasRepository $plantasRepository) {}

    /**
     * @return mixed
     */
    public function index(Request $request, Response $response)
    {
        $dto = new FilterPlantasDto($request->getQueryParams());
        $useCase = new GetAllPlantasUseCase($this->plantasRepository);
        return $this->successResponse($response, $useCase($dto));
    }

    public function create(Request $request, Response $response)
    {
        $dto = new PlantasDto($request->getParsedBody());
        $useCase = new CreatePlantasUseCase($this->plantasRepository);
        return $this->successResponse($response, $useCase($dto));
    }

    public function findPlantaCategoria(Request $request, Response $response, array $args)
    {
        $dto = new FindPlantaCategoriaDto($args);
        $useCase = new FindPlantaCategoriaUseCase($this->plantasRepository);
        return $this->successResponse($response, $useCase($dto));
    }

}
