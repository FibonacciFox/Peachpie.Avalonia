<?php
namespace Avalonia\OpenGL;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlInterfaceMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($v){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($v, $index){}
}
/**
 */
class GlInterface extends \Avalonia\OpenGL\GlBasicInfoInterface
{
	/**
	 * @return \System\String|string
	 */
	public  function get_Version(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Vendor(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Renderer(){}
	/**
	 * @return \Avalonia\OpenGL\GlContextInfo
	 */
	public  function get_ContextInfo(){}
	/**
	 * @param \System\String|string $proc
	 * @return \System\IntPtr
	 */
	public  function GetProcAddress($proc){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetError(){}
	/**
	 * @param \System\Int32|int $s
	 * @return \System\Void|void
	 */
	public  function ClearStencil($s){}
	/**
	 * @param \System\Single $r
	 * @param \System\Single $g
	 * @param \System\Single $b
	 * @param \System\Single $a
	 * @return \System\Void|void
	 */
	public  function ClearColor($r, $g, $b, $a){}
	/**
	 * @param \System\Int32|int $bits
	 * @return \System\Void|void
	 */
	public  function Clear($bits){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Void|void
	 */
	public  function Viewport($x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	public  function Flush(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Finish(){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $res
	 * @return \System\Void|void
	 */
	public  function GenFramebuffers($count, $res){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GenFramebuffer(){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $framebuffers
	 * @return \System\Void|void
	 */
	public  function DeleteFramebuffers($count, $framebuffers){}
	/**
	 * @param \System\Int32|int $fb
	 * @return \System\Void|void
	 */
	public  function DeleteFramebuffer($fb){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $fb
	 * @return \System\Void|void
	 */
	public  function BindFramebuffer($target, $fb){}
	/**
	 * @param \System\Int32|int $target
	 * @return \System\Int32|int
	 */
	public  function CheckFramebufferStatus($target){}
	/**
	 * @param \System\Int32|int $srcX0
	 * @param \System\Int32|int $srcY0
	 * @param \System\Int32|int $srcX1
	 * @param \System\Int32|int $srcY1
	 * @param \System\Int32|int $dstX0
	 * @param \System\Int32|int $dstY0
	 * @param \System\Int32|int $dstX1
	 * @param \System\Int32|int $dstY1
	 * @param \System\Int32|int $mask
	 * @param \System\Int32|int $filter
	 * @return \System\Void|void
	 */
	public  function BlitFramebuffer($srcX0, $srcY0, $srcX1, $srcY1, $dstX0, $dstY0, $dstX1, $dstY1, $mask, $filter){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $res
	 * @return \System\Void|void
	 */
	public  function GenRenderbuffers($count, $res){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GenRenderbuffer(){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $renderbuffers
	 * @return \System\Void|void
	 */
	public  function DeleteRenderbuffers($count, $renderbuffers){}
	/**
	 * @param \System\Int32|int $renderbuffer
	 * @return \System\Void|void
	 */
	public  function DeleteRenderbuffer($renderbuffer){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $fb
	 * @return \System\Void|void
	 */
	public  function BindRenderbuffer($target, $fb){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $internalFormat
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Void|void
	 */
	public  function RenderbufferStorage($target, $internalFormat, $width, $height){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $attachment
	 * @param \System\Int32|int $renderbufferTarget
	 * @param \System\Int32|int $renderbuffer
	 * @return \System\Void|void
	 */
	public  function FramebufferRenderbuffer($target, $attachment, $renderbufferTarget, $renderbuffer){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $res
	 * @return \System\Void|void
	 */
	public  function GenTextures($count, $res){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GenTexture(){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $fb
	 * @return \System\Void|void
	 */
	public  function BindTexture($target, $fb){}
	/**
	 * @param \System\Int32|int $texture
	 * @return \System\Void|void
	 */
	public  function ActiveTexture($texture){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $textures
	 * @return \System\Void|void
	 */
	public  function DeleteTextures($count, $textures){}
	/**
	 * @param \System\Int32|int $texture
	 * @return \System\Void|void
	 */
	public  function DeleteTexture($texture){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $level
	 * @param \System\Int32|int $internalFormat
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Int32|int $border
	 * @param \System\Int32|int $format
	 * @param \System\Int32|int $type
	 * @param \System\IntPtr $data
	 * @return \System\Void|void
	 */
	public  function TexImage2D($target, $level, $internalFormat, $width, $height, $border, $format, $type, $data){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $level
	 * @param \System\Int32|int $xoffset
	 * @param \System\Int32|int $yoffset
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Void|void
	 */
	public  function CopyTexSubImage2D($target, $level, $xoffset, $yoffset, $x, $y, $width, $height){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $name
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function TexParameteri($target, $name, $value){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $attachment
	 * @param \System\Int32|int $texTarget
	 * @param \System\Int32|int $texture
	 * @param \System\Int32|int $level
	 * @return \System\Void|void
	 */
	public  function FramebufferTexture2D($target, $attachment, $texTarget, $texture, $level){}
	/**
	 * @param \System\Int32|int $shaderType
	 * @return \System\Int32|int
	 */
	public  function CreateShader($shaderType){}
	/**
	 * @param \System\Int32|int $shader
	 * @param \System\Int32|int $count
	 * @param \System\IntPtr $strings
	 * @param \System\IntPtr $lengths
	 * @return \System\Void|void
	 */
	public  function ShaderSource($shader, $count, $strings, $lengths){}
	/**
	 * @param \System\Int32|int $shader
	 * @param \System\String|string $source
	 * @return \System\Void|void
	 */
	public  function ShaderSourceString($shader, $source){}
	/**
	 * @param \System\Int32|int $shader
	 * @return \System\Void|void
	 */
	public  function CompileShader($shader){}
	/**
	 * @param \System\Int32|int $shader
	 * @param \System\Int32|int $name
	 * @param \System\Int32* $parameters
	 * @return \System\Void|void
	 */
	public  function GetShaderiv($shader, $name, $parameters){}
	/**
	 * @param \System\Int32|int $shader
	 * @param \System\Int32|int $maxLength
	 * @param \System\Int32& $length
	 * @param \System\Void* $infoLog
	 * @return \System\Void|void
	 */
	public  function GetShaderInfoLog($shader, $maxLength, $length, $infoLog){}
	/**
	 * @param \System\Int32|int $shader
	 * @param \System\String|string $source
	 * @return \System\String|string
	 */
	public  function CompileShaderAndGetError($shader, $source){}
	/**
	 * @return \System\Int32|int
	 */
	public  function CreateProgram(){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\Int32|int $shader
	 * @return \System\Void|void
	 */
	public  function AttachShader($program, $shader){}
	/**
	 * @param \System\Int32|int $program
	 * @return \System\Void|void
	 */
	public  function LinkProgram($program){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\Int32|int $name
	 * @param \System\Int32* $parameters
	 * @return \System\Void|void
	 */
	public  function GetProgramiv($program, $name, $parameters){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\Int32|int $maxLength
	 * @param \System\Int32& $len
	 * @param \System\Void* $infoLog
	 * @return \System\Void|void
	 */
	public  function GetProgramInfoLog($program, $maxLength, $len, $infoLog){}
	/**
	 * @param \System\Int32|int $program
	 * @return \System\String|string
	 */
	public  function LinkProgramAndGetError($program){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\Int32|int $index
	 * @param \System\IntPtr $name
	 * @return \System\Void|void
	 */
	public  function BindAttribLocation($program, $index, $name){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\Int32|int $index
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public  function BindAttribLocationString($program, $index, $name){}
	/**
	 * @param \System\Int32|int $len
	 * @param \System\Int32* $rv
	 * @return \System\Void|void
	 */
	public  function GenBuffers($len, $rv){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GenBuffer(){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $buffer
	 * @return \System\Void|void
	 */
	public  function BindBuffer($target, $buffer){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\IntPtr $size
	 * @param \System\IntPtr $data
	 * @param \System\Int32|int $usage
	 * @return \System\Void|void
	 */
	public  function BufferData($target, $size, $data, $usage){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\IntPtr $name
	 * @return \System\Int32|int
	 */
	public  function GetAttribLocation($program, $name){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	public  function GetAttribLocationString($program, $name){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $size
	 * @param \System\Int32|int $type
	 * @param \System\Int32|int $normalized
	 * @param \System\Int32|int $stride
	 * @param \System\IntPtr $pointer
	 * @return \System\Void|void
	 */
	public  function VertexAttribPointer($index, $size, $type, $normalized, $stride, $pointer){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function EnableVertexAttribArray($index){}
	/**
	 * @param \System\Int32|int $program
	 * @return \System\Void|void
	 */
	public  function UseProgram($program){}
	/**
	 * @param \System\Int32|int $mode
	 * @param \System\Int32|int $first
	 * @param \System\IntPtr $count
	 * @return \System\Void|void
	 */
	public  function DrawArrays($mode, $first, $count){}
	/**
	 * @param \System\Int32|int $mode
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $type
	 * @param \System\IntPtr $indices
	 * @return \System\Void|void
	 */
	public  function DrawElements($mode, $count, $type, $indices){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\IntPtr $name
	 * @return \System\Int32|int
	 */
	public  function GetUniformLocation($program, $name){}
	/**
	 * @param \System\Int32|int $program
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	public  function GetUniformLocationString($program, $name){}
	/**
	 * @param \System\Int32|int $location
	 * @param \System\Single $falue
	 * @return \System\Void|void
	 */
	public  function Uniform1f($location, $falue){}
	/**
	 * @param \System\Int32|int $location
	 * @param \System\Int32|int $count
	 * @param \System\Boolean $transpose
	 * @param \System\Void* $value
	 * @return \System\Void|void
	 */
	public  function UniformMatrix4fv($location, $count, $transpose, $value){}
	/**
	 * @param \System\Int32|int $what
	 * @return \System\Void|void
	 */
	public  function Enable($what){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $buffers
	 * @return \System\Void|void
	 */
	public  function DeleteBuffers($count, $buffers){}
	/**
	 * @param \System\Int32|int $buffer
	 * @return \System\Void|void
	 */
	public  function DeleteBuffer($buffer){}
	/**
	 * @param \System\Int32|int $program
	 * @return \System\Void|void
	 */
	public  function DeleteProgram($program){}
	/**
	 * @param \System\Int32|int $shader
	 * @return \System\Void|void
	 */
	public  function DeleteShader($shader){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $name
	 * @param \System\Int32& $value
	 * @return \System\Void|void
	 */
	public  function GetRenderbufferParameteriv($target, $name, $value){}
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32* $arrays
	 * @return \System\Void|void
	 */
	public  function DeleteVertexArrays($count, $arrays){}
	/**
	 * @param \System\Int32|int $array
	 * @return \System\Void|void
	 */
	public  function DeleteVertexArray($array){}
	/**
	 * @param \System\Int32|int $array
	 * @return \System\Void|void
	 */
	public  function BindVertexArray($array){}
	/**
	 * @param \System\Int32|int $n
	 * @param \System\Int32* $rv
	 * @return \System\Void|void
	 */
	public  function GenVertexArrays($n, $rv){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GenVertexArray(){}
	/**
	 * @param \Avalonia\OpenGL\GlVersion $version
	 * @param \System\Func_2 $getProcAddress
	 * @return \Avalonia\OpenGL\GlInterface
	 */
	public static function FromNativeUtf8GetProcAddress($version, $getProcAddress){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBlitFramebufferAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDeleteVertexArraysAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBindVertexArrayAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenVertexArraysAvailable(){}
	/**
	 * @param \System\Func_2 $getProcAddress
	 * @param \Avalonia\OpenGL\GlContextInfo $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($getProcAddress, $context){}
	/**
	 * @uses GlInterfaceMethodsOverride::GetString_1 ($v)
	 * @uses GlInterfaceMethodsOverride::GetString_2 ($v, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
}
