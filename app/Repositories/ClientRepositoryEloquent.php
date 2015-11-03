<?php
/**
 * Created by PhpStorm.
 * User: amaumiranda
 * Date: 9/8/15
 * Time: 19:56
 */

namespace CodeProject\Repositories;

use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;

    }
}