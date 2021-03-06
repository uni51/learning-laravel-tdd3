<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function __toString()
    {
        return $this->mark();
    }

    public function getVacancyLevelAttribute(): VacancyLevel
    {
        return new VacancyLevel($this->remainingCount());
    }

    private function remainingCount(): int
    {
        return 0;
    }
}
