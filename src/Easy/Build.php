<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2019 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Easy;

class Build
{
    public static function jws(): JWSBuilder
    {
        return new JWSBuilder();
    }

    public static function jwe(): JWEBuilder
    {
        return new JWEBuilder();
    }
}
