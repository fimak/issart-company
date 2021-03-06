<?php
namespace ISS\BlogBundle\Service;

class VkApiService
{
    var $api_secret;
    var $app_id;
    var $api_url;

    function __construct($app_id, $api_secret, $api_url = 'http://api.vk.com/api.php')
    {
        $this->app_id = $app_id;
        $this->api_secret = $api_secret;
        if (!strstr($api_url, 'http://')) {
            if (!strstr($api_url, 'https://')) {
                $api_url = 'http://' . $api_url;
            }
        }
        $this->api_url = $api_url;
    }

    function api($method, $params = array())
    {
        $query = $this->api_url . 'method/' . $method . '?' . $this->params($params);
        var_dump($query);
        $res = file_get_contents($query);
        return json_decode($res, true);
    }

    function params($params)
    {
        $pice = array();
        foreach ($params as $k => $v) {
            $pice[] = $k . '=' . urlencode($v);
        }
        return implode('&', $pice);
    }
}
?>
 