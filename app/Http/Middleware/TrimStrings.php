<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];

    /**
     * Transform the given value. オーバーライド
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
        if (in_array($key, $this->except, true)) {
            return $value;
        }

        if (is_string($value))
        {
            // 先頭の半角、全角スペースを、空文字に置き換える
            $value = preg_replace('/^[ 　]+/u', '', $value);
            // 最後の半角、全角スペースを、空文字に置き換える
            $value = preg_replace('/[ 　]+$/u', '', $value);
            return $value;
        }
        return $value;
    }
}
