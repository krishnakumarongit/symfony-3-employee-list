<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Employees;

class EmployeeController extends Controller
{
	//shows the user listing
    public function listAction(Request $request)
    {
       //fetching all employee records
       $employees = $this->getDoctrine()->getRepository('AppBundle:Employees')->findAll();
       return $this->render('default/list.html.php', array('data' => $employees ) );
    }
    
}
