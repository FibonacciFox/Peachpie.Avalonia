<?php
namespace Avalonia\Markup\Parsers;
/**
 */
interface ITypeSyntax
{
	/**
	 */
	public function get_TypeName();
	/**
	 * @param \System\String|string $value
	 */
	public function set_TypeName($value);
	/**
	 */
	public function get_Xmlns();
	/**
	 * @param \System\String|string $value
	 */
	public function set_Xmlns($value);
}
