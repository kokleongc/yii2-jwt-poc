<?php

namespace app\components;

class JWT extends \yii\base\Component
{
    public string $signer;
    public string $signerKey;
    public int $expire;

    public function encode(): string
    {
        throw new \Exception('encode is not implemented');
    }

    public function decode(): array
    {
        throw new \Exception('decode is not implemented');
    }
}
