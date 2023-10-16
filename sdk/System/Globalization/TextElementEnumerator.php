<?php
namespace System\Globalization;
/**
 */
class TextElementEnumerator extends \System\Object implements 
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Current;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ElementIndex;
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Current(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetTextElement(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ElementIndex(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
