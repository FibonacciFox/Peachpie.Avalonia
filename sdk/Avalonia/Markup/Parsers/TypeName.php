<?php
namespace Avalonia\Markup\Parsers;
/**
 */
class TypeName extends \System\ValueType
{
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	public readonly $Namespace;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	public readonly $Type;
	/**
	 * @param \System\String& $ns
	 * @param \System\String& $typeName
	 * @return \System\Void|void
	 */
	public  function Deconstruct($ns, $typeName){}
}
