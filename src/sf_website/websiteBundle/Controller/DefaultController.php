<?php
namespace sf_website\websiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

  /**
  * Display home page
  */
  public function indexAction()
  {
    return $this->render('WebsiteBundle:Default:index.html.twig');
  }

  /**
  * Display services page
  */
  public function servicesAction()
  {
    return $this->render('WebsiteBundle:Default:services.html.twig');
  }

  /**
  * Display portfolio page
  */
  public function portfolioAction()
  {
    return $this->render('WebsiteBundle:Default:portfolio.html.twig');
  }

  /**
  * Display contace page
  */
  public function contactAction()
  {
    return $this->render('WebsiteBundle:Default:contact.html.twig');
  }
}
