<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class GraphemeEnumerator extends \System\ValueType
{
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Grapheme& $grapheme
	 * @return \System\Boolean
	 */
	public  function MoveNext($grapheme){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadNextCodepoint(){}
}
