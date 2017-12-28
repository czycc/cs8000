<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat;

class WechatController extends Controller
{
    public function AccessToken(Request $request)
    {
        dd($request->url);
        $app = EasyWeChat::officialAccount();
        $app->jssdk->setUrl($request->url);
        $api = [
            'startRecord',
            'stopRecord',
            'onVoiceRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'onVoicePlayEnd',
            'uploadVoice',
            'downloadVoice',
            'chooseImage',
            'previewImage',
            'uploadImage',
            'downloadImage',
            'translateVoice'
        ];
        return $app->jssdk->buildConfig($api, true);
    }
}
