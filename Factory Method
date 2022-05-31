<?php
/*
example have 3 social network linkedLin , FaceBook , Twitter
have same function that used like login , logout , createPost
using Factory Method that is consider one of type of creation patterns

created By Basel Osama Kabil
linkedIn : https://www.linkedin.com/in/basel-kabil-a55421168/
Resources : https://refactoring.guru/design-patterns/factory-method/php/example#example-1
*/

interface SocialNetworkConnector{
    public function login();
    public function logout();
    public function createPost();
}
class linkedLinSocial implements SocialNetworkConnector {
    public function login(){
        echo "login to linkedLin successfully".'<br/>';
    }
    public function logout(){
        echo "logout from linkedLin successfully".'<br/>';
    }
    public function createPost(){
        echo "created post to linkedLin successfully".'<br/>';
    }
}
class FaceBookSocial implements SocialNetworkConnector  {
    public function login(){
        echo "login to Facebook successfully".'<br/>';
    }
    public function logout(){
        echo "logout from Facebook successfully".'<br/>';
    }
    public function createPost(){
        echo "created post to Facebook successfully".'<br/>';
    }
}
class TwitterSocial implements SocialNetworkConnector  {
    public function login(){
        echo "login to twitter successfully".'<br/>';
    }
    public function logout(){
        echo "logout from twitter successfully".'<br/>';
    }
    public function createPost(){
        echo "created post to twitter successfully".'<br/>';
    }
}


$facebook = new FaceBookSocial();
$linkedLin = new linkedLinSocial();
$twitter = new TwitterSocial();

$facebook->login();
$facebook->logout();
$facebook->createPost();

?>
