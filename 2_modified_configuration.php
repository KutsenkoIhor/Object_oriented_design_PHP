<?php

class  Truncater
{
    const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

//    private $defParameters = self::OPTIONS;
    private array $ConParameters = [];

    public function __construct(array $parametr = [])
    {
        $this->ConParameters = array_merge(self::OPTIONS, $parametr);
    }

    public function truncate(string $str, array $parametr = [])
    {
        $mainParametrs = array_merge($this->ConParameters, $parametr);
        $sep = $mainParametrs['separator'];
        $len = $mainParametrs['length'];
        $lenArr = strlen($str);
        if ($lenArr > $len) {
            $result = substr($str, 0, $len) . $sep;
        } else {
            $result = $str;
        }
        return $result;
    }
}

$truncater = new Truncater();
$actual = $truncater->truncate('one two');
//$actual = $truncater->truncate('one two', ['length' => 6]);
//$actual = $truncater->truncate('one two', ['separator' => '.']);
//$actual = $truncater->truncate('one two', ['separator' => '!']);
print_r($actual);