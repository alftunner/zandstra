<?php

namespace errors;

class Conf
{
    private \SimpleXMLElement $xml;
    private \SimpleXMLElement $lastMatch;
    private string $file;
    public function __construct(string $file)
    {
        if (!file_exists($file))
        {
            throw new \Exception("Файла {$file} не существует");
        }
        $this->file = $file;
        $this->xml = simplexml_load_file($file);
        $test = [];
    }
    public function write() : void
    {
        if (!is_writeable($this->file)) {
            throw new \Exception("нельзя писать в этот файл {$this->file}");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }
    public function get(string $str) : ? string
    {
        $arMatches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if (count($arMatches)) {
            $this->lastMatch = $arMatches[0];
            return (string) $arMatches[0];
        }
        return null;
    }
    public function set(string $key, string $value) : void
    {
        if (!is_null($this->get($key)))
        {
            $this->lastMatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}