<?php

namespace App\Users\Domain\Services;

use App\App\Domain\Payloads\GenericPayload;
use App\App\Domain\Services\Service;

class GetAuthenticatedUserService extends Service
{
    public function handle($data = [])
    {
        return new GenericPayload(auth()->user());
    }
}
