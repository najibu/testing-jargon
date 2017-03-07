<?php

namespace Acme\Pasers;

class TagParser
{
    public function parse($tags)
    {
      return preg_split('/ ?[,|] ?/', $tags);
    }
}
