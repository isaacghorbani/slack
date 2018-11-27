<?php
/**
 * Created by PhpStorm.
 * User: Isaac
 * Date: 11/27/2018
 * Time: 11:54 AM
 */
namespace Isaacghorbani\Slack;
use Isaacghorbani\Slack\Constructs\SlackInterface;
use GuzzleHttp\Client as Client;
use GuzzleHttp\RequestOptions;

class Slack implements  SlackInterface
{
    public static  $endpoint="https://hooks.slack.com/services/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";
    public static function sendMessage($message)
    {

        $client=new Client();
        $response = $client->request('Post', static::$endpoint, [
            'Accept' => 'application/json',
            RequestOptions::JSON => [ 'text'=>$message]

        ]);
        if($response->getStatusCode()==200)
            return true;
        return false;

    }


}