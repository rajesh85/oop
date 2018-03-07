<?php
namespace App;

class UserCollection
{
    protected $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function users()
    {
        return $this->users;
    }

    public function sortUserBy($method)
    {
        usort($this->users, function ($userOne, $userTwo) use($method){
            return $userOne->$method() <=> $userTwo->$method();
        });
    }
}