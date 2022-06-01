<?php

namespace App\Controller;

include ("./function.php");
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {

    /**
     * @Route("/",name="app_calculatrice")
     */
    public function calculatrice(Request $request):Response{
        $operateurs = ["+", "-", "x", "/","%","exp"];
        $op1=$request->query->get("premiereValeur");
        $op=$request->query->get("operateur");
        $op2=$request->query->get("secondeValeur");
        $result=null;
        $erreur=null;
        // var_dump($operateurs);
        var_dump($op1);
        var_dump($op);
        if((isset($op)) && isset($op1) && isset($op2)){
            if(!empty($op) && is_numeric($op1) && is_numeric($op2)){
        $a=$op1;
        $b=$op2;
            switch($op){
            case "+" : $result=add($a,$b);break;
            case "-" : $result=sub($a,$b);break;
            case "x" : $result=mul($a,$b);break;
            case "/" : $result=div($a,$b);break;
            case "%" : $result=mod($a,$b);break;
            case "exp" : $result=power($a,$b);break;
        }
        }else{
            $erreur="Saisir des valeurs valides";
        }
        }

        return $this->render("pages/calculatrice.html.twig", ["operateurs"=>$operateurs, "result"=>$result, "erreur"=>$erreur, "op1"=>$op1, "op"=>$op, "op2"=>$op2]);
    }


     

     


}