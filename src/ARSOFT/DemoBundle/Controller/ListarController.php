<?php

namespace ARSOFT\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListarController extends Controller
{
    private $articulos = [
        1 => ['id' => 1, 'title' => 'Artículo 1', 'created' => '2024-02-15'],
        2 => ['id' => 2, 'title' => 'Artículo 2', 'created' => '2024-02-16'],
        3 => ['id' => 3, 'title' => 'Artículo 3', 'created' => '2024-02-17'],
    ];

    /**
     * @Route("/articulos", name="articulos_list")
     */
    public function listarArticulosAction()
    {
        return $this->render('ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig', [
            'articulos' => $this->articulos
        ]);
    }

    /**
     * @Route("/articulo/{id}", name="articulo_show")
     */
    public function showAction($id)
    {
        $articulo = isset($this->articulos[$id]) ? $this->articulos[$id] : null;

        return $this->render('ARSOFTDemoBundle:MisVistas:show.html.twig', [
            'articulo' => $articulo
        ]);
    }
}






