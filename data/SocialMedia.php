<?php


// todo Final Class dan Final Function

final class SocialMedia
{
    public string $name;
}


class FaceBook extends SocialMedia
{
    // * membuat final function
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class Fake extends FaceBook
{
    // final public function login(): bool
    // {
    // }
}
