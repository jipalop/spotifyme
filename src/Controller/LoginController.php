<?php

namespace App\Controller;

use GuzzleHttp\Client;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/api_login", name="api_login")
     */
    public function apiLoginController()
    {
        echo "hey";die(1);
        $client = new Client();
        $client_id = '3865daab34f34ad4b45d7e8f730fc2ef'; // Your client id
        $client_secret = '40592c341d254973be8eaf2fc649df18'; // Your secret
        $redirect_uri = '/probando'; // Your redirect uri
        $base_url = 'https://accounts.spotify.com/authorize';

        $response = $client->request('GET', $base_url, [
            'form_params' => [
                'field_name' => 'abc',
                'other_field' => '123',
                'nested_field' => [
                    'nested' => 'hello'
                ]
            ]
        ]);

    }
}
