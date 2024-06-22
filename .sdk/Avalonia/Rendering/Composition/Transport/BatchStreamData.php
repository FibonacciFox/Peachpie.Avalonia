<?php
namespace Avalonia\Rendering\Composition\Transport;
class BatchStreamData extends \System\Object
{

	/**
	 * @property
	 * @var \System\Collections\Generic\Queue_1[Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1[System\Object[]]]
	 * @since readonly
	 */
	public $Objects;
	/**
	 * @property
	 * @var \System\Collections\Generic\Queue_1[Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1[System\IntPtr]]
	 * @since readonly
	 */
	public $Structs;
	/**
	 */
	public function __construct(){}
}