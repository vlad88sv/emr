<?php

namespace Services;

use \AppBundle\Entity\Menu;

class ConfigureSession {
	
	/* @var $em \Doctrine\ORM\EntityManager */
	
    private $em;

	/*
    function __construct($em) {
        $this->em = $em;
    }
	*/
	
	private $session;

    public function __construct($em, $session)
    {
		$this->em = $em;
        $this->session = $session;
    }
	
	public function setSessionLocation($idUser, $clientId)
	{
		
		$iLocationId = $clientId;
		$status = false;
		if( isset($idUser) && $idUser >0 && isset($iLocationId) && is_numeric($iLocationId) )
		{
			$user_repo = $this->em->getRepository("AppBundle:ClienteUsuario")->findByCliUsuUsu($idUser);
			
			$locationName = "";
			$municipalityId = "";
			$municipalityName = "";
			$myLocation = array();
			foreach( $user_repo as $key)
			{
				$myLocation[] = $key->getCliUsuCli()->getCliId();
				if( $key->getCliUsuCli()->getCliId() ==  $iLocationId )
				{
					$locationName = $key->getCliUsuCli()->getCliNombre();
					$municipalityName = $key->getCliUsuCli()->getCliMun()->getMunNombre();
					$municipalityId = $key->getCliUsuCli()->getCliMun()->getMunId();
					
					$fullName = ucwords( $key->getCliUsuTitulo()." ".$key->getCliUsuUsu()->getUsuNombre()." ".$key->getCliUsuUsu()->getUsuSegundoNombre()." ".$key->getCliUsuUsu()->getUsuTercerNombre()." ".$key->getCliUsuUsu()->getUsuPrimerApellido()." ".$key->getCliUsuUsu()->getUsuSegundoApellido() );
					$this->session->set('fullNameUserLoagged', $fullName );
					
                    $this->session->set('cliUsuCli', $key->getCliUsuId());
					
					
				}
			}
			if (in_array($iLocationId, $myLocation))
			{
				//$this->session->set('locationId', $iLocationId);
				$this->session->set('locationId', $iLocationId);
				$this->session->set('locationName', $locationName);
				$this->session->set('municipalityId', $municipalityId);
				$this->session->set('municipalityName', $municipalityName);
				//return $this->redirectToRoute("emr_dashboard");
				
				
				//$userLoggen
				
				//===========================================
				//Check role type
				//============================================
				$RAW_QUERY = "SELECT r.rol_id AS id, r.rol_rol AS name FROM cliente_usuario ur "
							. " INNER JOIN rol r on r.rol_id = ur.cli_usu_rol_id "
							. " WHERE r.rol_activo = 1 "
							. " AND ur.cli_usu_usu_id =:idUser AND ur.cli_usu_cli_id =:idClient "; 
				$statement = $this->em->getConnection()->prepare($RAW_QUERY);
				$statement->bindValue("idUser", $idUser );
				$statement->bindValue("idClient", $iLocationId );
				$statement->execute();
				$aRols = $statement->fetchAll();
				$listRoles = array();
				foreach($aRols as $r)
				{
					$listRoles[ $r['id'] ] = $r['name'];
				}
				$this->session->set('userRoles', $listRoles);
				
				
				$status = true;
			}
		}
		
		return $status;
	}
	
	
	
	
}
