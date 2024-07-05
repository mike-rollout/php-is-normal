<?php

namespace Rollout\Normal;

class IsNormal {
    public static function getMotivationalQuote() {
        $url = 'https://api.quotable.io/random?tags=humor';
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        return $data['content'] ?? 'Stay positive and keep going!';
    }

    public static function isNormal() {
        $randomAnswer = rand(0, 1) == 0 ? 'yes' : 'no';
        $motivationalQuote = self::getMotivationalQuote();
        return "$randomAnswer. $motivationalQuote";
    }
}
