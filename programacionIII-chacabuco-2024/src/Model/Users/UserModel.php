<?php 

namespace Src\Model\Users;

use Src\Model\DatabaseModel;
use Src\Entity\Users\Users;

final readonly class UsersModel extends DatabaseModel {

    public function findByEmailAndPassword(
        string $email, 
        string $password,
    ): ?Users
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        U.id,
                        U.email,
                        U.password
                    FROM
                        Users U
                    WHERE
                        U.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id -> id(),
            'email' => $email -> email(),
            'password' => $password -> password ()
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toUsers($result[0] ?? null);
    }

    /** @return Users[] */
    public function search(): array
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        U.id,
                        U.email,
                        U.password
                    FROM 
                        Users U
                SELECT_QUERY;

        $primitiveResults = $this->primitiveQuery($query);

        $objectResults = [];
        
        foreach ($primitiveResults as $primitiveResult) {
            $objectResults[] = $this->toUsers($primitiveResult);
        }

        return $objectResults;
    }


    public function insert (Users $Users): void 
    {
         $query = <<<INSERT_QUERY
                        INSERT INTO 
                            Users
                        (email, password)
                            VALUES
                        (:email, :password) 
                    INSERT_QUERY;

        $parameters = [
            "email" =>  $Users ->email(),
            "password" =>  $Users ->password()       
        
        ];

        $this ->primitiveQuery ($query, $parameters);
        //ejecuta una funcion q esta dentro de databasemodel, el primitivequery
    }


    public function update (Users $Users): void
    {
        $query = <<<UPDATE_QUERY
                    UPDATE
                        Users
                    SET
                        email= :email
                        password= :password
                    WHERE
                        id= :id
                    UPDATE_QUERY;

        $parameters = [
            "email" => $Users->email(),
            "password" => $Users->password(),
            "id" => $Users ->id()
        ];

        $this ->primitiveQuery($query, $parameters);
    }   

    private function toUsers(?array $primitive): ?Users
    {
        if ($primitive === null) {
            return null;
        }

        return new Users(
            $primitive['id'],
            $primitive['email'],
            $primitive['password']
        );
    }
}