<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat;

class WechatController extends Controller
{
    public function AccessToken()
    {
        $app = EasyWeChat::officialAccount();
        $accessToken = $app->access_token;
        $token = $accessToken->getToken();
        return $token;
    }
}
