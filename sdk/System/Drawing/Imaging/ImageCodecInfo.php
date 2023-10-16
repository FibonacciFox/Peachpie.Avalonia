<?php
namespace System\Drawing\Imaging;
/**
 */
class ImageCodecInfo extends \System\Object
{
	/**
	 * @var \System\Guid
	 * @property
	 */
	public $Clsid;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CodecName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DllName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $FilenameExtension;
	/**
	 * @var \System\Drawing\Imaging\ImageCodecFlags
	 * @property
	 */
	public $Flags;
	/**
	 * @var \System\String
	 * @property
	 */
	public $FormatDescription;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public $FormatID;
	/**
	 * @var \System\String
	 * @property
	 */
	public $MimeType;
	/**
	 * @var \System\Byte[][]
	 * @property
	 */
	public $SignatureMasks;
	/**
	 * @var \System\Byte[][]
	 * @property
	 */
	public $SignaturePatterns;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Version;
	/**
	 * @return \System\Guid
	 */
	public  function get_Clsid(){}
	/**
	 * @param \System\Guid $value
	 * @return \System\Void|void
	 */
	public  function set_Clsid($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CodecName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CodecName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DllName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DllName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FilenameExtension(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_FilenameExtension($value){}
	/**
	 * @return \System\Drawing\Imaging\ImageCodecFlags
	 */
	public  function get_Flags(){}
	/**
	 * @param \System\Drawing\Imaging\ImageCodecFlags $value
	 * @return \System\Void|void
	 */
	public  function set_Flags($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FormatDescription(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_FormatDescription($value){}
	/**
	 * @return \System\Guid
	 */
	public  function get_FormatID(){}
	/**
	 * @param \System\Guid $value
	 * @return \System\Void|void
	 */
	public  function set_FormatID($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_MimeType(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_MimeType($value){}
	/**
	 * @return \System\Byte[][]
	 */
	public  function get_SignatureMasks(){}
	/**
	 * @param \System\Byte[][] $value
	 * @return \System\Void|void
	 */
	public  function set_SignatureMasks($value){}
	/**
	 * @return \System\Byte[][]
	 */
	public  function get_SignaturePatterns(){}
	/**
	 * @param \System\Byte[][] $value
	 * @return \System\Void|void
	 */
	public  function set_SignaturePatterns($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Version(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Version($value){}
	/**
	 * @return \System\Drawing\Imaging\ImageCodecInfo[]
	 */
	public static function GetImageDecoders(){}
	/**
	 * @return \System\Drawing\Imaging\ImageCodecInfo[]
	 */
	public static function GetImageEncoders(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
