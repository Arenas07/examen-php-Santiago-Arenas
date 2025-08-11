<?php

declare(strict_types=1);

namespace App\Domain\DomainException\Planta;

use App\Domain\DomainException\DomainRecordNotFoundException;

class CategoriaNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'La categoria no se encuentra disponible.';
}
