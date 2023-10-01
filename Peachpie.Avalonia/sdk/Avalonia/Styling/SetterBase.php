<?php
namespace Avalonia\Styling;
/**
 */
class SetterBase extends \System\Object
{
	/**
	 * @param \Avalonia\Styling\IStyleInstance $styleInstance
	 * @param \Avalonia\StyledElement $target
	 * @return \Avalonia\Styling\ISetterInstance
	 */
	protected  function Instance($styleInstance, $target){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
