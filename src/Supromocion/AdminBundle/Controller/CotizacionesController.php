<?php

namespace Supromocion\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CotizacionesController extends Controller
{
    public function finalizadasAction()
    {
        return $this->render('SupromocionAdminBundle:Cotizaciones:finalizadas.html.twig', array(
                // ...
            ));    }

}
