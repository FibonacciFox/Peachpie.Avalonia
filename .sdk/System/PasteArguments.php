<?php
namespace System;
class PasteArguments extends \System\Object
{

	/**
	 * @param \System\Text\ValueStringBuilder& $stringBuilder
	 * @param \System\String|string $argument
	 * @return \System\Void|void
	 */
	protected static function AppendArgument($stringBuilder, $argument){}
	private static function ContainsNoWhitespaceOrQuotes($s){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $arguments [generic: System\String]
	 * @param \System\Boolean|bool $pasteFirstArgumentUsingArgV0Rules
	 * @return \System\String|string
	 */
	protected static function Paste($arguments, $pasteFirstArgumentUsingArgV0Rules){}
}