<?php
namespace System;
/**
 */
class PasteArguments extends \System\Object
{
	/**
	 * @param \System\Text\ValueStringBuilder& $stringBuilder
	 * @param \System\String|string $argument
	 * @return \System\Void|void
	 */
	protected static function AppendArgument($stringBuilder, $argument){}
	/**
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ContainsNoWhitespaceOrQuotes($s){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $arguments
	 * @param \System\Boolean $pasteFirstArgumentUsingArgV0Rules
	 * @return \System\String|string
	 */
	protected static function Paste($arguments, $pasteFirstArgumentUsingArgV0Rules){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
