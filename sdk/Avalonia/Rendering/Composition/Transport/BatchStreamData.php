<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 */
class BatchStreamData extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\Queue_1[Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1[System\Object[]]]
	 * @property
	 */
	public readonly $Objects;
	/**
	 * @var \System\Collections\Generic\Queue_1[Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1[System\IntPtr]]
	 * @property
	 */
	public readonly $Structs;
	/**
	 * @return \System\Collections\Generic\Queue_1
	 */
	public  function get_Objects(){}
	/**
	 * @return \System\Collections\Generic\Queue_1
	 */
	public  function get_Structs(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
