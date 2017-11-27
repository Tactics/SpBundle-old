<?php

/*
 * This file is part of the LightSAML-Core package.
 *
 * (c) Milos Tomic <tmilos@lightsaml.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LightSaml\SpBundle\Store\Credential;

use LightSaml\Store\Credential\CompositeCredentialStore as LightSamlCompositeCredentialStore;

class CompositeCredentialStore extends LightSamlCompositeCredentialStore
{
    /** @return CompositeCredentialStore This instance */
    public function removeAll()
    {
        $this->stores = [];

        return $this;
    }
}
