<?php

namespace Rabus\PsalmReturnTypeWillChange;

use EmptyIterator;
use IteratorAggregate;
use ReturnTypeWillChange;

final class EmptyCollection implements IteratorAggregate
{
    #[ReturnTypeWillChange]
    public function getIterator()
    {
        return new EmptyIterator();
    }
}
