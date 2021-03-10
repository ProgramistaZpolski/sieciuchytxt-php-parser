<?php

namespace ProgramistaZpolski\sieciuchytxt;

class SieciuchyTxtDocument {
	public $document;
	public function __construct(Array $document = [], String $version = "1.0") {
		$this->document = $document;
		$this->document["version"] = $version;
	}
}

class Parser
{
	public static function str_contains(string $haystack, string $needle): bool
	{
		return '' === $needle || false !== strpos($haystack, $needle);
	}

	public static function parse(String $data)
	{
		$data = explode("\n", $data);
		$version = "1.0";


		foreach ($data as $key => $value) {
			$data[$key] = explode(":", $value);
		}

		if (Parser::str_contains($data[0][0], "@version")) {
			$version = str_replace("\");", "", str_replace("@version(\"", "", $data[0][0]));
		}

		$classData = new SieciuchyTxtDocument($data, $version);
		return $classData;
	}
}