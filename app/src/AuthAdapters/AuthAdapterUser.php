<?php

namespace App\AuthAdapters;

use App\Facilitator\App\JWTFacilitator;
use App\Facilitator\Database\DatabaseFacilitator;
use App\Mapper\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use SlimAuth\AuthAdapterInterface;
use SlimAuth\AuthResponse;

/**
 * Class AuthAdapterUser
 * @package App\AuthAdapters
 */
class AuthAdapterUser implements AuthAdapterInterface
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var DocumentManager
     */
    private $databaseConnection;

    /**
     * AuthAdapterUser constructor.
     *
     * @param $username string
     * @param $password string
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Autentica Usuario a partir de um usuário e senha
     * @return AuthResponse
     */
    function authenticate() : AuthResponse
    {

        $date = new \DateTime('now');
        //Adiciona 10 hrs para que a sessão seja expirada.
        $date->add(new \DateInterval('PT10H'));

        $this->databaseConnection = DatabaseFacilitator::getConnection();
        $arrayUser = $this->databaseConnection->getRepository(User::class)
            ->findBy(array('username' => $this->username, 'password' => $this->password));

        //Não localizou usuário
        if (count($arrayUser) === 0) {
            return new AuthResponse(AuthResponse::AUTHRESPONSE_FAILURE, 'User not found');
        }

        //Monsta o validador do JWT
        $user = $arrayUser[0];

        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT'
        ];

        $payload = [
            'id' => $user->id,
            'exp' => $date->getTimestamp()
        ];

        //Cria token
        $token = JWTFacilitator::createToken($header, $payload, $user->password);

        return new AuthResponse(AuthResponse::AUTHRESPONSE_SUCCESS, 'User auth success', 'token', [ 0 => $token ]);
    }

}