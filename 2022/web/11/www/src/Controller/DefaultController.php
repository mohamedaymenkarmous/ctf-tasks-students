<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\Process\Process;

use App\Entity\COR;
use App\Entity\ONA;
use App\Entity\MIM;
use App\Entity\LOL;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/default", name="default")
     */
    public function default(Request $request)
    {
	$expressionLanguage = new ExpressionLanguage();
        //$user_path='upload/'.md5($request->getClientIp());
        //$command="ls ".$user_path." || mkdir ".$user_path;
	//$process = Process::fromShellCommandline($command);$process->run();dump($process->getOutput());
	$expression_variables=[];
        if(!$request->query->get('values') || !$request->query->get('formula'))
          return new Response('Wrong parameters number');
        $formula0=$request->query->get('formula');
        $values=$request->query->get('values');
        if(base64_decode($formula0)){}else return new Response('Wrong formula format');
        $formula=base64_decode($formula0);
        $LOL=new LOL();
        $LOL->setAvg(rand(1,1000));
        $LOL->setTrd(rand(1,100));
        $LOL->setAct(rand(1,100));
        $ONA=new ONA();
        $ONA->setAvg(rand(1,1000));
        $ONA->setPrc(rand(1,100));
        $ONA->setEss(rand(1,100));
        $MIM=new MIM();
        $MIM->setAvg(rand(1,1000));
        $MIM->setSmp(rand(1,100));
        $MIM->setStt(rand(1,100));
        $MIM->setAtm(rand(1,100));
        $COR=new COR();
        $COR->setAvg(rand(1,1000));
        $COR->setJoke(rand(1,100));
        $COR->setSad(rand(1,100));
	foreach($request->query->get('values') as $key => $val){
	  try{
	    $expression_variables[$key]=$$val;
	  }catch(\ErrorException $e){
	    $expression_variables[$key]=$val;
	  }
	}
//var_dump($expression_variables);
//var_dump($request->query->get('formula'));
        try{
	  $expression = $expressionLanguage->evaluate(
	      $formula,
	      $expression_variables
	  );
        }catch(\Symfony\Component\ExpressionLanguage\SyntaxError $e){
          return new Response($e->getMessage());
        }
//($expression);exit();
        try{
          $result=new Response($expression);
          return $result;
        }catch(\UnexpectedValueException $e){
          var_dump($expression);
        }
        //return $this->render('default/index.html.twig', [
        //    'controller_name' => 'DefaultController',
        //]);
    }
}
