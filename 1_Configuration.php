<?php

namespace App;

class PasswordValidator
{
    // BEGIN (write your solution here)
    public $parametr;

    public function __construct($parametr = null)
    {
        if ($parametr === null) {
            $this->parametr = null;
        } elseif (current($parametr) !== true) {
            $this->parametr = null;
        } else {
            $this->parametr = current($parametr);
        }
    }

    public function validate(string $subject): array
    {
        var_dump($this->parametr);
        $arr = [];
        $minl = ['minLength' => 'too small'];
        $containN = ['containNumbers' => 'should contain at least one number'];
        if ($this->parametr === true) {
            if (strlen($subject) < 8) {
                $arr = array_merge($arr, $minl);
            }
            if (strpbrk($subject, '1234567890') === false) {
                $arr = array_merge($arr, $containN);
            }
        } else {
            if (strlen($subject) < 8) {
                $arr = array_merge($arr, $minl);
            }
        }
        return $arr;
    }
    // END

//    private function hasNumber(string $subject): bool
//    {
//        return strpbrk($subject, '1234567890') !== false;
//    }
}

$validator = new PasswordValidator([
    'containNumbers' => true
]);
$errors1 = $validator->validate('qwerty');
print_r($errors1);