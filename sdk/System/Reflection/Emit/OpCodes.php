<?php
namespace System\Reflection\Emit;
/**
 */
class OpCodes extends \System\Object
{
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Nop;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Break;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarg_0;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarg_1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarg_2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarg_3;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloc_0;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloc_1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloc_2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloc_3;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stloc_0;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stloc_1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stloc_2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stloc_3;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarg_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarga_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Starg_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloc_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloca_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stloc_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldnull;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_M1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_0;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_3;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_5;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_6;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_7;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_I8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_R4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldc_R8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Dup;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Pop;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Jmp;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Call;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Calli;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ret;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Br_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Brfalse_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Brtrue_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Beq_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bge_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bgt_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ble_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Blt_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bne_Un_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bge_Un_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bgt_Un_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ble_Un_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Blt_Un_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Br;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Brfalse;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Brtrue;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Beq;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bge;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bgt;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ble;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Blt;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bne_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bge_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Bgt_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ble_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Blt_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Switch;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_I1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_U1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_I2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_U2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_I4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_U4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_I8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_I;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_R4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_R8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldind_Ref;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_Ref;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_I1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_I2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_I4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_I8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_R4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_R8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Add;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Sub;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Mul;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Div;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Div_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Rem;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Rem_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $And;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Or;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Xor;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Shl;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Shr;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Shr_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Neg;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Not;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_I1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_I2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_I4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_I8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_R4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_R8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_U4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_U8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Callvirt;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Cpobj;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldobj;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldstr;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Newobj;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Castclass;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Isinst;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_R_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Unbox;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Throw;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldfld;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldflda;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stfld;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldsfld;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldsflda;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stsfld;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stobj;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I1_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I2_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I4_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I8_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U1_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U2_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U4_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U8_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Box;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Newarr;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldlen;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelema;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_I1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_U1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_I2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_U2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_I4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_U4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_I8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_I;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_R4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_R8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem_Ref;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_I;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_I1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_I2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_I4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_I8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_R4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_R8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem_Ref;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldelem;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stelem;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Unbox_Any;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U8;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Refanyval;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ckfinite;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Mkrefany;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldtoken;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_U2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_U1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_I;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_I;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_Ovf_U;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Add_Ovf;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Add_Ovf_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Mul_Ovf;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Mul_Ovf_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Sub_Ovf;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Sub_Ovf_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Endfinally;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Leave;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Leave_S;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stind_I;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Conv_U;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefix7;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefix6;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefix5;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefix4;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefix3;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefix2;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefix1;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Prefixref;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Arglist;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ceq;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Cgt;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Cgt_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Clt;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Clt_Un;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldftn;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldvirtftn;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarg;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldarga;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Starg;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloc;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Ldloca;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Stloc;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Localloc;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Endfilter;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Unaligned;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Volatile;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Tailcall;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Initobj;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Constrained;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Cpblk;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Initblk;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Rethrow;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Sizeof;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Refanytype;
	/**
	 * @var \System\Reflection\Emit\OpCode
	 * @field
	 */
	public readonly $Readonly;
	/**
	 * @param \System\Reflection\Emit\OpCode $inst
	 * @return \System\Boolean
	 */
	public static function TakesSingleByteArgument($inst){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
