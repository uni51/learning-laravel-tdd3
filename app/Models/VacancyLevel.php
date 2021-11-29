<?php

namespace App\Models;

class VacancyLevel
{
    private $remaininCount;

    public function __construct(int $remaininCount)
    {
        $this->remaininCount = $remaininCount;
    }

    public function mark(): string
    {
       if ($this->remaininCount === 0) {
          return '×';
       }

        if ($this->remaininCount === 4) {
            return '△';
        }

        if ($this->remaininCount === 5) {
            return '◎';
        }
    }
}
