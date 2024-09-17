<?php

namespace Acme\RandomStringGenerator;

class RandomStringGenerator
{
    public function generate($length = 10)
    {
        return bin2hex(random_bytes($length));
    }
}
