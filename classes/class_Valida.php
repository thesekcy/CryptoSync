<?php 
/**
 * 
 */
class Valida extends User
{
	
	function valida_acesso($login,$senha)
	{
		 $f['login'] = $login;
         $f['senha'] = $senha;

         if ($v = $this->$user->select($f['login']) {
         	
         }
	}
}