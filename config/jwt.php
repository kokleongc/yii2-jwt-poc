<?php

return [
    'class' => 'app\components\JWT',
    'signer' => 'HS256',
    'signerKey' => 'secret',
    'expire' => 300, // 5 minutes
];
