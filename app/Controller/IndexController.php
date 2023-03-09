<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Common\Redis;
use App\Model\ZucaiUser;

use function Hyperf\Testing\json;

class IndexController extends AbstractController
{
    public function index()
    {
        $pamrs  = $this->request->all();
        $userId = $this->request->input('user_id', 5);
        $user   = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        $res = ZucaiUser::query()->where('id','=',$userId)->first();
        var_dump(123);
        if ($res) {
            $res = $res->toArray();
         Redis::set('test2',json_encode($res),6*60);
        }
        return $res;
//        make(Redis::class)->set('test', json_encode($pamrs), 5 * 60);
//        return [
//            'method'  => $method,
//            'message' => "hi hi {$user}.",
//        ];
    }
}
