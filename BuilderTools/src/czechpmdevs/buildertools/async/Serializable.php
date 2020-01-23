<?php

/**
 * Copyright (C) 2018-2020  CzechPMDevs
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

declare(strict_types=1);

namespace czechpmdevs\buildertools\async;

/**
 * Interface Serializable
 * @package czechpmdevs\buildertools\async
 */
interface Serializable {

    /**
     * Serializes object to string and allows to move it through threads
     *
     * @return string
     */
    public function serialize(): string;

    /**
     * Deserializes object back to object
     *
     * @var string $serialized
     * @return Serializable
     */
    public static function deserialize(string $serialized): Serializable;

}