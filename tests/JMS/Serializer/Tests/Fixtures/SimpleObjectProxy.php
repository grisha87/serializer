<?php

/*
 * Copyright 2013 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\Serializer\Tests\Fixtures;

use Closure;
use Doctrine\ORM\Proxy\Proxy;

class SimpleObjectProxy extends SimpleObject implements Proxy
{
    public $__isInitialized__ = false;

    public function __load()
    {
        if (!$this->__isInitialized__) {
            $this->camelCase = 'proxy-boo';
            $this->__isInitialized__ = true;
        }
    }

    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * Marks the proxy as initialized or not.
     *
     * @param boolean $initialized
     *
     * @return void
     */
    public function __setInitialized($initialized)
    {
        throw new \LogicException("Missing implementation");
    }

    /**
     * Sets the initializer callback to be used when initializing the proxy. That
     * initializer should accept 3 parameters: $proxy, $method and $params. Those
     * are respectively the proxy object that is being initialized, the method name
     * that triggered initialization and the parameters passed to that method.
     *
     * @param Closure|null $initializer
     *
     * @return void
     */
    public function __setInitializer(Closure $initializer = null)
    {
        throw new \LogicException("Missing implementation");
    }

    /**
     * Retrieves the initializer callback used to initialize the proxy.
     *
     * @see __setInitializer
     *
     * @return Closure|null
     */
    public function __getInitializer()
    {
        throw new \LogicException("Missing implementation");
    }

    /**
     * Sets the callback to be used when cloning the proxy. That initializer should accept
     * a single parameter, which is the cloned proxy instance itself.
     *
     * @param Closure|null $cloner
     *
     * @return void
     */
    public function __setCloner(Closure $cloner = null)
    {
        throw new \LogicException("Missing implementation");
    }

    /**
     * Retrieves the callback to be used when cloning the proxy.
     *
     * @see __setCloner
     *
     * @return Closure|null
     */
    public function __getCloner()
    {
        throw new \LogicException("Missing implementation");
    }

    /**
     * Retrieves the list of lazy loaded properties for a given proxy
     *
     * @return array Keys are the property names, and values are the default values
     *               for those properties.
     */
    public function __getLazyProperties()
    {
        throw new \LogicException("Missing implementation");
    }
}
