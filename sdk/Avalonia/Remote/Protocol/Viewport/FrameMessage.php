<?php
namespace Avalonia\Remote\Protocol\Viewport;
/**
 */
class FrameMessage extends \System\Object
{
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $SequenceId;
	/**
	 * @var \Avalonia\Remote\Protocol\Viewport\PixelFormat
	 * @property
	 */
	public $Format;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public $Data;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Height;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Stride;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $DpiX;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $DpiY;
	/**
	 * @return \System\Int64|int
	 */
	public  function get_SequenceId(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public  function set_SequenceId($value){}
	/**
	 * @return \Avalonia\Remote\Protocol\Viewport\PixelFormat
	 */
	public  function get_Format(){}
	/**
	 * @param \Avalonia\Remote\Protocol\Viewport\PixelFormat $value
	 * @return \System\Void|void
	 */
	public  function set_Format($value){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_Data(){}
	/**
	 * @param \System\Byte[] $value
	 * @return \System\Void|void
	 */
	public  function set_Data($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Stride(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Stride($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DpiX(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_DpiX($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DpiY(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_DpiY($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
