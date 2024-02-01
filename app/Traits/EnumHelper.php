<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait EnumHelper
{
    public function getLabel(): string
    {
        return Str::of($this->name)
            ->lower()
            ->pipe(fn ($str) => Str::headline($str))
            ->when($this->convertSymbols(), fn ($str) => $str->replace(' Or ', '/'))
            ->when($this->convertSymbols(), fn ($str) => $str->replace(' And ', ' & '))
            ->value();
    }

    public static function getValues(): array
    {
        return collect(self::cases())->map(fn ($enum) => $enum->value)->all();
    }

    public function getDescription(): string
    {
        return $this->getLabel();
    }

    public static function all(): array
    {
        $return = [];
        foreach (self::cases() as $enum) {
            $return[$enum->value] = $enum->getLabel();
        }

        return $return;
    }

    public function is(int|string|\BackedEnum $value): bool
    {
        if ($value instanceof \BackedEnum) {
            return $this === $value;
        }

        return $this->value === $value;
    }

    protected function convertSymbols(): bool
    {
        return true;
    }
}
