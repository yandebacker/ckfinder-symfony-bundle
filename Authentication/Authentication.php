<?php
/*
 * This file is a part of the CKFinder bundle for Symfony.
 *
 * Copyright (c) 2022, CKSource Holding sp. z o.o. All rights reserved.
 *
 * Licensed under the terms of the MIT license.
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace CKSource\Bundle\CKFinderBundle\Authentication;

/**
 * CKFinder authentication service.
 */
class Authentication implements AuthenticationInterface
{
    /**
     * {@inheritdoc}
     */
    public function authenticate(): bool
    {
        return false;
    }
}
