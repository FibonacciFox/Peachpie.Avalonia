<?php
namespace Avalonia\Native;
/**
 */
class GlContext extends \System\Object implements 
	\Avalonia\OpenGL\IGlContext,
	\Avalonia\Platform\IPlatformGraphicsContext,
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider
{
	/**
	 * @var \Avalonia\Native\Interop\IAvnGlContext
	 * @property
	 */
	public $Context;
	/**
	 * @var \Avalonia\OpenGL\GlVersion
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \Avalonia\OpenGL\GlInterface
	 * @property
	 */
	public readonly $GlInterface;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $SampleCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $StencilSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLost;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanCreateSharedContext;
	/**
	 * @return \Avalonia\Native\Interop\IAvnGlContext
	 */
	public  function get_Context(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnGlContext $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Context($value){}
	/**
	 * @return \Avalonia\OpenGL\GlVersion
	 */
	public  function get_Version(){}
	/**
	 * @return \Avalonia\OpenGL\GlInterface
	 */
	public  function get_GlInterface(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SampleCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_StencilSize(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function MakeCurrent(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureCurrent(){}
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @return \System\Boolean
	 */
	public  function IsSharedWith($context){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanCreateSharedContext(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $preferredVersions
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	public  function CreateSharedContext($preferredVersions){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
