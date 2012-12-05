<?php
/**
*
* Copyright (C) 2011 Consórcio Expresso Livre - 4Linux (www.4linux.com.br) e Prognus Software Livre (www.prognus.com.br)
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 3 of the License, or
* any later version.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
* details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software Foundation,
* Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301  USA
*
* You can contact Prognus Software Livre headquarters at Av. Tancredo Neves,
* 6731, PTI, Edifício do Saber, 3º floor, room 306, Foz do Iguaçu - PR - Brasil
* or at e-mail address prognus@prognus.com.br.
*
* Controller do ExpressoApp
*
* @license    http://www.gnu.org/copyleft/gpl.html GPL
* @author     Prognus Software Livre (www.prognus.com.br)
* @version    1.0
* @sponsor    Prognus Software Livre (www.prognus.com.br)
* @since      Arquivo disponibilizado na versão dev-master
*/

namespace ExpressoApps\Expresso\ExpressoFooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* DefaultController, teste de app
* 
* @author  Adir Kuhn <adirkuhn@gmail.com>
* @license http://www.gnu.org/copyleft/gpl.html GPL
* @version 1.0
* @since   Classe disponibilizada na versão 1.0 
*/
class DefaultController extends Controller
{

    /**
    * ação padrão de teste
    *
    * @param <string> $name String para ser exibida na ação de teste
    *
    * @return  <Symfony\Component\HttpFoundation\Response>
    * @access  <public>
    * @license http://www.gnu.org/copyleft/gpl.html GPL
    * @author  Adir Kuhn <adirkuhn@gmail.com>
    */
    public function indexAction($name)
    {
        return $this->render('ExpressoFooBundle:Default:index.html.twig', array('name' => $name));
    }
}
