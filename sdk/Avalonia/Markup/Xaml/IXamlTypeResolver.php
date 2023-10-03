<?php
namespace Avalonia\Markup\Xaml;
/**
 */
interface IXamlTypeResolver
{
	/**
	 * @param \System\String|string $qualifiedTypeName
	 */
	public function Resolve($qualifiedTypeName);
}
