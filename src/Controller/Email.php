<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Email
{
  public function __construct()
  {
  }

  /**
   * @Route('/api/email', methods={"POST"})
   */
  public function __invoke(Request $request)
  {
    $email = $request->request->get('email');
  }
}