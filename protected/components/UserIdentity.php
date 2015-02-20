<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
		$record_login=Operadores::model()->findByAttributes(array('usuario'=>$this->username,'activo'=>true)); 
		
		if($record_login===null)
		{ 
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($record_login->password!==hash('sha512', $this->password))            // here I compare db password with password field
		{ 			
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
			
		}else{
			if($record_login->idoperador_tipo==2){
				$this->setState('administrador',1);  
			}
			$this->setState('idoperador',$record_login->idoperador);
			$this->setState('nombre', $record_login->nombre);  
			$this->setState('apellido',$record_login->apellido);  
			$this->setState('usuario',$record_login->usuario);  
			$this->setState('email',$record_login->email);  
			$this->errorCode=self::ERROR_NONE; 
		}
		return !$this->errorCode;
	}
}